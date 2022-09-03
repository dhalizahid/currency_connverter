<?php
    class db{
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $db   = 'currency_converter';

        private $connection;

        public function __construct()
        {
            $this->connection = new mysqli($this->host,$this->user,$this->pass,$this->db);
            if ($this->connection->connect_errno) {
                throw new Exception("Database connection error" .$this->connection->connect_errno);
                exit();
            }
            
        }
        public function execute($query){
			$result = mysqli_query($this->connection,$query);
			if (!$result) {
				throw new Exception("Error exceuting query");
			}
			else
				return $result;
		}
        public function fetch_result($query){
			$result = mysqli_query($this->connection,$query);
			if (!$result) 
			{
				throw new Exception('Error in fetching result');
			}
			else{
				$data = [];
				while($row = mysqli_fetch_array($result))
				{
					$data[]= $row;
				}
				return $data;
			}
		}
        public function close(){
            $this->connection->close();
        }
    }
    $db = new db();
?>