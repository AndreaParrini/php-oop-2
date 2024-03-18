<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/app/models/ClassProduct.php';
require_once __DIR__ . '/app/models/ClassAnimal.php';
require_once __DIR__ . '/app/models/ClassInfoOfProduct.php';
?>

<?php include __DIR__ . '/app/partials/head.php' ?>
<?php include __DIR__ . '/app/partials/header.php' ?>
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
<?php include __DIR__ . '/app/partials/footer.php' ?>