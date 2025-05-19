export default () => {
    return {
        //Sidenav
        sideNavOpen: false,
        centeringDelay: false,

        //Dropdowns
        companyDropdownOpen: false,

        //Global create
        globalCreateOpen: false,
        globalCreateModalOpen: false,
        createCustomer: true,
        createQuote: false,

        //Slide-ins
        slideWithoutBackdrop: false,
        slideWithBackdrop: false,

        //Messages
        messages: [],
        show(type) {
            const id = Date.now() + Math.random();
            if (this.messages.length >= 5) {
                this.messages.shift();
            }
            this.messages.push({ id, type });
            setTimeout(() => {
                this.messages = this.messages.filter(m => m.id !== id);
            }, 3000);
        }
    }
};
