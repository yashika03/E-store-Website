<?php
$con=mysqli_connect("localhost","root","","store");
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>
            Cart
        </title>
    </head>
    <body>
        <?php
        include 'header_logged_in.php';
        $user_id= $_SESSION['id']; 
	$query= "select * from users_items where user_id='$user_id'";
	$select_query=mysqli_query($con, $query) or die(mysqli_error($con));
        if(mysqli_num_rows($select_query)==0)
        {
          $total_price=0;?>
         <h4 class="container panel-margin">Add items to the cart first. Go to <a href="index.php">Home</a> page.</h4>
         <?php
        }
        else
        {
            $total_price=0;
        }
        ?>
    <div class="container" style="margin-top:80px;">
      <div class="table-responsive">
        <table class="table table-bordered table_style">
          <tbody>
            <tr>
              <th>Item Number</th>
              <th>Price</th>
              <th>Remove Item</th>
            </tr>
            <?php while($row=mysqli_fetch_array($select_query)) {?>
            <tr>
              <td><?php echo $row['item_id'];
                     $item_id=$row['item_id'];?>
              </td>
                <?php
                    $select_query1= "select * from items where id='$item_id'";
                    $select_query1_result=mysqli_query($con,$select_query1) or die(mysqli_error($con));
                    $item_row=mysqli_fetch_array($select_query1_result);
                    $total_price = $total_price + $item_row['price'];
                ?>
              <td><?php $total_price+=$item_row['price'];
                    echo $item_row['price'];?></td>
              <td><a  data-toggle="modal" data-target="#re">Remove</a></td>
            </tr>
            <?php
            }
            ?>
            <tr>
                <td>Total</td>
                <td>
                <?php
                  if($total_price==0)
                  {
                      echo "0/-";
                ?>
                </td>
                <td></td>
                <?php
                  }
                  else
                  {
                      echo $total_price."/-";
               ?>
              </td>
              <td><a href="success.php" class="btn btn-primary"><?php echo "Confirm Order";?></a></td>
                  <?php } ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
<?php
include 'remove_from_cart.php';
?>
    </body>
</html>
