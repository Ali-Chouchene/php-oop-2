<?php


include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Animal_Genre.php';
include_once __DIR__ . '/Models/Product_Type.php';

foreach ($animals as $pet) {
    $b[] = $pet;
    $genres = new AnimalGenre($b);
}

foreach ($prod_types as $type) {
    $a[] = $type;
    $types = new ProductType($a);
}

$product1 = new Product('Materassino', 35, 3, 'https://www.cucina-naturale.it/wp-content/uploads/2019/10/Cuccia2.jpg', 3, 0);
$product2 = new Product('Telecamera', 124.99, 5, 'https://staticfanpage.akamaized.net/wp-content/uploads/sites/6/2020/06/accessori-tech-cani-1200x675.jpg', 3, 4);
$product3 = new Product('Cuccia', 29.99, 5, 'https://media.lavorincasa.it/post/16/15729/data/cuccia-design.jpg', 2, 1);
$product4 = new Product('Gabbia', 149.99, 3, 'https://www.prezzoforte.it/images/webp/AllMyPets_52ekD10_305020_1.webp', 3, 2);
$product5 = new Product('Cibo Pesci Rossi', 9.99, 4, 'https://ibrio.it/5266-Ebay/tetra-goldfish-gold-energy-250-ml-mangime-superiore-in-granuli-per-pesci-rossi-con-minerali-essenziali.jpg', 1, 3);
$product6 = new Product('Pettines', 9.99, 4, 'https://m.media-amazon.com/images/I/5153Oq1xwwL._AC_SY355_.jpg', 2, 1);



$products = [$product1, $product2, $product3, $product4, $product5, $product6];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTAWSONE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--stylesheet-->
    <!-- <link rel="stylesheet" href="/php-oop-2/css/style.css"> -->
    <!--Vue JS-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--Axios-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.3/axios.min.js" integrity="sha512-L4lHq2JI/GoKsERT8KYa72iCwfSrKYWEyaBxzJeeITM9Lub5vlTj8tufqYk056exhjo2QDEipJrg6zen/DDtoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Page Title-->
    <title>
        PET-SHOP
    </title>
    <!--Page Icon-->
    <link rel="icon" type="image/x-icon" href="#">
</head>
<!-- style -->
<style>
    .fa-gold {
        color: goldenrod;
    }

    img {
        width: 100%;
        min-height: 250px;
        object-fit: cover;
        object-position: right;
    }
</style>

<body>
    <div class="container my-5">
        <header class="text-center pt-5">
            <h1>
                Pet-Store
            </h1>
        </header>
    </div>
    <main>
        <div class="container">
            <div class="row text-center row-cols-1 row-cols-md-3 py-5">
                <?php foreach ($products as $product) : ?>
                    <div class="col my-3">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="<?= $product->img ?>" class="card-img-top img-fluid" alt="<?= $product->title ?>">
                            <div class="card-body">
                                <h3 class="card-title"><?= $product->title ?></h3>
                                <h5 class="card-title"><?= $product->price ?>&euro;</h5>
                                <h5><?= $product->rate ?><i class="fa-solid fa-star fa-gold fa-xs"></i></h5>
                                <?php foreach ($types as $type) : ?>
                                    <h6>Genere: <?= $type[$product->animal_type] ?></h6>
                                    <?php foreach ($genres as $genre) : ?>
                                        <h6>Per: <?= $genre[$product->product_type] ?></h6>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

</body>

</html>