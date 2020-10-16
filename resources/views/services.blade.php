@include('blocks.head')

@include('blocks.top_elements')
      <!-- - Cursor Follower-->
      <!-- PAGE HEADER -->
@extends('blocks.header')
      <!-- - PAGE HEADER -->
      <!-- PAGE MAIN -->
      <div class="js-smooth-scroll bg-dark-2" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead pt-large pb-medium pt-large pb-small" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-dark-2)" data-arts-theme-text="light">
            <div class="section-masthead__inner container">
              <header class="row section-masthead__header">
                <div class="col-12">
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="mt-0 mb-0 h1">{{ $servicesPage->title }}</h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mr-auto"></div>
                </div>
              </header>
            </div>
          </section>
          <!-- - section MASTHEAD -->
          <!-- section PROJECTS LIST HOVER REVEAL -->
          <section class="section section-list bg-dark-2 pb-medium" data-arts-theme-text="light" data-arts-os-animation="true">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="list-projects js-list-hover" data-arts-hover-strength="0.35" data-arts-hover-scale-texture="1.2" data-arts-hover-scale-plane="0.33">
                    <div class="list-projects__items">
                    @foreach ($newservices as $newservice)
                      <a class="list-projects__item pt-small pb-small js-change-text-hover js-list-hover__link" href="services-details\{{ $newservice->slug }}" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0.0" data-pjax-link="listHover">
                      <!-- ---- -->
                        <div class="row align-items-center justify-content-center justify-content-md-between">
                          <!-- hidden AJAX transition image -->
                          <div class="col-12 d-md-none">
                            <div class="js-transition-img list-projects__cover overflow js-list-hover__cover">
                              <div class="js-transition-img__transformed-el"><img class="of-cover" data-texture-src="{{ asset(Voyager::image($newservice->main_image)) }}" src="#" alt=""/></div>
                            </div>
                          </div>
                          <!-- - hidden AJAX transition image -->
                          <!-- header -->
                          <div class="col-lg-8">
                            <h2 class="list-projects__heading js-split-text split-text" data-split-text-type="lines,words" data-split-text-set="words"> {{ $newservice->title }}</h2>
                          </div>
                          <!-- - header -->
                          <!-- change hover -->
                          <div class="col-lg-4">
                            <div class="list-projects__wrapper-link text-lg-right">
                              <div class="change-text-hover small-caps js-change-text-hover text-lg-right">
                                <!-- label by default -->
                                <div class="change-text-hover__normal js-split-text split-text js-change-text-hover__normal" data-split-text-type="lines" data-split-text-set="lines">{{ $newservice->preview1 }}</div>
                                <!-- - label by default -->
                                <!-- label on hover -->
                                <div class="change-text-hover__hover js-change-text-hover__hover">
                                  <!-- hover line -->
                                  <div class="change-text-hover__line js-change-text-hover__line"></div>
                                  <!-- - hover line --><span class="js-split-text split-text" data-split-text-type="lines" data-split-text-set="lines">{{ $newservice->preview2 }}</span>
                                </div>
                                <!-- - label on hover -->
                              </div>
                            </div>
                          </div>
                          <!-- - change hover -->
                        </div></a>
                      @endforeach
                      <!-- ---- -->
                    </div>
                    <!-- fixed canvas -->
                    <canvas class="list-project__canvas js-list-hover__canvas" data-arts-scroll-fixed="data-arts-scroll-fixed"></canvas>
                    <!-- - fixed canvas -->
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section PROJECTS LIST HOVER REVEAL -->
        </main>
        <!-- PAGE FOOTER -->

@include('blocks.footer')