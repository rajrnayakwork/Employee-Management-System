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
            $connection = mysqli_connect($this->server_name,$this->user_name,$this->password,$this->database_name);
            return $connection;
        }
        
        function queryExecute($sql){
            $connection = $this->connect();
            $result = mysqli_query($connection,$sql);
            return $result;
        }
    
    }

?>