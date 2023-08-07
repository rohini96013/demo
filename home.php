<html>
<body>
welcome mr
<?php
   if (isset($_cookie['username'])){
       echo$_cookie('username');

   }
   else{
       header('location:login.php');
   }
   ?>
   <br>
   <a href="aboutus.php">about us<a><br>
   <a href="contactus.php">contact us<a><br>
   <a href="logout.php">logout<a><br>

</body>
</html>