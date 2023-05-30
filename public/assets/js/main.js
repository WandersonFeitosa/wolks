$("#login-form").submit(async (e) => {
    e.preventDefault();

    $(".login-page__error").css("display", "none");

    const email = e.target.querySelector('input[name="email"]').value;
    const password = e.target.querySelector('input[name="password"]').value;

    const response = await fetch("http://localhost:3000/logUser", {
        method: "POST",
        body: JSON.stringify({
            email,
            password
        }),
        headers: {
            "Content-Type": "application/json",
        },
    });

    const data = await response.json();

    if (data.error) {
        console.log(data.error);
        $(".login-page__error").css("display", "block");
        $(".login-page__error").html(data.error);
    } else {
        localStorage.setItem("token", data.token);
        localStorage.setItem("user", JSON.stringify(data.user));
        window.location.href = "./register-car.html";
    }


});