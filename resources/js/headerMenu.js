export default function () {
    const toggleButton = document.querySelector('#menu-dropdown-toggle');
    const dropdownMenu = document.querySelector('#menu-dropdown');

    toggleButton?.addEventListener('click', function () {
        toggleMenu()
    });

    function toggleMenu() {
        const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
        toggleButton.setAttribute('aria-expanded', !isExpanded ? 'true' : 'false');
        dropdownMenu.classList.toggle('hidden');
    }
}
