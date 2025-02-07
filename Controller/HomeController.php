<?php

namespace App\Controller;

use App\Core\View;
use App\Model\mUser;

class HomeController
{
    public function __construct()
    {
        $username = filter_input(INPUT_POST, 'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $submit = filter_input(INPUT_POST, 'submit',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $user = new mUser;
        $error = "";
        
        if ($submit=='Login'){ 
            $error = $user->login($username, $password);  
        }

        if ($submit=='Logout'){ 
            $user->logout();  
        }
        
        $result = $user->getuser();        
        
        (new View())->load("home", [
            'error' => $error,
            'username' => $result['name'],
            'usercontent' => $result['content']
        ]);
    }
}
