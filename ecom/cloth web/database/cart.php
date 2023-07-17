<?php


class cart
{
    public $db = null;
    public function __construct(datacontroller $db)
    {
        if (!isset($db->con))
            return;
        $this->db = $db;
    }

    // insert into cart table
    public function insertintoCart($params = null, $table = "cart")
    {
        if ($this->db->con != null) {
            if ($params != null) {
                // insert into cart (user_id) values (0)""
                // gettable columns 
                $columns = implode(',', array_keys($params));
                // print_r($columns);
                $values = implode(',', array_values($params));
                // print_r($values);

                //create  sql query 
                $query_string = sprintf("INSERT INTO %s(%s) VALUES (%s)", $table, $columns, $values);
                // echo $query_string;

                // excute query 
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    // to get user_id and item_id and insert  into cart table
    public function addtocart($userid, $itemid,$cid)
    {
        if (isset($userid) && isset($itemid)) {
            $params = array(
                "user_id" => $userid,
                "p_id" => $itemid,
                "c_id"=>$cid
            );


            // insert data into cart 
            $result = $this->insertintocart($params);
            if ($result) {
                // reload page 
                header("Location:", $_SERVER['PHP_SELF']);
            }
        }
    }

     
    // delete cart item using cart item id
public function deletecart($i_id=null,$table='cart'){
    if($i_id != null){
        $result=$this->db->con->query("DELETE FROM {$table} WHERE p_id={$i_id}");
        if($result){
            header("LOCATION:",$_SERVER['PHP_SELF']);
        }
        return $result;
    }
}

    

// calculate  sub total 
 public function getsum($arr){
    if(isset($arr)){
        $sum=0;
        foreach ($arr as $item){
            $sum=$sum+floatval($item[0]);
        }
        return sprintf('%.2f',$sum);
    }
 }

// get item_id of shopping cart list 

public function getcartid($cartarry=null,$key='p_id'){
    if($cartarry!= null){
        $cart_id=array_map(function($value) use($key){
            return $value[$key];
        },$cartarry);
       return $cart_id;
    }
}

}