<?php
    class currency{

        // private $name;
        // private $symbol;
        // private $rate;
        // private $short_name;
        // private $country;

        // public function store($data){
        //     $this->name        = htmlspecialchars($data['name']);
        //     $this->symbol      = htmlspecialchars($data['symbol']);
        //     $this->rate        = htmlspecialchars($data['rate']);
        //     $this->short_name  = htmlspecialchars($data['short_name']);
        //     $this->country     = htmlspecialchars($data['country']);

        //     $query = "INSERT INTO currency(`name`,symbol,rate,short_name,country)";
        //    echo $query .= "VALUES('$this->name','$this->symbol',$this->rate,'$this->short_name','$this->country')";

        //     $db = new db();
        //     try {
        //         $db->execute($query);
        //     } 
        //     catch (Exception $e) {
        //         $db->close();
        //         return $e->getMessage();
        //     }
        // }
        public function get_all(){
            $db = new db();
            $query = "SELECT * FROM currency";
            $result = $db->fetch_result($query);
            $db->close();
            return $result;
        }
        public function get_country($id){
            $db = new db();
            $query = "SELECT * FROM currency WHERE id = $id ";
            $result = $db->fetch_result($query);
            $db->close();
            return $result;
        }
    }
?>