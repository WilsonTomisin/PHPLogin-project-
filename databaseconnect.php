<?php
    // die('test');
    class DB{
        protected static $con;
        private $host;
        private $dbname;
        private $port;
        private $username;
        private $password;
        private $charset;

        private function __construct(){
            $this->host = 'localhost';
            $this->dbname = 'phplogin';
            $this->charset = 'utf8mb4';
            $this->port = 3306;
            $this->username = 'root';
            $this->password ='';

            try {
                self::$con = new PDO("mysql:chareset={$this->charset};dbhost={$this->host};port ={$this->port};dbname={$this->dbname}",$this->username,$this->password);
                self::$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                self::$con->setAttribute(PDO::ATTR_PERSISTENT,false);
            
            } catch (PDOException $e) {
                echo 'There was an error: '. $e->getMessage();
            }
            
        }
        
        public static function getconnect(){

            // if the class has not been started,start it.
            if (!self::$con) {
                new DB();
            }
            return self::$con;


        }

    
    
    }





?>