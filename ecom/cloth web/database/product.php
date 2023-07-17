<?php

class product
{
  public $db = null;
  public function __construct(datacontroller $db)
  {
    if (!isset($db->con))
      ;
    $this->db = $db;
  }

  // fetch product data using get data method 
  public function getData($table = 'product_tb')
  {
    
    $result = $this->db->con->query(query: "SELECT * FROM {$table}");
    $resultarry = array();
    //fetch product data
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $resultarry[] = $item;
    }
    return $resultarry;
  }

  //get product from item id 
  public function getproduct($p_id = null, $table='product_tb')
  {
    if (isset($p_id)) {
      $result = $this->db->con->query("SELECT * FROM {$table} WHERE p_id={$p_id}");
    }
   
    $resultarry = array();
    //fetch product data
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $resultarry[] = $item;
    }
    return $resultarry;
  }
  

  // $sel_cat = "select * from category_tb where c_status = 'Active' and c_type='Wedding Dresses'";
// $result = $con->query($sel_cat);

}