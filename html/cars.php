<?php
include "./components/header.php";
include "./components/navbar.php";
include "./functions/globalVars.php";

// Retrieves the value of the 'id' parameter if empty, returns null
$car_id = $_GET['id'] ?? null;


if ($car_id) {
    $url = $api_url . '/getCarById/' . $car_id;
    $response = file_get_contents($url, false);

    $car_info = json_decode($response, true);
}

?>
<section class='buy menu-offset' <?php echo (!$car_id) ? "style='display:block;'" : ''; ?>>

    <?php
    if ($car_id) { ?>
        <div class="container">
            <div class="buy__wrapper">
                <div class="buy__image">
                    <img src="<?php echo $car_info['image_url'] ?>" alt="">
                </div>
                <div class="buy__info">

                    <div class="buy__info__title">
                        <span><?php echo $car_info['model'] ?></span>
                    </div>
                    <div class="buy__info__stock">
                        <span>
                            <?php echo $car_info['stock'] ?> unidades em estoque
                        </span>
                    </div>
                    <div class="buy__info__year">
                        <span><?php echo $car_info['year'] ?></span>
                    </div>
                    <div class="buy__info__details">
                        <span><?php echo $car_info['info'] ?></span>
                    </div>
                    <div class="buy__info__price">
                        <span>R$ <?php echo $car_info['price'] ?></span>
                    </div>
                    <div class="buy__info__button">
                        <button>Comprar</button>
                    </div>
                </div>
            </div>
        <?php } else {
        include "./components/cars-list.php";
    } ?>
</section>
<?php include "./components/footer.php" ?>