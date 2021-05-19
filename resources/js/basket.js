const refs = {
    basketBackdrop: document.querySelector("[data-basket-backdrop]"),
    editBasketInHoveringBasket: document.querySelector("[data-edit-basket]"),
    shoppingCardHeader: document.querySelector("[data-shopping-card]"),
}

function onCloseModal() {
    refs.basketBackdrop.classList.toggle('is-hidden');
    document.body.classList.toggle('modal-open');
}

function onEscKeyPress(e){
    if (e.code === 'Escape') {
        onCloseModal();
    }
}

if (refs.editBasketInHoveringBasket || refs.shoppingCardHeader) {
    refs.editBasketInHoveringBasket.addEventListener('click', (e) => {
        e.preventDefault();
        onCloseModal();
        window.addEventListener('keydown', onEscKeyPress);
    });

    refs.shoppingCardHeader.addEventListener('click', (e) => {
        e.preventDefault();
        onCloseModal();
        window.addEventListener('keydown', onEscKeyPress);
    });
}

if (refs.basketBackdrop) {
    refs.basketBackdrop.addEventListener('click', (e) => {
        e.preventDefault();

        const closeBasket = e.target.closest("[data-close-basket]");
        const shoppingContinue = e.target.closest("[data-shopping-continue]");

        if (e.target === e.currentTarget || closeBasket || shoppingContinue) {
            onCloseModal();
        }

        window.removeEventListener('keydown', onEscKeyPress);
    });
}
