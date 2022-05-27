<?php
    $con = mysqli_connect('localhost','root');
      
     if($con)
       {
        echo"Connection Successful";
       }
     else
        {
        echo"NO Connection";
         }

       mysqli_select_db($con, 'armaan');

       $Name = $_POST['Name'];
       $Email = $_POST['Email'];
       $Number = $_POST['Number'];
       $Adults = $_POST['Adults'];
       $Children = $_POST['Children'];
       $Service = $_POST['Service'];
       $Category = $_POST['Category'];
       $Prescription = $_POST['Prescription'];
       $Comment = $_POST['Comment'];

     $query = " insert into booking (Name, Email, Number, Adults, Children, Service, Category, Prescription, Comment)
          values ('$Name', '$Email', '$Number', '$Adults', '$Children', '$Service', '$Category', '$Prescription', '$Comment')";

      mysqli_query($con,$query);

  echo"$query";

   header('location: index.php');
?>