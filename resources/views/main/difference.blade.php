@extends('layout.main')

@section('content')
    <main class="page-content">
        <!--page header-->
        <section class="section section-banner">
            <div class="section-banner__wrapper section-banner__wrapper-difference">
                <div class="section-banner__video">
                    <video playsinline="" preload="auto" muted="" loop="" autoplay="" class="video__item" poster="/img/bridge-poster.webp">
                        <source src="../videos/bridge.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="container">
                    <div class="section-banner__content">
                        <div class="section__info">
                            <div class="section__subtitle" data-animate="fade-top">
                                <p class="section__subtitle-label"
                                   style="text-transform: uppercase">{{ __('advantages') }}</p>
                            </div>
                            <div class="section__title" data-animate="fade-top">
                                <h2 class="section__title-label section__title-label-biggest section-banner__title">{!! __('difference_text_br') !!}</h2>
                            </div>
                        </div>

                    </div>
                </div>
             <!--   <wix-video id="videoContainer_mediajg2kqepn1" data-video-info="{&quot;fittingType&quot;:&quot;fill&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;hasBgScrollEffect&quot;:&quot;&quot;,&quot;bgEffectName&quot;:&quot;&quot;,&quot;videoId&quot;:&quot;11062b_4d1ce144268d4ffda4eb0e5d39af01d0&quot;,&quot;videoWidth&quot;:1920,&quot;videoHeight&quot;:1080,&quot;qualities&quot;:[{&quot;quality&quot;:&quot;480p&quot;,&quot;size&quot;:409920,&quot;url&quot;:&quot;video/11062b_4d1ce144268d4ffda4eb0e5d39af01d0/480p/mp4/file.mp4&quot;},{&quot;quality&quot;:&quot;720p&quot;,&quot;size&quot;:921600,&quot;url&quot;:&quot;video/11062b_4d1ce144268d4ffda4eb0e5d39af01d0/720p/mp4/file.mp4&quot;},{&quot;quality&quot;:&quot;1080p&quot;,&quot;size&quot;:2073600,&quot;url&quot;:&quot;video/11062b_4d1ce144268d4ffda4eb0e5d39af01d0/1080p/mp4/file.mp4&quot;}],&quot;isVideoDataExists&quot;:&quot;1&quot;,&quot;videoFormat&quot;:&quot;mp4&quot;,&quot;playbackRate&quot;:1,&quot;autoPlay&quot;:true,&quot;containerId&quot;:&quot;mediajg2kqepn1&quot;,&quot;animatePoster&quot;:&quot;none&quot;}" class="_3hRfg bgVideo _1PtAB"><video id="mediajg2kqepn1_video" class="_3vVMz" role="presentation" crossorigin="anonymous" playsinline="" preload="auto" muted="" loop="" tabindex="-1" autoplay="" src="https://video.wixstatic.com/video/11062b_4d1ce144268d4ffda4eb0e5d39af01d0/1080p/mp4/file.mp4" style="height: 100%; width: 100%; object-fit: cover; object-position: center center; opacity: 1;"></video><wix-image id="mediajg2kqepn1_img" class="_1-6YJ _2IRVt _1QuqS bgVideoposter" data-image-info="{&quot;containerId&quot;:&quot;mediajg2kqepn1&quot;,&quot;targetWidth&quot;:980,&quot;targetHeight&quot;:867,&quot;alignType&quot;:&quot;center&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;imageData&quot;:{&quot;width&quot;:1920,&quot;height&quot;:1080,&quot;uri&quot;:&quot;11062b_4d1ce144268d4ffda4eb0e5d39af01d0f000.jpg&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;quality&quot;:{&quot;unsharpMask&quot;:{&quot;radius&quot;:0.33,&quot;amount&quot;:1,&quot;threshold&quot;:0}},&quot;devicePixelRatio&quot;:1}}" data-has-bg-scroll-effect="" data-bg-effect-name="" data-has-ssr-src="" data-src="https://static.wixstatic.com/media/11062b_4d1ce144268d4ffda4eb0e5d39af01d0f000.jpg/v1/fill/w_1263,h_867,al_c,q_85,usm_0.33_1.00_0.00,enc_auto/11062b_4d1ce144268d4ffda4eb0e5d39af01d0f000.jpg" style="opacity: 0;"><img src="https://static.wixstatic.com/media/11062b_4d1ce144268d4ffda4eb0e5d39af01d0f000.jpg/v1/fill/w_1263,h_867,al_c,q_85,usm_0.33_1.00_0.00,enc_auto/11062b_4d1ce144268d4ffda4eb0e5d39af01d0f000.jpg" alt="" style="width: 1263px; height: 867px; object-fit: cover; object-position: 50% 50%;"></wix-image></wix-video>-->

            </div>
        </section>
        <!--difference section-->
        <section class="section section-grey-black difference-section">
            <div class="difference-section-world">
                <img src="/img/world.png" alt="">
            </div>
            <div class="container difference-container">
                <div class="section-difference__content">
                    <div class="difference-grid">
                        <div class="difference-grid__wrapper">
                            <div class="difference-grid__block">
                                <div class="advantages-item flip-card" tabindex="0">
                                    <div class="advantages-item__wrapper flip-card__wrapper">
                                        <div class="flip-card__front advantages-item__front">
                                            <div class="advantages-item__icon">
                                                <div class="icon icon-one-rate ">
                                                    <img src="/img/svg/one-rate.svg">
                                                </div>
                                            </div>
                                            <div class="advantages-item__content">
                                                <p class="advantages-item__label">{{ __('difference_label_1') }}</p>
                                            </div>
                                        </div>
                                        <div class="flip-card__back advantages-item__back">
                                            <div class="advantages-item__text-layer">
                                                <p class="advantages-item__text">{{ __('difference_text_1') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="difference-grid__block">
                                <div class="advantages-item flip-card" tabindex="0">
                                    <div class="advantages-item__wrapper flip-card__wrapper">
                                        <div class="flip-card__front advantages-item__front">
                                            <div class="advantages-item__icon">
                                                <div class="icon icon-internet">
                                                    <img src="/img/svg/internet.svg">
                                                </div>
                                            </div>
                                            <div class="advantages-item__content">
                                                <p class="advantages-item__label">{!! __('difference_label_2') !!}</p>
                                            </div>
                                        </div>
                                        <div class="flip-card__back advantages-item__back">
                                            <div class="advantages-item__text-layer">
                                                <p class="advantages-item__text">{{ __('difference_text_2') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="difference-grid__block">
                                <div class="advantages-item flip-card" tabindex="0">
                                    <div class="advantages-item__wrapper flip-card__wrapper">
                                        <div class="flip-card__front advantages-item__front">
                                            <div class="advantages-item__icon">
                                                <div class="icon icon-one-sim-card ">
                                                    <img src="/img/svg/one-sim-card.svg">
                                                </div>
                                            </div>
                                            <div class="advantages-item__content">
                                                <p class="advantages-item__label">{!! __('difference_label_3') !!}</p>
                                            </div>
                                        </div>
                                        <div class="flip-card__back advantages-item__back">
                                            <div class="advantages-item__text-layer">
                                                <p class="advantages-item__text">{{ __('difference_text_3') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="difference-grid__block">
                                <div class="advantages-item flip-card" tabindex="0">
                                    <div class="advantages-item__wrapper flip-card__wrapper">
                                        <div class="flip-card__front advantages-item__front">
                                            <div class="advantages-item__icon">
                                                <div class="icon icon-overseas-charge ">
                                                    <img src="/img/svg/overseas-charge.svg">
                                                </div>
                                            </div>
                                            <div class="advantages-item__content">
                                                <p class="advantages-item__label">{!! __('difference_label_4') !!}</p>
                                            </div>
                                        </div>
                                        <div class="flip-card__back advantages-item__back">
                                            <div class="advantages-item__text-layer">
                                                <p class="advantages-item__text">{!! __('difference_text_4') !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="difference-grid__block">
                                <div class="advantages-item flip-card" tabindex="0">
                                    <div class="advantages-item__wrapper flip-card__wrapper">
                                        <div class="flip-card__front advantages-item__front">
                                            <div class="advantages-item__icon">
                                                <div class="icon icon-local ">
                                                    <img src="/img/svg/local.svg">
                                                </div>
                                            </div>
                                            <div class="advantages-item__content">
                                                <p class="advantages-item__label">{!! __('difference_label_5') !!}</p>
                                            </div>
                                        </div>
                                        <div class="flip-card__back advantages-item__back">
                                            <div class="advantages-item__text-layer">
                                                <p class="advantages-item__text">{{ __('difference_text_5') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="difference-grid__block">
                                <div class="advantages-item flip-card" tabindex="0">
                                    <div class="advantages-item__wrapper flip-card__wrapper">
                                        <div class="flip-card__front advantages-item__front">
                                            <div class="advantages-item__icon">
                                                <div class="icon icon-IP ">
                                                    <img src="/img/svg/IP.svg">
                                                </div>
                                            </div>
                                            <div class="advantages-item__content">
                                                <p class="advantages-item__label">{!! __('difference_label_6') !!}</p>
                                            </div>
                                        </div>
                                        <div class="flip-card__back advantages-item__back">
                                            <div class="advantages-item__text-layer">
                                                <p class="advantages-item__text">{{ __('difference_text_6') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="difference-grid__block">
                                <div class="advantages-item flip-card" tabindex="0">
                                    <div class="advantages-item__wrapper flip-card__wrapper">
                                        <div class="flip-card__front advantages-item__front">
                                            <div class="advantages-item__icon">
                                                <div class="icon icon-switch-off ">
                                                    <img src="/img/svg/switch-off.svg">
                                                </div>
                                            </div>
                                            <div class="advantages-item__content">
                                                <p class="advantages-item__label">{!! __('difference_label_7') !!}</p>
                                            </div>
                                        </div>
                                        <div class="flip-card__back advantages-item__back">
                                            <div class="advantages-item__text-layer">
                                                <p class="advantages-item__text">{{ __('difference_text_7') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="difference-grid__block">
                                <div class="advantages-item flip-card" tabindex="0">
                                    <div class="advantages-item__wrapper flip-card__wrapper">
                                        <div class="flip-card__front advantages-item__front">
                                            <div class="advantages-item__icon">
                                                <img src="/img/svg/difference_8.svg" class="icon icon-one-rate">
                                            </div>
                                            <div class="advantages-item__content">
                                                <p class="advantages-item__label">{!! __('difference_label_8') !!}</p>
                                            </div>
                                        </div>
                                        <div class="flip-card__back advantages-item__back">
                                            <div class="advantages-item__text-layer">
                                                <p class="advantages-item__text">{{ __('difference_text_8') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="difference-grid__block">
                                <div class="advantages-item flip-card" tabindex="0">
                                    <div class="advantages-item__wrapper flip-card__wrapper">
                                        <div class="flip-card__front advantages-item__front">
                                            <div class="advantages-item__icon">
                                                <img src="/img/difference_9.svg" class="icon icon-one-rate">
                                            </div>
                                            <div class="advantages-item__content">
                                                <p class="advantages-item__label">{!! __('difference_label_9') !!}</p>
                                            </div>
                                        </div>
                                        <div class="flip-card__back advantages-item__back">
                                            <div class="advantages-item__text-layer">
                                                <p class="advantages-item__text"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="difference-grid__block">
                                <div class="advantages-item flip-card" tabindex="0">
                                    <div class="advantages-item__wrapper flip-card__wrapper">
                                        <div class="flip-card__front advantages-item__front">
                                            <div class="advantages-item__icon">
                                                <img src="/img/difference_10.svg" class="icon icon-one-rate">
                                            </div>
                                            <div class="advantages-item__content">
                                                <p class="advantages-item__label">{!! __('difference_label_10') !!}</p>
                                            </div>
                                        </div>
                                        <div class="flip-card__back advantages-item__back">
                                            <div class="advantages-item__text-layer">
                                                <p class="advantages-item__text"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="difference-grid__block">
                                <div class="advantages-item flip-card" tabindex="0">
                                    <div class="advantages-item__wrapper flip-card__wrapper">
                                        <div class="flip-card__front advantages-item__front">
                                            <div class="advantages-item__icon">
                                                <img src="/img/difference_11.svg" class="icon icon-one-rate">
                                            </div>
                                            <div class="advantages-item__content">
                                                <p class="advantages-item__label">{!! __('difference_label_11') !!}</p>
                                            </div>
                                        </div>
                                        <div class="flip-card__back advantages-item__back">
                                            <div class="advantages-item__text-layer">
                                                <p class="advantages-item__text"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="difference-grid__block">
                                <div class="advantages-item flip-card" tabindex="0">
                                    <div class="advantages-item__wrapper flip-card__wrapper">
                                        <div class="flip-card__front advantages-item__front">
                                            <div class="advantages-item__icon">
                                                <img src="/img/difference_12.svg" class="icon icon-one-rate">
                                            </div>
                                            <div class="advantages-item__content">
                                                <p class="advantages-item__label">{!! __('difference_label_12') !!}</p>
                                            </div>
                                        </div>
                                        <div class="flip-card__back advantages-item__back">
                                            <div class="advantages-item__text-layer">
                                                <p class="advantages-item__text"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section__desc">
                        <p class="section__desc-text align_justify">
                            {!! __('difference_patented') !!}
                        </p>
                        <p class="section__desc-text align_justify">
                            {!! __('difference_patented_bottom') !!}
                        </p>
                        <p class="section__desc-text flex-center">
                            @if(App::getLocale() == 'ru')
                                <a href="/docs/learn_more_ru.pdf"
                                   class="button button-file">{!! __('difference_learn_more') !!}</a>
                            @elseif(App::getLocale() == 'en')
                                <a href="/docs/learn_more_en.pdf"
                                   class="button button-file">{!! __('difference_learn_more') !!}</a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
