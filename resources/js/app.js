import './bootstrap';
import Alpine from 'alpinejs';
import hljs from 'highlight.js';
import 'highlight.js/styles/github-dark.css'; // Vælg et tema

// Aktiver syntaksfremhævning for alle <code> tags
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightElement(block); // Fremhæv kode elementet
    });
});


const currentPage = document.body.dataset.currentPage;
// console.log(currentPage); // Uncomment to see the name of the current page.

window.Alpine = Alpine;
Alpine.start();
