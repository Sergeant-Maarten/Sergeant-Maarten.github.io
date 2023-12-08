const openMenuButton = document.getElementById("open-menu-button");
const closeMenuButton = document.getElementById("close-menu-button");
const fullscreenMenu = document.getElementById("fullscreen-menu");

// Functie om het menu te openen
function openMenu() {
    fullscreenMenu.style.display = "block";
    document.body.style.overflow = "hidden"; // Voorkom scrollen van de achtergrond
    openMenuButton.style.display = "none"; // Verberg de "Open Menu" knop
    closeMenuButton.style.display = "block"; // Toon de "Close Menu" knop
}

// Functie om het menu te sluiten
function closeMenu() {
    fullscreenMenu.style.display = "none";
    document.body.style.overflow = "auto"; // Sta scrollen van de achtergrond toe
    openMenuButton.style.display = "block"; // Toon de "Open Menu" knop
    closeMenuButton.style.display = "none"; // Verberg de "Close Menu" knop
}

openMenuButton.addEventListener("click", openMenu);
closeMenuButton.addEventListener("click", closeMenu);

