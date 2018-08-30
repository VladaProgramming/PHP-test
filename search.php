
<?php include('server.php') ?>
<?php
     if (!isset($_SESSION['name'])) {
         $_SESSION['msg'] = "You must log in first";
         header('location: login.php');
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
</head>
<body>
    <form action="search.php" method="GET">
        <label>
            <input type="text" name="keywords" autocomplete="off">
        </label>
        <button type="submit" value="Search" name="Search">Search</button>
    </form>
    
</body>
</html>
