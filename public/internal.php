<?php include "./components/header.php";

if ($_SESSION['userInfo']) {
    echo '<script>
    let userInfo = {
        name: "' . $_SESSION['userInfo']['name'] . '",
        username: "' . $_SESSION['userInfo']['username'] . '",
        email: "' . $_SESSION['userInfo']['email'] . '",
        id: "' . $_SESSION['userInfo']['id'] . '",
    }
    localStorage.setItem("user", JSON.stringify(userInfo));
    localStorage.setItem("token", "' . $_SESSION['token'] . '");
    </script>';
} else {
    header("Location: ./");
};

?>

<a class="wolks-logo-login" href="./">
    <img src="assets/img/logo-wolks.png" alt="">
</a>
<div class="internal-page">
    <div class="internal-page__interface">
        <?php include "template-parts/internal/sidebar.php"; ?>
        <main class="internal-page__content">
            <?php include "template-parts/internal/user-info.php"; ?>
            <?php include "template-parts/internal/password-change.php"; ?>
            <?php include "template-parts/internal/cars.php"; ?>
        </main>
    </div>
</div>

<?php include "./components/footer.php" ?>