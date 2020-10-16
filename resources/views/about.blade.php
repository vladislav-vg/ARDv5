@include('blocks.head')

@include('blocks.top_elements')
      <!-- - Cursor Follower-->
      <!-- PAGE HEADER -->
@extends('blocks.header')
      <!-- - PAGE HEADER -->
      <!-- PAGE MAIN -->
      <div class="js-smooth-scroll bg-light-1" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead section-fullheight text-center text-lg-right pt-large pt-md-0" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
            <div class="section-masthead__inner section-fullheight__inner section-fullheight__inner_mobile-auto">
              <div class="row no-gutters h-100 align-items-center">
                <div class="col-lg-6 h-100">
                  <div class="container-fluid container-fluid_paddings h-100 container_py-xs-0">
                    <div class="row align-items-center h-100">
                      <div class="col">
                        <header class="section-masthead__header justify-content-center">
                          <div class="section-masthead__subheading small-caps mt-0 mb-1 mb-md-2 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>{!! $aboutDetail->profession !!}</span></div>
                          <div class="w-100"></div>
                          <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                            <h1 class="h1 mt-0 mb-0">{!! $aboutDetail->title !!}</h1>
                          </div>
                        </header>
                      </div>
                    </div>
                    <div class="section-masthead__wrapper-scroll-down section-masthead__wrapper-scroll-down_right d-none d-lg-block">
                      <div class="circle-button js-circle-button" data-arts-os-animation="true">
                        <!-- curved label -->
                        <div class="circle-button__outer">
                          <div class="circle-button__wrapper-label">
                            <div class="circle-button__label small-caps">Scroll Down</div>
                          </div>
                        </div>
                        <!-- - curved label -->
                        <!-- geometry wrapper -->
                        <div class="circle-button__inner">
                          <div class="circle-button__circle" data-arts-scroll-down="data-arts-scroll-down" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0">
                            <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                            </svg>
                          </div>
                          <!-- browsers with touch support -->
                          <div class="circle-button__icon circle-button__icon-touch">
                            <svg enable-background="new 0 0 64 64" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg">
                              <path d="m32 8c-1.104 0-2 .896-2 2v39.899l-14.552-15.278c-.761-.799-2.026-.832-2.828-.069-.8.762-.831 2.027-.069 2.827l16.62 17.449c.756.756 1.76 1.172 2.829 1.172 1.068 0 2.073-.416 2.862-1.207l16.586-17.414c.762-.8.73-2.065-.069-2.827-.799-.763-2.065-.731-2.827.069l-14.552 15.342v-39.963c0-1.104-.896-2-2-2z"></path>
                            </svg>
                          </div>
                          <!-- - browsers with touch support -->
                          <!-- - browsers without touch support -->
                          <div class="circle-button__icon circle-button__icon-mouse">
                            <svg class="svg-mouse" width="23px" height="35px" viewBox="0 0 23 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <!-- border -->
                              <path class="svg-mouse__border" d="M11.5,0 C5.15875132,0 0,5.23135343 0,11.6610111 L0,23.3396542 C0,29.7691456 5.15875132,35 11.5,35 C17.8412487,35 23,29.7693119 23,23.3396542 L23,11.6610111 C23,5.23135343 17.8410847,0 11.5,0 Z M21.7222404,23.3396542 C21.7222404,29.0545544 17.136538,33.7037222 11.5,33.7037222 C5.86346203,33.7037222 1.27775956,29.0545544 1.27775956,23.3396542 L1.27775956,11.6610111 C1.27775956,5.946111 5.86346203,1.29627781 11.5,1.29627781 C17.136538,1.29627781 21.7222404,5.94594466 21.7222404,11.6610111 L21.7222404,23.3396542 Z"></path>
                              <!-- - border -->
                              <!-- wheel -->
                              <path class="svg-mouse__wheel" d="M11.5,4 C11.2238902,4 11,4.28321727 11,4.63321727 L11,10.3667827 C11,10.7167827 11.2238902,11 11.5,11 C11.7761098,11 12,10.7167827 12,10.3667827 L12,4.63321727 C11.9998717,4.28321727 11.7761098,4 11.5,4 Z"></path>
                              <!-- - wheel -->
                            </svg>
                          </div>
                          <!-- - browsers without touch support -->
                        </div>
                        <!-- - geometry wrapper -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 align-self-stretch">
                  <div class="section-image section-masthead__background section-masthead__background_halfscreen section-masthead__background_halfscreen-gutters mt-small mt-md-0">
                    <div class="section-image__wrapper js-transition-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                      <div class="js-transition-img__transformed-el">
                        <div class="lazy-bg" data-src="{{ asset(Voyager::image($aboutDetail->image)) }}"></div>
                      </div>
                    </div>
                    <div class="section-masthead__bg bg-white"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section MASTHEAD -->
          <!-- section CONTENT #1 -->
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <section class="section section-content clearfix pt-medium text-center" data-arts-os-animation="data-arts-os-animation">
                  <div class="section-content__inner">
                    <div class="w-100"></div>
                    <div class="section__headline mb-1 mb-md-2 mx-auto"></div>
                    <div class="w-100"></div>
                    <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                      <h3>{!! $aboutDetail->status !!}</h3>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <!-- - section CONTENT #1 -->
          <!-- aside COUNTERS -->
          <aside class="aside aside-counters section pt-xsmall text-center">
            <div class="container">
              <div class="row justify-content-center">
                <!-- counter -->
                <div class="aside-counters__wrapper-item col-12">
                  <div class="counter js-counter" data-counter-start="0" data-counter-target="25" data-counter-duration="4">
                    <!-- animated number -->
                    <div class="counter__number js-counter__number">{!! $aboutDetail->time !!}</div>
                    <!-- - animated number -->
                    <div class="counter__label">{!! $aboutDetail->title2 !!}</div>
                  </div>
                </div>
                <!-- - counter -->
              </div>
            </div>
          </aside>
          <!-- - aside COUNTERS -->
          <!-- section SERVICE # 1 -->

          @php $x = 1 @endphp
          @foreach ($aboutWork as $oneWork) 
          @php $x++ @endphp
          @if( $x % 2 == 1) 
          <section class="section section-services section-content mb-medium mt-medium" data-arts-os-animation="data-arts-os-animation">
            <div class="container section-services__container">
              <div class="row no-gutters align-items-center">
                <div class="col-lg-5 order-lg-2">
                  <div class="section-content__image overflow">
                    <div class="section-content__image-inner">
                      <section class="section section-image">
                        <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                          <div class="lazy"><img data-src="{{ asset(Voyager::image($oneWork->image)) }}" src="#" alt="" width="1280" height="1920"/></div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 order-lg-1">
                  <div class="section-services__wrapper-content">
                    <section class="section section-content clearfix container-fluid pt-md-0 pb-md-0 pt-small pl-md-0" data-arts-os-animation="data-arts-os-animation">
                      <div class="section-content__inner">
                        <div class="w-100"></div>
                        <div class="section-content__heading split-text js-split-text mb-0-5" data-split-text-type="lines,words" data-split-text-set="words">
                          <div class="small-caps">{{ $oneWork->text2 }}</div>
                        </div>
                        <div class="w-100"></div>
                        <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                          <h2>{{ $oneWork->text3 }}</h2>
                        </div>
                        <div class="w-100"></div>
                        <div class="section-content__text split-text js-split-text mt-1" data-split-text-type="lines" data-split-text-set="lines">
                          <p>{{ $oneWork->text4 }}</p>
                        </div>
                        <div class="w-100"></div>
                        <div class="section-content__button mt-2"><a class="d-inline-block no-highlight" href="portfolio-details.php">
                            <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                              <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                              </svg>
                              <div class="arrow__pointer arrow-right__pointer"></div>
                              <div class="arrow__triangle"></div>
                            </div></a>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-services__wrapper-letter section-services__wrapper-letter_left">
              <div class="section-services__letter" data-arts-parallax="element" data-arts-parallax-y="-30%">{{ $oneWork->text1 }}</div>
            </div>
          </section>
          @else 
          
          <section class="section section-services section-content mb-medium mt-medium" data-arts-os-animation="data-arts-os-animation">
            <div class="container-fluid no-gutters section-services__container">
              <div class="row no-gutters align-items-center">
                <div class="col-lg-7 order-lg-1">
                  <div class="section-content__image overflow">
                    <div class="section-content__image-inner">
                      <section class="section section-image">
                        <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                          <div class="lazy"><img data-src="{{ asset(Voyager::image($oneWork->image)) }}" src="#" alt="" width="1920" height="1280"/></div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 order-lg-2">
                  <div class="section-services__wrapper-content">
                    <section class="section section-content clearfix container-fluid pt-md-0 pb-md-0 pt-small" data-arts-os-animation="data-arts-os-animation">
                      <div class="section-content__inner">
                        <div class="w-100"></div>
                        <div class="section-content__heading split-text js-split-text mb-0-5" data-split-text-type="lines,words" data-split-text-set="words">
                          <div class="small-caps">{{ $oneWork->text2 }}</div>
                        </div>
                        <div class="w-100"></div>
                        <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                          <h2>{{ $oneWork->text3 }}</h2>
                        </div>
                        <div class="w-100"></div>
                        <div class="section-content__text split-text js-split-text mt-1" data-split-text-type="lines" data-split-text-set="lines">
                          <p>{{ $oneWork->text4 }}</p>
                        </div>
                        <div class="w-100"></div>
                        <div class="section-content__button mt-2"><a class="d-inline-block no-highlight" href="{{ $oneWork->text5 }}">
                            <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                              <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                              </svg>
                              <div class="arrow__pointer arrow-right__pointer"></div>
                              <div class="arrow__triangle"></div>
                            </div></a>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <div class="section-services__wrapper-letter section-services__wrapper-letter_right">
                <div class="section-services__letter" data-arts-parallax="element" data-arts-parallax-y="-30%">{{ $oneWork->text1 }}</div>
              </div>
            </div>
          </section>
          @endif
          
          @endforeach
          <!-- - section SERVICE # 1 -->
          

          <!-- section TESTIMONIALS -->
          <section class="section section-testimonials bg-white pt-medium pb-medium pb-medium">
            <div class="swiper-container slider slider-testimonials js-slider-testimonials" data-speed="2000">
              <div class="swiper-wrapper">
                <!-- start -->
                @foreach ($aboutFeedback as $aboutFeed)
                <div class="swiper-slide">
                  <div class="container figure-testimonial text-center">
                    <div class="row justify-content-center">
                      <!-- content -->

                      <div class="col-lg-8">
                        <div class="figure-testimonial__sign mx-auto"><img src="img/general/quote-black.svg" alt="alt"/></div>
                        <div class="slider-testimonials__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                          <blockquote class="figure-testimonial__text">{{ $aboutFeed->text1 }}</blockquote>
                          <div class="figure-testimonial__author small-caps mt-2">{{ $aboutFeed->text2 }}</div>
                        </div>
                      </div>
                      <!-- - content -->
                    </div>
                  </div>
                </div>
                @endforeach
                <!-- -! end -->
                
                
                
                
              </div>
              <!-- slider FOOTER -->
              <div class="container slider-testimonials__footer mt-xsmall">
                <div class="row justify-content-center align-items-center slider-testimonials__row no-gutters">
                  <!-- slider DOTS -->
                  <div class="col-auto">
                    <div class="slider__dots js-slider__dots">
                      <div class="slider__dot slider__dot_active">
                        <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                        </svg>
                      </div>
                      <div class="slider__dot">
                        <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                        </svg>
                      </div>
                      <div class="slider__dot">
                        <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                        </svg>
                      </div>
                      <div class="slider__dot">
                        <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <!-- - slider DOTS -->
                </div>
              </div>
              <!-- - slider FOOTER -->
              <!-- slider ARROWS -->
              <div class="slider-testimonials__arrows container-fluid">
                <div class="slider__arrow slider__arrow_left js-slider__arrow-prev">
                  <div class="arrow arrow-left js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                    </svg>
                    <div class="arrow__pointer arrow-left__pointer"></div>
                    <div class="arrow__triangle"></div>
                  </div>
                </div>
                <div class="slider__arrow slider__arrow_right js-slider__arrow-next">
                  <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                    </svg>
                    <div class="arrow__pointer arrow-right__pointer"></div>
                    <div class="arrow__triangle"></div>
                  </div>
                </div>
              </div>
              <!-- - slider ARROWS -->
            </div>
          </section>
          <!-- - section TESTIMONIALS -->
        </main>

@include('blocks.footer')