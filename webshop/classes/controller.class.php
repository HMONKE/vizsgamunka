<?php
class Controller extends Model{
    public function orderIdC($order_id){
       return $this->orderIdM($order_id);
    }
    public function ordersC($data){
        $this->ordersM($data);
    }
}
?>