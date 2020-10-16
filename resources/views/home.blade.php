@include('blocks.head')

@include('blocks.top_elements')
      <!-- - Cursor Follower-->
      <!-- PAGE HEADER -->
@extends('blocks.header')
      <!-- - PAGE HEADER -->
      <!-- PAGE MAIN -->
      <div class="js-smooth-scroll bg-dark-1" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead d-none" data-background-color="var(--color-dark-1)"></section>
          <!-- - section MASTHEAD -->
          <!-- section PROJECTS SLIDER FULLSCREEN -->
          <section class="section section-fullheight section-projects section-projects-slider bg-dark-1 overflow" data-arts-theme-text="light" data-arts-os-animation>
            <div class="section-fullheight__inner section-fullheight__inner_mobile text-center">
              <div class="slider slider-fullscreen-projects js-slider-fullscreen-projects js-slider">
                <!-- slider CONTENT -->
                <div class="slider-fullscreen-projects__content swiper-container js-slider-fullscreen-projects__content">
                  <div class="swiper-wrapper">
                   
                    @foreach($mainSlides as $slide)
                    <div class="swiper-slide">
                      <h2 class="h1 slider__heading js-split-text" data-split-text-type="lines, words, chars">{{ $slide->name }}</h2>
                    </div>
                    @endforeach
                  </div>
                </div>
                <!-- - slider CONTENT -->
                <!-- slider IMAGES -->
                <div class="slider-fullscreen-projects__images swiper-container js-slider-fullscreen-projects__images" data-mousewheel-enabled="data-mousewheel-enabled" data-direction="horizontal" data-transition-effect="distortion" data-aspect-ratio="1.5" data-transition-displacement-img="img/general/bg-displacement-7.jpg" data-speed="1200" data-autoplay-enabled="true" data-autoplay-delay="6000" data-counter-style="roman">
                  <div class="swiper-wrapper">
                    @foreach($mainSlides as $slide)
                    <div class="swiper-slide overflow">
                      <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%" data-swiper-parallax-opacity="0">
<!--                        <div class="slider__bg lazy-bg js-transition-img__transformed-el" data-texture-src="img/assets/projects/project-1.jpg"></div>-->
                        <div class="slider__bg lazy-bg js-transition-img__transformed-el" data-texture-src="{{ asset(Voyager::image($slide->image)) }}"></div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  <!-- overlay -->
                  <div class="slider__overlay overlay overlay_circle-dark overlay_deither"></div>
                  <div class="slider__circle"></div>
                  <!-- - overlay -->
                </div>
                <!-- - slider IMAGES -->
                <!-- slider FOOTER -->
                <div class="slider-fullscreen-projects__footer swiper-container js-slider-fullscreen-projects__footer">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="slider__wrapper-button-footer"><a class="button button_white button_bordered" data-hover="Explore Project" href="portfolio-details.php" data-pjax-link="fullscreenSlider"><span class="button__label-hover">Explore Project</span></a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="slider__wrapper-button-footer"><a class="button button_white button_bordered" data-hover="Explore Project" href="portfolio-details.php" data-pjax-link="fullscreenSlider"><span class="button__label-hover">Explore Project</span></a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="slider__wrapper-button-footer"><a class="button button_white button_bordered" data-hover="Explore Project" href="portfolio-details.php" data-pjax-link="fullscreenSlider"><span class="button__label-hover">Explore Project</span></a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="slider__wrapper-button-footer"><a class="button button_white button_bordered" data-hover="Explore Project" href="portfolio-details.php" data-pjax-link="fullscreenSlider"><span class="button__label-hover">Explore Project</span></a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- - slider FOOTER -->
                <!-- slider COUNTER -->
                <div class="slider__wrapper-counter slider-fullscreen-projects__counter">
                  <div class="slider__counter slider__counter_current">
                    <div class="js-slider-fullscreen-projects__counter-current swiper-container">
                      <div class="swiper-wrapper"></div>
                    </div>
                  </div>
                  <div class="slider__counter-divider slider-fullscreen__counter-divider"></div>
                  <div class="slider__counter slider__counter_total js-slider-fullscreen-projects__counter-total"></div>
                </div>
                <!-- - slider COUNTER -->
                <!-- slider ARROWS -->
                <div class="slider__arrow slider__arrow_left slider__arrow_absolute js-slider__arrow-prev">
                  <div class="arrow arrow-left js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                    </svg>
                    <div class="arrow__pointer arrow-left__pointer"></div>
                    <div class="arrow__triangle"></div>
                  </div>
                </div>
                <div class="slider__arrow slider__arrow_right slider__arrow_absolute js-slider__arrow-next">
                  <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                    </svg>
                    <div class="arrow__pointer arrow-right__pointer"></div>
                    <div class="arrow__triangle"></div>
                  </div>
                </div>
                <!-- - slider ARROWS -->
                <!-- slider CANVAS -->
                <div class="slider__wrapper-canvas">
                  <div class="slider__wrapper-canvas-inner">
                    <canvas class="slider__canvas"></canvas>
                  </div>
                </div>
                <!-- - slider CANVAS -->
              </div>
            </div>
          </section>
          <!-- - section PROJECTS SLIDER FULLSCREEN -->
        </main>
        <!-- PAGE FOOTER -->
@include('blocks.footer_home')
        <!-- -PAGE FOOTER -->