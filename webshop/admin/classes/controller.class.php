<?php
class Controller extends Model{
    public function loginC($username,$pwd){
        $this->loginM($username,$pwd);
    }
    public function torlesC($id){
        $this->torlesM($id);
    }
    public function newproductC($data){
        $this->newproductM($data);
    }
}


?>