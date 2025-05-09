window.addEventListener('load', () => {
    const caja = document.getElementById('Ventanas');
    setTimeout(() => {
      caja.classList.add('show');
    }, 500); // pequeño delay para que el navegador note el cambio
  });

  // Sidebar
  import logo from "./logo.svg";
  import "./Sidebar.css";
