<?php
    include 'db.php';

    class User extends DB{
        private $nombre;
        private $username;
        private $id_user;

        public function userExists($user, $pass){
            $conexion = $this->connect();
            $md5pass = md5($pass);
            $query = "SELECT * FROM usuarios WHERE username = '$user' AND password = '$md5pass'";
            $resultado = $conexion->query($query);

            if($resultado->num_rows > 0){
                return true;
            } else{
                return false;
            }
        }

        public function setUser($user){
            $conexion = $this->connect();
            $query = "SELECT * FROM usuarios WHERE username = '$user'";
            $resultado = $conexion->query($query);
            
            foreach ($resultado as $currentUser) {
                $this->nombre = $currentUser['name'];
                $this->username = $currentUser['username'];
                $this->id_user = $currentUser['id'];
            }
        }
        
        public function getNombre(){
            return $this->nombre;
        }

        public function getId(){
            return $this->id_user;
        }
    }
?>