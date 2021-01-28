<?php
    class DB{
        private static $servidor;
        private static $db;
        private static $user;
        private static $password;
        
        public static function connect(){
            self::$servidor = "localhost";
            self::$db       = "adopciones";
            self::$user     = "root";
            self::$password = "";

            $mysqli = new mysqli(self::$servidor, self::$user, self::$password, self::$db);
            
            if ($mysqli->connect_errno) {
                die( "Fallo la conexión: (" . $mysqli -> mysqli_connect_errno() . ") " . $mysqli -> mysqli_connect_error());
            }
            return $mysqli;     
        }
    }
?>