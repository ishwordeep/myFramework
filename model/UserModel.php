
<?php 
    // require_once './BaseModel.php';
    class UserModel extends BaseModel
    {
        public function listUsers(){
            $st=$this->pdo->prepare("select * from users");
            $st->execute();
            $users=$st->fetchAll();
            // print_r($users);
            return $users;
            
        }
    }

    // $obj=new UserModel;
    // $obj->listUsers();
?>
