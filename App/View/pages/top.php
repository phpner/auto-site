<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords?>">
    <title><?php echo $title?></title>

    <link rel="shortcut icon" href="../images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css">
    <link rel="stylesheet" href="/public/fonts/gotham-pro/GothamPro-font.css">
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="stylesheet" href="/public/css/mycss.css">
</head>
<body>

<div class="cap"></div>
<!--<div class="popup popup-info">
    <div class="popup__form"><span class="ion-ios-close-empty popup__button-close button-close-popup"></span>
        <p class="section-title popup__title">ИНФОРМАЦИЯ
            <br>О ЮРИДИЧЕСКОМ ЛИЦЕ</p>
        <div class="popup__text">
            <p class="popup__text-line"><span class="text">ООО "МРОАД"</span></p>
            <p class="popup__text-line"><span class="text">ОГРН 1175275060861</span></p>
            <p class="popup__text-line"><span class="text">ИНН 5262350925</span></p>
        </div>
    </div>
</div>-->
<div class="popup popup-conditions">
    <div class="popup__form"><span class="ion-ios-close-empty popup__button-close button-close-popup"></span>
        <p class="section-title popup__title">УСЛОВИЯ ГАРАНТИИ</p>
        <div class="popup__text">
            <ul class="list">
                <li class="list__item list__item_circle">Сфотографировать чек</li>
                <li class="list__item list__item_circle">Сфотографировать одометр перед установкой</li>
                <li class="list__item list__item_circle">Сфотографировать уже установленные бафферы (1 баффер=1 фотография)</li>
                <li class="list__item list__item_circle">Сфотографировать автомобиль (2 фотографии)</li>
                <li class="list__item list__item_circle">Отправить все фотографии на наш Email mroad@бафферы.рф</li>
            </ul>
            <p class="popup__text-line"><span class="text">После отправки всех данных Вы официально встаете на гарантию. (по почте придет подтверждение)</span></p>
            <p class="popup__text-line"><span class="text">Гарантия действует при неумышленном разрушении баффера. При возникновении гарантийной ситуации нужно отправить нам по почте разрушившийся баффер.</span></p>
        </div>
    </div>
</div>
<div class="popup popup-order">
    <form class="form card popup__form popup__form_order"><span class="ion-ios-close-empty form__button-close button-close-popup"></span>
        <p class="section-title section-title_subtitle popup-order__title"><span class="text text_allotted">Закажите пневмобаллоны</span></p>
        <p class="text">Наш менеджер свяжется с вами в течении 15 минут</p>
        <div class="form__text-fields">
            <label class="form__text-field-wrap">
                <input class="form__text-field" type="text" name="name" placeholder="Ваше имя:" />
            </label>
            <label class="form__text-field-wrap">
                <input class="form__text-field" type="text" name="phone" placeholder="Ваш телефон:" />
            </label>
            <label class="form__text-field-wrap" mode="pick_up">
                <input class="form__text-field" type="text" name="comment" placeholder="Ваша марка и модель:" />
            </label>
        </div>
        <div class="form__button-wrap">
            <button class="button button_buy form__button" type="submit">Купить</button>
        </div>
        <input type="hidden" attr="hidden" name="mainProduct" value="Пневмобаллон">
        <input type="hidden" attr="hidden" name="mainProductPrice" value="1990">
    </form>
</div>
<!--div of body-wrap-->
<div class="body-wrap">
    <!--menu-->
    <section class="section section_menu">
        <div class="section__wrapper section__wrapper_menu">
            <nav class="menu">
                <a class="logo logo_menu" href="/"></a> <span id="plus">+</span>
                <img class="logo-2" src="/public/images/logo-2.jpg" alt="">
                <div class="menu__header">
                    <button class="menu__toggle" toggle="false"><span class="menu__icon-bar"></span><span class="menu__icon-bar"></span><span class="menu__icon-bar"></span></button>
                </div>
                <div class="menu__items-wrap">
                    <ul class="menu__items">
                        <li class="menu__item"><a class="menu__link" href="#" block="4">Что такое пневмобаллоны</a></li>
                        <li class="menu__item"><a class="menu__link" href="#" block="11">Преимущества</a></li>
                        <li class="menu__item"><a class="menu__link" href="#" block="7">Установка</a></li>
                        <li class="menu__item"><a class="menu__link" href="#" block="8">Комплектация</a></li>
                        <li class="menu__item menu__item_last">
                            <p class="phone"><span class="ion-ios-telephone-outline phone__icon"></span><span class="phone__phone-number">+7 (812) 602-78-01</span></p>
                        </li>
                    </ul>
                    <div class="menu__bottom-text">
                        <div class="menu__phone">
                            <p class="phone"><span class="ion-ios-telephone-outline phone__icon phone__icon_menu"></span><span class="phone__phone-number">+7 (812) 602-78-01</span></p>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!--menu-->
    <!--header-->
    <section class="section section_block-1">
        <div class="section__wrapper section__wrapper_mobile-wrap">
            <div class="section__content">
                <div class="block-1">
                    <div class="block-1-content">
                        <div class="block-1-content__title">
                            <h1><?php echo $h1 ?></h1>
                            <?php if ($description2){?>
                                <p class="descrip-footer">
                                    <?php echo $description2; ?>
                                </p>
                            <?php }?>
                            - ЭТО <span class="text text_allotted text_allotted-background">УВЕЛИЧЕНИЕ КЛИРЕНСА</span>С ВОЗМОЖНОСТЬЮ РЕГУЛИРОВКИ И НОВЫЙ УРОВЕНЬ КОМФОРТА НА ПРЕЖНЕМ АВТОМОБИЛЕ</div>
                        <div class="block-1-content__image block-1-content__image_mobile"></div>
                        <ul class="list block-1-content__list">
                            <li class="list__item list__item_arrow">
                                <p class="list-item-text">Увеличение клиренса на <span class="text text_allotted">от 3 до 7 см</span></p>
                            </li>
                            <li class="list__item list__item_arrow">
                                <p class="list-item-text">Повышает <span class="text text_allotted">грузоподъемность</span></p>
                            </li>
                            <li class="list__item list__item_arrow">
                                <p class="list-item-text">Срок службы от <span class="text text_allotted">100 тыс. км</span></p>
                            </li>
                            <li class="list__item list__item_arrow">
                                <p class="list-item-text">Защищают от <span class="text text_allotted">пробоев подвески</span></p>
                            </li>
                            <li class="list__item list__item_arrow">
                                <p class="list-item-text">Плавный, собранный <span class="text text_allotted">ход автомобиля</span></p>
                            </li>
                        </ul>
                        <div class="price-and-button block-1-content__price-and-button">
                            <div class="price-and-button__price"><span class="price"><span class="price__old">от 2900 РУБ</span></span>
                            </div>
                            <div class="price-and-button__button">
                                <button class="button button_buy button-show-popup-order">Заказать</button>
                            </div>
                        </div>
                    </div>
                    <div class="block-1__ballon"><img class="block-1__ballon-image" src="/public/images/image-44.png" alt="" role="presentation" /></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end header-->

    <?php
require_once 'footer.php';
?>