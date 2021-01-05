<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>
            Add to Cart
        </title>
    </head> 
    <body>
        <div class="modal fade" id="cart" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title" style="color:red;">Add to Cart?</h3>
                    </div>
                    <div class="modal-body">
                        <h4>Item's unique id is written above the item. <br><br>Are you sure you want to add this product to cart?</h4>
                        <form method="post" action="cart_added.php">
                            <div class="form-group">
                                <input type="text" name="item_id" placeholder="Item ID" class="form-control input-lg">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control input-lg" name="add">Add to Cart</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>    
</html>
