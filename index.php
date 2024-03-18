<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/app/models/ClassProduct.php';
require_once __DIR__ . '/app/models/ClassAnimal.php';
require_once __DIR__ . '/app/models/ClassInfoOfProduct.php';
?>

<!doctype html>
<html lang="en">

<head>
    <title>L'arca di Andrè</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>



<body class="bg-secondary">
    <header class="d-flex justify-content-between align-items-center p-3 bg-dark text-light mb-3">
        <div class="text-uppercase">
            <h3>L'arca di Andrè</h3>
        </div>
        <nav class="nav justify-content-center">
            <a class="nav-link text-light" href="#" aria-current="page">Home</a>
            <a class="nav-link text-light" href="#">Aggiungi Prodotti</a>
            <a class="nav-link text-light" href="#">About us</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) : ?>
                    <div class="col-3 mb-3 ">
                        <div class="card h-100">
                            <img src="<?= $product->image ?>" class="card-img-top" alt="">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge text-bg-warning p-2"><?= $product->brand ?></span>
                                    <?php if ($product->animal->category === 'dog') : ?>
                                        <i class="fa-solid fa-shield-dog fa-2xl"></i>
                                    <?php else : ?>
                                        <i class="fa-solid fa-shield-cat fa-2xl"></i>
                                    <?php endif; ?>
                                </div>
                                <h5 class="card-title mt-2 mb-2"><?= $product->name ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted text-capitalize"><?= $product->type->type . ', ' . $product->animal->category ?></h6>
                                <p class="card-text"><?= $product->description ?></p>
                                <div class="mt-3">
                                    Info Prodotto:
                                    <ul>
                                        <li>Dimensioni:<?= $product->type->dimensions === '' ?  ' ' . 'Non abbiamo info per questo prodotto' : ' ' . $product->type->dimensions ?></li>
                                        <li>Peso:<?= ' ' . $product->type->weight . 'gr' ?></li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="badge <?= $product->stock === 0 ? 'text-bg-danger' : 'text-bg-success' ?> p-2">
                                        Disponibilità: <?= $product->stock ?>
                                    </div>
                                    <div class="badge p-2 text-dark">
                                        Prezzo: <?= $product->price . '€' ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
</body>

</html>