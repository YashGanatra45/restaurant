<html>

<head>

<title>Payment</title>

<link rel="stylesheet" href="css/style.css">

<script>

function placeOrder()
{
alert("Thanks for Ordering , Ordered Successfully!");
}

</script>

</head>

<body>

<div class="payment-container">

<h1>Checkout</h1>

<div class="address-box">

<h3>Delivery Address</h3>

<textarea placeholder="Enter your delivery address"></textarea>

</div>

<div class="payment-methods">

<h4 class="mb-3">Select Payment Method</h4>

<div class="form-check payment-option">
  <input class="form-check-input" type="radio" name="payment" id="upi">
  <label class="form-check-label" for="upi">
    UPI
  </label>
</div>

<div class="form-check payment-option">
  <input class="form-check-input" type="radio" name="payment" id="card">
  <label class="form-check-label" for="card">
    Card
  </label>
</div>

<div class="form-check payment-option">
  <input class="form-check-input" type="radio" name="payment" id="cod">
  <label class="form-check-label" for="cod">
    Cash On Delivery
  </label>
</div>

</div>
</div>

<button onclick="placeOrder()" class="btn">Place Order</button>

</div>

</body>
</html>