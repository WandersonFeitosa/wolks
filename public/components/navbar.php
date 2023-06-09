<header class="main-menu">
    <div class="container">
        <div class="main-menu__wrapper">
            <a href="./">
                <img src="assets/img/logo-wolks.png" alt="">
            </a>
            <ul class="main-menu__item-wrapper">
                <a href="./#stock">
                    <li class="main-menu__item">Nossos Produtos</li>
                </a>

                <a href="./login">
                    <li class="main-menu__item">Atualizar Veículos</li>
                </a>
                <?php
                if ($_SESSION) {
                ?>
                    <div class="main-menu__user">
                        <li class="main-menu__item"><?php echo explode(" ", $_SESSION['userInfo']['name'])[0]; ?></li>
                        <ul class="main-menu__user-options">
                            <li href="/internal">Perfil</li>
                            <li href="/internal">Trocar senha</li>
                            <li onclick="logout()">Logout</li>
                        </ul>
                    </div>
                <?php
                }
                ?>

            </ul>
        </div>
    </div>
</header>