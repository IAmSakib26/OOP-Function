<?php include_once('includes/autoLoder.php');include_once('includes/common.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <?php echo $bootstrapCSS;?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php 
                $table = new Test();
                $table->getUsers();
                ?>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <a href="index.php" class="btn btn-sm btn-primary">Insert</a>
        </div>
    </div>
</body>
</html>