// Seleziona gli elementi DOM
let navbar = document.querySelector('nav');
let themeToggle = document.querySelector('#themeToggle');
let buttonDark = document.querySelector('#icon');
let body = document.querySelector('body');
let footerDark = document.querySelector('#footerDark');
let Collab = document.querySelector('#Collab');
let Vendite = document.querySelector('#Vendite');
let Client = document.querySelector('#Client');

// Variabile per il tema
let mode = localStorage.getItem('mode') || 'light';

// Funzione per cambiare tema
function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
    let isDarkMode = document.body.classList.contains('dark-mode');

    // Cambia icona e classi a seconda del tema
    buttonDark.classList.replace(isDarkMode ? 'fa-sun' : 'fa-moon', isDarkMode ? 'fa-moon' : 'fa-sun');
    body.classList.toggle('darkMode', isDarkMode);
    footerDark.classList.toggle('footerDarkMode', isDarkMode);
    footerDark.classList.toggle('footer', !isDarkMode);
    localStorage.setItem('mode', isDarkMode ? 'dark' : 'light');
}

// Imposta il tema iniziale
if (mode === 'dark') toggleDarkMode();

// Event listener per il tema
themeToggle.addEventListener('click', toggleDarkMode);

// Funzione per mostrare la nav allo scroll
window.addEventListener('scroll', function() {
    let scrollY = window.scrollY;
    let isDarkMode = document.body.classList.contains('dark-mode');
    
    navbar.classList.toggle('navScroll', scrollY > 800 && !isDarkMode);
    navbar.classList.toggle('navDark', scrollY > 800 && isDarkMode);
});

// Funzione per il contatore incrementale
let check = true;
function createInterval(num, element, time) {
    let count = 0;
    let intervallo = setInterval(function() {
        if (count < num) {
            count++;
            element.innerHTML = count;
        } else {
            clearInterval(intervallo);
        }
    }, time);

    setTimeout(() => {
       check = true; 
    }, 8000);
}

// Observer per il contatore
let observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting && check) {
            createInterval(100, Collab, 25);
            createInterval(500, Vendite, 7);
            createInterval(1000, Client, 0.5);
            check = false;
        }
    });
});

if (Collab) observer.observe(Collab);
