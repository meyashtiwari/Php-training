<?php
    class connection {
        private $host, $user, $password, $db;
        private $conn;
        
        function __construct($host, $username, $password, $db) {
            $this->host = $host;
            $this->user = $username;
            $this->password = $password;
            $this->db = $db;
        }

        function connect_db() {
            $this->conn = new mysqli($this->host, 
                                    $this->user, 
                                    $this->password, 
                                    $this->db);
            
            if($this->conn->connect_error) {
                return false;
            }
            return true;
        }

        function get_all_data() {
            $get_all_data_query = "SELECT * from user_data";
            $result = $this->conn->query($get_all_data_query);
    
            if($result->num_rows > 0) {
                return $result;
            }
            return false;
        }

        function close_db() {
            $this->conn->close();
        }
    }
?>