<?php
$url = $api_url . '/getAllCars';
$response = file_get_contents($url, false);

$cars = json_decode($response, true);
?>
<div class="container">
    <div class="stock__list">
        <?php
        foreach ($cars as $car) {
        ?>
            <div class="stock__item">
                <div class="stock__item__image">
                    <img src=".<?php echo $car['image_url'] ?>" alt="">
                </div>
                <div class="stock__item__info">
                    <h3>
                        <?php echo $car['model'] ?>
                    </h3>
                    <p style="font-weight: 700;">
                        Estoque: <?php echo $car['stock'] ?>
                    </p>
                    <p>
                        <?php echo $car['year'] ?>
                    </p>
                    <p>
                        <?php echo $car['info'] ?>
                    </p>

                    <p>
                        R$ <?php echo $car['price'] ?>
                    </p>
                    <a href="./cars.php/?id=<?php echo $car['_id'] ?>">
                        Ver mais
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>