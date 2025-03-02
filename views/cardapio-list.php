<?php

use App\Entity\Product;

    require_once __DIR__ . '/inicio.php';
    /** @var Product[] $productList */
?>

<main>
    <section class="container-banner">
        <div class="container-texto-banner">
            <img src="img/logo-serenatto.png" class="logo" alt="logo-serenatto">
        </div>
    </section>
    <h2>Cardápio Digital</h2>
    <section class="container-cafe-manha">
        <div class="container-cafe-manha-titulo">
            <h3>Opções para o Café</h3>
            <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
        </div>
        <div class="container-cafe-manha-produtos">
            <div class="container-produto">
                <div class="container-foto">
                    <img src="img/cafe-cremoso.jpg">
                </div>
                <p>Café Cremoso</p>
                <p>Café cremoso irresistivelmente suave e que envolve seu paladar</p>
                <p>R$ 5.00</p>
            </div>
            <div class="container-produto">
                <div class="container-foto">
                    <img src="img/cafe-com-leite.jpg">
                </div>
                <p>Café com Leite</p>
                <p>A harmonia perfeita do café e do leite, uma experiência reconfortante</p>
                <p>R$ 2.00</p>
            </div>
            <div class="container-produto">
                <div class="container-foto">
                    <img src="img/cappuccino.jpg">
                </div>
                <p>Cappuccino</p>
                <p>Café suave, leite cremoso e uma pitada de sabor adocicado</p>
                <p>R$ 7.00</p>
            </div>
            <div class="container-produto">
                <div class="container-foto">
                    <img src="img/cafe-gelado.jpg">
                </div>
                <p>Café Gelado</p>
                <p>Café gelado refrescante, adoçado e com notas sutis de baunilha ou caramelo.</p>
                <p>R$ 3.00</p>
            </div>
        </div>
    </section>
    <section class="container-almoco">
        <div class="container-almoco-titulo">
            <h3>Opções para o Almoço</h3>
            <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
        </div>
        <div class="container-almoco-produtos">
            <div class="container-produto">
                <div class="container-foto">
                    <img src="img/bife.jpg">
                </div>
                <p>Bife</p>
                <p>Bife, arroz com feijão e uma deliciosa batata frita</p>
                <p>R$ 27.90</p>
            </div>
            <div class="container-produto">
                <div class="container-foto">
                    <img src="img/prato-peixe.jpg">
                </div>
                <p>Filé de peixe</p>
                <p>Filé de peixe salmão assado, arroz, feijão verde e tomate.</p>
                <p>R$ 24.99</p>
            </div>
            <div class="container-produto">
                <div class="container-foto">
                    <img src="img/prato-frango.jpg">
                </div>
                <p>Frango</p>
                <p>Saboroso frango à milanesa com batatas fritas, salada de repolho e molho picante</p>
                <p>R$ 23.00</p>
            </div>
            <div class="container-produto">
                <div class="container-foto">
                    <img src="img/fettuccine.jpg">
                </div>
                <p>Fettuccine</p>
                <p>Prato italiano autêntico da massa do fettuccine com peito de frango grelhado</p>
                <p>R$ 22.50</p>
            </div>
        </div>

    </section>
</main>

<?php
    require_once __DIR__ . '/fim.php';
?>
