<?php 
   $stu_name= $_POST["sname"];
   $stu_address= $_POST["saddress"];
   $stu_class= $_POST["class"];
   $stu_phone= $_POST["sphone"];


  $conn = mysqli_connect("localhost","root","","crud") or die("connection filed");
  $sql = "INSERT INTO students(sname,address,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
  $result =  mysqli_query($conn,$sql) or die("query unsuccessful"); 

   header("Location: http://localhost/crud_html/index.php");
  

  mysqli_close($conn);

?>