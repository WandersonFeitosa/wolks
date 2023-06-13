$(document).ready(function () {

    $('.price').maskMoney({
        prefix: 'R$ ',
        allowNegative: true,
        thousands: '.',
        decimal: ',',
        affixesStay: false
    });

    var apiUrl = "http://localhost:3000";

    // Login
    $("#login-form").submit(async (e) => {
        e.preventDefault();

        let submitButton = $("#login-form button");

        blockButton(submitButton, true, 'Logando');

        $("#login-return").css("display", "none");

        const username = e.target.username.value;
        const password = e.target.password.value;

        const response = await fetch(`/functions/logUser.php`, {
            method: "POST",
            body: JSON.stringify({
                username,
                password
            }),
            headers: {
                "Content-Type": "application/json",
            },
        });

        const data = await response.json();

        if (data.error) {
            $("#login-return").css("display", "block");
            $("#login-return").html(data.error);
            blockButton(submitButton, false, "Logar");
        } else {
            window.location.href = "./internal";
        }
    });

    // Signup
    $("#signup-form").submit(async (e) => {
        e.preventDefault();

        $("#signup-return").css("display", "none");

        const name = e.target.name.value;
        const email = e.target.email.value;
        const username = e.target.username.value.toLowerCase();
        const password = e.target.password.value;
        const passwordConfirm = e.target.passwordConfirm.value;

        if (password !== passwordConfirm) {
            $("#signup-return").css("display", "block");
            $("#signup-return").html("As senhas não coincidem");
            return;
        }

        const response = await fetch(`${apiUrl}/createUser`, {
            method: "POST",
            body: JSON.stringify({
                name,
                email,
                username,
                password
            }),
            headers: {
                "Content-Type": "application/json",
            },
        });

        const data = await response.json();

        if (data.error) {
            $("#signup-return").css("display", "block");
            $("#signup-return").html(data.error);
        } else {
            $("#signup-return").html("Usuário criado com sucesso, realize o login");
            $("#signup-return").css("display", "block");
            $("#signup-return").css("color", "var(--green-300)");
        }
    })

    $("#register-car-form").submit(async (e) => {
        e.preventDefault();

        const model = e.target.model.value;
        const year = e.target.year.value;
        const stock = e.target.stock.value;
        const price = e.target.price.value;
        const info = e.target.info.value;
        const image = e.target.image.files[0]; // Get the selected image file

        const formData = new FormData();
        formData.append("model", model);
        formData.append("year", year);
        formData.append("stock", stock);
        formData.append("price", price);
        formData.append("image", image);
        formData.append("info", info);

        try {
            const response = await $.ajax({
                url: `${apiUrl}/createCar`,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
            });

            console.log(response);
        } catch (error) {
            console.log(error);
        }

    });
    // Controla a navegação entre as páginas internas

    $(".main-menu__user").click(() => {
        $(".main-menu__user-options").toggleClass("open-user-menu");
    })

    $('.internal-page__sidebar li').click(function () {
        $('.internal-page__sidebar li').removeClass('active_menu');
        $(this).addClass('active_menu');
        $('.internal-page__content section').removeClass('active_content');
        var index = $(this).index();
        $('.internal-page__content section').eq(index).addClass('active_content');
    });


    // Controla a navegação do menu de carros interno
    $('.cars__menu-button').click(function () {
        var target = $(this).data('target');
        $('.car-section').hide();
        $(target).show();
    });

    $('.cars__return').click(function () {
        $('.car-section').hide();
        $('.cars__manage-cars').show();
    });

    function blockButton(target, block, message) {
        if (!message) {
            message = "Aguarde";
        }
        if (block) {
            $(target).text("").css("gap", "0").attr('disabled', 'disabled').append(`${message}<span class="loading-dots"></span>`);
        } else {
            $(target).text(message).removeAttr('disabled');
        }
    }

});

// Logout
async function logout() {
    localStorage.clear();
    await fetch(`/functions/stopSession.php`);
    window.location.href = "./";
}