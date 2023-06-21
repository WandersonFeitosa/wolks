<section class="user-info active_content">

    <div class="user-info__desc">
        <h1>Informações do usuário</h1>
    </div>
    <div class="user-info__data">
        <div class="user-info__data__item">
            <h2>Nome:</h2>
            <p><?php echo $_SESSION['userInfo']['username']; ?></p>
        </div>
        <div class="user-info__data__item">
            <h2>Username:</h2>
            <p><?php echo $_SESSION['userInfo']['username']; ?></p>
        </div>
        <div class="user-info__data__item">
            <h2>Email:</h2>
            <p><?php echo $_SESSION['userInfo']['email']; ?></p>
        </div>

    </div>
</section>