<?php

   $connection = mysqli_connect("localhost","root","","pesanan_travel");

   if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = "insert into pesanan_form(name, email, phone, address, location, guest, arrivals, leaving) values 
      ('$name','$email','$phone','$address','$location','$guests', '$arrivals', '$leaving')";
      
      mysqli_query($connection, $request);

      header('location:home.php'); 

   }

?>