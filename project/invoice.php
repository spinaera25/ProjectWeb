<?php

$custname = $_POST["fname"];
$custadd=$_POST["address"];
$custphone=$_POST["phone"];

$Q1=$_POST["Q1"];
$Q2=$_POST["Q2"];
$Q3=$_POST["Q3"];

$date = date("d-m-y");

$total_Q1 = 20.00 * $Q1;
$total_Q2 = 15.00 * $Q2;
$total_Q3 = 10.00 * $Q3;

$total = $total_Q1 + $total_Q2 + $total_Q3;
$service = (5/100)*$total;
$total_charge = $total+$service;

echo "Customer Name: $custname <br>";
echo "Customer Address: $custadd <br>";
echo "Customer Phone: $custphone <br>";
echo "Date: $date <br><br>";

echo "Quantity Pizza Hawaiian Chicken: $Q1<br>";
echo "Subtotal: RM$total_Q1 <br><br>";

echo "Quantity Pizza Pepperoni: $Q2<br>";
echo "Subtotal: RM$total_Q2 <br><br>";

echo "Quantity Pizza Cheese: $Q3<br>";
echo "Subtotal: RM$total_Q3 <br><br>";

echo "Total:";
echo number_format((float)$total,2,'.','.');

echo "Service Charge (5%): $service <br><br>";

echo "Total Amount: RM $total_charge <br>";


?>