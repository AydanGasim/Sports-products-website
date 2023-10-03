<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorts Products Website</title>
    <link href="style.css" />
    <?php require_once "./settings/controller.php"; ?>

</head>
<body >
<?php require_once 'layout/navbar.php'; ?>
<?php global $allData; ?>
<main>
    <?php foreach ($allData as $key=>$data){?>

        <div class="card" style="width: 18rem;">
            <img src="<?=$data['image']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="product_name"><?=$data['name']?></h5>
                <h5 class="product_price">$<?=$data['price']?></h5>

                <a href="#" class="btn btn-primary">View details</a>
            </div>
        </div>
    <?php } ?>
</main>