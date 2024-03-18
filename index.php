<?php
class Product
{
    public $name;
    public $price;
    public $stock;
    public $image;
    public $description;
    public $animal;
    public $type;



    public function __construct(string $name, float $price, int $stock, string $image, string $description, Animal $animal, InfoOfProduct $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        $this->image = $image;
        $this->description = $description;
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

$product = new Product('Shampo per cani', 13.99, 80, 'https://picsum.photos/id/237/200/300', 'Shampo per cani a pelo corto, perfetto per una pulizia e un profumo fuoi dal comune', new Animal('dog', 'M'), new InfoOfProduct('prodotto', '250ml', 140));

var_dump($product);

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
                <div class="col-4">
                    <div class="card">
                        <img src="<?= $product->image ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mt-2 mb-2"><?= $product->name ?></h5>
                                <?php if ($product->animal->category === 'dog') : ?>
                                    <i class="fa-solid fa-shield-dog fa-xl"></i>
                                <?php else : ?>
                                    <i class="fa-solid fa-shield-cat fa-xl"></i>
                                <?php endif; ?>
                            </div>
                            <h6 class="card-subtitle mb-2 text-muted text-capitalize"><?= $product->type->type . ', ' . $product->animal->category ?></h6>
                            <p class="card-text"><?= $product->description ?></p>
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
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
</body>

</html>