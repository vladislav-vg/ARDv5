@include('blocks.head')

@include('blocks.top_elements')
      <!-- - Cursor Follower-->
      <!-- PAGE HEADER -->
@extends('blocks.header')
      <!-- - PAGE HEADER -->
      <!-- - PAGE HEADER -->
      <!-- PAGE MAIN -->
      <div class="js-smooth-scroll bg-dark-1" id="page-wrapper" data-barba="container" data-arts-theme-text="light">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD FULLSCREEN -->
          <section class="section section-masthead section-fullheight text-center bg-dark-1" data-arts-os-animation="data-arts-os-animation" data-arts-theme-text="light" data-background-color="var(--color-dark-1)">
            <div class="section-masthead__inner section-fullheight__inner container-fluid">
              <header class="row section-masthead__header justify-content-center">
                <div class="col">
                  <div class="section-masthead__subheading small-caps mt-0 mb-1 mb-md-2 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Architecture</span></div>
                  <div class="w-100"></div>
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="h1 mt-0 mb-0">{!! $onepost->title !!}</h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
                <div class="section-masthead__wrapper-scroll-down section-masthead__wrapper-scroll-down_center">
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
              </header>
            </div>
            <div class="section-image section-masthead__background section-masthead__background_fullscreen">
              <div class="section-image__wrapper js-transition-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                <div class="js-transition-img__transformed-el">
                  <div class="lazy-bg" data-src="{{ asset(Voyager::image($onepost->image)) }}"></div>
                </div>
              </div>
              <!-- overlay -->
              <div class="overlay overlay_circle-dark overlay_deither section-masthead__overlay"></div>
              <!-- - overlay -->
            </div>
          </section>
          <!-- - section MASTHEAD FULLSCREEN -->
          <!-- section PROPERTIES -->
          <section class="section section-properties section-content pt-small pb-medium">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-sm-6 section-properties__item mt-small">
                  <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <div class="figure-info__option small-caps">Role</div>
                    <div class="figure-info__value paragraph">Architector</div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 section-properties__item mt-small">
                  <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <div class="figure-info__option small-caps">Start</div>
                    <div class="figure-info__value paragraph">Test start date</div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 section-properties__item mt-small">
                  <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <div class="figure-info__option small-caps">Launch</div>
                    <div class="figure-info__value paragraph">Test launch date</div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 section-properties__item mt-small">
                  <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <div class="figure-info__option small-caps">Website</div>
                    <div class="figure-info__value paragraph"><a href="#" target="_blank">Test site</a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section PROPERTIES -->
          <!-- section IMAGE #1 -->
          <section class="section section-image section_h-800 section_w-container-left">
            <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
              <div>
                <div class="lazy-bg" data-src="{{ asset(Voyager::image($onepost->image)) }}"></div>
              </div>
            </div>
            <div class="section-image__caption paragraph text-right">Test </div>
          </section>
          <!-- - section IMAGE #1 -->
          <!-- section GRID #1 -->
          <section class="section section-grid section-content overflow pt-medium pb-medium" data-arts-os-animation="data-arts-os-animation" data-grid-columns="2" data-grid-columns-tablet="2" data-grid-columns-mobile="1">
            <div class="container">
              <div class="grid grid_fluid-6 js-grid js-gallery">
                <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-6 grid__item_fluid-6-fancy grid__sizer js-grid__sizer"></div>
                <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-6 grid__item_fluid-6-fancy js-grid__item">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="add" data-arts-cursor-hide-native="true" href="img/assets/project1/img-1-2.jpg" data-size="900x1350" data-title="Long Road">
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <div class="figure-image__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                              <div class="lazy"><img data-src="img/ard/photo/portfolio/portfolio6.jpg" src="#" alt="" width="450" height="675"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="figure-image__caption section-image__caption hover-zoom__caption text-right section-image__caption-horizontal">
                          <div class="figure-image__wrapper-caption paragraph">Lorem</div>
                        </div></a></div>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-6 grid__item_fluid-6-fancy js-grid__item">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="add" data-arts-cursor-hide-native="true" href="img/assets/project1/img-1-3.jpg" data-size="900x1350" data-title="Before the Adventure">
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <div class="figure-image__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                              <div class="lazy"><img data-src="img/ard/photo/portfolio/portfolio4.jpg" src="#" alt="" width="450" height="675"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="figure-image__caption section-image__caption hover-zoom__caption text-right section-image__caption-horizontal">
                          <div class="figure-image__wrapper-caption paragraph">Lorem ipsum</div>
                        </div></a></div>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-6 grid__item_fluid-6-fancy js-grid__item">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="add" data-arts-cursor-hide-native="true" href="img/assets/project1/img-1-4.jpg" data-size="900x1350" data-title="Wrong Path">
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <div class="figure-image__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                              <div class="lazy"><img data-src="img/ard/photo/portfolio/portfolio2.jpg" src="#" alt="" width="450" height="675"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="figure-image__caption section-image__caption hover-zoom__caption text-right section-image__caption-horizontal">
                          <div class="figure-image__wrapper-caption paragraph">Lorem ipsum</div>
                        </div></a></div>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-6 grid__item_fluid-6-fancy js-grid__item">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="add" data-arts-cursor-hide-native="true" href="img/assets/project1/img-1-5.jpg" data-size="900x1350" data-title="Warm Moments">
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <div class="figure-image__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                              <div class="lazy"><img data-src="img/ard/photo/portfolio/portfolio3.jpg" src="#" alt="" width="450" height="675"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="figure-image__caption section-image__caption hover-zoom__caption text-right section-image__caption-horizontal">
                          <div class="figure-image__wrapper-caption paragraph">Lorem ipsum</div>
                        </div></a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section GRID #1 -->
          <!-- section IMAGE #2 -->
          <section class="section section-image section_h-800 section_w-container-right">
            <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
              <div>
                <div class="lazy-bg" data-src="{{ asset(Voyager::image($onepost->image)) }}"></div>
              </div>
            </div>
            <div class="section-image__caption paragraph text-left">Lorem ipsum</div>
          </section>
          <!-- - section IMAGE #2 -->
          
          <!-- section NAV PROJECTS -->

            <!--      Here was some code      -->

          <!-- - section NAV PROJECTS -->
        </main>
        <!-- PAGE FOOTER -->
@include('blocks.footer')
        <!-- -PAGE FOOTER -->