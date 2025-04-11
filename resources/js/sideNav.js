export default function () {
    const sideNavContainer = document.querySelector('#side-nav-container');
    const sideNavToggle = document.querySelector('#side-nav-toggle');
    const sideNavList = document.querySelectorAll('.side-nav-list');
    const sideNavText = document.querySelectorAll('.side-nav-text');
    const sideNavOpen = document.querySelector('#side-nav-open');
    const sideNavClose = document.querySelector('#side-nav-close');

    sideNavClose.classList.add('hidden');

    sideNavToggle?.addEventListener('click', function () {
        sideNavContainer.classList.toggle('w-16');
        sideNavContainer.classList.toggle('w-36');
        sideNavList.forEach(element => {
            element.classList.toggle('justify-center');
        });
        sideNavText.forEach(element => {
            element.classList.toggle('hidden');
        });
        sideNavClose.classList.toggle('hidden');
        sideNavOpen.classList.toggle('hidden');
    });
}
