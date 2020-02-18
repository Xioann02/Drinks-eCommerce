<html>
  <head>
    <title>Drinks Ecommerce</title>
    <link rel="icon" type="image/png" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>

    <div class="mainTitle">Drinks Ecommerce</div>
    <div class="row mainRow">
      <div class="col">Product name</div>
      <div class="col">Quantity</div>
      <div class="col">Price</div>
    </div>
    <div class="currentState">
    <?php
    include 'actions.php';
        while(count(array_keys($quantity, "0")) < 4){
          $newEntry = nextCustomer();
          if($newEntry == "yes"){
            echo "<div class='detailsText'>".$text."</div>";
            for ($i=0; $i<count($names); $i++) {
              echo "
              <div class='row rowContent' id='content'>
                <div class='col' >".$names[$i]."</div>
                <div class='col' id='quantity' >".
                $quantity[$i]."</div>
                <div class='col' >£ ".$price[$i]."</div>
              </div>
              ";
              }
          }
      }
    ?>
    </div>
    <?php echo"<div class='total'>TOTAL: £ ".$total."</div>";?>
  </body>
</html>