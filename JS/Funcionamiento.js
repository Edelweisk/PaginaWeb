document.addEventListener("DOMContentLoaded", () => {
    const message = document.querySelector("p");
    if (message && message.textContent.trim() !== "") {
        message.style.padding = "10px";
        message.style.borderRadius = "8px";
        message.style.backgroundColor = message.textContent.includes("exitoso") ? "#d4edda" : "#f8d7da";
        message.style.color = message.textContent.includes("exitoso") ? "#155724" : "#721c24";
        message.style.border = message.textContent.includes("exitoso") ? "1px solid #c3e6cb" : "1px solid #f5c6cb";
        setTimeout(() => message.remove(), 1000);
    }
});

//Opciones

function MostrarForm(tipo){
const LoginForm = document.getElementById("from-login");
const registroForm = document.getElementById("from-registro");

if (tipo === "login"){
    LoginForm.style.display = "block";

    registroForm.style.display = "none";        

} else if (tipo === "registro"){
    LoginForm.style.display = "none";

    registroForm.style.display = "block";        
}
}

window.onload = () => {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('tipo')) {
        MostrarForm('registro');
    } else {
        MostrarForm('login');
    }
};


