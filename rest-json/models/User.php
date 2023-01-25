<?php

    class User {
        // DB
        private $conn;
        public $table = 'user';

        //Order Properties
        public $id;
        public $first_name;
        public $last_name;
        public $phone;
        public $email;
        
        // Contructor with db
        public function __construct($db)
        {
            $this->conn = $db;
        }

        // Get Order
        public function create() {
            // Query
            $query = 'INSERT INTO ' . $this->table . ' SET first_name = :first_name, last_name = :last_name, phone = :phone, email = :email';

            //Prepare statment
            $stmt = $this->conn->prepare($query);

            // Clean data
            $this->first_name = htmlspecialchars(strip_tags($this->first_name));
            $this->last_name = htmlspecialchars(strip_tags($this->last_name));
            $this->phone = htmlspecialchars(strip_tags($this->phone));
            $this->email = htmlspecialchars(strip_tags($this->email));

            //Bind data
            $stmt->bindParam(':first_name', $this->first_name);
            $stmt->bindParam(':last_name', $this->last_name);
            $stmt->bindParam(':phone', $this->phone);
            $stmt->bindParam(':email', $this->email);

            //Execute query
            if($stmt->execute()){
                return true;
            }

            //Print error if something goes wrong
            printf("Error: \s.\n", $stmt->error);

            return false;
        }
    }

?>