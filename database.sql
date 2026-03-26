CREATE DATABASE restaurant;
USE restaurant;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100),
password VARCHAR(100)
);

CREATE TABLE products (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
price INT,
image VARCHAR(200),
description TEXT
);

CREATE TABLE cart (
id INT AUTO_INCREMENT PRIMARY KEY,
user_email VARCHAR(100),
product_id INT
);

INSERT INTO products(name,price,image,description) VALUES
('Margherita Pizza',250,'images/pizza.jpg','Classic cheese pizza with tomato sauce'),
('Veg Burger',120,'images/burger.jpg','Loaded veg burger with cheese'),
('Pasta Alfredo',200,'images/pasta.jpg','Creamy white sauce pasta'),
('Paneer Tikka',300,'images/paneer.jpg','Grilled paneer cubes with spices'),
('Masala Dosa',150,'images/dosa.jpg','South Indian dosa with potato filling'),
('Veg Biryani',220,'images/biryani.jpg','Spicy vegetable biryani'),
('French Fries',100,'images/fries.jpg','Crispy salted fries'),
('Chocolate Shake',130,'images/shake.jpg','Cold chocolate milkshake'),
('Ice Cream',90,'images/icecream.jpg','Vanilla ice cream scoop'),
('Sandwich',110,'images/sandwich.jpg','Grilled vegetable sandwich');