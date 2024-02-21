<?php
    
    class Connection{

        protected $server_name;
        protected $user_name;
        protected $password;
        protected $database_name;

        function __construct(){
            $this->server_name = 'localhost';
            $this->user_name = 'root';
            $this->password = '';
            $this->database_name = 'maindb';
        }

        function connect(){
            $dsn = "mysql:host=$this->server_name;dbname=$this->database_name"; //data source name
            $pdo = new PDO($dsn,$this->user_name,$this->password);
            // $connection = mysqli_connect($this->server_name,$this->user_name,$this->password,$this->database_name);
            return $pdo;
        }
        
        function queryExecute($sql){
            $pdo = $this->connect();
            $result = $pdo->prepare($sql);
            // $result = mysqli_query($pdo,$sql);
            return $result;
        }
    
    }

?>