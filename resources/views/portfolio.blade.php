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
          <section class="section section-masthead d-none" data-background-color="var(--color-dark-2)"></section>
          <!-- - section MASTHEAD -->
          <!-- section GRID PROJECTS 3 COLUMNS-->
          <section class="section section-grid section-content overflow bg-dark-2 pt-large pb-medium" data-arts-os-animation="data-arts-os-animation" data-grid-columns="3" data-grid-tablet="2" data-grid-mobile="1" data-arts-theme-text="light">
            <div class="container-fluid">
              <div class="row justify-content-between align-items-center section pb-medium">
                <div class="col-12 col-lg-auto">
                  <h1 class="h1 mt-0 mb-0">{{ $portfolioPage->title }}</h1>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mr-auto"></div>
                </div>
                <div class="col-12 col-lg-auto pt-medium pt-md-0 pb-md-3">
                  <div class="filter js-filter">
                    <div class="filter__inner">
                      <div class="container-fluid no-gutters">
                        <!-- items -->
                        <div class="row justify-content-center">
                          <!-- all (*) -->
                          <div class="col-lg-auto col-12 filter__item filter__item_active js-filter__item" data-filter="*">
                            <div class="split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">All</div>
                          </div>
                          <!-- - all (*) -->
                          <div class="col-lg-auto col-12 filter__item js-filter__item" data-filter=".category-existing">
                            <div class="split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">Existing</div>
                          </div>
                          <div class="col-lg-auto col-12 filter__item js-filter__item" data-filter=".category-soon">
                            <div class="split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">Coming soon</div>
                          </div>
                          <!-- - items-->
                        </div>
                        <!-- underline -->
                        <div class="filter__underline js-filter__underline"></div>
                        <!-- - underline -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>

<!-- - section GRID PROJECTS 3 COLUMNS-->

              <div class="grid grid_fluid-5 js-grid">
                  <div class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-5 grid__item_fluid-5-fancy grid__sizer js-grid__sizer"></div>


                  <!--DB view -->
                  
                  @foreach ($portfolioPost as $post)  
                  <div class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-5 grid__item_fluid-5-fancy js-grid__item category-existing">
                  <div class="section-grid__item"><a class="figure-project hover-zoom js-change-text-hover" href="portfolio-details\{{ $post->slug}}">
                      <div class="hover-zoom__inner">
                        <div class="hover-zoom__zoom">
                          <div class="figure-project__wrapper-img js-transition-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                            <div class="lazy js-transition-img__transformed-el"><img data-src="{{ asset(Voyager::image($post->image)) }}" src="#" alt="" width="1280" height="1920"/></div>
                          </div>
                        </div>
                      </div>
                      <div class="figure-project__content pl-md-2 pt-md-2 pt-1 pl-0">
                        <h2 class="h3 figure-project__heading">  </h2>
                        <div class="figure-project__category mt-md-1 mt-0-5">
                          <div class="change-text-hover small-caps js-change-text-hover change-text-hover_has-line text-left">
                            <!-- label by default -->
                            <div class="change-text-hover__normal js-split-text split-text js-change-text-hover__normal" data-split-text-type="lines" data-split-text-set="lines">{{ $post->excerpt }}</div>
                            <!-- - label by default -->
                            <!-- label on hover -->
                            <div class="change-text-hover__hover js-change-text-hover__hover">
                              <!-- hover line -->
                              <div class="change-text-hover__line js-change-text-hover__line"></div>
                              <!-- - hover line --><span class="js-split-text split-text" data-split-text-type="lines" data-split-text-set="lines">{{ $post->Category }}</span>
                            </div>
                            <!-- - label on hover -->
                          </div>
                        </div>
                      </div></a>
                  </div>
                </div>
                  @endforeach
                  <!--DB view end -->
              </div>
            </div>
          </section>
          
        </main>

@include('blocks.footer')