import './bootstrap';
import headerMenu from './headerMenu.js';
import sideNav from './sideNav.js';
// import loginPage from './pages/login.js';
// import * as quotePages from './pages/quotes.js';
// import * as offerPages from './pages/offers.js';
// import * as planner from './pages/planner.js';

const currentPage = document.body.dataset.currentPage;
// console.log(currentPage); // Uncomment to see the name of the current page.

/*-----------------------------------------------------Header---------------------------------------------------------*/

document.addEventListener('DOMContentLoaded', () => {

    // const pagesWithoutLayout = [
    //     'login',
    //     'offers.show',
    // ];

    // Only initialize layout-code on pages that use the layout.
    // if (!pagesWithoutLayout.includes(currentPage)) {
        headerMenu();
        sideNav();
    // }

    // // Only initialize code for the current page.
    // switch (currentPage) {
    //     case 'login':
    //         loginPage();
    //         break;
    //     case 'quotes.show':
    //     case 'orders.show':
    //         quotePages.show();
    //         break;
    //     case 'offers.show':
    //         offerPages.show();
    //         break;
    //     case 'planner.index':
    //         planner.setupEmployeeSelects();
    //         break;
    // }
});
