<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Rhye – AJAX Portfolio HTML5 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cinzel:400,700%7CRaleway:500,500i,600,700%7CMaterial+Icons&amp;display=swap"/>
    <!-- Template Vendor's Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/vendor.css"/>
    <!-- Template Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <!-- Favicons & App Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/content/apple-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="60x60" href="img/content/apple-icon-60x60.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="img/content/apple-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="img/content/apple-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="img/content/apple-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="img/content/apple-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="img/content/apple-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="img/content/apple-icon-152x152.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="img/content/apple-icon-180x180.png"/>
    <link rel="icon" type="image/png" sizes="192x192" href="img/content/android-icon-192x192.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="img/content/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="96x96" href="img/content/favicon-96x96.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="img/content/favicon-16x16.png"/>
    <link rel="manifest" href="img/content/manifest.json"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="img/content/ms-icon-144x144.png"/>
    <meta name="theme-color" content="#ffffff"/>
    <link rel="icon" type="image/x-icon" href="img/content/favicon.ico"/>
  </head>
  <body>
    <div data-barba="wrapper">
      <!-- PAGE PRELOADER -->
      <div class="preloader text-center bg-dark-2" id="js-preloader" data-arts-theme-text="light">
        <div class="preloader__content">
          <!-- header -->
          <div class="preloader__header mt-auto">
            <div class="preloader__heading h2">Rhye Kinsey</div>
            <div class="preloader__subline small-caps mt-1">Creative Developer</div>
          </div>
          <!-- - header -->
          <!-- counter -->
          <div class="preloader__counter h5"><span class="preloader__counter-number preloader__counter-current">0</span><span class="preloader__counter-divider">&nbsp;&nbsp;/&nbsp;&nbsp;</span><span class="preloader__counter-number preloader__counter-total">100</span></div>
          <!-- - counter -->
          <!-- circle holder -->
          <div class="preloader__circle"></div>
          <!-- - circle holder -->
        </div>
      </div>
      <!-- - PAGE PRELOADER -->
      <!-- Loading Spinner -->
      <svg class="spinner d-lg-none" id="js-spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="spinner__path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
      </svg>
      <!-- - Loading Spinner -->
      <!-- Transition Curtain-->
      <!-- TRANSITION CURTAINS -->
      <!-- page curtain AJAX transition -->
      <div class="curtain transition-curtain" id="js-page-transition-curtain">
        <div class="curtain__wrapper-svg">
          <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Default Rectangle -->
            <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
            <!-- - Default Rectangle -->
            <!-- Curve Top -->
            <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
            <!-- - Curve Top -->
            <!-- Curve Bottom -->
            <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
            <!-- - Curve Bottom -->
          </svg>
        </div>
      </div>
      <!-- - page curtain AJAX transition -->
      <!-- header curtain show/hide -->
      <div class="header-curtain curtain" id="js-header-curtain">
        <div class="curtain__wrapper-svg">
          <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Default Rectangle -->
            <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
            <!-- - Default Rectangle -->
            <!-- Curve Top -->
            <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
            <!-- - Curve Top -->
            <!-- Curve Bottom -->
            <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
            <!-- - Curve Bottom -->
          </svg>
        </div>
      </div>
      <!-- - header curtain show/hide -->
      <!-- header curtain AJAX transition -->
      <div class="header-curtain header-curtain_transition curtain" id="js-header-curtain-transition">
        <div class="curtain__wrapper-svg">
          <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Default Rectangle -->
            <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
            <!-- - Default Rectangle -->
            <!-- Curve Top -->
            <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
            <!-- - Curve Top -->
            <!-- Curve Bottom -->
            <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
            <!-- - Curve Bottom -->
          </svg>
        </div>
      </div>
      <!-- - header curtain AJAX transition -->
      <!-- - TRANSITION CURTAINS -->
      <!-- Cursor Follower-->
      <div class="cursor" id="js-cursor">
        <div class="cursor__wrapper">
          <!-- circles -->
          <div class="cursor__follower">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <circle id="inner" cx="25" cy="25" r="24" style="opacity: 0.6;"></circle>
              <circle id="outer" cx="25" cy="25" r="24" style="stroke-dashoffset: 252.327; stroke-dasharray: 0px, 999999px;"></circle>
            </svg>
          </div>
          <!-- - circles -->
          <!-- arrows -->
          <div class="cursor__arrows">
            <div class="cursor__arrow cursor__arrow_up material-icons">keyboard_arrow_up</div>
            <div class="cursor__arrow cursor__arrow_down material-icons">keyboard_arrow_down</div>
            <div class="cursor__arrow cursor__arrow_left material-icons">keyboard_arrow_left</div>
            <div class="cursor__arrow cursor__arrow_right material-icons">keyboard_arrow_right</div>
          </div>
          <!-- - arrows -->
          <!-- label holder -->
          <div class="cursor__label"></div>
          <!-- - label holder -->
          <!-- icon holder -->
          <div class="cursor__icon material-icons"></div>
          <!-- - icon holder -->
        </div>
      </div>
      <!-- - Cursor Follower-->
      <!-- PAGE HEADER -->
      <header class="header header_menu-right header_fixed container-fluid js-header-sticky" id="page-header" data-arts-theme-text="dark" data-arts-header-sticky-theme="bg-white" data-arts-header-logo="primary" data-arts-header-sticky-logo="primary" data-arts-header-overlay-theme="light" data-arts-header-overlay-background="#ffffff">
        <!-- top bar -->
        <div class="header__container header__controls">
          <div class="row justify-content-between align-items-center">
            <!-- logo -->
            <div class="col-auto header__col header__col-left"><a class="logo" href="index.html" target="_blank">
                <div class="logo__wrapper-img">
                  <!-- primary logo version (for light backgrounds)--><img class="logo__img-primary" src="img/general/logo-black.svg" alt="Rhye HTML5 Template" height="20"/>
                  <!-- secondary logo version (for dark backgrounds)--><img class="logo__img-secondary" src="img/general/logo-white.svg" alt="Rhye HTML5 Template" height="20"/>
                </div></a>
            </div>
            <!-- - logo -->
            <!-- burger icon -->
            <div class="col-auto header__col">
              <div class="header__burger" id="js-burger" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.7" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true">
                <div class="header__burger-line"></div>
                <div class="header__burger-line"></div>
                <div class="header__burger-line"></div>
              </div>
            </div>
            <!-- - burger icon -->
            <!-- "back" button for submenu nav -->
            <div class="header__overlay-menu-back" id="js-submenu-back">
              <div class="arrow arrow-left js-arrow arrow_mini" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                </svg>
                <div class="arrow__pointer arrow-left__pointer"></div>
                <div class="arrow__triangle"></div>
              </div>
            </div>
            <!-- - "back" button for submenu nav -->
          </div>
        </div>
        <!-- - top bar -->
        <!-- fullscreen overlay container -->
        <div class="header__wrapper-overlay-menu container-fluid container-fluid_paddings">
          <!-- fullscreen menu -->
          <div class="header__wrapper-menu">
            <ul class="menu-overlay js-menu-overlay">
              <li class="menu-item-has-children"><a class="h2" href="#" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Portfolio</div></a>
                <ul class="sub-menu">
                  <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Sliders</div></a>
                    <ul class="sub-menu">
                      <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Fullscreen</div></a>
                        <ul class="sub-menu">
                          <li><a class="h3" href="projects-slider-fullscreen-1.html" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Slider 1 Distortion / H</div></a>
                          </li>
                          <li><a class="h3" href="projects-slider-fullscreen-2.html" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Slider 2 Distortion / V</div></a>
                          </li>
                          <li><a class="h3" href="projects-slider-fullscreen-3.html" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Slider 3 Parallax / H</div></a>
                          </li>
                          <li><a class="h3" href="projects-slider-fullscreen-4.html" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Slider 4 Parallax / V</div></a>
                          </li>
                          <li><a class="h3" href="projects-slider-fullscreen-5.html" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Slider 5 Reveal / H</div></a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Halfscreen</div></a>
                        <ul class="sub-menu">
                          <li><a class="h3" href="projects-slider-halfscreen-6.html" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Slider 6 Distortion / V</div></a>
                          </li>
                          <li><a class="h3" href="projects-slider-halfscreen-7.html" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Slider 7 Parallax / H</div></a>
                          </li>
                          <li><a class="h3" href="projects-slider-halfscreen-8.html" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Slider 8 Parallax / V</div></a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Circle Covers</div></a>
                        <ul class="sub-menu">
                          <li><a class="h3" href="projects-slider-circle-covers-9.html" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Slider 9 Circle Covers / V</div></a>
                          </li>
                          <li><a class="h3" href="projects-slider-circle-covers-10.html" data-pjax-link="overlayMenu">
                              <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Slider 10 Circle Covers / H</div></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Grids</div></a>
                    <ul class="sub-menu">
                      <li><a class="h3" href="projects-grid-2-columns.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Grid 2 Columns</div></a>
                      </li>
                      <li><a class="h3" href="projects-grid-3-columns.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Grid 3 Columns</div></a>
                      </li>
                      <li><a class="h3" href="projects-grid-irregular-1.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Grid Irregular I</div></a>
                      </li>
                      <li><a class="h3" href="projects-grid-irregular-2.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Grid Irregular II</div></a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Mouse Hover Reveal</div></a>
                    <ul class="sub-menu">
                      <li><a class="h3" href="projects-list-reveal-1.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Hover Reveal 1</div></a>
                      </li>
                      <li><a class="h3" href="projects-list-reveal-2.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Hover Reveal 2</div></a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="menu-item-has-children"><a class="h2" href="#" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Works</div></a>
                <ul class="sub-menu">
                  <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Works I - VI</div></a>
                    <ul class="sub-menu">
                      <li><a class="h3" href="project-details-1-fullscreen-center.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Nordic Adventure</div></a>
                      </li>
                      <li><a class="h3" href="project-details-2-bottom-center.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Sunrise in Desert</div></a>
                      </li>
                      <li><a class="h3" href="project-details-3-halfscreen-left-right.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Cassio Apartment</div></a>
                      </li>
                      <li><a class="h3" href="project-details-4-halfscreen-left-left.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Nothern Wave</div></a>
                      </li>
                      <li><a class="h3" href="project-details-5-bottom-container-center.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">On the Edge</div></a>
                      </li>
                      <li><a class="h3" href="project-details-6-bottom-fullwidth.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Paysage Fiction</div></a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Works VII - XIII</div></a>
                    <ul class="sub-menu">
                      <li><a class="h3" href="project-details-7-fullscreen-left.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Silence &amp; Noise</div></a>
                      </li>
                      <li><a class="h3" href="project-details-8-halfscreen-right-left.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Minimalex Cosmetics</div></a>
                      </li>
                      <li><a class="h3" href="project-details-9-fullscreen-center.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">La Isla Bonita</div></a>
                      </li>
                      <li><a class="h3" href="project-details-10-halfscreen-left-right.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Kinsey Premium Furniture</div></a>
                      </li>
                      <li><a class="h3" href="project-details-11-fullscreen-center.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Dancing in the Dark</div></a>
                      </li>
                      <li><a class="h3" href="project-details-12-bottom-container-center.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">The Silent Listener</div></a>
                      </li>
                      <li><a class="h3" href="project-details-13-bottom-container-center.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Arrigo Casual Accessories</div></a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="menu-item-has-children"><a class="h2" href="#" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Albums</div></a>
                <ul class="sub-menu">
                  <li><a class="h3" href="albums-list-reveal.html" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Mouse Hover Reveal</div></a>
                  </li>
                  <li><a class="h3" href="albums-list-covers.html" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">List Covers</div></a>
                  </li>
                  <li><a class="h3" href="albums-slider-covers.html" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Slider Covers</div></a>
                  </li>
                </ul>
              </li>
              <li class="menu-item-has-children"><a class="h2" href="#" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Blog</div></a>
                <ul class="sub-menu">
                  <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Grid Style</div></a>
                    <ul class="sub-menu">
                      <li><a class="h3" href="blog-grid-2-columns-sidebar.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Grid 2 Columns Sidebar</div></a>
                      </li>
                      <li><a class="h3" href="blog-grid-2-columns.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Grid 2 Columns</div></a>
                      </li>
                      <li><a class="h3" href="blog-grid-3-columns.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Grid 3 Columns</div></a>
                      </li>
                      <li><a class="h3" href="blog-grid-single-post-1.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Grid Single Post 1</div></a>
                      </li>
                      <li><a class="h3" href="blog-grid-single-post-2.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Grid Single Post 2</div></a>
                      </li>
                      <li><a class="h3" href="blog-grid-single-post-sidebar.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Grid Single Post Sidebar</div></a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">List Style</div></a>
                    <ul class="sub-menu">
                      <li><a class="h3" href="blog-list-sidebar.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">List Sidebar</div></a>
                      </li>
                      <li><a class="h3" href="blog-list.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">List No Sidebar</div></a>
                      </li>
                      <li><a class="h3" href="blog-list-single-post-sidebar.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">List Single Post Sidebar</div></a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="menu-item-has-children"><a class="h2" href="#" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Pages</div></a>
                <ul class="sub-menu">
                  <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Services</div></a>
                    <ul class="sub-menu">
                      <li><a class="h3" href="page-inner-services-1.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Services I</div></a>
                      </li>
                      <li><a class="h3" href="page-inner-services-2.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Services II</div></a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">About</div></a>
                    <ul class="sub-menu">
                      <li><a class="h3" href="page-inner-about-1.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">About I</div></a>
                      </li>
                      <li><a class="h3" href="page-inner-about-2.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">About II</div></a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Contacts</div></a>
                    <ul class="sub-menu">
                      <li><a class="h3" href="page-inner-contacts-1.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Contacts I</div></a>
                      </li>
                      <li><a class="h3" href="page-inner-contacts-2.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Contacts II</div></a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children"><a class="h3" href="#" data-pjax-link="overlayMenu">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">404 Page</div></a>
                    <ul class="sub-menu">
                      <li><a class="h3" href="page-inner-404-dark.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">404 Page Dark</div></a>
                      </li>
                      <li><a class="h3" href="page-inner-404-light.html" data-pjax-link="overlayMenu">
                          <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">404 Page Light</div></a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="h3" href="index.html" data-pjax-link="overlayMenu" target="_blank">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Demo Page</div></a>
                  </li>
                  <li><a class="h3" href="page-inner-services-1-classic-menu.html" data-pjax-link="overlayMenu" target="_blank">
                      <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Classic Menu</div></a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- - fullscreen menu -->
          <!-- fullscreen widgets -->
          <div class="header__wrapper-overlay-widgets">
            <div class="row">
              <!-- widget TEXT -->
              <div class="col-lg-4 header__widget">
                <div class="header__widget-title small-caps js-split-text split-text" data-split-text-type="lines">Contacts</div>
                <div class="header__widget-content js-split-text split-text" data-split-text-type="lines">
                  <p><a href="rhye@example.com">rhye@example.com</a><br/>+1 859-795-9217<br/>+1 716-913-6279<br/>
                  </p>
                </div>
              </div>
              <!-- - widget TEXT -->
              <!-- widget TEXT -->
              <div class="col-lg-4 header__widget">
                <div class="header__widget-title small-caps js-split-text split-text" data-split-text-type="lines">Office</div>
                <div class="header__widget-content js-split-text split-text" data-split-text-type="lines">
                  <p>4903 Mayo Street<br/>Cincinnati, KY 45202<br/>USA<br/>
                  </p>
                </div>
              </div>
              <!-- - widget TEXT -->
              <!-- widget TEXT -->
              <div class="col-lg-4 header__widget">
                <div class="header__widget-title small-caps js-split-text split-text" data-split-text-type="lines">Want to Work with Me?</div>
                <div class="header__widget-content js-split-text split-text" data-split-text-type="lines">
                  <p><a href="page-inner-contacts-1.html">Get in Touch</a><br/>
                  </p>
                </div>
              </div>
              <!-- - widget TEXT -->
            </div>
          </div>
          <!-- - fullscreen widgets -->
        </div>
        <!-- - fullscreen overlay container -->
      </header>
      <!-- - PAGE HEADER -->
      <!-- PAGE MAIN -->
      <div class="js-smooth-scroll bg-light-3" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead d-none" data-background-color="var(--color-light-3)"></section>
          <!-- - section MASTHEAD -->
          <!-- section PROJECTS SLIDER HALFSCREEN -->
          <section class="section section-fullheight section-projects section-projects-slider bg-light-3 overflow" data-arts-theme-text="dark" data-arts-os-animation>
            <div class="section-fullheight__inner section-fullheight__inner_mobile">
              <div class="slider slider-fullscreen-projects slider-halfscreen-projects js-slider-fullscreen-projects js-slider">
                <!-- slider COUNTER -->
                <div class="slider__wrapper-counter slider-fullscreen-projects__counter">
                  <div class="slider__counter slider__counter_current">
                    <div class="js-slider-fullscreen-projects__counter-current swiper-container">
                      <div class="swiper-wrapper"></div>
                    </div>
                  </div>
                  <div class="slider__counter-divider slider-fullscreen__counter-divider"></div>
                  <div class="slider__counter slider__counter_total js-slider-fullscreen-projects__counter-total">001</div>
                </div>
                <!-- - slider COUNTER -->
                <div class="container h-100">
                  <div class="row h-100 justify-content-between">
                    <div class="col-lg-6 slider-halfscreen-projects__col">
                      <!-- slider IMAGES -->
                      <div class="slider-fullscreen-projects__images slider-halfscreen-projects__images swiper-container js-slider-fullscreen-projects__images" data-mousewheel-enabled="data-mousewheel-enabled" data-direction="horizontal" data-aspect-ratio="1.5" data-speed="800" data-autoplay-enabled="false" data-autoplay-delay="6000">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner overflow" data-swiper-parallax="90%">
                              <div class="slider__bg swiper-lazy" data-background="img/assets/projects/project-1_vertical.jpg"></div>
                            </div>
                          </div>
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner overflow" data-swiper-parallax="90%">
                              <div class="slider__bg swiper-lazy" data-background="img/assets/projects/project-2_vertical.jpg"></div>
                            </div>
                          </div>
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner overflow" data-swiper-parallax="90%">
                              <div class="slider__bg swiper-lazy" data-background="img/assets/projects/project-5_vertical.jpg"></div>
                            </div>
                          </div>
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner overflow" data-swiper-parallax="90%">
                              <div class="slider__bg swiper-lazy" data-background="img/assets/projects/project-9_vertical.jpg"></div>
                            </div>
                          </div>
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner overflow" data-swiper-parallax="90%">
                              <div class="slider__bg swiper-lazy" data-background="img/assets/projects/project-11_vertical.jpg"></div>
                            </div>
                          </div>
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner overflow" data-swiper-parallax="90%">
                              <div class="slider__bg swiper-lazy" data-background="img/assets/projects/project-12_vertical.jpg"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- - slider IMAGES -->
                    </div>
                    <div class="col-lg-5 align-self-lg-center z-100 slider-halfscreen-projects__col">
                      <!-- slider CONTENT -->
                      <div class="slider-halfscreen-projects__content p-0 swiper-container js-slider-fullscreen-projects__content">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">Portraits</div>
                            <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">Nordic Adventure</h2>
                            <div class="slider__wrapper-button mt-1"><a class="button button_black button_solid" data-hover="Explore Project" href="project-details-1-fullscreen-center.html"><span class="button__label-hover">Explore Project</span></a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">Portraits</div>
                            <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">Sunrise in Desert</h2>
                            <div class="slider__wrapper-button mt-1"><a class="button button_black button_solid" data-hover="Explore Project" href="project-details-2-bottom-center.html"><span class="button__label-hover">Explore Project</span></a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">Portraits</div>
                            <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">On the Edge</h2>
                            <div class="slider__wrapper-button mt-1"><a class="button button_black button_solid" data-hover="Explore Project" href="project-details-5-bottom-container-center.html"><span class="button__label-hover">Explore Project</span></a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">Portraits</div>
                            <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">La Isla Bonita</h2>
                            <div class="slider__wrapper-button mt-1"><a class="button button_black button_solid" data-hover="Explore Project" href="project-details-9-fullscreen-center.html"><span class="button__label-hover">Explore Project</span></a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">Portraits</div>
                            <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">Dancing in the Dark</h2>
                            <div class="slider__wrapper-button mt-1"><a class="button button_black button_solid" data-hover="Explore Project" href="project-details-11-fullscreen-center.html"><span class="button__label-hover">Explore Project</span></a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">Portraits</div>
                            <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">The Silent Listener</h2>
                            <div class="slider__wrapper-button mt-1"><a class="button button_black button_solid" data-hover="Explore Project" href="project-details-12-bottom-container-center.html"><span class="button__label-hover">Explore Project</span></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- - slider CONTENT -->
                    </div>
                  </div>
                  <div class="slider__circle"></div>
                </div>
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
                <!-- overlay -->
                <div class="slider__overlay overlay overlay_light z-50 d-lg-none"></div>
                <!-- - overlay -->
              </div>
            </div>
          </section>
          <!-- - section PROJECTS SLIDER HALFSCREEN -->
        </main>
        <!-- PAGE FOOTER -->
        <!-- - PAGE FOOTER -->
      </div>
      <!-- - PAGE MAIN -->
    </div>
    <canvas id="js-webgl"></canvas>
    <!-- PhotoSwipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true" data-arts-theme-text="light">
      <!-- background -->
      <div class="pswp__bg"></div>
      <!-- - background -->
      <!-- slider wrapper -->
      <div class="pswp__scroll-wrap">
        <!-- slides holder (don't modify)-->
        <div class="pswp__container">
          <div class="pswp__item">
            <div class="pswp__img pswp__img--placeholder"></div>
          </div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <!-- - slides holder (don't modify)-->
        <!-- UI -->
        <div class="pswp__ui pswp__ui--hidden">
          <!-- top bar -->
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.2" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.2" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- - top bar -->
          <!-- left arrow -->
          <div class="pswp__button pswp__button--arrow--left">
            <div class="arrow arrow-left js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
              <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
              </svg>
              <div class="arrow__pointer arrow-left__pointer"></div>
              <div class="arrow__triangle"></div>
            </div>
          </div>
          <!-- - left arrow -->
          <!-- right arrow -->
          <div class="pswp__button pswp__button--arrow--right">
            <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
              <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
              </svg>
              <div class="arrow__pointer arrow-right__pointer"></div>
              <div class="arrow__triangle"></div>
            </div>
          </div>
          <!-- - right arrow -->
          <!-- slide caption holder (don't modify) -->
          <div class="pswp__caption">
            <div class="pswp__caption__center text-center"></div>
          </div>
          <!-- - slide caption holder (don't modify) -->
        </div>
        <!-- - UI -->
      </div>
      <!-- slider wrapper -->
    </div>
    <!-- - PhotoSwipe -->
    <!-- List Hover Shaders -->
    <script id="list-hover-vs" type="x-shader/x-vertex">
      uniform vec2 uOffset;
      
      varying vec2 vUv;
      
      vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
        float M_PI = 3.1415926535897932384626433832795;
        position.x = position.x + (sin(uv.y * M_PI) * offset.x);
        position.y = position.y + (sin(uv.x * M_PI) * offset.y);
        return position;
      }
      
      void main() {
        vUv =  uv + (uOffset * 2.);
        vec3 newPosition = position;
        newPosition = deformationCurve(position,uv,uOffset);
        gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
      }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
      uniform sampler2D uTexture;
      uniform float uAlpha;
      uniform float uScale;
      
      varying vec2 vUv;
      
      vec2 scaleUV(vec2 uv,float scale) {
        float center = 0.5;
        return ((uv - center) * scale) + center;
      }
      
      void main() {
        vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
        gl_FragColor = vec4(color,uAlpha);
      }
      
    </script>
    <!-- - List Hover Shaders -->
    <!-- Slider Textures Shaders -->
    <script id="slider-textures-vs" type="x-shader/x-vertex">
      varying vec2 vUv;
      void main() {
        vUv = uv;
        gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
      }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
      varying vec2 vUv;
      
      uniform sampler2D texture;
      uniform sampler2D texture2;
      uniform sampler2D disp;
      
      uniform float dispFactor;
      uniform float effectFactor;
      
      void main() {
      
        vec2 uv = vUv;
      
        vec4 disp = texture2D(disp, uv);
      
        vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
        vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
      
        vec4 _texture = texture2D(texture, distortedPosition);
        vec4 _texture2 = texture2D(texture2, distortedPosition2);
      
        vec4 finalTexture = mix(_texture, _texture2, dispFactor);
      
        gl_FragColor = finalTexture;
      
      }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
      varying vec2 vUv;
      
      uniform sampler2D texture;
      uniform sampler2D texture2;
      uniform sampler2D disp;
      
      uniform float dispFactor;
      uniform float effectFactor;
      
      void main() {
      
        vec2 uv = vUv;
      
        vec4 disp = texture2D(disp, uv);
      
        vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
        vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
      
        vec4 _texture = texture2D(texture, distortedPosition);
        vec4 _texture2 = texture2D(texture2, distortedPosition2);
      
        vec4 finalTexture = mix(_texture, _texture2, dispFactor);
      
        gl_FragColor = finalTexture;
      
      }
      
    </script>
    <!-- - Slider Textures Shaders -->
    <!-- VENDOR SCRIPTS -->
    <script src="js/vendor.js"></script>
    <!-- - VENDOR SCRIPTS -->
    <!-- COMPONENTS -->
    <script src="js/components.js"></script>
    <!-- - COMPONENTS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwR_TrF6h7-pMxkKv_q2t8BXX3w6QuFOc" async></script>
  </body>
</html>