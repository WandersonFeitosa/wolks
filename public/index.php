<?php

include "./components/header.php";
include "./components/navbar.php";

$url = 'http://localhost:3000/getAllCars'; 
$response = file_get_contents($url, false);

$cars = json_decode($response, true);
?>


<section id="main-banner">
    <div class="main-banner__image"></div>
    <i class="fa fa-play"></i>
    <div class="filter"></div>
</section>

<section class="virtus">

    <div class="virtus__wrapper">
        <h1 class="title-section">
            Novo Virtus
        </h1>
        <h2 class="fs-2">
            Conheça maior sedan da categoria.
        </h2>

        <a href="">
            Saiba mais
        </a>
    </div>
    <div class="virtus__image hide-mobile">
        <img src="./assets/img/virtus.jpg" alt="">
    </div>

</section>

<section id="stock" class="stock">
    <div class="container">
        <h1 class="title-section">
            Nosso Estoque
        </h1>
        <p class="stock__subtitle">
            Confira abaixo os veículos que temos disponíveis para você no nosso diverso estoque.
        </p>
    </div>
    <div class="container">
        <div class="stock__list">
            <div class="stock__item">
                <div class="stock__item__image">
                    <img src="./assets/img/virtus.jpg" alt="">
                </div>
                <div class="stock__item__info">
                    <h3>
                        Virtus
                    </h3>
                    <p style="font-weight: 700;">
                        Estoque: 9
                    </p>
                    <p>
                        2019/2020
                    </p>
                    <p>
                        1.6 MSI 16V TOTAL FLEX 4P MANUAL
                    </p>

                    <p>
                        R$ 65.000,00
                    </p>
                    <a href="./product">
                        Ver mais
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "./components/footer.php" ?>