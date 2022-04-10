<?php


$gquantity = $_POST['guest_quantity'];
$na = $_POST['name'];
$sn = $_POST['surname'];
$street = $_POST['street'];
$snum = $_POST['street_num'];
$town = $_POST['town'];
$pcode = $_POST['post_code'];
$mail = $_POST['mail'];
$d_from = $_POST['date_from'];
$d_to = $_POST['date_to'];
$cnum = $_POST['card_number'];
$dcar = $_POST['date_card'];
$cvv = $_POST['CVV'];

echo ("Przyjęto rezerwację");
echo ("<br>");
echo ("$na $sn");

echo ("<br>");
echo ("Adres:");

echo ("<br>");
echo ("$street $snum");

echo ("<br>");
echo ("$pcode $town");

echo ("<br>");
echo ("Adres email:");

echo ("<br>");
echo ("$mail");

echo ("<br>");
echo ("Pobyt");

echo ("<br>");
echo ("Od: $d_from Do: $d_to");

