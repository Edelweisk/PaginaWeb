function MostrarForm(tipo) {
    const LoginForm = document.getElementById("from-login");
    const registroForm = document.getElementById("from-registro");

    if (tipo === "login") {
        registroForm.classList.remove("active");
        LoginForm.classList.add("active");
    } else if (tipo === "registro") {
        LoginForm.classList.remove("active");
        registroForm.classList.add("active");
    }
}