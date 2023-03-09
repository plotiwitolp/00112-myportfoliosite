<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Частный вебмастер Иван Плотников | разработка сайтов под заказ</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/fonts/Montserrat/stylesheet.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/libs/animatecss/animate.min.css">
</head>

<body>

    <!-- 1-ый экран - top-banner -->
    <div class="screen__item top-block">
        <header>
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
                        <ul>
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">Портфолио</a></li>
                            <li><a href="#">Рассчитать стоимость сайта</a></li>
                            <li><a href="#">Подать заявку</a></li>
                            <li><a href="#">О себе</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
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
                        Создаю уникальные эффекные сайты под заказ.
                    </span>
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
    <div class="screen__item portfolio-block">
        <div class="h2-wrapper">
            <h2>Мое портфолио</h2>
        </div>
        <div class="container">
            <div class="container-wrapper">
                <div class="slider-portfolio">
                    <div class="slider-portfolio__item">
                        <div class="portfolio__item-bg">
                            <picture>
                                <source srcset="./assets/images/wellore.webp 1x">
                                <img src="./assets/images/wellore.png" alt="">
                            </picture>
                        </div>

                        <div class="portfolio__item-front">
                            <picture>
                                <source srcset="./assets/images/wellore.webp 1x">
                                <img src="./assets/images/wellore.png" alt="">
                            </picture>
                        </div>
                        <span class="portfolio__item-btn">подробнее</span>
                    </div>
                    <!-- <div class="slider-portfolio__item">
                        <picture>
                            <img src="./assets/images/wellore.png" alt="" class="portfolio__item-bg">
                            <img src="./assets/images/wellore.png" alt="" class="portfolio__item-front">
                        </picture>
                        <span class="portfolio__item-btn">подробнее</span>
                    </div>
                    <div class="slider-portfolio__item">
                        <img src="./assets/images/wellore.png" alt="" class="portfolio__item-bg">
                        <img src="./assets/images/wellore.png" alt="" class="portfolio__item-front">
                        <span class="portfolio__item-btn">подробнее</span>
                    </div>
                    <div class="slider-portfolio__item">
                        <img src="./assets/images/wellore.png" alt="" class="portfolio__item-bg">
                        <img src="./assets/images/wellore.png" alt="" class="portfolio__item-front">
                        <span class="portfolio__item-btn">подробнее</span>
                    </div>
                    <div class="slider-portfolio__item">
                        <img src="./assets/images/wellore.png" alt="" class="portfolio__item-bg">
                        <img src="./assets/images/wellore.png" alt="" class="portfolio__item-front">
                        <span class="portfolio__item-btn">подробнее</span>
                    </div>
                    <div class="slider-portfolio__item">
                        <img src="./assets/images/wellore.png" alt="" class="portfolio__item-bg">
                        <img src="./assets/images/wellore.png" alt="" class="portfolio__item-front">
                        <span class="portfolio__item-btn">подробнее</span>
                    </div>
                    <div class="slider-portfolio__item">
                        <img src="./assets/images/wellore.png" alt="" class="portfolio__item-bg">
                        <img src="./assets/images/wellore.png" alt="" class="portfolio__item-front">
                        <span class="portfolio__item-btn">подробнее</span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Подать заявку -->
    <div class="screen__item timer-block">
        <div class="h2-wrapper">
            <h2>Подать заявку</h2>
        </div>
        <div class="container">
            <div class="container-wrapper">
                <div class="timer">
                    <div class="timer-top">
                        До окончания акции осталось:
                    </div>
                    <div class="timer-body">
                        <div class="timer-body-sector">
                            <div class="timer-body-sector__item">
                                <span class="timer-body__day timer-body__count">3</span>
                            </div>
                            <div class="timer-body__day timer-body__word">дня</div>
                        </div>
                        <div class="timer-body-sector">
                            <div class="timer-body-sector__item">
                                <span class="timer-body__hour timer-body__count">0</span>
                                <span class="timer-body__hour timer-body__count">2</span>
                            </div>
                            <div class="timer-body__hour timer-body__word">часа</div>
                        </div>
                        <div class="timer-body-sector">
                            <div class="timer-body-sector__item">
                                <span class="timer-body__min timer-body__count">4</span>
                                <span class="timer-body__min timer-body__count">2</span>
                            </div>
                            <div class="timer-body__min timer-body__word">минуты</div>
                        </div>
                        <div class="timer-body-sector">
                            <div class="timer-body-sector__item">
                                <span class="timer-body__sec timer-body__count">3</span>
                                <span class="timer-body__sec timer-body__count">7</span>
                            </div>
                            <div class="timer-body__sec timer-body__word">секунд</div>
                        </div>
                    </div>
                    <div class="timer-middle">
                        Успейте отправить заявку до окончания акции и получите скидку в размере 10%
                    </div>
                    <div class="timer-bottom">
                        С момента подачи заявки я вам отвечу в течении ближайшего времени и мы с вами обсудим детали заказа сайта.
                    </div>
                </div>
                <div class="feedback-form feedback-form-1">
                    <form id="feedback-form-1">
                        <div class="feedback-form__item">
                            <input class="" type="text" name="name" placeholder="Ваше имя">
                        </div>
                        <div class="feedback-form__item">
                            <input type="tel" name="phone" placeholder="Ваш телефон">
                        </div>
                        <div class="feedback-form__item">
                            <textarea name="msg" placeholder="Дополнительная информация"></textarea>
                        </div>
                        <div class="feedback-form__item">
                            <input type="submit" value="Подать заявку">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Расчет стоимости сайта -->
    <div class="screen__item calc-quiz-block">
        <div class="h2-wrapper">
            <h2>Расчет стоимости сайта</h2>
        </div>
        <div class="container">
            <div class="container-wrapper">
                <div class="calc-quiz">
                    <div class="calc-quiz-loading">
                        <span class="calc-quiz-loading__stripe"></span>
                    </div>
                    <div class="calc-quiz-slider">
                        <div class="calc-quiz-slider-wrapper">
                            <!-- ВОПРОС 1 -->
                            <div class="calc-quiz-slider__item">
                                <div class="calc-quiz-slider__item-title">Тип сайта</div>
                                <div class="calc-quiz-slider__item-body">
                                    <div class="calc-quiz-slider__point">
                                        <label for="site_vizitka">
                                            <input type="radio" name="site_type" id="site_vizitka">
                                            <span></span>
                                            <h3>Сайт-визитка</h3>
                                        </label>

                                        <span class="calc-quiz-slider__hint" data-hint="Пример подсказки 1">?</span>
                                    </div>
                                    <div class="calc-quiz-slider__point">
                                        <label for="landing">
                                            <input type="radio" name="site_type" id="landing">
                                            <span></span>
                                            <h3>Лендинг</h3>
                                        </label>
                                        <span class="calc-quiz-slider__hint" data-hint="Пример подсказки 2">?</span>
                                    </div>
                                    <div class="calc-quiz-slider__point">
                                        <label for="corporativniy_site">
                                            <input type="radio" name="site_type" id="corporativniy_site">
                                            <span></span>
                                            <h3>Корпоративный сайт</h3>
                                        </label>
                                        <span class="calc-quiz-slider__hint" data-hint="Пример подсказки 3">?</span>
                                    </div>
                                    <div class="calc-quiz-slider__point">
                                        <label for="site_catalog">
                                            <input type="radio" name="site_type" id="site_catalog">
                                            <span></span>
                                            <h3>Сайт-каталог</h3>
                                        </label>
                                        <span class="calc-quiz-slider__hint" data-hint="Пример подсказки 4">?</span>
                                    </div>
                                    <div class="calc-quiz-slider__point">
                                        <label for="internet_magazin">
                                            <input type="radio" name="site_type" id="internet_magazin">
                                            <span></span>
                                            <h3>Интернет-магазин</h3>
                                        </label>
                                        <span class="calc-quiz-slider__hint" data-hint="Пример подсказки 5">?</span>
                                    </div>
                                </div>
                            </div>

                            <!-- ВОПРОС 2 -->
                            <div class="calc-quiz-slider__item">
                                <div class="calc-quiz-slider__item-title">Количество страниц</div>
                                <div class="calc-quiz-slider__item-body">
                                    <div class="calc-quiz-slider__point">
                                        <label for="kolizhestvo_stranic">
                                            <input type="number" name="kolizhestvo_stranic" id="kolizhestvo_stranic" value="">
                                            <span></span>
                                            <h3>Количество страниц</h3>
                                        </label>
                                        <span class="calc-quiz-slider__hint" data-hint="Пример подсказки 6">?</span>
                                    </div>
                                </div>
                            </div>

                            <!-- ВОПРОС 3 -->
                            <div class="calc-quiz-slider__item">
                                <div class="calc-quiz-slider__item-title">Сложность дизайна</div>
                                <div class="calc-quiz-slider__item-body">
                                    <div class="calc-quiz-slider__point">
                                        <label for="complexity_1">
                                            <input type="radio" name="complexity" id="complexity_1">
                                            <span></span>
                                            <h3>Минималистичный. Эконом.</h3>
                                        </label>

                                        <span class="calc-quiz-slider__hint" data-hint="Пример подсказки 7">?</span>
                                    </div>
                                    <div class="calc-quiz-slider__point">
                                        <label for="complexity_2">
                                            <input type="radio" name="complexity" id="complexity_2">
                                            <span></span>
                                            <h3>По примеру сайтов-конкурентов (без анимаций и параллакса)</h3>
                                        </label>
                                        <span class="calc-quiz-slider__hint" data-hint="Пример подсказки 8">?</span>
                                    </div>
                                    <div class="calc-quiz-slider__point">
                                        <label for="complexity_3">
                                            <input type="radio" name="complexity" id="complexity_3">
                                            <span></span>
                                            <h3>По примеру сайтов-конкурентов (с анимациями, но без параллакса)</h3>
                                        </label>
                                        <span class="calc-quiz-slider__hint" data-hint="Пример подсказки 9">?</span>
                                    </div>
                                    <div class="calc-quiz-slider__point">
                                        <label for="complexity_4">
                                            <input type="radio" name="complexity" id="complexity_4">
                                            <span></span>
                                            <h3>По примеру сайтов-конкурентов (с анимациями, с параллаксом)</h3>
                                        </label>
                                        <span class="calc-quiz-slider__hint" data-hint="Пример подсказки 10">?</span>
                                    </div>
                                    <div class="calc-quiz-slider__point">
                                        <label for="complexity_5">
                                            <input type="radio" name="complexity" id="complexity_5">
                                            <span></span>
                                            <h3>Уникальный. Индивидуальный.</h3>
                                        </label>
                                        <span class="calc-quiz-slider__hint" data-hint="Пример подсказки 11">?</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="calc-quiz-slider-control">
                            <div class="calc-quiz-slider-control__prev">
                                Назад
                            </div>
                            <div class="calc-quiz-slider-control__next">
                                Далее
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-form feedback-form-2">
                    <form id="feedback-form-2">
                        <div class="feedback-form__item">
                            <div class="feedback-form__project-cost">
                                <span>Стоимость: </span>
                                <span>5400</span><span>рублей</span>
                            </div>
                        </div>
                        <div class="feedback-form__item">
                            <div class="feedback-form__project-time">
                                <span>Срок: </span>
                                <span>5</span><span>дней</span>
                            </div>
                        </div>
                        <div class="feedback-form__item">
                            <input class="" type="text" name="name" placeholder="Ваше имя">
                        </div>
                        <div class="feedback-form__item">
                            <input type="tel" name="phone" placeholder="Ваш телефон">
                        </div>
                        <div class="feedback-form__item">
                            <input type="email" name="email" placeholder="Ваш e-mail">
                        </div>
                        <div class="feedback-form__item">
                            <input type="submit" value="Заказать сайт">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- 5 шагов при разработке сайта.  -->
    <div class="screen__item steps-block">
        <div class="h2-wrapper">
            <h2>5 шагов при разработке сайта.</h2>
        </div>
        <div class="container">
            <div class="steps">
                <div class="steps-points">
                    <div class="steps-points__line"></div>
                    <div class="steps-points-dots">
                        <span class="steps-points-dots__item">1</span>
                        <span class="steps-points-dots__item">2</span>
                        <span class="steps-points-dots__item">3</span>
                        <span class="steps-points-dots__item">4</span>
                        <span class="steps-points-dots__item">5</span>
                    </div>
                </div>

                <div class="steps-desc">
                    <!-- Шаг 1 -->
                    <div class="steps-desc__item">
                        <div class="steps-desc__item-title">
                            Шаг 1. Составление технического задания (ТЗ)
                            <span class="steps-desc__item-title-shadow">
                                STEP 1
                            </span>
                        </div>
                        <div class="steps-desc__item-body">
                            <p>
                                Прежде чем приступить к разработке сайта, составляется ТЗ. В нем указывается: количество страниц на сайте, по сколько блоков будет на этих страницах, где они размещаются и какой должен быть в них контент.
                            </p>
                            <p>
                                Если у вас уже имеется готовый дизайн или макет, то это огромный плюс. Если этого нет, то ничего страшного, помогу вам сделать набросок в Figma по примеру хотябы нескольких похожих сайтов.
                            </p>
                            <p>
                                Набор действий:
                                Получаю от вас первый вариант ТЗ, либо составляем его вместе.
                                Разбиваем задание на несколько этапов и указываем сколько какая часть будет стоить.
                                Проверяем корректность ТЗ и всех условий.
                                Согласовываем и утверждаем.
                            </p>
                            <p>
                                В дальнейшем, если возникнут недочеты, то будем руководствоваться этим ТЗ.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Преимущества частного вебмастера  -->
    <div class="screen__item advantages-block">
        <div class="h2-wrapper">
            <h2>Преимущества частного вебмастера</h2>
        </div>
        <div class="container">
            <div class="advantages">
                <div class="advantages__item">
                    <span class="advantages__item-first">
                        Дешевле, чем у веб-студий и компаний
                    </span>
                    <span class="advantages__item-second">
                        Описание почему
                    </span>
                </div>
                <div class="advantages__item">
                    <span class="advantages__item-first">
                        Никто не перекладывает ответственность
                    </span>
                    <span class="advantages__item-second">
                        Так как я работаю один, то не на кого перекладывать
                    </span>
                </div>
                <div class="advantages__item">
                    <span class="advantages__item-first">
                        Гибкость и индивидуальный подход
                    </span>
                    <span class="advantages__item-second">
                        Описание почему
                    </span>
                </div>
                <div class="advantages__item">
                    <span class="advantages__item-first">
                        Вовлеченность в качество работы
                    </span>
                    <span class="advantages__item-second">
                        Описание почему
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Отзывы  -->
    <div class="screen__item reviews-block">
        <div class="h2-wrapper">
            <h2>Отзывы</h2>
        </div>
        <div class="container">
            <div class="reviews-slider">
                <div class="reviews-slider__item">
                    <div class="reviews-slider__item-bg" data-bg-img="./assets/images/отзыв с ссылкой.png">
                        <div class="reviews-slider__item-body">
                            <span class="reviews-slider__item-img">
                                <img src="./assets/images/отзыв с ссылкой.png" alt="">
                            </span>
                            <span class="reviews-slider__item-link">
                                Ссылка на источник
                            </span>
                        </div>
                    </div>
                </div>
                <div class="reviews-slider__item">
                    <div class="reviews-slider__item-bg" data-bg-img="./assets/images/отзыв с ссылкой.png">
                        <div class="reviews-slider__item-body">
                            <span class="reviews-slider__item-img">
                                <img src="./assets/images/отзыв с ссылкой.png" alt="">
                            </span>
                            <span class="reviews-slider__item-link">
                                Ссылка на источник
                            </span>
                        </div>
                    </div>
                </div>
                <div class="reviews-slider__item">
                    <div class="reviews-slider__item-bg" data-bg-img="./assets/images/отзыв с ссылкой.png">
                        <div class="reviews-slider__item-body">
                            <span class="reviews-slider__item-img">
                                <img src="./assets/images/отзыв с ссылкой.png" alt="">
                            </span>
                            <span class="reviews-slider__item-link">
                                Ссылка на источник
                            </span>
                        </div>
                    </div>
                </div>
                <div class="reviews-slider__item">
                    <div class="reviews-slider__item-bg" data-bg-img="./assets/images/отзыв с ссылкой.png">
                        <div class="reviews-slider__item-body">
                            <span class="reviews-slider__item-img">
                                <img src="./assets/images/отзыв с ссылкой.png" alt="">
                            </span>
                            <span class="reviews-slider__item-link">
                                Ссылка на источник
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews-control">
                <span class="reviews-control__prev"></span>
                <span class="reviews-control__next"></span>
            </div>
        </div>
    </div>

    <!-- Мои технологии  -->
    <div class="screen__item technology-block">
        <div class="h2-wrapper">
            <h2>Мои технологии</h2>
        </div>
        <div class="container">
            <div class="technology">
                <div class="technology-slider">
                    <div class="technology-slider__item">
                        <div class="technology-slider__item-front">
                            <img src="./assets/images/html.png" alt="">
                        </div>
                        <div class="technology-slider__item-back">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nam optio sequi id itaque perspiciatis dolorum ut, ullam ipsam nostrum ipsum obcaecati animi quisquam numquam! Corrupti obcaecati vitae aperiam recusandae!
                        </div>
                    </div>
                    <div class="technology-slider__item">
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
                    <div class="technology-slider__item">
                        <div class="technology-slider__item-front">
                            <img src="./assets/images/js.png" alt="">
                        </div>
                        <div class="technology-slider__item-back">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nam optio sequi id itaque perspiciatis dolorum ut, ullam ipsam nostrum ipsum obcaecati animi quisquam numquam! Corrupti obcaecati vitae aperiam recusandae!
                        </div>
                    </div>
                    <div class="technology-slider__item">
                        <div class="technology-slider__item-front">
                            <img src="./assets/images/php.png" alt="">
                        </div>
                        <div class="technology-slider__item-back">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nam optio sequi id itaque perspiciatis dolorum ut, ullam ipsam nostrum ipsum obcaecati animi quisquam numquam! Corrupti obcaecati vitae aperiam recusandae!
                        </div>
                    </div>
                    <div class="technology-slider__item">
                        <div class="technology-slider__item-front">
                            <img src="./assets/images/wordpress.png" alt="">
                        </div>
                        <div class="technology-slider__item-back">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nam optio sequi id itaque perspiciatis dolorum ut, ullam ipsam nostrum ipsum obcaecati animi quisquam numquam! Corrupti obcaecati vitae aperiam recusandae!
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

    <!-- Часто Задаваемые Вопросы  -->
    <div class="screen__item faq-block">
        <div class="h2-wrapper">
            <h2>Часто Задаваемые Вопросы</h2>
        </div>
        <div class="container">
            <div class="container-wrapper">
                <div class="faq">
                    <div class="faq-item">
                        <div class="faq-item-wrap">
                            <span class="faq-item__question">
                                Кто будет являться владельцем сайта?
                            </span>
                            <span class="faq-item__toggle">+</span>
                        </div>
                        <div class="faq-item-wrap">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, sapiente! Rem accusamus suscipit molestiae corrupti sit aut debitis amet, dicta maiores iure, facilis itaque quod ullam magnam asperiores quaerat voluptate?
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-wrap">
                            <span class="faq-item__question">
                                Я в другом городе, как мы будем работать?
                            </span>
                            <span class="faq-item__toggle">+</span>
                        </div>
                        <div class="faq-item-wrap">
                            Я работаю по всему миру. Все вопросы оперативно решаю по электронной почте, телефону или в мессенджерах, а если захотите увидеться - можно организовать видеоконференцию (либо, если вы в г. Батуми (Грузия) можно будет и встретиться).
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-wrap">
                            <span class="faq-item__question">
                                Как производится оплата?
                            </span>
                            <span class="faq-item__toggle">+</span>
                        </div>
                        <div class="faq-item-wrap">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo atque quia quis a ad itaque rerum magnam. Quo quasi nihil aliquid, praesentium dolor blanditiis iste sit, ex optio amet mollitia!
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-wrap">
                            <span class="faq-item__question">
                                Сайт будет сделан на конструкторе?
                            </span>
                            <span class="faq-item__toggle">+</span>
                        </div>
                        <div class="faq-item-wrap">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo atque quia quis a ad itaque rerum magnam. Quo quasi nihil aliquid, praesentium dolor blanditiis iste sit, ex optio amet mollitia!
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-wrap">
                            <span class="faq-item__question">
                                Сколько нужно платить ежемесячно, чтобы сайт работал?
                            </span>
                            <span class="faq-item__toggle">+</span>
                        </div>
                        <div class="faq-item-wrap">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo atque quia quis a ad itaque rerum magnam. Quo quasi nihil aliquid, praesentium dolor blanditiis iste sit, ex optio amet mollitia!
                        </div>
                    </div>
                </div>
                <div class="feedback-form feedback-form-3">
                    <form id="feedback-form-3">
                        <div class="feedback-form__item">
                            <span class="feedback-form__item-first">
                                Остались вопросы?
                            </span>
                        </div>
                        <div class="feedback-form__item">
                            <span class="feedback-form__item-second">
                                Напишите мне:
                            </span>
                        </div>
                        <div class="feedback-form__item">
                            <input class="" type="text" name="name" placeholder="Ваше имя">
                        </div>
                        <div class="feedback-form__item">
                            <input type="tel" name="phone" placeholder="Ваш телефон">
                        </div>
                        <div class="feedback-form__item">
                            <textarea name="msg" placeholder="Сообщение"></textarea>
                        </div>
                        <div class="feedback-form__item">
                            <input type="submit" value="Получить консультацию">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Контакты  -->
    <div class="screen__item contacts-block">
        <div class="h2-wrapper">
            <h2>Контакты</h2>
        </div>
        <div class="container">
            <div class="container-wrapper">
                <div class="contacts">
                    <div class="contacts__title">
                        Часы работы: 24/7
                    </div>
                    <div class="contacts-item-wrapper">
                        <div class="contacts__item">
                            <div class="contacts__item-icon">
                                <img src="./assets/images/contacts/free-icon-telegram-3670070.svg" alt="">
                            </div>
                            <div class="contacts__item-text">Телеграм</div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__item-icon">
                                <img src="./assets/images/contacts/free-icon-telegram-3670070.svg" alt="">
                            </div>
                            <div class="contacts__item-text">Телеграм</div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__item-icon">
                                <img src="./assets/images/contacts/free-icon-whatsapp-4494494.svg" alt="">
                            </div>
                            <div class="contacts__item-text">WhatsApp</div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__item-icon">
                                <img src="./assets/images/contacts/free-icon-mail-6541218.svg" alt="">
                            </div>
                            <div class="contacts__item-text">ivan@ivanplotnikov.pro</div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__item-icon">
                                <img src="./assets/images/contacts/free-icon-telegram-3670070.svg" alt="">
                            </div>
                            <div class="contacts__item-text">+7 925 624 74 67</div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__item-icon">
                                <img src="./assets/images/contacts/kwork.svg" alt="">
                            </div>
                            <div class="contacts__item-text">Kwork</div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__item-icon">
                                <img src="./assets/images/contacts/free-icon-github-536452.svg" alt="">
                            </div>
                            <div class="contacts__item-text">Github</div>
                        </div>
                    </div>
                </div>
                <div class="feedback-form feedback-form-4">
                    <form id="feedback-form-4">
                        <div class="feedback-form__item">
                            <span class="feedback-form__item-first">
                                Также можете написать мне через форму обратной связи:
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
                                Свяжусь с вами в ближайшее рабочее время.
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
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">Портфолио</a></li>
                        <li><a href="#">Рассчитать стоимость сайта</a></li>
                        <li><a href="#">Подать заявку</a></li>
                        <li><a href="#">О себе</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <div class="copyright">
                ivanplotnikov.pro © All rights reserved. 2023
            </div>
        </div>
    </footer>

    <script src="./assets/scripts/jquery-3.6.0.min.js"></script>
    <script src="./assets/scripts/script.js"></script>
    <script src="./assets/libs/wow/wow.min.js"></script>
</body>

</html>