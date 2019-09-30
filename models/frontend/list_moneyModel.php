<?php
    trait list_money{
        public function moneyList(){
            $conn = Connection::getInstance();
            $query = $conn->prepare("select * from list_chi");
            $query->setFetchMode(PDO::FETCH_OBJ);
            $query->execute();
            $result = $query->fetchAll();
            return $result;
        }
    }
?>