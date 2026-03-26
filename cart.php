<?php
session_start();
include "db.php";

$user=$_SESSION['user'];

if(isset($_GET['add']))
{
$id=$_GET['add'];
mysqli_query($conn,"INSERT INTO cart(user_email,product_id) VALUES('$user','$id')");
}

$result=mysqli_query($conn,"
SELECT products.name,products.price 
FROM cart 
JOIN products ON cart.product_id=products.id
WHERE cart.user_email='$user'
");

$total=0;
?>

<html>
<head>

<title>Your Cart</title>
<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="cart-container">

<h1>Your Cart 🛒</h1>

<table>

<tr>
<th>Food Item</th>
<th>Price</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['name']; ?></td>
<td>₹<?php echo $row['price']; ?></td>

</tr>

<?php

$total+=$row['price'];

}

?>

</table>
<div class="total-box">
<h2>Total: ₹<?php echo $total; ?></h2>

<a href="order.php" class="btn btn-success proceed-btn">
Proceed To Payment
</a>

</div>


</div>

</div>

</body>
</html>