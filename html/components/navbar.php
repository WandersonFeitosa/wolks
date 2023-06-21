<header class="main-menu">
    <div class="container">
        <div class="main-menu__wrapper">
            <a href="/">
                <img src="/assets/img/logo-wolks.png" alt="">
            </a>
            <ul class="main-menu__item-wrapper">
                <a href="./#stock">
                    <li class="main-menu__item">Nossos Produtos</li>
                </a>
                <?php
                if ($_SESSION) {
                ?>
                    <a href="/internal.php">
                        <li class="main-menu__item"><?php echo explode(" ", $_SESSION['userInfo']['name'])[0]; ?></li>
                    </a>
                <?php
                } else {
                ?>
                    <a href="/login.php">
                        <li class="main-menu__item">Login</li>
                    </a>
                <?php
                }
                ?>

            </ul>
        </div>
    </div>
</header>