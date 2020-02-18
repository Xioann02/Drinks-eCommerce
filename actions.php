<?php 
$names = array("red wine", "white wine", "rose wine", "rum");
$quantity = array(30, 20, 12, 30);
$price = array(12.99, 10.49, 7.99, 39.99 );
$VIPprice = array();
$text ="";
$newEntry = "yes"; 
$total=0;
for($i=0; $i<count($price); $i++){
  $VIPprice[$i] = $price[$i] - ($price[$i] * 25 / 100);
}

function nextCustomer()
{
  global $quantity, $total, $price, $VIPprice, $names, $text;
   $randProduct = rand(0,3);
   $randCustomerType = rand(1,2);
  if($quantity[$randProduct]!= 0){
      $quantity[$randProduct]=$quantity[$randProduct]-1; 

      //Regular customer
      if($randCustomerType == 1){
        $total = $total + $price[$randProduct];
        $text = "<br>A Regular customer has bought <strong>".$names[$randProduct]."</strong> at the price of £ ".$price[$randProduct].".<br>";
      }
      //VIP customer
      else{
        $total = $total + $VIPprice[$randProduct];
        $text = "<br>A VIP customer has bought <strong>".$names[$randProduct]."</strong> at the price of £ ".$VIPprice[$randProduct].".<br>";
      }
      return "yes";
  }
  else{
    return "no";
  }
   sleep(0.5);
}

?>