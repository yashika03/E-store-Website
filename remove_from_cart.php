<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>
            Removal of Cart
        </title>
    </head>
    <body>
        <div class="modal fade" id="re" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="color:red;">Remove from cart?</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Item ID is the ID entered in the first column.<br><br>Do you want to remove the item from the cart?</h4>
                        <form action="cart_removed.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="item_id" placeholder="Item ID">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control input-lg" value="button">Remove Item</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
