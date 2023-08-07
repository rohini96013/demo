<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>firstphp</title>
</head>
<body>
<form method="POST" action="second.php" name="form1">

<label>name</label>
<input type="textbox" id="name" name="name">

<label>roll no</label>
<input type="number" id="roll no" name="roll no">

<input type="submit"  name="submit">

</form>

    <?php 

        if(isset($_POST['submit']))
        {
          echo $_POST['name'];
          echo $_POST['roll_no'];
        }

  
     ?>
</body>
</html>