<?php
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'Consult';

  //Opening a connection
  $conn = new mysqli($hostname, $username, $password, $database);
  if ($conn->connect_error){
    die($conn->connect_error);
  }

  echo "ok";
  $consult = $_POST['consS']


  $query = "insert into Web_Development(ConsS) values('$consult')";

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
    echo $row['consS'] ."<br/>";
  }









?>
