<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>{!! __('main') !!}</title>
    <link rel="stylesheet" href="/libs/swiper/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css"
          integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="/libs/countrySelect.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"
            charset="utf-8"></script>
    <script src="http://ajax.microsoft.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js" type="text/javascript"
            charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"
            integrity="sha512-+gShyB8GWoOiXNwOlBaYXdLTiZt10Iy6xjACGadpqMs20aJOoh+PJt3bwUVA6Cefe7yF7vblX6QwyXZiVwTWGg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/imask"></script>
    <script src="/libs/countrySelect.js" type="text/javascript"></script>
    @vite(['resources/css/app.css'])
</head>
<body class="main-layout">
<header class="header">
    <div class="header__wrapper">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-wrapper__content">
                    <div class="header-wrapper__block">
                        <div class="header__logo">
                            <div class="logo">
                                <a class="logo__wrapper" href="{{ route('home', App::getLocale()) }}">
                                    <div class="logo__header">
                                        @if(App::getLocale() == "ru")
                                            <img class="logo__img" src="/img/logo_rus.svg">
                                        @elseif(App::getLocale() == "en")
                                            <img class="logo__img" src="/img/logo_eng.svg">
                                        @endif
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-wrapper__block header-wrapper__block-settings">
                        <div class="header__row header__row-settings">
                            <div class="header-contacts">
                                @if(Cookie::get('region') == null)
                                    <a href="mailto:service@v-tell.com" class="new_mail">
                                        <svg><use xlink:href="/img/svg/sprite.svg#new_mail"></use></svg>
                                    </a>
                                    <a href="https://goo.gl/maps/7hpVVFPxAEyFS7mn6" class="new_location" target="_blank">
                                        <svg><use xlink:href="/img/svg/sprite.svg#new_location"></use></svg>
                                    </a>
                                @elseif(Cookie::get('region') == "usa")
                                    <a href="mailto:service@v-tell.com" class="new_mail">
                                        <svg><use xlink:href="/img/svg/sprite.svg#new_mail"></use></svg>
                                    </a>
                                    <a href="https://goo.gl/maps/Btfa6bGs7RUU7Mdq6" class="new_location" target="_blank">
                                        <svg><use xlink:href="/img/svg/sprite.svg#new_location"></use></svg>
                                    </a>
                                @elseif(Cookie::get('region') == "rus")
                                    <a href="tel:+79589009090" class="new_phone">
                                        <svg><use xlink:href="/img/svg/sprite.svg#new_phone"></use></svg>
                                    </a>
                                    <a href="mailto:service@v-tell.com" class="new_mail">
                                        <svg><use xlink:href="/img/svg/sprite.svg#new_mail"></use></svg>
                                    </a>
                                    <a href="https://goo.gl/maps/yfBgCyzvWaaEpSR28" class="new_location" target="_blank">
                                        <svg><use xlink:href="/img/svg/sprite.svg#new_location"></use></svg>
                                    </a>
                                @endif
                            </div>
                            <div class="header-settings">
                                <div class="header-settings__wrapper">
                                    <div class="header-settings__block header-settings__block-profile">
                                        <div class="profile-link"><a class="profile-link__wrapper"
                                                                     href="{{ route('add-funds', App::getLocale()) }}">
                                                <div class="profile-link__icon">
                                                    <img class="icon icon-coin" src="/img/svg/add_funds.svg" alt="">
                                                </div>
                                                <div class="profile-link__content">
                                                    <p class="profile-link__text">{!! __('add_funds') !!}</p>
                                                </div>
                                            </a></div>
                                    </div>
                                    <div class="header-settings__block header-settings__block-profile">
                                        <div class="profile-link"><a class="profile-link__wrapper">
                                                <div class="profile-link__icon">
                                                    <img class="icon icon-coin" src="/img/svg/my_vtell.svg" alt="">
                                                </div>
                                                <div class="profile-link__content">
                                                    <p class="profile-link__text">{!! __('my') !!}</p>
                                                </div>
                                            </a></div>
                                    </div>
                                    <div class="header-settings__block">
                                        <div class="language-select">
                                            <div class="language-select__wrapper">
                                                <div class="language-select__header">
                                                    <p class="language-select__label">{!! __('choose_lang') !!}</p>
                                                </div>
                                                <div class="language-select__content">
                                                    <div class="language-select__block language-select-wrapper">
                                                        <div class="language-select__item language-select-trigger">
                                                            @if(App::getLocale() == "en")
                                                                <div class="language-select__icon">
                                                                    <img src="/img/usa-icon.svg"></div>
                                                                <p class="language-select__text">ENG</p>
                                                            @else
                                                                <div class="language-select__icon">
                                                                    <img src="/img/ru-icon.svg"></div>
                                                                <p class="language-select__text">Русский</p>
                                                            @endif
                                                        </div>
                                                        <div class="language-select__list language-select-block">
                                                            <div class="language-select__item">
                                                                @if(App::getLocale() == "ru")
                                                                    <div class="language-select__icon">
                                                                        <img src="/img/usa-icon.svg"></div>
                                                                    <a href="/en" class="language-select__text">ENG</a>
                                                                @else
                                                                    <div class="language-select__icon">
                                                                        <img src="/img/ru-icon.svg"></div>
                                                                    <a href="/ru"
                                                                       class="language-select__text">Pусский</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-settings__block">
                                        <div class="language-select">
                                            <div class="language-select__wrapper">
                                                <div class="language-select__header">
                                                    <p class="language-select__label">{!! __('choose_region_head') !!}</p>
                                                </div>
                                                <div class="language-select__content">
                                                    <div class="language-select__block language-select-wrapper">
                                                        <div class="language-select__item language-select-trigger">
                                                            @if(Cookie::get('region') == null)
                                                                <div class="language-select__icon">
                                                                    <img src="/img/region-select.svg">
                                                                </div>
                                                                <p class="language-select__text">Select</p>
                                                            @elseif(Cookie::get('region') == "usa")
                                                                <div class="language-select__icon">
                                                                    <img src="/img/usa-icon.svg">
                                                                </div>
                                                                <p class="language-select__text">{!! __('region') !!}</p>
                                                            @elseif(Cookie::get('region') == "rus")
                                                                <div class="language-select__icon">
                                                                    <img src="/img/ru-icon.svg">
                                                                </div>
                                                                <p class="language-select__text">{!! __('region2') !!}</p>
                                                            @endif
                                                        </div>
                                                        <div class="language-select__list language-select-block">
                                                            <div class="language-select__item">
                                                                <div class="language-select__icon">
                                                                    <img src="/img/usa-icon.svg">
                                                                </div>
                                                                <a href="{{ route('change_region', ['lang' => 'en', 'region' => 'usa']) }}"
                                                                   class="language-select__text">{!! __('region') !!}</a>
                                                            </div>
                                                            <div class="language-select__item">
                                                                <div class="language-select__icon">
                                                                    <img src="/img/ru-icon.svg">
                                                                </div>
                                                                <a href="{{ route('change_region', ['lang' => 'en', 'region' => 'rus']) }}"
                                                                   class="language-select__text">{!! __('region2') !!}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-settings__block header__burger">
                                        <div class="burger">
                                            <div class="burger__item"></div>
                                            <div class="burger__item"></div>
                                            <div class="burger__item"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header__row header__row-nav main-nav">
                            <nav class="header-nav">
                                <ul class="header-nav__list nav-list">
                                    <li class="nav-list__item nav-item"><a class="nav-item__link"
                                                                           href="{{ route('plans', App::getLocale()) }}"><span
                                                class="nav-item__link-text">{!! __('plans') !!}</span></a></li>
                                    <li class="nav-list__item nav-item"><a class="nav-item__link"
                                                                           href="{{ route('zone', App::getLocale()) }}"><span
                                                class="nav-item__link-text">{!! __('coverage') !!}</span></a></li>
                                    <li class="nav-list__item nav-item">
                                        <ul class="nav-list__sub">
                                            <li class="nav-list__sub-item"><a class="nav-list__sub-link"
                                                                              href="{{ route('about_us', App::getLocale()) }}">{!! __('about_us') !!}</a>
                                            </li>
                                            <li class="nav-list__sub-item"><a class="nav-list__sub-link"
                                                                              href="{{ route('difference', App::getLocale()) }}">{!! __('advantages_menu') !!}</a>
                                            </li>
                                            @if(Cookie::get('region') == "rus")
                                            <li class="nav-list__sub-item"><a class="nav-list__sub-link" href="{{ route('delivery_and_payment', App::getLocale()) }}">{!! __('delivery_and_payment_menu') !!}</a></li>
                                            @endif
                                            <li class="nav-list__sub-item"><a class="nav-list__sub-link"
                                                                              href="{{ route('management', App::getLocale()) }}">{!! __('management_menu') !!}</a>
                                            </li>
                                            <li class="nav-list__sub-item"><a class="nav-list__sub-link"
                                                                              href="{{ route('services', App::getLocale()) }}">{!! __('corporate_services') !!}</a>
                                            </li>
                                            <!-- <li class="nav-list__sub-item"><a class="nav-list__sub-link" href="{{ route('news', App::getLocale()) }}">{!! __('news') !!}</a></li> -->
                                        </ul>
                                        <a class="nav-item__link" href="#"><span
                                                class="nav-item__link-text">{!! __('about') !!}</span></a>
                                    </li>
                                    <li class="nav-list__item nav-item">
                                        <ul class="nav-list__sub">
                                            <li class="nav-list__sub-item"><a class="nav-list__sub-link"
                                                                              href="{{ route('ask', App::getLocale()) }}">{!! __('faq') !!}</a>
                                            </li>
                                            <li class="nav-list__sub-item"><a class="nav-list__sub-link"
                                                                              href="{{ route('settings', App::getLocale()) }}">{!! __('data_settings') !!}</a>
                                            </li>
                                            <li class="nav-list__sub-item"><a class="nav-list__sub-link"
                                                                              href="{{ route('commands', App::getLocale()) }}">{!! __('useful_commands') !!}</a>
                                            </li>
                                            <li class="nav-list__sub-item"><a class="nav-list__sub-link"
                                                                              href="{{ route('download', App::getLocale()) }}">{!! __('download_our_app') !!}</a>
                                            </li>
                                            {{--                                            <li class="nav-list__sub-item"><a class="nav-list__sub-link" href="{{ route('regulations', App::getLocale()) }}">{!! __('licenses') !!}</a></li>--}}
                                        </ul>
                                        <a class="nav-item__link" href="#"><span
                                                class="nav-item__link-text">{!! __('help') !!}</span></a>
                                    </li>
                                    <li class="nav-list__item nav-item">
                                        <ul class="nav-list__sub">
                                            <li class="nav-list__sub-item"><a class="nav-list__sub-link"
                                                                              href="{{ route('whosale', App::getLocale()) }}">Wholesale</a>
                                            </li>
                                            <li class="nav-list__sub-item"><a class="nav-list__sub-link"
                                                                              href="{{ route('b2b', App::getLocale()) }}">{!! __('b2b_opportunities_menu') !!}</a>
                                            </li>
                                            <li class="nav-list__sub-item"><a class="nav-list__sub-link"
                                                                              href="{{ route('partners', App::getLocale()) }}">{!! __('partnership_menu') !!}</a>
                                            </li>
                                        </ul>
                                        <a class="nav-item__link" href="#"><span
                                                class="nav-item__link-text">{!! __('for_business_menu') !!}</span></a>
                                    </li>
                                    {{--                                    <li class="nav-list__item nav-item"><a class="nav-item__link nav-item__link-bold" href="{{ route('catalog', App::getLocale()) }}"><span class="nav-item__link-text">Shop</span></a></li>--}}
                                    <li class="nav-list__item nav-item"><a class="nav-item__link"
                                                                           href="{{ route('contact', App::getLocale()) }}"><span
                                                class="nav-item__link-text">{!! __('contact') !!}</span></a></li>
                                    <li class="nav-list__item nav-item nav-item-mobile">
                                        <div class="profile-link"><a class="profile-link__wrapper" href="#">
                                                <div class="profile-link__icon">
                                                    <svg class="icon icon-user ">
                                                        <use xlink:href="/img/svg/sprite.svg#user"></use>
                                                    </svg>
                                                </div>
                                                <div class="profile-link__content">
                                                    <p class="profile-link__text">My V-Tell</p>
                                                </div>
                                            </a></div>
                                    </li>
                                    <li class="nav-list__item nav-item nav-item-mobile">
                                        <div class="profile-link"><a class="profile-link__wrapper"
                                                                     href="add-funds.html">
                                                <div class="profile-link__icon">
                                                    <svg class="icon icon-coin ">
                                                        <use xlink:href="/img/svg/sprite.svg#coin"></use>
                                                    </svg>
                                                </div>
                                                <div class="profile-link__content">
                                                    <p class="profile-link__text">Add Funds</p>
                                                </div>
                                            </a></div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container-become-subs">
    <div class="become-subs__fixed open_subs">
        <img src="/img/support-icon.svg">
        <span>{!! __('become_subs') !!}</span>
    </div>
</div>
@yield('content')
<footer class="footer">
    <div class="footer__row footer__row-black footer__row-bordered footer__row-first">
        <div class="container">
            <div class="footer__row-wrapper">
                <div class="footer__row-block">
                    <div class="footer__logo">
                        <div class="logo">
                            <a class="logo__wrapper" href="{{ route('home', App::getLocale()) }}">
                                <div class="logo__header">
                                    @if(App::getLocale() == "ru")
                                        <img class="logo__img" src="/img/logo_rus.svg">
                                    @elseif(App::getLocale() == "en")
                                        <img class="logo__img" src="/img/logo_eng.svg">
                                    @endif
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="footer__row-block">
                    <ul class="footer__list">
                        <li class="footer__list-item"><a class="footer__list-link"
                                                         href="{{ route('plans', App::getLocale()) }}">{{ __('footer_list_item_1') }}</a>
                        </li>
                        <li class="footer__list-item"><a class="footer__list-link"
                                                         href="{{ route('zone', App::getLocale()) }}">{{ __('footer_list_item_2') }}</a>
                        </li>
                        <li class="footer__list-item"><a class="footer__list-link"
                                                         href="{{ route('about_us', App::getLocale()) }}">{{ __('footer_list_item_3') }}</a>
                        </li>
                        <li class="footer__list-item"><a class="footer__list-link"
                                                         href="{{ route('partners', App::getLocale()) }}">{{ __('footer_list_item_4') }}</a>
                        </li>
                        <!-- <li class="footer__list-item"><a class="footer__list-link" href="{{ route('news', App::getLocale()) }}">{{ __('footer_list_item_5') }}</a></li> -->
                        <li class="footer__list-item"><a class="footer__list-link"
                                                         href="{{ route('contact', App::getLocale()) }}">{{ __('footer_list_item_6') }}</a>
                        </li>
                        <li class="footer__list-item"><a class="footer__list-link"
                                                         href="{{ route('ask', App::getLocale()) }}">{{ __('footer_list_item_8') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__row-block">
                    <ul class="footer__list">
                        {{--                        <li class="footer__list-item"><a class="footer__list-link" href="{{ route('regulations', App::getLocale()) }}">{{ __('footer_list_item_7') }}</a></li>--}}
                        <li class="footer__list-item"><a class="footer__list-link"
                                                         href="{{ route('settings', App::getLocale()) }}">{{ __('footer_list_item_9') }}</a>
                        </li>
                        <li class="footer__list-item"><a class="footer__list-link"
                                                         href="{{ route('services', App::getLocale()) }}">{{ __('footer_list_item_10') }}</a>
                        </li>
                        <li class="footer__list-item"><a class="footer__list-link"
                                                         href="{{ route('commands', App::getLocale()) }}">{{ __('footer_list_item_11') }}</a>
                        </li>
                        <li class="footer__list-item"><a class="footer__list-link"
                                                         href="{{ route('download', App::getLocale()) }}">{!! __('footer_list_item_12') !!}</a>
                        </li>
                        @if(Cookie::get('region') == "usa")
                            <li class="footer__list-item"><a class="footer__list-link"
                                                             href="{{ route('emergency', App::getLocale()) }}">{!! __('footer_list_item_13') !!}</a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="footer__row-block">
                    <form class="footer-form form">
                        <div class="footer-form__wrapper">
                            <div class="footer-form__header">
                                <p class="footer-form__title @if(App::getLocale() == 'ru') transform-none @endif">{{ __('footer_form_title') }}</p>
                            </div>
                            <div class="footer-form__content">
                                <div class="footer-form__block">
                                    <input class="form__input" placeholder="{{ __('footer_form_placeholder_1') }}">
                                </div>
                                <div class="footer-form__block">
                                    <input class="form__input" placeholder="{{ __('footer_form_placeholder_2') }}">
                                </div>
                            </div>
                            <div class="footer-form__footer">
                                <input data-popup-name="popup-success-subscribe" class="button button-accent"
                                       type="submit" value="{{ __('footer_form_btn_title') }}">
                            </div>
                        </div>
                    </form>
                    <div class="footer-contacts">
                        @if(Cookie::get('region') == null)
                            <a href="mailto:service@v-tell.com" class="new_mail">
                                <svg><use xlink:href="/img/svg/sprite.svg#new_mail"></use></svg>
                            </a>
                            <a href="https://goo.gl/maps/7hpVVFPxAEyFS7mn6" class="new_location" target="_blank">
                                <svg><use xlink:href="/img/svg/sprite.svg#new_location"></use></svg>
                            </a>
                        @elseif(Cookie::get('region') == "usa")
                            <a href="mailto:service@v-tell.com" class="new_mail">
                                <svg><use xlink:href="/img/svg/sprite.svg#new_mail"></use></svg>
                            </a>
                            <a href="https://goo.gl/maps/Btfa6bGs7RUU7Mdq6" class="new_location" target="_blank">
                                <svg><use xlink:href="/img/svg/sprite.svg#new_location"></use></svg>
                            </a>
                        @elseif(Cookie::get('region') == "rus")
                            <a href="tel:+79589009090" class="new_phone">
                                <svg><use xlink:href="/img/svg/sprite.svg#new_phone"></use></svg>
                            </a>
                            <a href="mailto:service@v-tell.com" class="new_mail">
                                <svg><use xlink:href="/img/svg/sprite.svg#new_mail"></use></svg>
                            </a>
                            <a href="https://goo.gl/maps/yfBgCyzvWaaEpSR28" class="new_location" target="_blank">
                                <svg><use xlink:href="/img/svg/sprite.svg#new_location"></use></svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__row footer__row-grey footer__row-second">
        <div class="container">
            <div class="footer__row-wrapper footer__row-wrapper-center">
                <div class="footer__row-block">
                    <div class="footer__rights">
                        <div class="footer__rights-block">
                            <p class="footer__text">© 2022 Globex Telecom Group Limited: V-Tell Group of Companies.</p>
                        </div>
                        <div class="footer__rights-block">
                            <p class="footer__text">{{ __('footer_rights_title') }}</p>
                        </div>
                    </div>
                </div>
                <div class="footer__row-block">
                    <div class="footer__social">
                        <div class="social-block">
                            <div class="social-block__wrapper">
                                <div class="social-block__title">
                                    <p class="social-block__title-label">{{ __('footer_follow_label') }}</p>
                                </div>
                                <div class="social-block__content">
                                    <ul class="social-list social-block__list">
                                        <li class="social-list__item"><a class="social-list__link" href="#">
                                                <svg class="icon icon-fb ">
                                                    <use xlink:href="/img/svg/sprite.svg#fb"></use>
                                                </svg>
                                            </a></li>
                                        <li class="social-list__item"><a class="social-list__link" href="#">
                                                <svg class="icon icon-insta ">
                                                    <use xlink:href="/img/svg/sprite.svg#insta"></use>
                                                </svg>
                                            </a></li>
                                        <li class="social-list__item"><a class="social-list__link" href="#">
                                                <svg class="icon icon-twitter ">
                                                    <use xlink:href="/img/svg/sprite.svg#twitter"></use>
                                                </svg>
                                            </a></li>
                                        <li class="social-list__item"><a class="social-list__link" href="#">
                                                <svg class="icon icon-linkedin ">
                                                    <use xlink:href="/img/svg/sprite.svg#linkedin"></use>
                                                </svg>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="popup popup-ask" id="popup_callback">
    <div class="popup__wrapper popup-wrapper">
        <div class="popup-content">
            <div class="popup-close popup__close" id="popup_callback_close">
            </div>
            <div class="popup-box">
                <div class="popup-box__wrapper">
                    <div class="popup-ask__header">
                        <div class="section__title">
                            <p class="section__title-label section__title-label-big">
                                {!! __('popup_callback_title') !!}
                            </p>
                        </div>
                    </div>
                    <div class="popup-ask__content">
                        <div class="form contact-form">
                            <div class="contact-form__block">
                                <input class="form__input" placeholder="{!! __('popup_callback_name') !!}">
                            </div>
                            <div class="contact-form__block">
                                <fieldset class="contact-form__fieldset">
                                    <div class="contact-form__phone-wrapper">
                                        <input type="text" class="contact-form__phone input_phone_modal">
                                    </div>
                                </fieldset>
                            </div>
                            <div class="contact-form__block contact-form__block-big">
                                <div class="contact-form__checkbox">
                                    <label class="checkbox">
                                        <input class="checkbox__item" type="checkbox"><span
                                            class="checkbox__checkmark"></span><span
                                            class="checkbox__label text">{!! __('popup_callback_checkbox') !!}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="contact-form__block contact-form__block-big">
                                <input class="button button-accent contact-form__button" type="submit" id="submit_subs"
                                       value="{!! __('popup_callback_submit') !!}" data-popup-name="popup-success">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup popup-ask" id="popup_subs">
    <div class="popup__wrapper popup-wrapper">
        <div class="popup-content">
            <div class="popup-close popup__close" id="popup_subs_close">
            </div>
            <div class="popup-box">
                <div class="popup-box__wrapper">
                    <div class="popup-ask__header">
                        <div class="section__title">
                            <p class="section__title-label section__title-label-big">
                                {!! __('popup_subs_title') !!}
                            </p>
                        </div>
                    </div>
                    <div class="popup-ask__content">
                        <div class="form contact-form">
                            <div class="contact-form__block">
                                <input class="form__input" placeholder="{!! __('popup_subs_name') !!}">
                            </div>
                            <div class="contact-form__block">
                                <fieldset class="contact-form__fieldset">
                                    <div class="contact-form__phone-wrapper">
                                        <input type="text" class="contact-form__phone input_phone_modal">
                                    </div>
                                </fieldset>
                            </div>
                            <div class="contact-form__block contact-form__block-big">
                                <div class="contact-form__checkbox">
                                    <label class="checkbox">
                                        <input class="checkbox__item" type="checkbox">
                                        <span class="checkbox__checkmark"></span>
                                        <span class="checkbox__label text">{!! __('popup_subs_checkbox') !!}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="contact-form__block contact-form__block-big">
                                <input class="button button-accent contact-form__button" type="submit" id="submit_subs"
                                       value="{!! __('popup_subs_submit') !!}" data-popup-name="popup-success">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup popup-success">
    <div class="popup__wrapper popup-wrapper">
        <div class="popup-content">
            <div class="popup-close popup__close">
            </div>
            <div class="popup-success">
                <div class="popup-success__wrapper">
                    <div class="popup__header">
                        <img class="popup-success__icon" src="/img/popup-success.svg" alt="">
                    </div>
                    <div class="popup__content">
                        <p class="popup__title popup__title-center">Success!</p>
                        <div class="popup__desc">
                            <p class="popup__text popup__text-center">
                                Your application has been accepted, please wait for a call from the operator.
                            </p>
                        </div>
                    </div>
                    <div class="popup__footer popup-success__footer">
                        <button class="button button-accent popup-close">Back to site</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup popup-success-subscribe">
    <div class="popup__wrapper popup-wrapper">
        <div class="popup-content">
            <div class="popup-close popup__close">
            </div>
            <div class="popup-success">
                <div class="popup-success__wrapper">
                    <div class="popup__header">
                        <img class="popup-success__icon" src="/img/popup-success.svg" alt="">
                    </div>
                    <div class="popup__content">
                        <p class="popup__title popup__title-center">Success!</p>
                        <div class="popup__desc">
                            <p class="popup__text popup__text-center">
                                Your request has been successfully accepted
                            </p>
                        </div>
                    </div>
                    <div class="popup__footer popup-success__footer">
                        <button class="button button-accent popup-close">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup popup-subscribe-now-plan">
    <div class="popup__wrapper popup-wrapper">
        <div class="popup-content">
            <div class="popup-close popup__close">
            </div>
            <div class="popup-box">
                <div class="popup-box__wrapper">
                    <div class="popup-ask__header">
                        <div class="section__title">
                            <p class="section__title-label section__title-label-big">
                                {!! __('popup-plan-title') !!}
                            </p>
                        </div>
                    </div>
                    <div class="popup-ask__content">
                        <div class="form contact-form">
                            <div class="contact-form__block">
                                <input class="form__input" placeholder="{!! __('popup-plan-name') !!}">
                            </div>
                            <div class="contact-form__block">
                                <select class="calculate__select">
                                    <option>{!! __('popup-plan-select') !!}</option>
                                    <option>{!! __('popup-plan-select-option') !!}</option>
                                    <option>{!! __('popup-plan-select-option2') !!}</option>
                                </select>
                            </div>
                            <div class="contact-form__block">
                                <select class="calculate__select" id="select_method">
                                    <option>{!! __('popup-plan-select2') !!}</option>
                                    <option value="1">{!! __('popup-plan-select2-option') !!}</option>
                                    <option value="2">{!! __('popup-plan-select2-option2') !!}</option>
                                </select>
                            </div>
                            <div class="contact-form__block display-none" id="input_phone">
                                <fieldset class="contact-form__fieldset">
                                    <div class="contact-form__phone-wrapper">
                                        <input type="text" class="contact-form__phone input_phone_modal">
                                    </div>
                                </fieldset>
                            </div>
                            {{--                                <div class="contact-form__block" id="input_phone">--}}
                            {{--                                    <fieldset class="contact-form__fieldset">--}}
                            {{--                                        <legend class="contact-form__legend">new input</legend>--}}
                            {{--                                        <div class="contact-form__select">--}}
                            {{--                                            <select name="" id="" multiple class="new-select">--}}
                            {{--                                                <option value="en" class="new">2</option>--}}
                            {{--                                                <option value="ru" class="new">3</option>--}}
                            {{--                                            </select>--}}
                            {{--                                        </div>--}}
                            {{--                                    </fieldset>--}}
                            {{--                                </div>--}}
                            <div class="contact-form__block display-none" id="input_email">
                                <input class="form__input" type="email" placeholder="{!! __('popup-plan-input') !!}">
                            </div>
                            <div class="contact-form__block">
                                <input class="form__input" placeholder="{!! __('popup-plan-input2') !!}">
                            </div>
                            <div class="contact-form__block">
                                <textarea class="form__input form__input-textarea"
                                          placeholder="{!! __('popup-plan-input3') !!}"></textarea>
                            </div>
                            {{--                            <div class="contact-form__block popup-plan-select-countries-container">--}}
                            {{--                                <select class="popup-plan-select-countries" id="popup-plan-select-countries" multiple="multiple">--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}
                            <div class="contact-form__block contact-form__block-big">
                                <div class="contact-form__checkbox">
                                    <label class="checkbox">
                                        <input class="checkbox__item" type="checkbox"><span
                                            class="checkbox__checkmark"></span><span
                                            class="checkbox__label text">{!! __('popup-plan-checkbox') !!}</span>
                                    </label>
                                </div>
                            </div>
                            {{--                                <div class="contact-form__block">--}}
                            {{--                                    <input class="form__input" placeholder="telefon" id="dountries">--}}
                            {{--                                </div>--}}
                            <div class="contact-form__block contact-form__block-big">
                                <div class="contact-form__checkbox">
                                    <label class="checkbox">
                                        <input class="checkbox__item" type="checkbox"><span
                                            class="checkbox__checkmark"></span><span
                                            class="checkbox__label text">{!! __('popup-plan-checkbox2') !!}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="contact-form__block contact-form__block-big">
                                <input class="button button-accent contact-form__button" type="submit"
                                       value="{!! __('popup-plan-submit') !!}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup popup-partner">
    <div class="popup__wrapper">
        <div class="modal-partner__container popup-content">
            <a href="{{ url()->previous() }}" class="popup-close popup__close"></a>
            <div class="modal-partner__content">
                <div class="modal-partner__title">
                    <p>{!! __('modal_partner_title') !!}</p>
                </div>
                <div class="modal-partner__text">
                    <p>{!!__('modal_partner_text') !!}</p>
                </div>
                <div class="modal-partner__buttons">
                    <a class="modal-partner__button"
                       href="{{ route('change_region', ['lang' => 'en', 'region' => 'usa']) }}">
                        <img src="/img/usa_circle.svg" alt="">
                        {!! __('region') !!}
                    </a>
                    <a class="modal-partner__button"
                       href="{{ route('change_region', ['lang' => 'en', 'region' => 'rus']) }}">
                        <img src="/img/rus.svg" alt="">
                        {!! __('region2') !!}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/libs/swiper/swiper.js"></script>
<script src="/libs/custom-select/custom-select.js"></script>
@vite(['resources/js/app.js'])
<script>
    let countries = [
        {
            "title": "Abkhazia",
            "short_title": "ABH",
            "img_flag": "Abkhazia-_-512px.png",
            "title_rus": "Абхазия"
        },
        {
            "title": "Afghanistan",
            "short_title": "AFG",
            "img_flag": "122_afghanistan.png",
            "title_rus": "Афганистан"
        },
        {
            "title": "Albania",
            "short_title": "ALB",
            "img_flag": "117_albania.png",
            "title_rus": "Албания"
        },
        {
            "title": "Algeria",
            "short_title": "DZA",
            "img_flag": "126_algeria.png",
            "title_rus": "Алжир"
        },
        {
            "title": "Andorra",
            "short_title": "AND",
            "img_flag": "102_andorra.png",
            "title_rus": "Андорра"
        },
        {
            "title": "Angola",
            "short_title": "AGO",
            "img_flag": "124_angola.png",
            "title_rus": "Ангола"
        },
        {
            "title": "Anguilla",
            "short_title": "AIA",
            "img_flag": "087_anguilla.png",
            "title_rus": "Ангилья (Брит.)"
        },
        {
            "title": "Antigua and Barbuda",
            "short_title": "ATG",
            "img_flag": "104_antigua_and_barbuda.png",
            "title_rus": "Антигуа и Барбуда"
        },
        {
            "title": "Argentina",
            "short_title": "ARG",
            "img_flag": "064_argentina.png",
            "title_rus": "Аргентина"
        },
        {
            "title": "Armenia",
            "short_title": "ARM",
            "img_flag": "121_armenia.png",
            "title_rus": "Армения"
        },
        {
            "title": "Aruba",
            "short_title": "ABW",
            "img_flag": "099_aruba.png",
            "title_rus": "Аруба (Нидерланды)"
        },
        {
            "title": "Australia",
            "short_title": "AUS",
            "img_flag": "130_australia.png",
            "title_rus": "Австралия"
        },
        {
            "title": "Austria",
            "short_title": "AUT",
            "img_flag": "189_austria.png",
            "title_rus": "Австрия"
        },
        {
            "title": "Azerbaijan",
            "short_title": "AZE",
            "img_flag": "125_azerbaijan.png",
            "title_rus": "Азербайджан"
        },
        {
            "title": "Bahamas",
            "short_title": "BHS",
            "img_flag": "194_bahamas.png",
            "title_rus": "Багамы"
        },
        {
            "title": "Bahrain",
            "short_title": "BHR",
            "img_flag": "116_bahrain.png",
            "title_rus": "Бахрейн"
        },
        {
            "title": "Bangladesh",
            "short_title": "BGD",
            "img_flag": "128_bangladesh.png",
            "title_rus": "Бангладеш"
        },
        {
            "title": "Barbados",
            "short_title": "BRB",
            "img_flag": "111_barbados.png",
            "title_rus": "Барбадос"
        },
        {
            "title": "Belarus",
            "short_title": "BLR",
            "img_flag": "110_belarus.png",
            "title_rus": "Белоруссия"
        },
        {
            "title": "Belgium",
            "short_title": "BEL",
            "img_flag": "054_belgium.png",
            "title_rus": "Бельгия"
        },
        {
            "title": "Belize",
            "short_title": "BLZ",
            "img_flag": "115_belize.png",
            "title_rus": "Белиз"
        },
        {
            "title": "Benin",
            "short_title": "BEN",
            "img_flag": "098_benin.png",
            "title_rus": "Бенин"
        },
        {
            "title": "Bermuda",
            "short_title": "BMU",
            "img_flag": "114_bermuda.png",
            "title_rus": "Бермуды (Брит.)"
        },
        {
            "title": "Bhutan",
            "short_title": "BTN",
            "img_flag": "094_bhutan.png",
            "title_rus": "Бутан"
        },
        {
            "title": "Bolivia",
            "short_title": "BOL",
            "img_flag": "133_bolivia.png",
            "title_rus": "Боливия"
        },
        {
            "title": "Bosnia and Herzegovina",
            "short_title": "BIH",
            "img_flag": "113_bosnia_and_herzegovina.png",
            "title_rus": "Босния и Герцеговина"
        },
        {
            "title": "Botswana",
            "short_title": "BWA",
            "img_flag": "127_botswana.png",
            "title_rus": "Ботсвана"
        },
        {
            "title": "Brazil",
            "short_title": "BRA",
            "img_flag": "250_brazil.png",
            "title_rus": "Бразилия"
        },
        {
            "title": "British Virgin Islands",
            "short_title": "VGB",
            "img_flag": "112_british_virgin_islands.png",
            "title_rus": "Британские Виргинские острова (Брит.)"
        },
        {
            "title": "Brunei",
            "short_title": "BRN",
            "img_flag": "107_brunei.png",
            "title_rus": "Бруней"
        },
        {
            "title": "Bulgaria",
            "short_title": "BGR",
            "img_flag": "135_bulgaria.png",
            "title_rus": "Болгария"
        },
        {
            "title": "Burkina Faso",
            "short_title": "BFA",
            "img_flag": "118_burkina_faso.png",
            "title_rus": "Буркина-Фасо"
        },
        {
            "title": "Burundi",
            "short_title": "BDI",
            "img_flag": "103_burundi.png",
            "title_rus": "Бурунди"
        },
        {
            "title": "Cabo Verde",
            "short_title": "CPV",
            "img_flag": "096_cape_verde.png",
            "title_rus": "Кабо-Верде"
        },
        {
            "title": "Cambodia",
            "short_title": "KHM",
            "img_flag": "132_cambodia.png",
            "title_rus": "Камбоджа"
        },
        {
            "title": "Cameroon",
            "short_title": "CMR",
            "img_flag": "106_cameroon.png",
            "title_rus": "Камерун"
        },
        {
            "title": "Canada",
            "short_title": "CAN",
            "img_flag": "206_canada.png",
            "title_rus": "Канада"
        },
        {
            "title": "Cayman Islands",
            "short_title": "CYM",
            "img_flag": "092_cayman_islands.png",
            "title_rus": "Каймановы острова (Брит.)"
        },
        {
            "title": "Central African Republic",
            "short_title": "CAF",
            "img_flag": "091_central_african_republic.png",
            "title_rus": "Центральноафриканская Республика"
        },
        {
            "title": "Chad",
            "short_title": "TCD",
            "img_flag": "Chad-_-512px.png",
            "title_rus": "Чад"
        },
        {
            "title": "Chech Republic",
            "short_title": "CZE",
            "img_flag": "061_czech_republic.png",
            "title_rus": "Чехия"
        },
        {
            "title": "Chile",
            "short_title": "CHL",
            "img_flag": "051_chile.png",
            "title_rus": "Чили"
        },
        {
            "title": "China",
            "short_title": "CHN",
            "img_flag": "261_china.png",
            "title_rus": "Китай"
        },
        {
            "title": "Colombia",
            "short_title": "COL",
            "img_flag": "062_colombia.png",
            "title_rus": "Колумбия"
        },
        {
            "title": "Comoros",
            "short_title": "COM",
            "img_flag": "Comoros_512px.png",
            "title_rus": "Союз Коморских Островов"
        },
        {
            "title": "Costa Rica",
            "short_title": "CRI",
            "img_flag": "131_costa_rica.png",
            "title_rus": "Коста-Рика"
        },
        {
            "title": "Cote d`Ivoire",
            "short_title": "CIV",
            "img_flag": "245_ivory_coast.png",
            "title_rus": "Кот-д`Ивуар"
        },
        {
            "title": "Croatia",
            "short_title": "HRV",
            "img_flag": "134_croatia.png",
            "title_rus": "Хорватия"
        },
        {
            "title": "Cuba",
            "short_title": "CUB",
            "img_flag": "129_cuba.png",
            "title_rus": "Куба"
        },
        {
            "title": "Cyprus",
            "short_title": "CYP",
            "img_flag": "030_cyprus.png",
            "title_rus": "Кипр"
        },
        {
            "title": "Democratic Republic of the Congo",
            "short_title": "COD",
            "img_flag": "258_democratic_republic_of_congo.png",
            "title_rus": "Демократическая Республика Конго"
        },
        {
            "title": "Denmark",
            "short_title": "DNK",
            "img_flag": "072_denmark.png",
            "title_rus": "Дания"
        },
        {
            "title": "Djibouti",
            "short_title": "DJI",
            "img_flag": "211_djibouti.png",
            "title_rus": "Джибути"
        },
        {
            "title": "Dominican Republic",
            "short_title": "DOM",
            "img_flag": "018_dominican_republic.png",
            "title_rus": "Доминиканская Республика"
        },
        {
            "title": "Dominika",
            "short_title": "DMA",
            "img_flag": "147_dominica.png",
            "title_rus": "Доминика"
        },
        {
            "title": "East Timor",
            "short_title": "TMP",
            "img_flag": "226_east_timor.png",
            "title_rus": "Восточный Тимор"
        },
        {
            "title": "Ecuador",
            "short_title": "ECU",
            "img_flag": "049_ecuador.png",
            "title_rus": "Эквадор"
        },
        {
            "title": "Egypt",
            "short_title": "EGY",
            "img_flag": "079_egypt.png",
            "title_rus": "Египет"
        },
        {
            "title": "El Salvador",
            "short_title": "SLV",
            "img_flag": "015_el_salvador.png",
            "title_rus": "Сальвадор"
        },
        {
            "title": "Equatorial Guinea",
            "short_title": "GNQ",
            "img_flag": "Equatorial-Guinea-_-512px.png",
            "title_rus": "Экваториальная Гвинея"
        },
        {
            "title": "Eritrea",
            "short_title": "ERI",
            "img_flag": "Eritrea_512px.png",
            "title_rus": "Эритрея"
        },
        {
            "title": "Estonia",
            "short_title": "EST",
            "img_flag": "257_estonia.png",
            "title_rus": "Эстония"
        },
        {
            "title": "Eswatini (Swaziland)",
            "short_title": "SWZ",
            "img_flag": "Eswatini_512px.png",
            "title_rus": "Эсватини (Свазиленд)"
        },
        {
            "title": "Ethiopia",
            "short_title": "ETH",
            "img_flag": "001_ethiopia.png",
            "title_rus": "Эфиопия"
        },
        {
            "title": "Falkland islands",
            "short_title": "FLK",
            "img_flag": "Folklend-islands_512px.png",
            "title_rus": "Фолклендские острова"
        },
        {
            "title": "Faroe Islands",
            "short_title": "FRO",
            "img_flag": "146_faroe_islands.png",
            "title_rus": "Фарерские острова (Дания)"
        },
        {
            "title": "Fiji",
            "short_title": "FJI",
            "img_flag": "145_fiji.png",
            "title_rus": "Фиджи"
        },
        {
            "title": "Finland",
            "short_title": "FIN",
            "img_flag": "052_finland.png",
            "title_rus": "Финляндия"
        },
        {
            "title": "France",
            "short_title": "FRA",
            "img_flag": "077_france.png",
            "title_rus": "Франция"
        },
        {
            "title": "French Guiana",
            "short_title": "GUF",
            "img_flag": "french_guiana_country_flag_4_512.png",
            "title_rus": "Французская Гвиана"
        },
        {
            "title": "French Polynesia",
            "short_title": "PYF",
            "img_flag": "french_polynesia-png-_-512px.png",
            "title_rus": "Французская Полинезия"
        },
        {
            "title": "Gabon",
            "short_title": "GAB",
            "img_flag": "186_gabon.png",
            "title_rus": "Габон"
        },
        {
            "title": "Gambia",
            "short_title": "GMB",
            "img_flag": "159_gambia.png",
            "title_rus": "Гамбия"
        },
        {
            "title": "Georgia",
            "short_title": "GEO",
            "img_flag": "256_georgia.png",
            "title_rus": "Грузия"
        },
        {
            "title": "Germany",
            "short_title": "DEU",
            "img_flag": "066_germany.png",
            "title_rus": "Германия"
        },
        {
            "title": "Ghana",
            "short_title": "GHA",
            "img_flag": "255_ghana.png",
            "title_rus": "Гана"
        },
        {
            "title": "Gibraltar",
            "short_title": "GIB",
            "img_flag": "185_gibraltar.png",
            "title_rus": "Гибралтар (Брит.)"
        },
        {
            "title": "Greece",
            "short_title": "GRC",
            "img_flag": "071_greece.png",
            "title_rus": "Греция"
        },
        {
            "title": "Greenland",
            "short_title": "GRL",
            "img_flag": "183_greenland.png",
            "title_rus": "Гренландия"
        },
        {
            "title": "Grenada",
            "short_title": "GRD",
            "img_flag": "182_grenada.png",
            "title_rus": "Гренада"
        },
        {
            "title": "Guadeloupe",
            "short_title": "GLP",
            "img_flag": "450px_Unofficial_flag_of_Guadeloupe_local_.svg.png",
            "title_rus": "Гваделупа (Франция)"
        },
        {
            "title": "Guam",
            "short_title": "GUM",
            "img_flag": "Guam_512px.png",
            "title_rus": "Остров Гуам"
        },
        {
            "title": "Guatemala",
            "short_title": "GTM",
            "img_flag": "040_guatemala.png",
            "title_rus": "Гватемала"
        },
        {
            "title": "Guernsey",
            "short_title": "GGY",
            "img_flag": "Guernsey_512px.png",
            "title_rus": "Гернси"
        },
        {
            "title": "Guinea",
            "short_title": "GIN",
            "img_flag": "154_guinea.png",
            "title_rus": "Гвинея"
        },
        {
            "title": "Guinea-Bissau",
            "short_title": "GNB",
            "img_flag": "209_guinea_bissau.png",
            "title_rus": "Гвинея-Бисау"
        },
        {
            "title": "Guyana",
            "short_title": "GUY",
            "img_flag": "300_gayana.png",
            "title_rus": "Гайана"
        },
        {
            "title": "Haiti",
            "short_title": "HTI",
            "img_flag": "247_haiti.png",
            "title_rus": "Гаити"
        },
        {
            "title": "Honduras",
            "short_title": "HND",
            "img_flag": "027_honduras.png",
            "title_rus": "Гондурас"
        },
        {
            "title": "Hong Kong",
            "short_title": "HKG",
            "img_flag": "067_hong_kong.png",
            "title_rus": "Гонконг"
        },
        {
            "title": "Hungary",
            "short_title": "HUN",
            "img_flag": "053_hungary.png",
            "title_rus": "Венгрия"
        },
        {
            "title": "Iceland",
            "short_title": "ISL",
            "img_flag": "041_iceland.png",
            "title_rus": "Исландия"
        },
        {
            "title": "India",
            "short_title": "IND",
            "img_flag": "217_india.png",
            "title_rus": "Индия"
        },
        {
            "title": "Indonesia",
            "short_title": "IDN",
            "img_flag": "078_indonesia.png",
            "title_rus": "Индонезия"
        },
        {
            "title": "International maritime networks",
            "short_title": "MMM",
            "img_flag": "ikonki_korabl-_-512px.png",
            "title_rus": "Международные морские сети"
        },
        {
            "title": "Iran",
            "short_title": "IRN",
            "img_flag": "063_iran.png",
            "title_rus": "Иран"
        },
        {
            "title": "Iraq",
            "short_title": "IRQ",
            "img_flag": "007_iraq.png",
            "title_rus": "Ирак"
        },
        {
            "title": "Ireland",
            "short_title": "IRL",
            "img_flag": "070_ireland.png",
            "title_rus": "Ирландия"
        },
        {
            "title": "Isle of Man",
            "short_title": "IMN",
            "img_flag": "Isle-of-Man_512px.png",
            "title_rus": "Остров Мэн"
        },
        {
            "title": "Israel",
            "short_title": "ISR",
            "img_flag": "060_israel.png",
            "title_rus": "Израиль"
        },
        {
            "title": "Italy",
            "short_title": "ITA",
            "img_flag": "011_italy.png",
            "title_rus": "Италия"
        },
        {
            "title": "Jamaica",
            "short_title": "JAM",
            "img_flag": "026_jamaica.png",
            "title_rus": "Ямайка"
        },
        {
            "title": "Japan",
            "short_title": "JPN",
            "img_flag": "033_japan.png",
            "title_rus": "Япония"
        },
        {
            "title": "Jersey",
            "short_title": "JEY",
            "img_flag": "Jersey-_-512px.png",
            "title_rus": "Джерси"
        },
        {
            "title": "Jordan",
            "short_title": "JOR",
            "img_flag": "042_jordan.png",
            "title_rus": "Иордания"
        },
        {
            "title": "Kazakhstan",
            "short_title": "KAZ",
            "img_flag": "034_kazakhstan.png",
            "title_rus": "Казахстан"
        },
        {
            "title": "Kenya",
            "short_title": "KEN",
            "img_flag": "029_kenya.png",
            "title_rus": "Кения"
        },
        {
            "title": "Kiribati",
            "short_title": "KIR",
            "img_flag": "179_kiribati.png",
            "title_rus": "Кирибати"
        },
        {
            "title": "Kosovo",
            "short_title": "KOS",
            "img_flag": "151_kosovo.png",
            "title_rus": "Косово"
        },
        {
            "title": "Kuwait",
            "short_title": "KWT",
            "img_flag": "178_kuwait.png",
            "title_rus": "Кувейт"
        },
        {
            "title": "Kyrgyzstan",
            "short_title": "KGZ",
            "img_flag": "208_kyrgyzstan.png",
            "title_rus": "Киргизия"
        },
        {
            "title": "Laos",
            "short_title": "LAO",
            "img_flag": "069_laos.png",
            "title_rus": "Лаос"
        },
        {
            "title": "Latvia",
            "short_title": "LVA",
            "img_flag": "032_latvia.png",
            "title_rus": "Латвия"
        },
        {
            "title": "Lebanon",
            "short_title": "LBN",
            "img_flag": "008_lebanon.png",
            "title_rus": "Ливан"
        },
        {
            "title": "Lesotho",
            "short_title": "LSO",
            "img_flag": "Lesotho_512px.png",
            "title_rus": "Королевство Лесото"
        },
        {
            "title": "Liberia",
            "short_title": "LBR",
            "img_flag": "218_liberia.png",
            "title_rus": "Либерия"
        },
        {
            "title": "Libya",
            "short_title": "LBY",
            "img_flag": "225_libya.png",
            "title_rus": "Ливия"
        },
        {
            "title": "Liechtenstein",
            "short_title": "LIE",
            "img_flag": "216_liechtenstein.png",
            "title_rus": "Лихтенштейн"
        },
        {
            "title": "Lithuania",
            "short_title": "LTU",
            "img_flag": "025_lithuania.png",
            "title_rus": "Литва"
        },
        {
            "title": "Luxembourg",
            "short_title": "LUX",
            "img_flag": "023_luxembourg.png",
            "title_rus": "Люксембург"
        },
        {
            "title": "Macao",
            "short_title": "MAC",
            "img_flag": "144_macao.png",
            "title_rus": "Макао"
        },
        {
            "title": "Madagascar",
            "short_title": "MDG",
            "img_flag": "253_madagascar.png",
            "title_rus": "Мадагаскар"
        },
        {
            "title": "Malawi",
            "short_title": "MWI",
            "img_flag": "Malawi-_-512px.png",
            "title_rus": "Малави"
        },
        {
            "title": "Malaysia",
            "short_title": "MYS",
            "img_flag": "056_malaysia.png",
            "title_rus": "Малайзия"
        },
        {
            "title": "Maldives",
            "short_title": "MDV",
            "img_flag": "232_maldives.png",
            "title_rus": "Мальдивы"
        },
        {
            "title": "Mali",
            "short_title": "MLI",
            "img_flag": "Mali_512px.png",
            "title_rus": "Мали"
        },
        {
            "title": "Malta",
            "short_title": "MLT",
            "img_flag": "012_malta.png",
            "title_rus": "Мальта"
        },
        {
            "title": "Martinique",
            "short_title": "MTQ",
            "img_flag": "137_martinique.png",
            "title_rus": "Мартиника"
        },
        {
            "title": "Mauritania",
            "short_title": "MRT",
            "img_flag": "177_mauritania.png",
            "title_rus": "Мавритания"
        },
        {
            "title": "Mauritius",
            "short_title": "MUS",
            "img_flag": "021_mauritius.png",
            "title_rus": "Маврикий"
        },
        {
            "title": "Mayotte",
            "short_title": "MYT",
            "img_flag": "Mayotte_512px.png",
            "title_rus": "Майотта"
        },
        {
            "title": "Mexico",
            "short_title": "MEX",
            "img_flag": "239_mexico.png",
            "title_rus": "Мексика"
        },
        {
            "title": "Moldova",
            "short_title": "MDA",
            "img_flag": "231_moldova.png",
            "title_rus": "Молдавия"
        },
        {
            "title": "Monaco",
            "short_title": "MCO",
            "img_flag": "043_monaco.png",
            "title_rus": "Монако"
        },
        {
            "title": "Mongolia",
            "short_title": "MNG",
            "img_flag": "Mongolia_512px.png",
            "title_rus": "Монголия"
        },
        {
            "title": "Montenegro",
            "short_title": "MNE",
            "img_flag": "230_montenegro.png",
            "title_rus": "Черногория"
        },
        {
            "title": "Montserrat",
            "short_title": "MSR",
            "img_flag": "175_montserrat.png",
            "title_rus": "Монтсеррат (Брит.)"
        },
        {
            "title": "Morocco",
            "short_title": "MAR",
            "img_flag": "086_morocco.png",
            "title_rus": "Марокко"
        },
        {
            "title": "Mozambique",
            "short_title": "MOZ",
            "img_flag": "006_mozambique.png",
            "title_rus": "Мозамбик"
        },
        {
            "title": "Myanmar",
            "short_title": "MMR",
            "img_flag": "028_myanmar.png",
            "title_rus": "Мьянма"
        },
        {
            "title": "Namibia",
            "short_title": "NAM",
            "img_flag": "Namibia_512px.png",
            "title_rus": "Намибия"
        },
        {
            "title": "Nauru",
            "short_title": "NRU",
            "img_flag": "173_nauru.png",
            "title_rus": "Науру"
        },
        {
            "title": "Nepal",
            "short_title": "NPL",
            "img_flag": "249_nepal.png",
            "title_rus": "Непал"
        },
        {
            "title": "Netherlands",
            "short_title": "NLD",
            "img_flag": "195_netherlands.png",
            "title_rus": "Нидерланды"
        },
        {
            "title": "Netherlands Antilles (Saba, Curacao, Bonaire, Sint Eustatius, Saint Martin)",
            "short_title": "ANT",
            "img_flag": "301_saba.png",
            "title_rus": "Нидерландские Антильские острова (Саба, Кюрасао, Бонэйр, Синт-Эстатиус, Сен-Мартен)"
        },
        {
            "title": "New Caledonia",
            "short_title": "NCL",
            "img_flag": "New-Caledonia_512px.png",
            "title_rus": "Новая Каледония"
        },
        {
            "title": "New Zealand",
            "short_title": "NZL",
            "img_flag": "048_new_zealand.png",
            "title_rus": "Новая Зеландия"
        },
        {
            "title": "Nicaragua",
            "short_title": "NIC",
            "img_flag": "014_nicaragua.png",
            "title_rus": "Никарагуа"
        },
        {
            "title": "Niger",
            "short_title": "NER",
            "img_flag": "203_niger.png",
            "title_rus": "Нигер"
        },
        {
            "title": "Nigeria",
            "short_title": "NGA",
            "img_flag": "010_nigeria.png",
            "title_rus": "Нигерия"
        },
        {
            "title": "North Korea",
            "short_title": "PRK",
            "img_flag": "North-Korea_512px.png",
            "title_rus": "Северная Корея"
        },
        {
            "title": "North Macedonia",
            "short_title": "MKD",
            "img_flag": "223_republic_of_macedonia.png",
            "title_rus": "Северная Македония"
        },
        {
            "title": "Northen Mariana Islands",
            "short_title": "MNP",
            "img_flag": "Northen-Mariana-Islands_512px.png",
            "title_rus": "Северные Марианские Острова"
        },
        {
            "title": "Norway",
            "short_title": "NOR",
            "img_flag": "058_norway.png",
            "title_rus": "Норвегия"
        },
        {
            "title": "Oman",
            "short_title": "OMN",
            "img_flag": "002_oman.png",
            "title_rus": "Оман"
        },
        {
            "title": "OnAir International networks",
            "short_title": "AAA",
            "img_flag": "ikonki_samolet-_-512px.png",
            "title_rus": "Международные сети OnAir"
        },
        {
            "title": "Pakistan",
            "short_title": "PAK",
            "img_flag": "031_pakistan.png",
            "title_rus": "Пакистан"
        },
        {
            "title": "Palestine State",
            "short_title": "PSE",
            "img_flag": "170_palestine.png",
            "title_rus": "Государство Палестина"
        },
        {
            "title": "Panama",
            "short_title": "PAN",
            "img_flag": "047_panama.png",
            "title_rus": "Панама"
        },
        {
            "title": "Papua New Guinea",
            "short_title": "PNG",
            "img_flag": "229_papua_new_guinea.png",
            "title_rus": "Папуа — Новая Гвинея"
        },
        {
            "title": "Paraguay",
            "short_title": "PRY",
            "img_flag": "Paraguay_512px.png",
            "title_rus": "Парагвай"
        },
        {
            "title": "Peru",
            "short_title": "PER",
            "img_flag": "074_peru.png",
            "title_rus": "Перу"
        },
        {
            "title": "Philippines",
            "short_title": "PHL",
            "img_flag": "076_philippines.png",
            "title_rus": "Филиппины"
        },
        {
            "title": "Poland",
            "short_title": "POL",
            "img_flag": "108_poland.png",
            "title_rus": "Польша"
        },
        {
            "title": "Portugal",
            "short_title": "PRT",
            "img_flag": "174_portugal.png",
            "title_rus": "Португалия"
        },
        {
            "title": "Puerto Rico",
            "short_title": "PRI",
            "img_flag": "005_puerto_rico.png",
            "title_rus": "Пуэрто-Рико"
        },
        {
            "title": "Qatar",
            "short_title": "QAT",
            "img_flag": "019_qatar.png",
            "title_rus": "Катар"
        },
        {
            "title": "Republic of the Congo",
            "short_title": "COG",
            "img_flag": "258_democratic_republic_of_congo.png",
            "title_rus": "Республика Конго"
        },
        {
            "title": "Reunion (La)",
            "short_title": "REU",
            "img_flag": "Reunion_512px.png",
            "title_rus": "Реюньон"
        },
        {
            "title": "Romania",
            "short_title": "ROU",
            "img_flag": "050_romania.png",
            "title_rus": "Румыния"
        },
        {
            "title": "Russia",
            "short_title": "RUS",
            "img_flag": "228_russia.png",
            "title_rus": "Россия"
        },
        {
            "title": "Rwanda, Republic of",
            "short_title": "RWA",
            "img_flag": "Rwanda_512px.png",
            "title_rus": "Руанда"
        },
        {
            "title": "Saint Barthélemy (French West Indies)",
            "short_title": "BLM",
            "img_flag": "Saint_Barthelemy_512px.png",
            "title_rus": "Сен-Бартельми (Французская Вест-Индия)"
        },
        {
            "title": "Saint Helena, Ascension and Tristan da Cunha",
            "short_title": "SHN",
            "img_flag": "Saint-Helena_-Ascension-and-Tristan-da-Cunha-_-512.png",
            "title_rus": "Острова Святой Елены, Вознесения и Тристан-да-Кунья"
        },
        {
            "title": "Saint Kitts and Nevis",
            "short_title": "KNA",
            "img_flag": "302_saint_kitis_and_nevis.png",
            "title_rus": "Сент-Китс и Невис"
        },
        {
            "title": "Saint Lucia",
            "short_title": "LCA",
            "img_flag": "139_st_lucia.png",
            "title_rus": "Сент-Люсия"
        },
        {
            "title": "Saint Martin (French West Indies)",
            "short_title": "MAF",
            "img_flag": "France_512px.png",
            "title_rus": "Сен-Мартен (Французская Вест-Индия)"
        },
        {
            "title": "Saint Vincent and the Grenadines",
            "short_title": "VCT",
            "img_flag": "160_st_vincent_and_the_grenadines.png",
            "title_rus": "Сент-Винсент и Гренадины"
        },
        {
            "title": "Samoa",
            "short_title": "WSM",
            "img_flag": "Samoa_512px.png",
            "title_rus": "Самоа"
        },
        {
            "title": "Sao Tome and Principe",
            "short_title": "STP",
            "img_flag": "San_tome_i_prinsipi-_-512.png",
            "title_rus": "Сан-Томе и Принсипи"
        },
        {
            "title": "Satellite telephone operator Thuraya",
            "short_title": "TTT",
            "img_flag": "ikonki_sputnik_512px.png",
            "title_rus": "Оператор спутниковой телефонной связи Турайя"
        },
        {
            "title": "Saudi Arabia",
            "short_title": "SAU",
            "img_flag": "059_saudi_arabia.png",
            "title_rus": "Саудовская Аравия"
        },
        {
            "title": "Senegal",
            "short_title": "SEN",
            "img_flag": "Senegal_512px.png",
            "title_rus": "Сенегал"
        },
        {
            "title": "Serbia",
            "short_title": "SRB",
            "img_flag": "035_serbia.png",
            "title_rus": "Сербия"
        },
        {
            "title": "Seychelles",
            "short_title": "SYC",
            "img_flag": "150_seychelles.png",
            "title_rus": "Сейшельские Острова"
        },
        {
            "title": "Sierra Leone",
            "short_title": "SLE",
            "img_flag": "149_sierra_leone.png",
            "title_rus": "Сьерра-Леоне"
        },
        {
            "title": "Singapore",
            "short_title": "SGP",
            "img_flag": "141_singapore.png",
            "title_rus": "Сингапур"
        },
        {
            "title": "Slovakia",
            "short_title": "SVK",
            "img_flag": "045_slovakia.png",
            "title_rus": "Словакия"
        },
        {
            "title": "Slovenia",
            "short_title": "SVN",
            "img_flag": "004_slovenia.png",
            "title_rus": "Словения"
        },
        {
            "title": "Solomon islands",
            "short_title": "SLB",
            "img_flag": "Solomon-islands_512px.png",
            "title_rus": "Соломоновы острова"
        },
        {
            "title": "Somalia",
            "short_title": "SOM",
            "img_flag": "198_somalia.png",
            "title_rus": "Сомали"
        },
        {
            "title": "South Africa",
            "short_title": "ZAF",
            "img_flag": "075_south_africa.png",
            "title_rus": "Южно-Африканская Республика"
        },
        {
            "title": "South Korea",
            "short_title": "KOR",
            "img_flag": "055_south_korea.png",
            "title_rus": "Южная Корея"
        },
        {
            "title": "South Ossetia",
            "short_title": "OST",
            "img_flag": "South_Ossetia-_-512px.png",
            "title_rus": "Южная Осетия"
        },
        {
            "title": "South Sudan",
            "short_title": "SSD",
            "img_flag": "161_south_sudan.png",
            "title_rus": "Южный Судан"
        },
        {
            "title": "Spain",
            "short_title": "ESP",
            "img_flag": "044_spain.png",
            "title_rus": "Испания"
        },
        {
            "title": "Sri Lanka",
            "short_title": "LKA",
            "img_flag": "238_sri_lanka.png",
            "title_rus": "Шри-Ланка"
        },
        {
            "title": "Sudan",
            "short_title": "SDN",
            "img_flag": "221_sudan.png",
            "title_rus": "Судан"
        },
        {
            "title": "Suriname",
            "short_title": "SUR",
            "img_flag": "197_suriname.png",
            "title_rus": "Суринам"
        },
        {
            "title": "Sweden",
            "short_title": "SWE",
            "img_flag": "073_sweden.png",
            "title_rus": "Швеция"
        },
        {
            "title": "Switzerland",
            "short_title": "CHE",
            "img_flag": "097_switzerland.png",
            "title_rus": "Швейцария"
        },
        {
            "title": "Syria",
            "short_title": "SYR",
            "img_flag": "039_syria.png",
            "title_rus": "Сирия"
        },
        {
            "title": "Taiwan",
            "short_title": "TWN",
            "img_flag": "080_taiwan.png",
            "title_rus": "Тайвань"
        },
        {
            "title": "Tajikistan",
            "short_title": "TJK",
            "img_flag": "236_tajikistan.png",
            "title_rus": "Таджикистан"
        },
        {
            "title": "Tanzania",
            "short_title": "TZA",
            "img_flag": "003_tanzania.png",
            "title_rus": "Танзания"
        },
        {
            "title": "Thailand",
            "short_title": "THA",
            "img_flag": "184_thailand.png",
            "title_rus": "Таиланд"
        },
        {
            "title": "Togo",
            "short_title": "TGO",
            "img_flag": "193_togo.png",
            "title_rus": "Того"
        },
        {
            "title": "Tonga",
            "short_title": "TON",
            "img_flag": "Tonga-_-512.png",
            "title_rus": "Тонга"
        },
        {
            "title": "Trinidad and Tobago",
            "short_title": "TTO",
            "img_flag": "235_trinidad_and_tobago.png",
            "title_rus": "Тринидад и Тобаго"
        },
        {
            "title": "Tunisia",
            "short_title": "TUN",
            "img_flag": "013_tunisia.png",
            "title_rus": "Тунис"
        },
        {
            "title": "Turkey",
            "short_title": "TUR",
            "img_flag": "119_turkey.png",
            "title_rus": "Турция"
        },
        {
            "title": "Turkmenistan",
            "short_title": "TKM",
            "img_flag": "192_turkmenistan.png",
            "title_rus": "Туркмения"
        },
        {
            "title": "Turks and Caicos islands",
            "short_title": "TCA",
            "img_flag": "156_turks_and_caicos.png",
            "title_rus": "Теркс и Кайкос (Брит.)"
        },
        {
            "title": "Uganda",
            "short_title": "UGA",
            "img_flag": "Uganda_512px.png",
            "title_rus": "Уганда"
        },
        {
            "title": "Ukraine",
            "short_title": "UKR",
            "img_flag": "065_ukraine.png",
            "title_rus": "Украина"
        },
        {
            "title": "United Arab Emirates",
            "short_title": "ARE",
            "img_flag": "068_united_arab_emirates.png",
            "title_rus": "ОАЭ"
        },
        {
            "title": "United Kingdom",
            "short_title": "GBR",
            "img_flag": "262_united_kingdom.png",
            "title_rus": "Великобритания"
        },
        {
            "title": "United States of America",
            "short_title": "USA",
            "img_flag": "153_united_states_of_america.png",
            "title_rus": "США"
        },
        {
            "title": "United States Virgin Islands",
            "short_title": "VIR",
            "img_flag": "188_virgin_islands.png",
            "title_rus": "Виргинские острова США"
        },
        {
            "title": "Uruguay",
            "short_title": "URY",
            "img_flag": "038_uruguay.png",
            "title_rus": "Уругвай"
        },
        {
            "title": "Uzbekistan",
            "short_title": "UZB",
            "img_flag": "220_uzbekistn.png",
            "title_rus": "Узбекистан"
        },
        {
            "title": "Vanuatu",
            "short_title": "VUT",
            "img_flag": "148_vanuatu.png",
            "title_rus": "Вануату"
        },
        {
            "title": "Venezuela",
            "short_title": "VEN",
            "img_flag": "057_venezuela.png",
            "title_rus": "Венесуэла"
        },
        {
            "title": "Vietnam",
            "short_title": "VNM",
            "img_flag": "164_vietnam.png",
            "title_rus": "Вьетнам"
        },
        {
            "title": "Yemen",
            "short_title": "YEM",
            "img_flag": "219_yemen.png",
            "title_rus": "Йемен"
        },
        {
            "title": "Zambia",
            "short_title": "ZMB",
            "img_flag": "016_zambia.png",
            "title_rus": "Замбия"
        },
        {
            "title": "Zimbabwe",
            "short_title": "ZWE",
            "img_flag": "242_zimbabwe.png",
            "title_rus": "Зимбабве"
        }
    ]
    let countries_flags = {
        "ABH": "Abkhazia-_-512px.png",
        "AFG": "122_afghanistan.png",
        "ALB": "117_albania.png",
        "DZA": "126_algeria.png",
        "AND": "102_andorra.png",
        "AGO": "124_angola.png",
        "AIA": "087_anguilla.png",
        "ATG": "104_antigua_and_barbuda.png",
        "ARG": "064_argentina.png",
        "ARM": "121_armenia.png",
        "ABW": "099_aruba.png",
        "AUS": "130_australia.png",
        "AUT": "189_austria.png",
        "AZE": "125_azerbaijan.png",
        "BHS": "194_bahamas.png",
        "BHR": "116_bahrain.png",
        "BGD": "128_bangladesh.png",
        "BRB": "111_barbados.png",
        "BLR": "110_belarus.png",
        "BEL": "054_belgium.png",
        "BLZ": "115_belize.png",
        "BEN": "098_benin.png",
        "BMU": "114_bermuda.png",
        "BTN": "094_bhutan.png",
        "BOL": "133_bolivia.png",
        "BIH": "113_bosnia_and_herzegovina.png",
        "BWA": "127_botswana.png",
        "BRA": "250_brazil.png",
        "VGB": "112_british_virgin_islands.png",
        "BRN": "107_brunei.png",
        "BGR": "135_bulgaria.png",
        "BFA": "118_burkina_faso.png",
        "BDI": "103_burundi.png",
        "CPV": "096_cape_verde.png",
        "KHM": "132_cambodia.png",
        "CMR": "106_cameroon.png",
        "CAN": "206_canada.png",
        "CYM": "092_cayman_islands.png",
        "CAF": "091_central_african_republic.png",
        "TCD": "Chad-_-512px.png",
        "CZE": "061_czech_republic.png",
        "CHL": "051_chile.png",
        "CHN": "261_china.png",
        "COL": "062_colombia.png",
        "COM": "Comoros_512px.png",
        "CRI": "131_costa_rica.png",
        "CIV": "245_ivory_coast.png",
        "HRV": "134_croatia.png",
        "CUB": "129_cuba.png",
        "CYP": "030_cyprus.png",
        "COD": "258_democratic_republic_of_congo.png",
        "DNK": "072_denmark.png",
        "DJI": "211_djibouti.png",
        "DOM": "018_dominican_republic.png",
        "DMA": "147_dominica.png",
        "TMP": "226_east_timor.png",
        "ECU": "049_ecuador.png",
        "EGY": "079_egypt.png",
        "SLV": "015_el_salvador.png",
        "GNQ": "Equatorial-Guinea-_-512px.png",
        "ERI": "Eritrea_512px.png",
        "EST": "257_estonia.png",
        "SWZ": "Eswatini_512px.png",
        "ETH": "001_ethiopia.png",
        "FLK": "Folklend-islands_512px.png",
        "FRO": "146_faroe_islands.png",
        "FJI": "145_fiji.png",
        "FIN": "052_finland.png",
        "FRA": "077_france.png",
        "GUF": "french_guiana_country_flag_4_512.png",
        "PYF": "french_polynesia-png-_-512px.png",
        "GAB": "186_gabon.png",
        "GMB": "159_gambia.png",
        "GEO": "256_georgia.png",
        "DEU": "066_germany.png",
        "GHA": "255_ghana.png",
        "GIB": "185_gibraltar.png",
        "GRC": "071_greece.png",
        "GRL": "183_greenland.png",
        "GRD": "182_grenada.png",
        "GLP": "450px_Unofficial_flag_of_Guadeloupe_local_.svg.png",
        "GUM": "Guam_512px.png",
        "GTM": "040_guatemala.png",
        "GGY": "Guernsey_512px.png",
        "GIN": "154_guinea.png",
        "GNB": "209_guinea_bissau.png",
        "GUY": "300_gayana.png",
        "HTI": "247_haiti.png",
        "HND": "027_honduras.png",
        "HKG": "067_hong_kong.png",
        "HUN": "053_hungary.png",
        "ISL": "041_iceland.png",
        "IND": "217_india.png",
        "IDN": "078_indonesia.png",
        "MMM": "ikonki_korabl-_-512px.png",
        "IRN": "063_iran.png",
        "IRQ": "007_iraq.png",
        "IRL": "070_ireland.png",
        "IMN": "Isle-of-Man_512px.png",
        "ISR": "060_israel.png",
        "ITA": "011_italy.png",
        "JAM": "026_jamaica.png",
        "JPN": "033_japan.png",
        "JEY": "Jersey-_-512px.png",
        "JOR": "042_jordan.png",
        "KAZ": "034_kazakhstan.png",
        "KEN": "029_kenya.png",
        "KIR": "179_kiribati.png",
        "KOS": "151_kosovo.png",
        "KWT": "178_kuwait.png",
        "KGZ": "208_kyrgyzstan.png",
        "LAO": "069_laos.png",
        "LVA": "032_latvia.png",
        "LBN": "008_lebanon.png",
        "LSO": "Lesotho_512px.png",
        "LBR": "218_liberia.png",
        "LBY": "225_libya.png",
        "LIE": "216_liechtenstein.png",
        "LTU": "025_lithuania.png",
        "LUX": "023_luxembourg.png",
        "MAC": "144_macao.png",
        "MDG": "253_madagascar.png",
        "MWI": "Malawi-_-512px.png",
        "MYS": "056_malaysia.png",
        "MDV": "232_maldives.png",
        "MLI": "Mali_512px.png",
        "MLT": "012_malta.png",
        "MTQ": "137_martinique.png",
        "MRT": "177_mauritania.png",
        "MUS": "021_mauritius.png",
        "MYT": "Mayotte_512px.png",
        "MEX": "239_mexico.png",
        "MDA": "231_moldova.png",
        "MCO": "043_monaco.png",
        "MNG": "Mongolia_512px.png",
        "MNE": "230_montenegro.png",
        "MSR": "175_montserrat.png",
        "MAR": "086_morocco.png",
        "MOZ": "006_mozambique.png",
        "MMR": "028_myanmar.png",
        "NAM": "Namibia_512px.png",
        "NRU": "173_nauru.png",
        "NPL": "249_nepal.png",
        "NLD": "195_netherlands.png",
        "ANT": "301_saba.png",
        "NCL": "New-Caledonia_512px.png",
        "NZL": "048_new_zealand.png",
        "NIC": "014_nicaragua.png",
        "NER": "203_niger.png",
        "NGA": "010_nigeria.png",
        "PRK": "North-Korea_512px.png",
        "MKD": "223_republic_of_macedonia.png",
        "MNP": "Northen-Mariana-Islands_512px.png",
        "NOR": "058_norway.png",
        "OMN": "002_oman.png",
        "AAA": "ikonki_samolet-_-512px.png",
        "PAK": "031_pakistan.png",
        "PSE": "170_palestine.png",
        "PAN": "047_panama.png",
        "PNG": "229_papua_new_guinea.png",
        "PRY": "Paraguay_512px.png",
        "PER": "074_peru.png",
        "PHL": "076_philippines.png",
        "POL": "108_poland.png",
        "PRT": "174_portugal.png",
        "PRI": "005_puerto_rico.png",
        "QAT": "019_qatar.png",
        "COG": "258_democratic_republic_of_congo.png",
        "REU": "Reunion_512px.png",
        "ROU": "050_romania.png",
        "RUS": "228_russia.png",
        "RWA": "Rwanda_512px.png",
        "BLM": "Saint_Barthelemy_512px.png",
        "SHN": "Saint-Helena_-Ascension-and-Tristan-da-Cunha-_-512.png",
        "KNA": "302_saint_kitis_and_nevis.png",
        "LCA": "139_st_lucia.png",
        "MAF": "France_512px.png",
        "VCT": "160_st_vincent_and_the_grenadines.png",
        "WSM": "Samoa_512px.png",
        "STP": "San_tome_i_prinsipi-_-512.png",
        "TTT": "ikonki_sputnik_512px.png",
        "SAU": "059_saudi_arabia.png",
        "SEN": "Senegal_512px.png",
        "SRB": "035_serbia.png",
        "SYC": "150_seychelles.png",
        "SLE": "149_sierra_leone.png",
        "SGP": "141_singapore.png",
        "SVK": "045_slovakia.png",
        "SVN": "004_slovenia.png",
        "SLB": "Solomon-islands_512px.png",
        "SOM": "198_somalia.png",
        "ZAF": "075_south_africa.png",
        "KOR": "055_south_korea.png",
        "OST": "South_Ossetia-_-512px.png",
        "SSD": "161_south_sudan.png",
        "ESP": "044_spain.png",
        "LKA": "238_sri_lanka.png",
        "SDN": "221_sudan.png",
        "SUR": "197_suriname.png",
        "SWE": "073_sweden.png",
        "CHE": "097_switzerland.png",
        "SYR": "039_syria.png",
        "TWN": "080_taiwan.png",
        "TJK": "236_tajikistan.png",
        "TZA": "003_tanzania.png",
        "THA": "184_thailand.png",
        "TGO": "193_togo.png",
        "TON": "Tonga-_-512.png",
        "TTO": "235_trinidad_and_tobago.png",
        "TUN": "013_tunisia.png",
        "TUR": "119_turkey.png",
        "TKM": "192_turkmenistan.png",
        "TCA": "156_turks_and_caicos.png",
        "UGA": "Uganda_512px.png",
        "UKR": "065_ukraine.png",
        "ARE": "068_united_arab_emirates.png",
        "GBR": "262_united_kingdom.png",
        "USA": "153_united_states_of_america.png",
        "VIR": "188_virgin_islands.png",
        "URY": "038_uruguay.png",
        "UZB": "220_uzbekistn.png",
        "VUT": "148_vanuatu.png",
        "VEN": "057_venezuela.png",
        "VNM": "164_vietnam.png",
        "YEM": "219_yemen.png",
        "ZMB": "016_zambia.png",
        "ZWE": "242_zimbabwe.png"
    }

    const throttle = (fn, delay) => {
        let lastCalled = 0;
        return (...args) => {
            let now = new Date().getTime();
            if (now - lastCalled < delay) {
                return;
            }
            lastCalled = now;
            return fn(...args);
        }
    }
    /* Popup Functions */
    const popupCloseAll = () => {
        const popupArray = document.querySelectorAll('.popup');

        if (popupArray.length > 0) {
            document.body.classList.remove('stop-scrolling');

            popupArray.forEach(element => {
                element.classList.remove('active');
            });
        }
    };
    const popupOpen = (popupName, delay = 0) => {
        const popup = document.querySelector(`.${popupName}`);

        if (popup !== null) {
            setTimeout(() => {
                popupCloseAll();

                document.body.classList.add("stop-scrolling");
                popup.classList.add('active');

                popup.addEventListener('click', (e) => {
                    e.target.classList.contains('popup-wrapper') || e.target.classList.contains('popup-close') ? popupCloseAll() : null;
                });
            }, delay);
        }
    };

    const onTapOrClick = (element, cb) => {
        let debounce;
        element.addEventListener("touchstart", throttle((event) => {
            if (debounce) {
                clearTimeout(debounce);
            }
            debounce = setTimeout(() => debounce = undefined, 2000);  // debounce is 1000ms, could easily be longer
            cb(event);
        }, 1000));
        element.addEventListener("click", throttle((event) => {
            event.preventDefault();
            if (debounce) {
                return;
            }
            cb(event);
        }, 400));
    };

    document.addEventListener('DOMContentLoaded', () => {
        // Video Settings

        const video = document.querySelector('.video');

        if (video !== null) {
            const videoItem = video.querySelector('.video__item');

            const videoControl = document.createElement('div'),
                videoControlImg = document.createElement('img');

            videoItem.removeAttribute('controls');

            videoControl.classList.add('video__control');
            videoControlImg.setAttribute('src', '/img/play.svg');
            videoControl.append(videoControlImg);
            video.append(videoControl);

            onTapOrClick(videoControl, () => {
                video.classList.toggle('playing');

                video.classList.contains('playing') ? (videoItem.play(), videoControlImg.setAttribute('src', '/img/pause.svg')) : (videoItem.pause(), videoControlImg.setAttribute('src', '/img/play.svg'));
            });
        }

        /* Welcome Modal Region List */
        const welcomeModalList = document.getElementById("dropdown-button-modal-welcome");

        if (welcomeModalList !== null) {
            welcomeModalList.addEventListener("click", function () {
                document.querySelector(".modal-welcome__dropdown-button").classList.toggle("open")
            });
        }

        /* Popup Init */
        const popupTriggers = document.querySelectorAll('*[data-popup-name]');

        if (popupTriggers.length > 0) {
            popupTriggers.forEach(element => {
                element.addEventListener('click', (e) => {
                    e.preventDefault();

                    const popupName = element.dataset.popupName;

                    popupOpen(popupName);
                });
            });
        }

        @if(Cookie::get('region') == null)
        popupOpen('popup-welcome');
        @endif

        /* Flip Card Settings */

        const flipCard = document.querySelectorAll('.flip-card');

        if (flipCard.length > 0) {
            flipCard.forEach(element => {
                element.addEventListener('mouseenter', throttle((e) => {
                    element.classList.add('active')
                }, 500));
                element.addEventListener('mouseleave', throttle((e) => {
                    element.classList.remove('active')
                }, 500));
                element.addEventListener('touchstart', throttle((e) => {
                    element.classList.toggle('active')
                }, 1000));
            });
        }
        let inputs_phone = document.querySelectorAll(".input_phone_modal")

        let preferredCountriesArray = []

        @if(Cookie::get('region') == "usa")
            preferredCountriesArray = ["us", "ru"];
        @elseif(Cookie::get('region') == "rus")
            preferredCountriesArray = ["ru", "us"];
        @endif

        const maskOptions = {mask: '00-000-0000'};


        inputs_phone.forEach((el) => {
            const mask = IMask(el, maskOptions);
            window.intlTelInput(el, {
                separateDialCode: true,
                preferredCountries: preferredCountriesArray,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.min.js",
            });
        })


        document.getElementById("submit_subs").addEventListener("click", () => {
            document.getElementById("popup_subs").classList.toggle("active")
        })
        document.querySelectorAll(".open_subs").forEach((el) => {
            el.addEventListener("click", () => {
                document.getElementById("popup_subs").classList.toggle("active")
            })
        })
        document.querySelectorAll(".open_callback").forEach((el) => {
            el.addEventListener("click", () => {
                document.getElementById("popup_callback").classList.toggle("active")
            })
        })
        document.getElementById("popup_subs_close").addEventListener("click", () => {
            document.getElementById("popup_subs").classList.toggle("active")
        })
        document.getElementById("popup_callback_close").addEventListener("click", () => {
            document.getElementById("popup_callback").classList.toggle("active")
        })

        let plan_popup_input_phone = document.getElementById("input_phone")
        let plan_popup_input_email = document.getElementById("input_email")

        document.getElementById("select_method").addEventListener("change", (e) => {
            let value = e.target.value

            if (value === "1") {
                plan_popup_input_phone.classList.remove("display-none")
                plan_popup_input_email.classList.add("display-none")
            } else if (value === "2") {
                plan_popup_input_phone.classList.add("display-none")
                plan_popup_input_email.classList.remove("display-none")
            }
        })

        {{--let popup_plan_select_countries = document.getElementById("popup-plan-select-countries")--}}
        {{--for(let country of countries) {--}}
        {{--    let option = document.createElement("option")--}}
        {{--    option.value = country["short_title"]--}}
        {{--    let span = document.createElement("span")--}}

        {{--    if("{{App::getLocale()}}" === "ru") {--}}
        {{--        span.innerText = country["title_rus"]--}}
        {{--    }else if("{{App::getLocale()}}" === "en") {--}}
        {{--        span.innerText = country["title"]--}}
        {{--    }--}}

        {{--    popup_plan_select_countries.appendChild(option).appendChild(span)--}}
        {{--}--}}

        {{--function format_popup_plan_select_countries (option) {--}}
        {{--    if(typeof option["id"] !== "undefined") {--}}
        {{--        let src = countries_flags[option.id]--}}
        {{--        let ob = '<span class="country-select-span"><img src="/img/flags/'+ src +'" />' + option.text + "</span>"--}}
        {{--        return ob;--}}
        {{--    }--}}
        {{--}--}}

        {{--$(popup_plan_select_countries).select2({--}}
        {{--    templateResult: format_popup_plan_select_countries,--}}
        {{--    width: "100%",--}}git -v
        {{--    placeholder: "Выберете страну в которой нужен телефон",--}}
        {{--    multiple: true,--}}
        {{--    escapeMarkup: function (m) {--}}
        {{--        return m;--}}
        {{--    }--}}
        {{--});--}}
    });
</script>
<link rel="stylesheet" href="/libs/correct.css">
<script src="/libs/correct.js"></script>
@yield('scripts_before_closed_body')
</body>
</html>
