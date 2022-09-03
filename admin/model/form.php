<?php
    class currency{

        private $name;
        private $symbol;
        private $rate;
        private $short_name;
        private $country;

        public function store($data){
            $this->name        = htmlspecialchars($data['name']);
            $this->symbol      = htmlspecialchars($data['symbol']);
            $this->rate        = htmlspecialchars($data['rate']);
            $this->short_name  = htmlspecialchars($data['short_name']);
            $this->country     = htmlspecialchars($data['country']);

            $query = "INSERT INTO currency(`name`,symbol,rate,short_name,country)";
            $query .= "VALUES('$this->name','$this->symbol',$this->rate,'$this->short_name','$this->country')";

            $db = new db();
            try {
                $db->execute($query);
                header('Location:../index.php?view=table_data');
            } 
            catch (Exception $e) {
                $db->close();
                return $e->getMessage();
            }
        }

        public function update_store($id,$data){
            $this->name        = $data['name'];
            $this->symbol      = $data['symbol'];
            $this->rate        = $data['rate'];
            $this->short_name  = $data['short_name'];
            $this->country     = $data['country'];
            
            echo $query = "UPDATE currency SET `name`='$this->name',symbol='$this->symbol',rate = $this->rate,short_name= '$this->short_name',country='$this->country' WHERE id=$id";
            $db = new db();
            try {
                $db->execute($query);
            } catch (Exception $e) {
                $db->close();
                return $e->getMessage();
            }
        }
        public function get_all(){
            $db = new db();
            $query = "SELECT * FROM currency";
            $result = $db->fetch_result($query);
            $db->close();
            return $result;
        }
        public function get_currency($id){
            $db = new db();
            echo $query = "SELECT * FROM currency WHERE id = $id ";
            $result = $db->fetch_result($query);
            $db->close();
            return $result;
        }
        public function deleteByPk($id){
			$db 	= new db();
			$query	= "DELETE FROM currency WHERE id = $id";
			$result = $db->execute($query);
			$db->close();
			return $result;
		}
    }
?>