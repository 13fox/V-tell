@extends('layout.main')

@section('content')
    <main class="page-content">
        <!--page header-->
        <section class="section section-banner tupaa-pizda">
            <div class="section-banner__wrapper section-banner__wrapper-plan">
                <a href="#" id="scroll_up"><img src="/img/naverh.png"/ alt="" title=""></a>
                <a href="#" id="scroll_down"><img src="/img/navniz.png"/ alt="" title=""></a>
                <div class="section-banner__video">
                    <video playsinline="" preload="auto" muted="" loop="" autoplay="" class="video__item" poster="/img/bridge-poster.webp">
                        <source src="../videos/bridge.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="container">
                    <div class="section-banner__content">
                        <div class="section__info">
                            <div class="section__subtitle" data-animate="fade-top">
                                <p class="section__subtitle-label">{!! __('about_us_banner_label') !!}</p>
                            </div>
                            <div class="section__title" data-animate="fade-top">
                                <h2 class="section__title-label section__title-label-biggest section-banner__title @if(App::getLocale() == 'ru') transform-none @endif">{!! __('about_us_banner_title') !!}</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="section-plan__wrapper">
                        <div class="section__info">
                            <div class="section__subtitle">
                                <p class="section__subtitle-label" data-animate="fade-top">{!! __('about_us_section_1_label') !!}</p>
                            </div>
                            <div class="section__title section__title-medium">
                                <h2 class="section__title-label transform-none" data-animate="fade-top">{!! __('about_us_section_1_desc') !!}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- why tell-->
        <section class="section section-black section-why section-bordered">
            <div class="section__wrapper section__wrapper-why">
                <div class="container">
                    <div class="section-why__grid">
                        <div class="section-why__grid-item">
                            <div class="section-why__img">
                                <img src="/img/why-img.png" alt="" class="section-why__img-item">
                            </div>
                        </div>
                        <div class="section-why__grid-item">
                            <div class="section__info">
                                <div class="section__title">
                                    <h2 class="section__title-label section__title-label-big @if(App::getLocale() == 'ru') transform-none @endif">{!! __('about_us_section_2_label_big') !!}</h2>
                                    <div class="section__desc">
                                        <p class="section__desc-text align_justify">{{ __('about_us_section_2_desc_text_1') }}</p>
                                        <p class="section__desc-text align_justify">{{ __('about_us_section_2_desc_text_2') }}</p>
                                        <p class="section__desc-text align_justify">{{ __('about_us_section_2_desc_text_3') }}</p>
                                    </div>
                                </div>
                                <div class="about-us__button">
                                    <button class="become__button open_subs">{!! __('become_subs') !!}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-banner">
            <div class="section-banner__wrapper section-banner__wrapper-map">
                <div class="section-banner__video">
                    <video playsinline="" preload="auto" muted="" loop="" autoplay="" class="video__item">
                        <source src="../videos/clouds.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="container">
                    <div class="section-banner__image">
                        <img src="/img/about-map.webp" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
