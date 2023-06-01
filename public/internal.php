<?php include "./components/header.php" ?>

<a class="wolks-logo-login" href="./index.html">
    <img src="assets/img/logo-wolks.png" alt="">
</a>
<section class="register-car-page">
    <div class="register-car-page__form">
        <div class="register-car-page__desc">
            <h1>Preencha com as informações do veículo</h1>
            <p>Após preencher com as informações basta retornar a
                página inicial para conferir o seu veículo
            </p>
        </div>
        <div class="register-car-page__inputs">
            <form action="">
                <input type="text" name="model" placeholder="Modelo" required>
                <input type="number" min="0" name="stock" placeholder="Quantidade em estoque" required>
                <input type="text" name="year" placeholder="Ano do carro" required>
                <input type="text" name="desc" placeholder="Um breve descrição" required>
                <input type="number" min="0" name="value" placeholder="Valor de carro em R$" required>
                <div class="img-input">
                    <label for="image">Insira uma imagem do veículo</label>
                    <input type="file" name="image" required>
                </div>
                <button type="submit">Cadastrar Veículo</button>
                <div class="register-car-page__return-msg"></div>
            </form>
        </div>

    </div>
</section>
<?php include "./components/footer.php" ?>