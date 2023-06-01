<?php include "./components/header.php" ?> 
<a class="wolks-logo-login" href="./index.html">
        <img src="assets/img/logo-wolks.png" alt="">
    </a>
    <section class="login-page">
        <div class="login-page__form">
            <h1 class="title-section">Fazer Login</h1>
            <form id="login-form">
                <input type="email" placeholder="Nome de usuário" name="username">
                <input type="password" placeholder="Senha" name="password">
                <div class="login-page__error"></div>
                <button type="submit">Logar</button>
            </form>

            <p>Não possui uma conta? <a href="./cadastro.html">Registre-se</a></p>
        </div>
    </section>
<!-- 
    <section class="login-page">
        <div class="login-page__form">
            <h1 class="title-section">Criar Conta</h1>
            <form id="signup-form">
                <input type="text" placeholder="Nome de Usuário" name="username" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Senha" name="password" required>
                <input type="password" placeholder="Confirme a sua senha" name="passwordConfirm" required>
                <div class="login-page__error"></div>
                <button type="submit">Registrar</button>
            </form>

            <p>Já possui uma conta? <a href="./login.html">Login</a></p>
        </div>
    </section> -->

<?php include "./components/footer.php" ?> 