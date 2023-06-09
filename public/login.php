<?php include "./components/header.php";
if ($_SESSION) {
    header("Location: ./internal");
}
?>
<a class="wolks-logo-login" href="./">
    <img src="assets/img/logo-wolks.png" alt="">
</a>
<section class="login-page">
    <div class="login-page__form-wrapper">
        <div class="login-page__login-form">
            <div class="login-page__form-description">
                <h1>Faça seu login</h1>
                <p>
                    Relize seu login para poder inserir seus novos veículos
                </p>
            </div>
            <form id="login-form">
                <input type="text" placeholder="Nome de usuário" name="username" required>
                <input type="password" placeholder="Senha" name="password" required>
                <button type="submit">Logar</button>
                <div id="login-return" class="login-page__return-msg"></div>
            </form>
        </div>
        <div class="login-page__signup-form">
            <div class="login-page__form-description">
                <h1>Não possui uma conta?</h1>
                <p>
                    Registre-se agora para poder
                    inserir veículos
                </p>
            </div>
            <form id="signup-form">
                <input type="text" placeholder="Seu nome" name="name" required>
                <input type="text" placeholder="Nome de Usuário" name="username" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Senha" name="password" required>
                <input type="password" placeholder="Confirme a sua senha" name="passwordConfirm" required>
                <button type="submit">Registrar</button>
                <div id="signup-return" class="login-page__return-msg">Usuário criado com sucesso, realize o login</div>
            </form>
        </div>
    </div>
</section>





<?php include "./components/footer.php" ?>