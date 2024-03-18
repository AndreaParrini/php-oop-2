<?php
require_once __DIR__ . '/app/models/ClassProduct.php';
require_once __DIR__ . '/app/models/ClassAnimal.php';
require_once __DIR__ . '/app/models/ClassInfoOfProduct.php';
$products = [
    new Product('Shampo per cani', 13.99, 80, 'https://picsum.photos/200', 'Shampo per cani a pelo corto, perfetto per una pulizia e un profumo fuoi dal comune', 'Vitakraft', new Animal('dog', 'all size'), new InfoOfProduct('prodotto', '250ml', 140)),
    new Product('Crocchette di pollo', 8.99, 25, 'https://picsum.photos/200', 'Ottimo pasto per il tuo gatto, in queste crocchette troverai tutti valori nutrizionali utili al tuo gatto.', 'Felix', new Animal('cat', 'all size'), new InfoOfProduct('cibo', '20x30x10', 250)),
    new Product('Guinzaglio per cani', 11.99, 0, 'https://picsum.photos/200', 'Gunzaglio semplice per cani di piccola taglia, lunghezza massima di 2 metri.', 'Amazon Basic', new Animal('dog', 'S'), new InfoOfProduct('prodotto', '', 30)),
    new Product('Tiragraffi per gatto', 25.99, 10, 'https://picsum.photos/200', 'Un vero e prorio parco giochi per il tuo gatto. Dimensioni non esccessive, perfetto per una collocazione rapida.', 'Beltom', new Animal('cat', 'M'), new InfoOfProduct('gioco', '112x30x60', 200)),
    new Product('Gioco per cani', 11.99, 22, 'https://picsum.photos/200', 'Gioco per cani, corda da mordere, super resistente', 'Trixie', new Animal('dog', 'all size'), new InfoOfProduct('gioco', '20x10x5', 50)),
    new Product('Pettorina', 3.99, 100, 'https://picsum.photos/200', 'Pettorina per cani, adatta per potere fuori il tuo amico a 4 zampe.', 'Anione', new Animal('dog', 'M'), new InfoOfProduct('prodotto', '40x20x30', 10)),
    new Product('Pettorina per gatti', 18.99, 0, 'https://picsum.photos/200', 'Pettorina Gatto Antifuga con Guinzaglio, Pettorina per Gatti Regolabile Riflettente.', 'Rabbitgoo', new Animal('cat', 'S'), new InfoOfProduct('prodotto', '20x10x20', 10)),
    new Product('Dentastix per cani', 12.99, 23, 'https://picsum.photos/200', 'Dentastix Snack per la Igiene Orale, Cane Medio 10-25 kg Confezione Scorta, 56 Bastoncini - 8 x 180 gr', 'Pedigree', new Animal('dog', 'M'), new InfoOfProduct('cibo', '8x180', 180)),
];
