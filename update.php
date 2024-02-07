<?php require_once 'includes/autoLoder.php'; require_once 'includes/common.php';
//connect my databese is this file

class Fetch extends Dbh
{
    public function fetch(){
        $id = 0;
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $db = new Dbh();
        $pdo = $db->connect();
        $query = $pdo->query('SELECT * FROM test_tbl WHERE id='.$id);
        $rs = $query->fetch();
        echo
        '<form action="actionUpdate.php?id='.$id.'" method="post">
            <label for="" class="form-label">Name:</label><br>
            <input class="form-control" type="text" name="name" value="'.$rs['name'].'"><br>
            <label for="" class="form-label">Email:</label><br>
            <input class="form-control" type="email" name="email" value="'.$rs['email'].'"><br><br>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>';
    }
    
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <?php (new Fetch())->fetch();?>
            </div>
        </div>
    </div>
</body>
</html>