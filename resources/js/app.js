import './bootstrap';
import Alpine from 'alpinejs';

const currentPage = document.body.dataset.currentPage;
// console.log(currentPage); // Uncomment to see the name of the current page.

window.Alpine = Alpine;
Alpine.start();
