<?php

namespace App\Model;

class mUser extends \App\Core\Model {

    public function login($username, $password){
        $error = "";
        
        $result = $this->queryRow('select * from user where username=:username and password=sha1(:password)',
            [':username'=>$username, ':password'=>$password]);
        
        if(empty($result)){
            $error = "Felhasználói név vagy a jelszó hibás!!!";
        } else {
            $_SESSION['username'] = $result['username'];
            $_SESSION['userpermission'] = $result['permissionid'];
        }     
        return $error;
    }
    
    public function logout(){
        unset($_SESSION['username']); 
        unset($_SESSION['userpermission']); 
    }

    public function getuser(){
        $user['name'] = "";
        $user['content'] = "";
        
        if(isset($_SESSION['userpermission'])){
            $result = $this->queryRow(
                'select * from permission where id=:id',
                [':id'=>$_SESSION['userpermission']]
            );
            $user['name'] = $_SESSION['username'];
            $user['content'] = $result['content']; 
        }    
        
        return $user;
    }
}    
