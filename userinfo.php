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

       mysqli_select_db($con, 'Armaan');

       $User = $_POST['User'];
       $Email = $_POST['Email'];
       $Mobile = $_POST['Mobile'];
       $Comment = $_POST['Comment'];

     $query = " insert into userinfo (User, Email, Mobile, Comment)
          values ('$User', '$Email', '$Mobile', '$Comment')";

      mysqli_query($con,$query);

  echo"$query";

   header('location: index.php');
?>