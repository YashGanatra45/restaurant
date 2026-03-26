<?php
session_start();
include "db.php";
$result = mysqli_query($conn,"SELECT * FROM products");
?>
<!DOCTYPE html>
<html>
<head>
<title>Restaurant Menu</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{
background:#f5f5f5;
font-family:Arial;
}
h1{
text-align:center;
margin-top:20px;
}
.top-buttons{
text-align:center;
margin-bottom:30px;
}
.products{
display:flex;
flex-wrap:wrap;
justify-content:center;
gap:20px;
}
.card{
width:220px;
padding:15px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.2);
text-align:center;
background:white;
}
.card img{
width:100%;
height:150px;
object-fit:cover;
border-radius:8px;
}
.card h3{
margin-top:10px;
}
.card p{
font-weight:bold;
color:#ff6600;
}
.card a{
margin-top:10px;
display:inline-block;
}
</style>
</head>
<body>
<h1>Restaurant Menu</h1>
<div class="top-buttons">
<a href="cart.php" class="btn btn-success me-2">
🛒 View Cart
</a>
<a href="logout.php" class="btn btn-danger">
Logout
</a>
</div>
<div class="products">
<?php while($row = mysqli_fetch_assoc($result)) { ?>
<div class="card">
<img src="<?php echo $row['image']; ?>" alt="food">
<h3><?php echo $row['name']; ?></h3>
<p>₹<?php echo $row['price']; ?></p>
<a href="product.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">
View
</a>
</div>
<?php } ?>
</div>
</body>
</html>