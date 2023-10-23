<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
</head>
   
<body>
    <div class="jumbotron">
        <header></header>
        <h1><center>Inventory System</center></h1>
        <form action="processes/insert.php" method="post">
            <label for="product_name"><h2>Product Name</h2></label>
            <input class="inputs" tytpe="text" name="product_name" placeholder="Input Here">

            <label for="quantity"><h2>Quantity</h2></label>
            <input class="inputs" tytpe="text" name="quantity" placeholder="Input Here">

            <label for="price"><h2>Price</h2></label>
            <input class="inputs" tytpe="text" name="price" placeholder="Input Here">

            <button type="button" class="btn btn-primary">SUBMIT</button>

        <table border="1" class= "table table-dark table-striped">
            <tr>
                <th>Product Name</th>
                <th>Supplier</th>
                <th>Category</th>
                <th>Order</th>
                <th>Customer</th>
                <th>Order Detail</th>
            </tr>
            <tr >
                <td>Product 1</td>
                <td>10</td>
                <td>100 pesos</td>
                <th>
                    <button type="button" class="btn btn-danger">remove</button>                   
                </th>
            </tr>
            <tr>
                <td>Product 2</td>
                <td>5</td>
                <td>5000 pesos</td>
                <th>
                    <button type="button" class="btn btn-danger">remove</button>                    
                </th>
            </tr>
            
        </table>
        <div>


        </div>



    </div>

    
</body>
</html>