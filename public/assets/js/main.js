var apiUrl = "http://localhost:3000";

$("#login-form").submit(async (e) => {
    e.preventDefault();

    $("#login-return").css("display", "none");

    const username = e.target.username.value;
    const password = e.target.password.value;

    const response = await fetch(`${apiUrl}/logUser`, {
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
        console.log(data.error);
        $("#login-return").css("display", "block");
        $("#login-return").html(data.error);
    } else {
        localStorage.setItem("token", data.token);
        localStorage.setItem("user", JSON.stringify(data.user));
        window.location.href = "./internal";
    }


});
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