<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Частный вебмастер Иван Плотников | разработка сайтов под заказ</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/fonts/Montserrat/stylesheet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/libs/animatecss/animate.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>
    <div class="wrapper">

        <header>
            <div class="header-wrapper">
                <div class="header-wrap">
                    <div class="menu-burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="popup-menu">
                        <div class="popup-menu__nav">
                            <ul class="popup-menu__ul">
                                <li><a href="#">Главная</a></li>
                                <li><a href="#">Портфолио</a></li>
                                <li><a href="#">Рассчитать стоимость сайта</a></li>
                                <li><a href="#">Подать заявку</a></li>
                                <li><a href="#">О себе</a></li>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                            <div class="popup-menu__closer">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="regular-menu">
                        <nav>
                            <ul id="menu">
                                <li data-menuanchor="top"><a href="#top">Главная</a></li>
                                <li data-menuanchor="portfolio"><a href="#portfolio">Портфолио</a></li>
                                <li data-menuanchor="advantages"><a href="#advantages">Преимущества</a></li>
                                <li data-menuanchor="reviews"><a href="#reviews">Отзывы</a></li>
                                <li data-menuanchor="technology"><a href="#technology">Технологии</a></li>
                                <li data-menuanchor="contacts"><a href="#contacts">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div id="fullpdage">
            <!-- 1-ый экран - top-banner -->
            <div class="screen__item top-block section" data-anchor="top">
                <div class="top-banner">
                    <div class="top-banner__text">
                        <span class="top-banner__hello animate__animated animate__fadeInLeft">
                            Приветствую! <br> Меня зовут Иван.
                        </span>
                        <div class="top-banner__desc1_2 animate__animated animate__fadeInRight">
                            <span class="top-banner__desc1">
                                Я - частный вебмастер.
                            </span>
                            <span class="top-banner__desc2">
                                Создаю уникальные эффектные сайты.<br>
                            </span>
                            <span class="top-banner__desc3">Реализую верстку по макетам, а также устанавливаю её на CMS WordPress.</span>
                        </div>
                    </div>
                    <div class="top-banner__img-bg parallax" data-offset="30">
                        <picture>
                            <source srcset="./assets/images/zakazat-sajt.webp 1x">
                            <img src="./assets/images/zakazat-sajt.png">
                        </picture>
                    </div>
                    <div class="top-banner__img parallax" data-offset="60">
                        <picture>
                            <source srcset="./assets/images/img-03.webp 1x">
                            <img src="./assets/images/img-03.png" alt="top-banner">
                        </picture>
                    </div>
                    <div class="top-banner__line animate__animated animate__bounce animate__delay-1s animate__repeat-2"></div>
                </div>
            </div>

            <!-- Мое портфолио -->
            <div class="screen__item portfolio-block section" data-anchor="block2">
                <div class="h2-wrapper">
                    <h2>Мое портфолио</h2>
                </div>
                <div class="container">
                    <div class="container-wrapper">
                        <div class="slider-portfolio swiper">
                            <div class="slider-portfolio-wrapper swiper-wrapper">
                                <div class="slider-portfolio__item swiper-slide">
                                    <div class="slider-portfolio__item-wrapper">

                                        <div class="portfolio__item-bg">
                                            <div class="portfolio__item-bg-wrapper">
                                                <picture>
                                                    <!-- <source srcset="./assets/images/wellore.webp 1x"> -->
                                                    <img src="./assets/images/projects/00086-markup-Atlant-Gaz-1 1.png" alt="">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="portfolio__item-front">
                                            <picture>
                                                <!-- <source srcset="./assets/images/wellore.webp 1x"> -->
                                                <img src="./assets/images/projects/00086-markup-Atlant-Gaz-1 1.png" alt="">
                                            </picture>
                                            <span class="portfolio__item-btn">подробнее</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="slider-portfolio__item swiper-slide">
                                    <div class="slider-portfolio__item-wrapper">

                                        <div class="portfolio__item-bg">
                                            <div class="portfolio__item-bg-wrapper">
                                                <picture>
                                                    <source srcset="./assets/images/wellore.webp 1x">
                                                    <img src="./assets/images/wellore.png" alt="">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="portfolio__item-front">
                                            <picture>
                                                <source srcset="./assets/images/wellore.webp 1x">
                                                <img src="./assets/images/wellore.png" alt="">
                                            </picture>
                                            <span class="portfolio__item-btn">подробнее</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="slider-portfolio__item swiper-slide">
                                    <div class="slider-portfolio__item-wrapper">

                                        <div class="portfolio__item-bg">
                                            <div class="portfolio__item-bg-wrapper">
                                                <picture>
                                                    <source srcset="./assets/images/wellore.webp 1x">
                                                    <img src="./assets/images/wellore.png" alt="">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="portfolio__item-front">
                                            <picture>
                                                <source srcset="./assets/images/wellore.webp 1x">
                                                <img src="./assets/images/wellore.png" alt="">
                                            </picture>
                                            <span class="portfolio__item-btn">подробнее</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="slider-portfolio__item swiper-slide">
                                    <div class="slider-portfolio__item-wrapper">

                                        <div class="portfolio__item-bg">
                                            <div class="portfolio__item-bg-wrapper">
                                                <picture>
                                                    <source srcset="./assets/images/wellore.webp 1x">
                                                    <img src="./assets/images/wellore.png" alt="">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="portfolio__item-front">
                                            <picture>
                                                <source srcset="./assets/images/wellore.webp 1x">
                                                <img src="./assets/images/wellore.png" alt="">
                                            </picture>
                                            <span class="portfolio__item-btn">подробнее</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="slider-portfolio__item swiper-slide">
                                    <div class="slider-portfolio__item-wrapper">

                                        <div class="portfolio__item-bg">
                                            <div class="portfolio__item-bg-wrapper">
                                                <picture>
                                                    <source srcset="./assets/images/wellore.webp 1x">
                                                    <img src="./assets/images/wellore.png" alt="">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="portfolio__item-front">
                                            <picture>
                                                <source srcset="./assets/images/wellore.webp 1x">
                                                <img src="./assets/images/wellore.png" alt="">
                                            </picture>
                                            <span class="portfolio__item-btn">подробнее</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="slider-portfolio__item swiper-slide">
                                    <div class="slider-portfolio__item-wrapper">

                                        <div class="portfolio__item-bg">
                                            <div class="portfolio__item-bg-wrapper">
                                                <picture>
                                                    <source srcset="./assets/images/wellore.webp 1x">
                                                    <img src="./assets/images/wellore.png" alt="">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="portfolio__item-front">
                                            <picture>
                                                <source srcset="./assets/images/wellore.webp 1x">
                                                <img src="./assets/images/wellore.png" alt="">
                                            </picture>
                                            <span class="portfolio__item-btn">подробнее</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Преимущества частного вебмастера  -->
            <div class="screen__item advantages-block section" data-anchor="advantages">
                <div class="h2-wrapper">
                    <h2>Преимущества частного вебмастера</h2>
                </div>
                <div class="container">
                    <div class="advantages">
                        <div class="advantages__item">
                            <div class="advantages__item-first">
                                Дешевле, чем у веб-студий и компаний
                            </div>
                            <div class="advantages__item-second">
                                Описание почему
                            </div>
                        </div>
                        <div class="advantages__item">
                            <div class="advantages__item-first">
                                Никто не перекладывает ответственность
                            </div>
                            <div class="advantages__item-second">
                                Так как я работаю один, то не на кого перекладывать
                            </div>
                        </div>
                        <div class="advantages__item">
                            <div class="advantages__item-first">
                                Гибкость и индивидуальный подход
                            </div>
                            <div class="advantages__item-second">
                                Описание почему
                            </div>
                        </div>
                        <div class="advantages__item">
                            <div class="advantages__item-first">
                                Вовлеченность в качество работы
                            </div>
                            <div class="advantages__item-second">
                                Описание почему
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Отзывы  -->
            <div class="screen__item reviews-block section" data-anchor="reviews">
                <div class="h2-wrapper">
                    <h2>Отзывы</h2>
                </div>
                <div class="container">
                    <div class="reviews-slider">
                        <div class="reviews-slider-wrapper">
                            <div class="reviews-slider__item">
                                <div class="reviews-slider__item-bg" data-bg-img="./assets/images/image1.png">
                                    <div class="reviews-slider__item-body">
                                        <span class="reviews-slider__item-img">
                                            <img src="./assets/images/image1.png" alt="">
                                        </span>
                                        <span class="reviews-slider__item-link">
                                            Ссылка на источник
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-slider__item">
                                <div class="reviews-slider__item-bg" data-bg-img="./assets/images/image1.png">
                                    <div class="reviews-slider__item-body">
                                        <span class="reviews-slider__item-img">
                                            <img src="./assets/images/image1.png" alt="">
                                        </span>
                                        <span class="reviews-slider__item-link">
                                            Ссылка на источник
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-slider__item">
                                <div class="reviews-slider__item-bg" data-bg-img="./assets/images/image1.png">
                                    <div class="reviews-slider__item-body">
                                        <span class="reviews-slider__item-img">
                                            <img src="./assets/images/image1.png" alt="">
                                        </span>
                                        <span class="reviews-slider__item-link">
                                            Ссылка на источник
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-slider__item">
                                <div class="reviews-slider__item-bg" data-bg-img="./assets/images/image1.png">
                                    <div class="reviews-slider__item-body">
                                        <span class="reviews-slider__item-img">
                                            <img src="./assets/images/image1.png" alt="">
                                        </span>
                                        <span class="reviews-slider__item-link">
                                            Ссылка на источник
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-slider__item">
                                <div class="reviews-slider__item-bg" data-bg-img="./assets/images/image1.png">
                                    <div class="reviews-slider__item-body">
                                        <span class="reviews-slider__item-img">
                                            <img src="./assets/images/image1.png" alt="">
                                        </span>
                                        <span class="reviews-slider__item-link">
                                            Ссылка на источник
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-slider__item">
                                <div class="reviews-slider__item-bg" data-bg-img="./assets/images/image1.png">
                                    <div class="reviews-slider__item-body">
                                        <span class="reviews-slider__item-img">
                                            <img src="./assets/images/image1.png" alt="">
                                        </span>
                                        <span class="reviews-slider__item-link">
                                            Ссылка на источник
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-slider__item">
                                <div class="reviews-slider__item-bg" data-bg-img="./assets/images/image1.png">
                                    <div class="reviews-slider__item-body">
                                        <span class="reviews-slider__item-img">
                                            <img src="./assets/images/image1.png" alt="">
                                        </span>
                                        <span class="reviews-slider__item-link">
                                            Ссылка на источник
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Мои технологии  -->
            <div class="screen__item technology-block section" data-anchor="technology">
                <div class="h2-wrapper">
                    <h2>Мои технологии</h2>
                </div>
                <div class="container">
                    <div class="technology">
                        <div class="technology-slider">
                            <div class="technology-slider__item">
                                <div class="technology-slider__item-wrapper">
                                    <div class="technology-slider__item-front">
                                        <img src="./assets/images/html.png" alt="">
                                    </div>
                                    <div class="technology-slider__item-back">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nam optio sequi id itaque perspiciatis dolorum ut, ullam ipsam nostrum ipsum obcaecati animi quisquam numquam! Corrupti obcaecati vitae aperiam recusandae!
                                    </div>
                                </div>
                            </div>
                            <div class="technology-slider__item">
                                <div class="technology-slider__item-wrapper">
                                    <div class="technology-slider__item-front">
                                        <img src="./assets/images/css.png" alt="">
                                    </div>
                                    <div class="technology-slider__item-back">
                                        <p>
                                            CSS (Cascading Style Sheets) — язык таблиц стилей, который позволяет прикреплять стиль (например, шрифты и цвет) к структурированным документам.
                                        </p>
                                        <p>
                                            Обычно CSS-стили используются для создания и изменения стиля элементов веб-страниц и пользовательских интерфейсов, написанных на языке HTML.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="technology-slider__item">
                                <div class="technology-slider__item-wrapper">
                                    <div class="technology-slider__item-front">
                                        <img src="./assets/images/js.png" alt="">
                                    </div>
                                    <div class="technology-slider__item-back">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nam optio sequi id itaque perspiciatis dolorum ut, ullam ipsam nostrum ipsum obcaecati animi quisquam numquam! Corrupti obcaecati vitae aperiam recusandae!
                                    </div>
                                </div>
                            </div>
                            <div class="technology-slider__item">
                                <div class="technology-slider__item-wrapper">
                                    <div class="technology-slider__item-front">
                                        <img src="./assets/images/php.png" alt="">
                                    </div>
                                    <div class="technology-slider__item-back">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nam optio sequi id itaque perspiciatis dolorum ut, ullam ipsam nostrum ipsum obcaecati animi quisquam numquam! Corrupti obcaecati vitae aperiam recusandae!
                                    </div>
                                </div>
                            </div>
                            <div class="technology-slider__item">
                                <div class="technology-slider__item-wrapper">
                                    <div class="technology-slider__item-front">
                                        <img src="./assets/images/wordpress.png" alt="">
                                    </div>
                                    <div class="technology-slider__item-back">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nam optio sequi id itaque perspiciatis dolorum ut, ullam ipsam nostrum ipsum obcaecati animi quisquam numquam! Corrupti obcaecati vitae aperiam recusandae!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="technology-control">
                            <span class="technology-control__dot-item"></span>
                            <span class="technology-control__dot-item"></span>
                            <span class="technology-control__dot-item"></span>
                            <span class="technology-control__dot-item"></span>
                            <span class="technology-control__dot-item"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Контакты  -->
            <div class="screen__item contacts-block section" data-anchor="contacts">
                <div class="h2-wrapper">
                    <h2>Контакты</h2>
                </div>
                <div class="container">
                    <div class="container-wrapper">
                        <div class="contacts-feedback">
                            <div class="contacts">
                                <div class="contacts__title">
                                    Часы работы: 24/7
                                </div>
                                <div class="contacts-item-wrapper">
                                    <div class="contacts__item">
                                        <a href="#">
                                            <div class="contacts__item-icon">
                                                <img src="./assets/images/contacts/free-icon-telegram-3670070.svg" alt="">
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="contacts__item-text">Телеграм</div>
                                        </a>
                                    </div>
                                    <div class="contacts__item">
                                        <a href="#">
                                            <div class="contacts__item-icon">
                                                <img src="./assets/images/contacts/free-icon-whatsapp-4494494.svg" alt="">
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="contacts__item-text">WhatsApp</div>
                                        </a>
                                    </div>
                                    <div class="contacts__item">
                                        <a href="#">
                                            <div class="contacts__item-icon">
                                                <img src="./assets/images/contacts/free-icon-mail-6541218.svg" alt="">
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="contacts__item-text">ivan@ivanplotnikov.pro</div>
                                        </a>
                                    </div>
                                    <div class="contacts__item">
                                        <a href="#">
                                            <div class="contacts__item-icon">
                                                <img src="./assets/images/contacts/free-icon-phone-call-455705.svg" alt="">
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="contacts__item-text">+7 925 624 74 67</div>
                                        </a>
                                    </div>
                                    <div class="contacts__item">
                                        <a href="#">
                                            <div class="contacts__item-icon">
                                                <img src="./assets/images/contacts/kwork.svg" alt="">
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="contacts__item-text">Kwork</div>
                                        </a>
                                    </div>
                                    <div class="contacts__item">
                                        <a href="#">
                                            <div class="contacts__item-icon">
                                                <img src="./assets/images/contacts/free-icon-github-536452.svg" alt="">
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="contacts__item-text">Github</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-form feedback-form-4">
                                <form id="feedback-form-4">
                                    <div class="feedback-form__item">
                                        <span class="feedback-form__item-first">
                                            Или можете написать мне через эту форму:
                                        </span>
                                    </div>
                                    <div class="feedback-form__item">
                                        <input class="" type="text" name="name" placeholder="Ваше имя">
                                    </div>
                                    <div class="feedback-form__item">
                                        <input type="tel" name="phone" placeholder="Ваш телефон">
                                    </div>
                                    <div class="feedback-form__item">
                                        <textarea name="msg" placeholder="Сообщение (как с вами связаться можете указать и здесь)"></textarea>
                                    </div>
                                    <div class="feedback-form__item">
                                        <input type="submit" value="Отправить">
                                    </div>
                                    <div class="feedback-form__item">
                                        <span class="feedback-form__item-second">
                                            Свяжусь с вами в ближайшее время.
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Footer -->
                <footer>
                    <div class="footer-block">
                        <div class="regular-menu">
                            <nav>
                                <ul>
                                    <li><a href="#top">Главная</a></li>
                                    <li><a href="#portfolio">Портфолио</a></li>
                                    <li><a href="#reviews">Отзывы</a></li>
                                    <li><a href="#technology">Технологии</a></li>
                                    <li><a href="#contacts">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="copyright">
                            ivanplotnikov.pro © All rights reserved. 2023
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="./assets/scripts/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://sitehere.ru/examples/24.07.2015/js/jquery.fullPage.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./assets/scripts/script.js"></script>
    <script src="./assets/libs/wow/wow.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        // start slider-portfolio
        new Swiper('.slider-portfolio', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            effect: 'coverflow',
            loop: true,
            centeredSlides: true,
            slidesPerView: 3,
            initialSlide: 2,
            lazyLoading: true,
            lazyLoadingInPrevNext: true,
            speed: 700,
            coverflowEffect: {
                rotate: -10,
                stretch: 0,
                depth: 200,
                slideShadows: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            grabCursor: true,
        });
        // end slider-portfolio

        // start reviews
        $('.reviews-slider-wrapper').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<span class="reviews-control__prev"></span>',
            nextArrow: '<span class="reviews-control__next"></span>',
        })
        // end reviews

        $('.technology-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<span class="reviews-control__prev"></span>',
            nextArrow: '<span class="reviews-control__next"></span>',
        })

        $(document).ready(function() {
            $('#fullpdage').fullpage({
                anchors: ['top', 'portfolio', 'advantages', 'reviews', 'technology', 'contacts'],
                menu: '#menu',
                css3: true,
                scrollingSpeed: 700
            });
        });
    </script>
</body>

</html>