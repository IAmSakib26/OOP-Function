<?php require_once 'includes/autoLoder.php'; require_once 'includes/bootstrap.min.css';
//connect my databese is this file

//Undefined method 'connect'.
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $db = new Dbh();
    $pdo = $db->connect();
    $query = $pdo->query('SELECT * FROM test_tbl WHERE id='.$_GET['id']);
    $rs = $query->fetch();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<?php echo $bootstrapCSS; ?>
<body>
    <?php
        
        // $pdo = $db->connect();
        // $query = $db->content()->query("SELECT * FROM test_tbl");
    ?>
    <form action="actionUpdate.php?id=<?php echo $id; ?>" method="post">
        <label for="">Name:</label><br>
        <input type="text" name="name" value="<?php echo $rs['name']; ?>"><br>
        <label for="">Email:</label><br>
        <input type="email" name="email" value="<?php echo $rs['email']; ?>"><br><br>
        <button type="submit">Update</button>
    </form>
    <?php echo $bootstrapJS; ?>
</body>
</html>