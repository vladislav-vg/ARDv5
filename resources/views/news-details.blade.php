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
          <section class="section section-masthead section-masthead_fixed section-fullheight text-center bg-dark-1" data-arts-theme-text="light" data-arts-scroll-fixed="data-arts-scroll-fixed" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-dark-1)">
            <div class="section-masthead__inner section-fullheight__inner container-fluid">
              <header class="row section-masthead__header justify-content-center">
                <div class="col">
                  <div class="section-masthead__meta small-caps mt-0 mb-2">
                    <div class="section-masthead__meta-item split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines"><a href="#">Lorem ipsum</a></div>
                    <div class="section-masthead__meta-item">
                      <ul class="section-masthead__meta-categories split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                        <li><a href="#">{!!$new->excerpt !!}</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="h1 mt-0 mb-0">{!!$new->title !!}</h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
              </header>
            </div>
            <div class="section-masthead__wrapper-scroll-down section-masthead__wrapper-scroll-down_center">
              <div class="circle-button js-circle-button">
                <!-- curved label -->
                <div class="circle-button__outer">
                  <div class="circle-button__wrapper-label">
                    <div class="circle-button__label small-caps">Start Reading</div>
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
            <div class="section-image section-masthead__background section-masthead__background_fullscreen">
              <div class="section-image__wrapper">
                <div class="lazy-bg"  data-src="{{ asset(Voyager::image($new->image)) }}"></div>
              </div>
              <!-- overlay-->
              <div class="overlay overlay_dark section-masthead__overlay"></div>
              <!-- - overlay -->
            </div>
          </section>
          <!-- - section MASTHEAD -->
          <!-- SINGLE POST -->
          <section class="section section-blog pb-medium">
            <div class="container bg-white pt-small pb-small">
              <div class="row justify-content-center">
                <!-- post content -->
                <div class="col-lg-10 section-blog__post">
                  <article class="post">
                    <!-- post content -->
                    <div class="post__content clearfix">
                      <p class="has-drop-cap">{!! $new->body !!}</p>
                      
                    </div>
                    <!-- - post content-->
                    <!-- post tags -->
                    <div class="post__tags mt-small">
                      <div class="tagcloud">
                        <ul>
                          <li><a class="tag-cloud-link" href="#">Test 1</a></li>
                          <li><a class="tag-cloud-link" href="#">Test 2</a></li>
                          <li><a class="tag-cloud-link" href="#">Test 3</a></li>
                          <li><a class="tag-cloud-link" href="#">Test 4</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- - post tags -->
                    <!-- post comments -->
                    <div class="post__comments mt-small">
                 <?php /*     
                    <!-- comments tree -->
                      <div class="comments-area" id="comments">
                        <h4 class="comments-title">19 Comments</h4>
                        <ol class="comment-list">
                          <!-- comment -->
                          <li class="comment">
                            <article class="comment-body">
                              <!-- comment author avatar -->
                              <div class="comment-author"><img class="avatar" src="img/assets/avatars/avatar-1.jpg" alt=""/></div>
                              <!-- - comment author avatar -->
                              <!-- comment content & meta -->
                              <div class="comment-content">
                                <footer class="comment-meta">
                                  <!-- comment author name --><b class="fn"><a href="#">Testing</a></b>
                                  <!-- - comment author name -->
                                  <!-- comment meta -->
                                  <div class="comment-metadata"><a href="#">
                                      <time datetime="2013-03-14T07:57:01+00:00">19 Jan 2020 @ 15:32</time></a></div>
                                  <!-- - comment meta -->
                                </footer>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                <!-- reply button -->
                                <div class="reply"><a class="comment-reply-link" rel="nofollow" href="#">Reply</a></div>
                                <!-- - reply button -->
                              </div>
                              <!-- - comment content & meta -->
                            </article>
                          </li>
                          <!-- - comment-->
                          <!-- comment -->
                          <li class="comment">
                            <article class="comment-body">
                              <!-- comment author avatar -->
                              <div class="comment-author"><img class="avatar" src="img/assets/avatars/avatar-2.jpg" alt=""/></div>
                              <!-- - comment author avatar -->
                              <!-- comment content & meta -->
                              <div class="comment-content">
                                <footer class="comment-meta">
                                  <!-- comment author name --><b class="fn"><a href="#">Second comment</a></b>
                                  <!-- - comment author name -->
                                  <!-- comment meta -->
                                  <div class="comment-metadata"><a href="#">
                                      <time datetime="2013-03-14T07:57:01+00:00">18:24</time></a></div>
                                  <!-- - comment meta -->
                                </footer>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                <!-- reply button -->
                                <div class="reply"><a class="comment-reply-link" rel="nofollow" href="#">Reply</a></div>
                                <!-- - reply button -->
                              </div>
                              <!-- - comment content & meta -->
                            </article>
                          </li>
                          <!-- - comment-->
                          <!-- comment -->
                          <li class="comment">
                            <article class="comment-body">
                              <!-- comment author avatar -->
                              <div class="comment-author"><img class="avatar" src="img/assets/avatars/avatar-3.jpg" alt=""/></div>
                              <!-- - comment author avatar -->
                              <!-- comment content & meta -->
                              <div class="comment-content">
                                <footer class="comment-meta">
                                  <!-- comment author name --><b class="fn"><a href="#">Comment 3</a></b>
                                  <!-- - comment author name -->
                                  <!-- comment meta -->
                                  <div class="comment-metadata"><a href="#">
                                      <time datetime="2013-03-14T07:57:01+00:00">12 px</time></a></div>
                                  <!-- - comment meta -->
                                </footer>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                <!-- reply button -->
                                <div class="reply"><a class="comment-reply-link" rel="nofollow" href="#">Reply</a></div>
                                <!-- - reply button -->
                              </div>
                              <!-- - comment content & meta -->
                            </article>
                            <!-- child comment -->
                            <ol class="children">
                              <!-- comment -->
                              <li class="comment">
                                <article class="comment-body">
                                  <!-- comment author avatar -->
                                  <div class="comment-author"><img class="avatar" src="img/assets/avatars/avatar-4.jpg" alt=""/></div>
                                  <!-- - comment author avatar -->
                                  <!-- comment content & meta -->
                                  <div class="comment-content">
                                    <footer class="comment-meta">
                                      <!-- comment author name --><b class="fn"><a href="#">Test 4</a></b>
                                      <!-- - comment author name -->
                                      <!-- comment meta -->
                                      <div class="comment-metadata"><a href="#">
                                          <time datetime="2013-03-14T07:57:01+00:00">1920 @ 13:45</time></a></div>
                                      <!-- - comment meta -->
                                    </footer>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                    <!-- reply button -->
                                    <div class="reply"><a class="comment-reply-link" rel="nofollow" href="#">Reply</a></div>
                                    <!-- - reply button -->
                                  </div>
                                  <!-- - comment content & meta -->
                                </article>
                                <!-- child comment -->
                                <ol class="children">
                                  <!-- comment -->
                                  <li class="comment">
                                    <article class="comment-body">
                                      <!-- comment author avatar -->
                                      <div class="comment-author"><img class="avatar" src="img/assets/avatars/avatar-2.jpg" alt=""/></div>
                                      <!-- - comment author avatar -->
                                      <!-- comment content & meta -->
                                      <div class="comment-content">
                                        <footer class="comment-meta">
                                          <!-- comment author name --><b class="fn"><a href="#">Comment 5</a></b>
                                          <!-- - comment author name -->
                                          <!-- comment meta -->
                                          <div class="comment-metadata"><a href="#">
                                              <time datetime="2013-03-14T07:57:01+00:00">19 Jan 2020 @ 16:24</time></a></div>
                                          <!-- - comment meta -->
                                        </footer>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                        <!-- reply button -->
                                        <div class="reply"><a class="comment-reply-link" rel="nofollow" href="#">Reply</a></div>
                                        <!-- - reply button -->
                                      </div>
                                      <!-- - comment content & meta -->
                                    </article>
                                  </li>
                                  <!-- - comment-->
                                </ol>
                              </li>
                              <!-- - comment-->
                            </ol>
                          </li>
                          <!-- - comment-->
                        </ol>
                      </div> 

                       
                      <!-- - comments tree -->
                      <!-- comments form -->
                      <div class="comment-respond" id="respond">
                        <h4 class="comment-reply-title">Leave a Reply</h4>
                        <form class="comment-form" action="home.php" method="GET">
                          <!-- textarea -->
                          <div class="row form__row">
                            <div class="col form__col">
                              <label class="input-float js-input-float">
                                <textarea class="input-float__input input-float__input_textarea"></textarea><span class="input-float__label">Comment</span>
                              </label>
                            </div>
                          </div>
                          <!-- - textarea -->
                          <!-- submit -->
                          <div class="row form__row form__row_submit text-right">
                            <div class="col form__col form__col_submit">
                              <button class="button button_solid button_black" type="submit" data-hover="Post Comment"><span class="button__label-hover">Post Comment</span></button>
                            </div>
                          </div>
                          <!-- - submit -->
                        </form>
                      </div>
                      <!-- - comments form -->
                      */?>
                    </div>
                    <!-- - post comments -->
                  </article>
                </div>
                <!-- - post content -->
              </div>
            </div>
          </section>
          <!-- - SINGLE POST -->
        </main>
        <!-- PAGE FOOTER -->
@include('blocks.footer')