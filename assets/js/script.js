function pageSetup() {
    // alert('Index Page');
}

function toggleMenu() {
    // alert('inside button');
    let dropdownMenu = document.getElementById('dropdown-menu');

    // Check if 'dropdownMenu' is currently visible
    if (dropdownMenu.style.display === "block") {
        dropdownMenu.style.display = "none";
    } else {
        dropdownMenu.style.display = "block";
    }
}

function changeIcon() {
    const originalIcon = 'assets/media/index/menu_lines_hamburger_icon.png';
    const newIconSrc = 'assets/media/index/close_round_icon.png';
    const targetElement = document.getElementById('toggle-icon');

    if (targetElement && targetElement.src.endsWith(originalIcon)) {
        // image is currently set to originalIcon, change it to newIconSrc
        targetElement.src = newIconSrc;
    } else if (targetElement) {
        // image is currently set to newIconSrc, change it to originalIcon
        targetElement.src = originalIcon;
    }
}