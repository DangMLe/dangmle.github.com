<?php
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'Web_Development';

  //Opening a connection
  $conn = new mysqli($hostname, $username, $password, $database);
  if ($conn->connect_error){
    die($conn->connect_error);
  }

  echo "ok";
  $request = $_POST['request']
  $fName = $_POST['fName'];
  $lName = $_POST['lName'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $company = $_POST['company'];
  $require = $_POST['require'];

  $query = "insert into Web_Development(request,fName, lName, email, phone, company, require) values('$fName','$lName', '$email', '$phone', '$company', '$require')";

  $results = $conn->query($query);
  if (!$results) {
    echo "Insert failed";
  } else {
    echo "Insert successfully";
  }

  $query = "select * from Web_Development";
  $results = $conn->query($query);

  if (!$results) echo "Select error";

  while ($row = mysqli_fetch_array($results)) {
    echo $row['fName'] .' '.$row['lName'] .' '.$row['email'] .' '.$row['phone'] .' '.$row['company'] .' '.$row['require'] ."<br/>";
  }









?>
