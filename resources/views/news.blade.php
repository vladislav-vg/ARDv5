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
          <section class="section section-masthead pt-large pb-small text-center" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
            <div class="section-masthead__inner container-fluid">
              <header class="row section-masthead__header justify-content-center">
                <div class="col-lg-8">
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="h1 mt-0 mb-0">{{ $blogPage->title }}</h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
              </header>
            </div>
          </section>
          <!-- - section MASTHEAD -->
          <!-- section BLOG GRID -->
          <section class="section section-blog section-grid section-content overflow pb-medium" data-arts-os-animation="data-arts-os-animation" data-grid-columns="2" data-grid-columns-tablet="2" data-grid-columns-mobile="1">
            <!-- filter -->
            <div class="container pb-small">
              <div class="row">
                <div class="col">
                  <div class="filter js-filter text-center">
                    <div class="filter__inner">
                      <div class="container-fluid no-gutters">
                        <!-- items -->
                        <div class="row justify-content-center">
                          <!-- all (*) -->
                          <div class="col-xl-auto col-12 filter__item filter__item_active js-filter__item" data-filter="*">
                            <div class="split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">All Posts</div>
                          </div>
                          <!-- - all (*) -->
                          <div class="col-xl-auto col-12 filter__item js-filter__item" data-filter=".category-photography">
                            <div class="split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">Architecture</div>
                          </div>
                          <div class="col-xl-auto col-12 filter__item js-filter__item" data-filter=".category-lifestyle">
                            <div class="split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">Lifestyle</div>
                          </div>
                          <div class="col-xl-auto col-12 filter__item js-filter__item" data-filter=".category-interviews">
                            <div class="split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">Interviews</div>
                          </div>
                          <!-- - items -->
                        </div>
                        <!-- underline -->
                        <div class="filter__underline js-filter__underline"></div>
                        <!-- - underline -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- - filter -->
            <div class="container-fluid">
              <div class="row">
                <div class="col section-blog__posts">
                  <!-- posts -->
                  <div class="grid grid_fluid-4 js-grid">
                    <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 grid__sizer js-grid__sizer"></div>
                    
                   @foreach($newnews as $onenews)
                    <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 js-grid__item category-lifestyle">
                      <div class="section-grid__item">
                        <article class="figure-post">
                          <div class="figure-post__media"><a class="lazy" href="/news-details/{{ $onenews->slug }}"><img data-src="{{ asset(Voyager::image($onenews->image)) }}" width="960" height="960" src="#" alt=""/>
                              <time class="figure-post__date" datetime="2020-02-01T04:16:44+00:00"><span class="figure-post__date-day h3">{{ $onenews->created_at->format('d') }}</span><span class="figure-post__date-month">{{ $onenews->created_at->format('M') }}</span></time></a></div>
                          <div class="figure-post__header pt-1 pl-md-3 pt-md-3"><a class="d-block" href="/news-details/{{ $onenews->slug }}">
                              <h2 class="h3 mt-0">{{ $onenews->title }}</h2></a>
                            <ul class="figure-post__categories small-caps">
                              <li><a href="#">{{ $onenews->excerpt }}</a></li>
                            </ul>
                          </div>
                        </article>
                      </div>
                    </div>
                    @endforeach


                    
                  </div>
                  <!-- - posts -->
              @php /*    <!-- pagination -->
                  <div class="section-blog__wrapper-pagination mt-small">
                    <nav class="pagination">
                      <div class="nav-links">
                        <!-- prev --><a class="page-numbers prev material-icons" href="#">keyboard_arrow_left</a>
                        <!-- - prev  -->
                        <!-- numbers container -->
                        <div class="nav-links__container">
                          <span class="page-numbers current">1</span>
                          <a class="page-numbers" href="#">2</a>
                          <span class="page-numbers dots">...</span>
                          <a class="page-numbers" href="#">4</a>
                           //  {{ $newnews->links() }}
                        </div>
                        <!-- - numbers container -->
                        <!-- next --><a class="page-numbers next material-icons" href="#">keyboard_arrow_right</a>
                        <!-- - next -->
                      </div>
                    </nav>
                  </div>
                  <!-- - pagination -->    */ @endphp
                 


                </div>
              </div>
            </div>
          </section>
          <!-- - section BLOG GRID -->
        </main>
        <!-- PAGE FOOTER -->
@include('blocks.footer')
        <!-- -PAGE FOOTER -->