
<?php
    class BaseModel{
        protected $pdo;
        public function BaseModel(){
            $host='localhost';
            $user='root';
            $pass='';
            $db='mvcTest';
            try{
                $dsn="mysql:host=$host;dbname=$db";
                $this->pdo=new PDO($dsn,$user,$pass);
              
            }
            catch(Exception $e){
                echo $e->getMessage();
                die;
            }
        }
    }
?>
