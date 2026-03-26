<?php
session_start();
include "db.php";

$id=$_GET['id'];

$product=mysqli_query($conn,"SELECT * FROM products WHERE id=$id");
$row=mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<html>

<head>

<title><?php echo $row['name']; ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container product-page">

<div class="row align-items-center">

<div class="col-md-6 text-center">

<img src="<?php echo $row['image']; ?>" class="product-img">

</div>

<div class="col-md-6">

<h2 class="product-title"><?php echo $row['name']; ?></h2>

<p class="product-desc">
<?php echo $row['description']; ?>
</p>

<h3 class="price">
₹<?php echo $row['price']; ?>
</h3>

<button class="btn btn-warning place-btn" onclick="placeOrder()">
Add To Cart
</button>

</div>

</div>

</div>

</body>
</html>