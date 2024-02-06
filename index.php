<?php include 'includes/autoLoder.php';require_once 'includes/common.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
    <?php echo $bootstrapCSS;?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="action.php" method="post">
                    <label for="" class="form-label">Name:</label><br>
                    <input type="text" name="name" class="form-control"><br>
                    <label for="" class="form-label">Email:</label><br>
                    <input type="email" name="email" class="form-control"><br><br>
                    <button type="submit" class="btn btn-primary">Insert</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>