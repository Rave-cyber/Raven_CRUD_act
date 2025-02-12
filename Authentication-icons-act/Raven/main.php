<?php
include 'db.php';

$sql = "SELECT * FROM flowers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('main.png'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh; margin: 0;"></body>
    <div class="container">
        <h1 class="my-4 text-center"></h1>
        <a href="create.php" class="btn btn-success mb-3">
            <i class="bi bi-patch-plus"></i> Add New Flower
        </a>
        
        <div class="row">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['name']; ?></h5>
                            <p class="card-text"><?= $row['description']; ?></p>
                            <p><strong>Price:</strong> $<?= $row['price']; ?></p>
                            <p><strong>Stock:</strong> <?= $row['stock']; ?></p>
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i>Edit</a>
                            <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i>Delete</a>
                        </div>
                    </div>
                </div>
            <?php } ?> 
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
