# Felhasznlói autentikáció

**A feladat egy felhasználói autentikáció lefejlesztése.**

MySQL adatbázisba tárolt felhasználók tudjanak bejelentkezni email és jelszó megadásával.

A felhasználók rendelkezzenek különböző jogosultsággal, így különböző felhasználók a bejelentkezést követően más-más random tartalmat érjenek el.

A feladat megoldásához ne húzzon be keretrendszert. A natív php-s rutint szeretnénk leszűrni, ezért kérjük, hogy 0-ról építse fel az alkalmazást.

A felülethez szükséges designt illetően csak annyi elvárásunk van, hogy ne essen szét a felület.

**Fontos szempontok, amiket figyelünk:**
- OOP
- Clean Code
- Felhasználóbarát működés
- Hibakezelés

**A program DEMO változata a következő urlen probálható ki:**

http://nzoltan2.nhely.hu/user_authentication/

**Követelmények:**
- PHP (8.3 verzóval tesztelve)
- composer
- Mysql (8.0 verzióval tesztelve)

**Telepítési instrukciók:**
- Letöltés után a projekt könyvtárában a vendor könyvtár létrehozásáához a **composer update** parancs kiadása szükséges.
- A php.ini-ben a **short_open_tag=On** beállítás szükséges.
- Az adatbázishoz való kapcsolódás host, adatbázisnév, usernév és jelszó a **config.php**-ben állítható be.
- A szükséges adattáblák az **SQL/localhost.sql** mysql dumppal hozhatók létre.

