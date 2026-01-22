<!-- create a simple profile page with php-->
<?php
    $name = "John Doe";
    $email = "john.doe@example.com";
    $age = 30;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
</head>
<body>
    <h1>Profile Information</h1>
    <p>Name: <?php echo $name; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Age: <?php echo $age; ?></p>
</body>
</html>