<?php

include "./components/header.php";
include "./components/navbar.php";
include "./functions/globalVars.php";

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
    <?php include "./components/cars-list.php" ?>
</section>
<?php include "./components/footer.php" ?>