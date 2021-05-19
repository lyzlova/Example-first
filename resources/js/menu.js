const menuBtnRef = document.querySelector("[data-menu-button]");
const menu = document.querySelector("[data-menu]");
const mobileMenuClose = document.querySelector("[data-menu-close]");
const mobileMenuContent = document.querySelector("[ data-menu-content]");

if(menuBtnRef && menu && mobileMenuClose) {
    menuBtnRef.addEventListener("click", () => {
        menuBtnRef.classList.toggle('is-open');
        menu.classList.toggle("is-open");
        document.body.classList.toggle('modal-open');
    })

    mobileMenuClose.addEventListener("click", () => {
        menuBtnRef.classList.toggle('is-open');
        menu.classList.toggle("is-open");
        document.body.classList.toggle('modal-open');
    })

    document.addEventListener('click', (e) => {
        if (e.target === menu) {
            menu.classList.toggle("is-open");
            menuBtnRef.classList.toggle('is-open');
            document.body.classList.toggle('modal-open');
        }
    });
}

