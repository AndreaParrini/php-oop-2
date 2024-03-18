<?php
class Product
{
    public $name;
    public $price;
    public $stock;
    public $image;
    public $description;
    public $brand;
    public $animal;
    public $type;



    public function __construct(string $name, float $price, int $stock, string $image, string $description, string $brand, Animal $animal, InfoOfProduct $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        $this->image = $image;
        $this->description = $description;
        $this->brand = $brand;
        $this->animal = $animal;
        $this->type = $type;
    }
}

class Animal
{
    public $category;
    public $size;

    public function __construct($category, $size)
    {
        $this->category = $category;
        $this->size = $size;
    }
}

class InfoOfProduct
{
    public $type;
    public $dimensions;
    public $weight;

    public function __construct($type, $dimensions, $weight)
    {
        $this->type = $type;
        $this->dimensions = $dimensions;
        $this->weight = $weight;
    }
}

$products = [
    new Product('Shampo per cani', 13.99, 80, 'https://picsum.photos/200', 'Shampo per cani a pelo corto, perfetto per una pulizia e un profumo fuoi dal comune', 'Vitakraft', new Animal('dog', 'all size'), new InfoOfProduct('prodotto', '250ml', 140)),
    new Product('Crocchette di pollo', 8.99, 25, 'https://picsum.photos/200', 'Ottimo pasto per il tuo gatto, in queste crocchette troverai tutti valori nutrizionali utili al tuo gatto.', 'Felix', new Animal('cat', 'all size'), new InfoOfProduct('cibo', '20x30x10', 250)),
    new Product('Guinzaglio per cani', 11.99, 0, 'https://picsum.photos/200', 'Gunzaglio semplice per cani di piccola taglia, lunghezza massima di 2 metri.', 'Amazon Basic', new Animal('dog', 'S'), new InfoOfProduct('prodotto', '', 30)),
    new Product('Tiragraffi per gatto', 25.99, 10, 'https://picsum.photos/200', 'Un vero e prorio parco giochi per il tuo gatto. Dimensioni non esccessive, perfetto per una collocazione rapida.', 'Beltom', new Animal('cat', 'M'), new InfoOfProduct('gioco', '112x30x60', 200)),
    new Product('Gioco per cani', 11.99, 22, 'https://picsum.photos/200', 'Gioco per cani, corda da mordere, super resistente', 'Trixie', new Animal('dog', 'all size'), new InfoOfProduct('gioco', '20x10x5', 50)),
    new Product('Pettorina', 3.99, 100, 'https://picsum.photos/200', 'Pettorina per cani, adatta per potere fuori il tuo amico a 4 zampe.', 'Anione', new Animal('dog', 'M'), new InfoOfProduct('prodotto', '40x20x30', 10)),
    new Product('Pettorina per gatti', 18.99, 0, 'https://picsum.photos/200', 'Pettorina Gatto Antifuga con Guinzaglio, Pettorina per Gatti Regolabile Riflettente.', 'Rabbitgoo', new Animal('cat', 'S'), new InfoOfProduct('prodotto', '20x10x20', 10)),
    new Product('Dentastix per cani', 12.99, 23, 'https://picsum.photos/200', 'Dentastix Snack per la Igiene Orale, Cane Medio 10-25 kg Confezione Scorta, 56 Bastoncini - 8 x 180 gr', 'Pedigree', new Animal('dog', 'M'), new InfoOfProduct('cibo', '8x180', 180)),
    /* new Product('Shampo per cani', 13.99, 80, 'https://picsum.photos/200', 'Shampo per cani a pelo corto, perfetto per una pulizia e un profumo fuoi dal comune', '', new Animal('dog', 'M'), new InfoOfProduct('prodotto', '250ml', 140)),
    new Product('Shampo per cani', 13.99, 80, 'https://picsum.photos/200', 'Shampo per cani a pelo corto, perfetto per una pulizia e un profumo fuoi dal comune', '', new Animal('dog', 'M'), new InfoOfProduct('prodotto', '250ml', 140)),
    new Product('Shampo per cani', 13.99, 80, 'https://picsum.photos/200', 'Shampo per cani a pelo corto, perfetto per una pulizia e un profumo fuoi dal comune', '', new Animal('dog', 'M'), new InfoOfProduct('prodotto', '250ml', 140)),
    new Product('Shampo per cani', 13.99, 80, 'https://picsum.photos/200', 'Shampo per cani a pelo corto, perfetto per una pulizia e un profumo fuoi dal comune', '', new Animal('dog', 'M'), new InfoOfProduct('prodotto', '250ml', 140)),
    new Product('Shampo per cani', 13.99, 80, 'https://picsum.photos/200', 'Shampo per cani a pelo corto, perfetto per una pulizia e un profumo fuoi dal comune', '', new Animal('dog', 'M'), new InfoOfProduct('prodotto', '250ml', 140)),
    new Product('Shampo per cani', 13.99, 80, 'https://picsum.photos/200', 'Shampo per cani a pelo corto, perfetto per una pulizia e un profumo fuoi dal comune', '', new Animal('dog', 'M'), new InfoOfProduct('prodotto', '250ml', 140)),
    new Product('Shampo per cani', 13.99, 80, 'https://picsum.photos/200', 'Shampo per cani a pelo corto, perfetto per una pulizia e un profumo fuoi dal comune', '', new Animal('dog', 'M'), new InfoOfProduct('prodotto', '250ml', 140)),
    new Product('Shampo per cani', 13.99, 80, 'https://picsum.photos/200', 'Shampo per cani a pelo corto, perfetto per una pulizia e un profumo fuoi dal comune', '', new Animal('dog', 'M'), new InfoOfProduct('prodotto', '250ml', 140)),
    new Product('Shampo per cani', 13.99, 80, 'https://picsum.photos/200', 'Shampo per cani a pelo corto, perfetto per una pulizia e un profumo fuoi dal comune', '', new Animal('dog', 'M'), new InfoOfProduct('prodotto', '250ml', 140)), */
]

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

    <!-- Fontawsom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>



<body>
    <header>
        <!-- place navbar here -->
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
                                    <span class="badge text-bg-warning"><?= $product->brand ?></span>
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
                                    <div class="badge <?= $product->stock === 0 ? 'text-bg-danger' : 'text-bg-success' ?>">
                                        Disponibilità: <?= $product->stock ?>
                                    </div>
                                    <div class="badge text-dark">
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