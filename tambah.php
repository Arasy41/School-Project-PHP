<?php 
include 'koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$location = $_POST['location'];
$guests = $_POST['guests'];
$arrivals = $_POST['arrivals'];
$leaving = $_POST['leaving'];

mysqli_query($koneksi,"insert into pesanan_form values('','$name', '$email','$phone','$address','$location','$guests','$arrivals','$leaving')");

header("location:home.php")

?>