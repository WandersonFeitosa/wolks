document.querySelector("form").addEventListener("submit", async (e) => {
    e.preventDefault()

    const email = e.target.querySelector('input[name="email"]').value;
    const name = e.target.querySelector('input[name="name"]').value;
});