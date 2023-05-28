<?php
session_start();
require 'dbcon.php';
if(isset($_POST['save_student']))
{
     
      $text = mysqli_real_escape_string($conn, $_POST['text']);


      $query = "INSERT INTO comment (comment) VALUES ('$text')";

      $query_run = mysqli_query($conn, $query);
      if($query_run)
      {
            $_SESSION['message'] = "Бүртгэгдлээ";
            header("Location: index.php");
            exit(0);
      }
      else
      {
            $_SESSION['message'] = "Student Not Created";
            header("Location: index.php");
            exit(0);
      }
}

?>