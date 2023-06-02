$("#login-form").submit(async (e) => {
    e.preventDefault();

    $("#login-return").css("display", "none");

    const username = e.target.querySelector('input[name="username"]').value;
    const password = e.target.querySelector('input[name="password"]').value;

    const response = await fetch("http://localhost:3000/logUser", {
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

    $(".login-page__error").css("display", "none");

    const email = e.target.querySelector('input[name="email"]').value;
    const username = e.target.querySelector('input[name="username"]').value;
    const password = e.target.querySelector('input[name="password"]').value;
    const passwordConfirm = e.target.querySelector('input[name="passwordConfirm"]').value;

    //Check if passwords match
    if (password !== passwordConfirm) {
        $(".login-page__error").css("display", "block");
        $(".login-page__error").html("As senhas não coincidem");
        return;
    }

    // const response = await fetch("http://localhost:3000/registerUser", {
    //     method: "POST",
    //     body: JSON.stringify({
    //         email,
    //         username,
    //         password        
    //     }),
    //     headers: {
    //         "Content-Type": "application/json",
    //     },
    // });

    // const data = await response.json();

    // if (data.error) {

    // } else {


    // }
})