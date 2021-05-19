const scrollUp = document.querySelector('.scroll-up');
const scrollUpButton = scrollUp.querySelector('.scroll-up__button');

scrollUpButton.addEventListener('click', function (e) {
    e.preventDefault();
    window.scrollTo({top: 0, behavior: "smooth"});
});

window.addEventListener('scroll', function () {
    if ((document.body.getBoundingClientRect()).top) {
        scrollUp.classList.remove('active');
    } else {
        scrollUp.classList.add('active');
    }
});

