<?php

    class Order {
        // DB
        private $conn;

        //Order Properties
        public $id;
        public $first_name;
        public $last_name;
        public $value;
        public $dateCreate;
        
        // Contructor with db
        public function __construct($db)
        {
            $this->conn = $db;
        }

        // Get Order
        public function read() {
            // Query
            $query =    'SELECT 
                            nb_soft.order.id, first_name, last_name, value, nb_soft.order.dateCreate
                        FROM
                            user inner join nb_soft.order on user.id = nb_soft.order.userId
                        ORDER BY
                            nb_soft.order.dateCreate';
            //Prepare statment
            $stmt = $this->conn->prepare($query);

            //Execute query
            $stmt->execute();

            return $stmt;
        }
    }

?>