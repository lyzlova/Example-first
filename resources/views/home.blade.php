@extends("layout")

<?php
$arrayCategories = [
    ['id' => 0, 'image' => 'images/home/image10.jpg', 'title' => 'Косметика и гигиена'],
    ['id' => 1, 'image' => 'images/home/image9.jpg', 'title' => 'Техника и электроника'],
    ['id' => 2, 'image' => 'images/home/image8.jpg', 'title' => 'Повседневная одежда'],
    ['id' => 3, 'image' => 'images/home/image7.jpg', 'title' => 'Одежда и обувь'],
    ['id' => 4, 'image' => 'images/home/image6.jpg', 'title' => 'Сапоги и туфли '],
    ['id' => 5, 'image' => 'images/home/image5.jpg', 'title' => 'Универсальное'],
    ['id' => 6, 'image' => 'images/home/image4.jpg', 'title' => 'Сумки и кошельки'],
    ['id' => 7, 'image' => 'images/home/image3.jpg', 'title' => 'Нижнее бельё'],
    ['id' => 8, 'image' => 'images/home/image2.jpg', 'title' => 'Спортивная обувь '],
    ['id' => 9, 'image' => 'images/home/image1.jpg', 'title' => 'Сапоги и туфли ']
];

$arrayCard = [
    ['id' => 0, 'time' => '— 15 min', 'text' => 'Текст карточки первый'],
    ['id' => 1, 'time' => '— 20 min', 'text' => 'Текст карточки второй'],
    ['id' => 2, 'time' => '— 11 min', 'text' => 'Текст карточки третий'],
    ['id' => 3, 'time' => '— 9 min', 'text' => 'Текст карточки последний']
];

$arrayWeapons = [
    ['id' => 0, 'label' => 'Новинка', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '10 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 1, 'label' => 'Акция', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '2 отзыва', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 2, 'label' => '-70%', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '12 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 3, 'label' => 'топ продаж', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '46 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 4, 'label' => 'Новинка', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '10 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 5, 'label' => 'Акция', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '2 отзыва', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 6, 'label' => '-70%', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '12 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 7, 'label' => 'топ продаж', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '46 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 4, 'label' => 'Новинка', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '10 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 5, 'label' => 'Акция', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '2 отзыва', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 6, 'label' => '-70%', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '12 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 7, 'label' => 'топ продаж', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '46 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
];

$labels = [
    ['id' => 0, 'text' => 'Новинка', 'color' => 'label--green'],
    ['id' => 1, 'text' => 'Акция', 'color' => 'label--blue'],
    ['id' => 2, 'text' => '-70%', 'color' => 'label--red'],
    ['id' => 3, 'text' => 'топ продаж', 'color' => 'label--yellow'],
]
?>

@section("categories")
    <main>
        <div class="categories position-relative">
            <h1 class="visually-hidden">Example 1</h1>
            <div class="categories__content container px-0">
                <header
                    class="categories__header categories-header row row-cols-1 row-cols-sm-2 align-items-center justify-content-center justify-content-sm-between mx-0">
                    <div class="categories-header__title title col-md-6 px-0 text-center text-lg-left ">Популярные
                        категории
                    </div>
                    <a class="categories-header__button button d-block col-8 col-sm-4 col-md-3 col-xl-1 justify-content-end"
                       href="#">все категории</a>
                </header>
                <div class="categories__list row justify-content-between mx-0">
                    @foreach($arrayCategories as $category)
                        <div class="categories__item category col px-0">
                            <picture class="category__picture d-block position-relative">
                                <source srcset="{{asset($category['image'])}}">
                                <img src="{{asset($category['image'])}}" alt="{{$category['title']}}">
                            </picture>
                            <div class="category__title text-left align-items-stretch">{{ $category['title'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="seo position-relative">
            <div class="seo__content container align-items-center position-relative">
                <div class="faq col-10 col-xxl-3 px-0 justify-content-center position-absolute">
                    <div class="row px-0 justify-content-center text-center">
                        <div class="text-center">
                            <div class="faq__title align-self-center px-0">Тут должен быть какой то текст, потом <br>
                                придумаем какой точно будет =)
                            </div>
                            <button class="faq__button button position-relative">замовити зворотній
                                зв’язок
                                <svg class="faq__icon icon" width="18" height="18">
                                    <use href='./images/sprite.svg#icon-down-arrow'></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="products row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
                        @foreach($arrayCard as $card)
                            <div class="col mb-4">
                                <div class="card">
                                    <div class="card__title">{{($card['text'])}}</div>
                                    <div class="card__time d-flex align-items-center">
                                        <svg class="icon" width="16.2" height="16.2">
                                            <use href='./images/sprite.svg#icon-clock'></use>
                                        </svg>
                                        <span class="d-block">{{($card['time'])}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="weapon-accessories container">
            <div class="weapon-accessories__content row row-cols-1 row-cols-md-2 mx-0">
                <div class="col first-col-content">
                    <div class="row row-cols-2 mx-0">
                        <div class="col col-6 px-0 d-flex flex-column justify-content-between">
                            <div class="weapon-accessories__cell equipment position-relative">
                                <a class="weapon-accessories__link col px-0 d-flex align-items-center justify-content-center position-relative">
                                    <picture class="weapon-accessories__picture d-block position-relative">
                                        <source srcset="images/weapon-accessories/img-1.jpg">
                                        <img src="images/weapon-accessories/img-1.jpg" alt="#">
                                    </picture>
                                    <button class="weapon-accessories__button position-absolute">Снаряжение</button>
                                </a>
                            </div>
                            <div class="weapon-accessories__cell knives position-relative">
                                <a class="weapon-accessories__link col px-0 d-flex align-items-center justify-content-center position-relative">
                                    <picture class="weapon-accessories__picture d-block position-relative">
                                        <source srcset="images/weapon-accessories/img-2.jpg">
                                        <img src="images/weapon-accessories/img-2.jpg" alt="#">
                                    </picture>
                                    <button class="weapon-accessories__button position-absolute">Ножи и инструменты
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col px-0">
                            <div class="weapon-accessories__cell weapon position-relative">
                                <a class="weapon-accessories__link col px-0 d-flex align-items-center justify-content-center position-relative">
                                    <picture class="weapon-accessories__picture d-block position-relative">
                                        <source srcset="images/weapon-accessories/img-3.jpg">
                                        <img src="images/weapon-accessories/img-3.jpg" alt="#">
                                    </picture>
                                    <button class="weapon-accessories__button position-absolute">Оружие</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col second-col-content">
                    <div class="row row-cols-2 mx-0 h-100 align-content-between">
                        <div class="col-12 px-0">
                            <div class="row row-cols-1 mx-0">
                                <div class="weapon-accessories__cell cartridges col-6 position-relative">
                                    <a class="weapon-accessories__link d-flex align-items-center justify-content-center position-relative">
                                        <picture class="weapon-accessories__picture d-block position-relative">
                                            <source srcset="images/weapon-accessories/img-4.jpg">
                                            <img src="images/weapon-accessories/img-4.jpg" alt="#">
                                        </picture>
                                        <button class="weapon-accessories__button position-absolute">Патроны</button>
                                    </a>
                                </div>
                                <div class="weapon-accessories__cell accessories col-6 position-relative">
                                    <a class="weapon-accessories__link d-flex align-items-center justify-content-center position-relative">
                                        <picture class="weapon-accessories__picture d-block position-relative">
                                            <source srcset="images/weapon-accessories/img-5.jpg">
                                            <img src="images/weapon-accessories/img-5.jpg" alt="#">
                                        </picture>
                                        <button class="weapon-accessories__button position-absolute">Аксессуары</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="weapon-accessories__cell col-12 range position-relative">
                            <a class="weapon-accessories__link d-flex align-items-center justify-content-center position-relative">
                                <picture class="weapon-accessories__picture d-block position-relative">
                                    <source srcset="images/weapon-accessories/img-6.jpg">
                                    <img src="images/weapon-accessories/img-6.jpg" alt="#">
                                </picture>
                                <button class="weapon-accessories__button position-absolute">Тир</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="weapons container">
            <div id="weapons-content" class="weapons__content d-flex flex-row">
                @foreach($arrayWeapons as $weapon)
                    <div class="weapon-card d-flex position-relative">
                        <div href="#" class="weapon-card__body">
                            <div class="weapon-card__content">
                                <a href="#" class="weapon-card__photo d-flex link">
                                    <picture class="weapon-card__picture d-block">
                                        <source srcset="{{asset($weapon['image'])}}">
                                        <img src="{{asset($weapon['image'])}}" alt="#">
                                    </picture>
                                </a>
                                <a class="weapon-card__heading d-flex">
                                    {{$weapon['heading']}}
                                </a>
                                <div class="weapon-card__rating rating d-flex">
                                    <svg class="rating__icon icon" width="61" height="16">
                                        <use href='./images/sprite.svg#icon-stars'></use>
                                    </svg>
                                    <a href="#" class="rating__reviews reviews">{{$weapon['reviews']}}</a>
                                </div>
                                <div
                                    class="weapon-card__trade trade row justify-content-between align-items-end mx-0">
                                    <div class="trade__prices prices">
                                        @if ($weapon['old-price'] !== '')
                                            <div
                                                class="prices__old position-relative">{{$weapon['old-price']}}</div>
                                        @endif
                                        <div class="prices__new">{{$weapon['new-price']}}</div>
                                    </div>
                                    <button class="weapon-card__buttons buy-button row align-items-center">
                                        <div class="buy-button__text">Купить</div>
                                        <svg class="buy-button__icon" width="20" height="22">
                                            <use href='./images/sprite.svg#icon-shopping-cart'></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="weapon-card__activity activity">
                                    @foreach ($labels as $label)
                                        @if ($weapon['label'] === $label['text'])
                                            <div
                                                class="activity__label {{$label['color']}} position-absolute text-center">
                                                {{$label['text']}}
                                            </div>
                                            @break
                                        @endif
                                    @endforeach
                                    <a href="#" class="activity__gift link d-flex position-absolute">
                                        <svg class="gift__icon icon" width="20" height="20">
                                            <use href='./images/sprite.svg#icon-gift-box'></use>
                                        </svg>
                                    </a>
                                    <div
                                        class="activity__actions actions-group d-flex flex-column position-absolute">
                                        <button class="actions-group__button wish-button">
                                            <svg class="actions-group__icon icon mb-3" width="20" height="20">
                                                <use href='./images/sprite.svg#icon-wish-button'></use>
                                            </svg>
                                        </button>
                                        <button class="actions-group__button compare-button">
                                            <svg class="actions-group__icon icon mb-3" width="20" height="20">
                                                <use href='./images/sprite.svg#icon-compare-button'></use>
                                            </svg>
                                        </button>
                                        <button class="actions-group__button play-button">
                                            <svg class="actions-group__icon icon" width="20" height="20">
                                                <use href='./images/sprite.svg#icon-play-button'></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="cookies row flex-column flex-md-row mx-0 justify-content-between position-fixed">
            <div class="cookies__text col-12 col-md-9 mb-4 mb-md-0"> Этот сайт использует файлы cookies для более комфортной работы пользователя. Продолжая просмотр страниц
                сайта, вы соглашаетесь с использованием файлов cookies. Если вам нужна дополнительная информация или вы не
                хотите соглашаться с использованием cookies, пожалуйста, посетите страницу "Про cookies"</div>
            <button class="cookies__button button col-xxl-1 align-self-center">Согласен</button>
        </div>
        <div class="scroll-up col-1 d-flex flex-column align-items-center">
            <button class="scroll-up__button button">
                <svg class="scroll-up__icon icon d-inline-block" width="28" height="15">
                    <use href='./images/sprite.svg#icon-path'></use>
                </svg>
            </button>
            Вверх
        </div>
    </main>
    <footer class="footer">
        <div class="footer-top container">
            <div class="row mx-0">
                <div class="column-logo col-12 col-lg-5 col-xxl-3 px-0">
                    <a class="d-inline-block" href="index.html">
                        <svg class="logo" width="114" height="41">
                            <use href="./images/sprite.svg#icon-logo"></use>
                        </svg>
                    </a>
                    <div
                        class="column-logo__social social row mx-0 align-items-center justify-content-between"
                    >
                        <a
                            class="social__link col-2 px-0 d-inline-block"
                            href="https://www.instagram.com/"
                            target="_blank"
                            aria-label="instagram"
                        >
                            <svg class="social__icon" width="22" height="22">
                                <use
                                    href="./images/sprite.svg#icon-instagram"
                                ></use>
                            </svg
                            >
                        </a>
                        <a
                            class="social__link col-2 px-0 d-inline-block"
                            href="https://www.facebook.com/"
                            target="_blank"
                            aria-label="facebook"
                        >
                            <svg class="social__icon" width="22" height="22">
                                <use href="./images/sprite.svg#icon-facebook"></use>
                            </svg
                            >
                        </a>
                        <a
                            class="social__link col-2 px-0 d-inline-block"
                            href="https://www.twitter.com/"
                            target="_blank"
                            aria-label="twitter"
                        >
                            <svg class="social__icon" width="22" height="22">
                                <use href="./images/sprite.svg#icon-twitter"></use>
                            </svg
                            >
                        </a>
                        <a
                            class="social__link col-2 px-0 d-inline-block"
                            href="https://www.youtube.com/"
                            target="_blank"
                            aria-label="youtube"
                        >
                            <svg class="social__icon" width="22" height="22">
                                <use href="./images/sprite.svg#icon-youtube"></use>
                            </svg
                            >
                        </a>
                    </div>
                    <div class="payment-delivery row mx-0 align-items-center">
                        <a class="delivery-link" href="#" aria-label="new-post">
                            <svg class="payment-delivery__icon" width="83.72" height="30">
                                <use href="./images/sprite.svg#icon-new-post"></use>
                            </svg
                            >
                        </a>
                        <div
                            class="payment row mx-0 align-items-center justify-content-between"
                        >
                            <a class="payment__link d-inline-block" href="#" aria-label="visa">
                                <img src="./images/footer/visa.png" alt="" width="53" height="30"
                                /></a>
                            <a class="payment__link d-inline-block" href="#" aria-label="mastercard">
                                <img
                                    src="./images/footer/master-card.png"
                                    alt=""
                                    width="53"
                                    height="30"
                                /></a>
                            <a class="payment__link d-inline-block" href="#" aria-label="maestro">
                                <img src="./images/footer/maestro.png" alt="" width="53" height="30"
                                /></a>
                            <a class="payment__link d-inline-block" href="#" aria-label="paypal">
                                <img src="./images/footer/paypal.png" alt="" width="53" height="30"
                                /></a>
                        </div>
                    </div>
                </div>
                <div class="column-about col-lg-6 px-0">
                    <div class="row mx-0 ">
                        <div class="col-12 col-lg-4 px-0">
                            <div class="footer-title">Каталог</div>
                            <div class="d-flex flex-column">
                                <a href="#" class="column-about__link d-inline-block">Ноутбуки</a>
                                <a href="#" class="column-about__link d-inline-block">Планшеты</a>
                                <a href="#" class="column-about__link d-inline-block"
                                >Аксессуары для планшетов и <br> электронных книг</a
                                >
                                <a href="#" class="column-about__link d-inline-block">Кабели и переходники</a>
                                <a href="#" class="column-about__link d-inline-block">Сумки для ноутбуков</a>
                                <a href="#" class="column-about__link d-inline-block">Автотовары</a>
                                <a href="#" class="column-about__link d-inline-block">Сантехника</a>
                                <a href="#" class="column-about__link d-inline-block">Ремонт</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 px-0">
                            <div class="footer-title">Клиентам</div>
                            <div class="d-flex flex-column">
                                <a href="#" class="column-about__link d-inline-block"
                                >Политика конфиденциальности</a
                                >
                                <a href="#" class="column-about__link d-inline-block">Доставка и оплата</a>
                                <a href="#" class="column-about__link d-inline-block">Способы оплаты</a>
                                <a href="#" class="column-about__link d-inline-block">Гарантия</a>
                                <a href="#" class="column-about__link d-inline-block">Контакты</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 hotline px-0">
                            <div class="footer-title">
                                Горячая линия
                            </div>
                            <div class="d-flex flex-column">
                                <a class="hotline__link d-inline-block" href="tel:0800000000"
                                >0 800 000 000</a
                                >
                                <a class="hotline__link d-inline-block" href="tel:+380680000000"
                                >+38 068 000 00 00</a
                                >
                                <a class="hotline__link d-inline-block" href="tel:+380990000000"
                                >+38 099 000 00 00</a
                                >
                                <a class="hotline__link d-inline-block" href="tel:+380960000000"
                                >+38 096 000 00 00</a
                                >
                            </div>
                        </div>
                        <button class=""></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom container px-0">
            <div class=" footer-bottom__content row mx-0 align-items-center justify-content-between">
                <p class="footer-bottom__copyright">2021 © Wezom Practice</p>
                <p class="footer-bottom__website">
                    Разработка
                    <span>\\ Wezom</span>
                </p>
            </div>
        </div>
    </footer>
@endsection
