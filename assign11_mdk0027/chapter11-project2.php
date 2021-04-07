<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chapter 7</title>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-orange.min.css">
    
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</head>

<body>
<!--  step 1, bring in header and left rail components along with data file  -->
      <?php
      include("header.inc.php"); 
      include ("left.inc.php");
      include("data.inc.php");
      ?>  



  <main class="mdl-layout__content mdl-color--grey-50">
    <header class="mdl-color--blue-grey-200">
      <h4>Order Summaries</h4>
      <p>Examine your customer orders</p>
    </header>   
    <section class="page-content">
    
        <div class="mdl-grid">

          <!-- mdl-cell + mdl-card -->
          <div class="mdl-cell mdl-cell--3-col card-lesson mdl-card  mdl-shadow--2dp">
            <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
              <h2 class="mdl-card__title-text">My Orders</h2>
            </div>
            <div class="mdl-card__supporting-text">            
                <ul class="mdl-list">
                
<!-- step 2, for loop for orders list  -->
                  <?php 
                  for ($x = 0; $x < 4; $x++) {
                    $orderNum = '5'.$x.'0';
                    echo"<li ><a href='#'>Order #$orderNum</a></li>";
                  }
                  ?>            
                </ul>   
            </div>    
          </div>  <!-- / mdl-cell + mdl-card -->




          <!-- mdl-cell + mdl-card -->
          <div class="mdl-cell mdl-cell--9-col card-lesson mdl-card  mdl-shadow--2dp">
            <div class="mdl-card__title mdl-color--orange">
              <h2 class="mdl-card__title-text">Selected Order: #520</h2>
            </div>
            <div class="mdl-card__supporting-text">
                <table class="mdl-data-table  mdl-shadow--2dp">
                 <caption>Customer: <strong>Mount Royal University</strong></caption>
                  <thead>
                    <tr>
                      <th>Cover</th>
                      <th class="mdl-data-table__cell--non-numeric">Title</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Amount</th>
                    </tr>
                  </thead>

                  
                  <tbody>
<!-- step 3, output order row function -->
                  <?php 

                  function outputOrderRow($file, $title, $quantity, $price) {
                    $subTotal = $quantity*$price;
                    $subTotal = number_format($subTotal, $decimals = 2);
                    $price = number_format($price, $decimals = 2);

                    echo "<tr>";
                    echo "<td><img src='$file'></td>";
                    echo "<td class='mdl-data-table__cell--non-numeric'>$title</td>";
                    echo "<td>$quantity</td>";
                    echo "<td>$$price</td>";
                    echo "<td>$$subTotal</td>";
                    echo "</tr>";

                  }

                  outputOrderRow($file1, $title1, $quantity1, $price1);
                  outputOrderRow($file2, $title2, $quantity2, $price2);
                  outputOrderRow($file3, $title3, $quantity3, $price3);
                  outputOrderRow($file4, $title4, $quantity4, $price4);
                  $subTotalFinal = ($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3) + ($quantity4 * $price4);
                  $shipping = 100;
                  if (subTotalFinal > 10000) {
                    $shipping = 200;
                  }
                  $shipping = number_format($shipping, $decimals = 2);

                  $grandTotal = $shipping + $subTotalFinal;
                  $subTotalFinal = number_format($subTotalFinal, $decimals = 2);
                  $grandTotal = number_format($grandTotal, $decimals = 2);


                  echo "</tbody>";
                  echo "<tfoot>";

                  echo "<tr class='totals'>";
                  echo "<td colspan='4'>Subtotal</td>";
                  echo "<td>$subTotalFinal</td>";
                  echo "</tr>";
                  echo "<tr class='totals'>";
                  echo "<td colspan='4'>Shipping</td>";
                  echo "<td>$shipping</td>";
                  echo "</tr>";
                  echo "<tr class='grandtotals'>";
                  echo "<td colspan='4'>Grand Total</td>";
                  echo "<td>$grandTotal</td>"
                  ?>
                      </tr>                            
                  </tfoot>   
                </table>
            </div>

          </div>  <!-- / mdl-cell + mdl-card -->
        </div>  <!-- / mdl-grid -->
    

    </section>
  </main>
  
  
</div>
          
</body>
</html>