@extends('layouts.app')

@section('content')
<section class="section jumbotron-2">
        <div class="jumbotron-2-content context-dark bg-image" style="background-image: url(images/bg-image-1.jpg);">
          <!-- RD Navbar-->
          <div class="rd-navbar-wrap" style="height: 0px;">
            <nav class="rd-navbar rd-navbar-modern rd-navbar-original rd-navbar-fixed" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
              <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                  <!-- RD Navbar Panel-->
                  <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-inverse-316x92.png" alt="" width="158" height="46"><img class="brand-logo-light" src="images/logo-default-316x92.png" alt="" width="158" height="46"></a>
                    </div>
                  </div>
                  <div class="rd-navbar-nav-wrap toggle-original-elements">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">About</a>
                      </li>
                      <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link" href="#">Community</a><span class="rd-navbar-submenu-toggle"></span>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="community-1.html">Community 1</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="community-2.html">Community 2</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="person-page.html">Person Page</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="locations.html">Locations</a>
                      </li>
                      <li class="rd-nav-item rd-navbar--has-megamenu rd-navbar-submenu"><a class="rd-nav-link" href="#">Pages</a><span class="rd-navbar-submenu-toggle"></span>
                        <!-- RD Navbar Megamenu-->
                        <ul class="rd-menu rd-navbar-megamenu rd-navbar-open-right">
                          <li class="rd-megamenu-item">
                            <p class="rd-megamenu-title">Elements</p>
                            <div class="rd-megamenu-block">
                              <ul class="rd-megamenu-list">
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Typography</a></li>
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="buttons.html">Buttons</a></li>
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Forms</a></li>
                              </ul>
                              <ul class="rd-megamenu-list">
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="icon-lists.html">Icon Lists</a></li>
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="counters-and-accordions.html">Counters &amp; Accordions</a></li>
                              </ul>
                            </div>
                          </li>
                          <li class="rd-megamenu-item">
                            <p class="rd-megamenu-title">Pages</p>
                            <div class="rd-megamenu-block">
                              <ul class="rd-megamenu-list">
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="our-team.html">Our Team</a></li>
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="testimonials.html">Testimonials</a></li>
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="contact-us.html">Contact Us</a></li>
                              </ul>
                              <ul class="rd-megamenu-list">
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="404-page.html">404 Page</a></li>
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">Privacy policy</a></li>
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">Search results</a></li>
                              </ul>
                            </div>
                          </li>
                          <li class="rd-megamenu-item">
                            <p class="rd-megamenu-title">Gallery</p>
                            <div class="rd-megamenu-block">
                              <ul class="rd-megamenu-list">
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-gallery.html">Grid Gallery</a></li>
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="masonry-gallery.html">Masonry Gallery</a></li>
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-fullwidth-gallery.html">Grid Fullwidth Gallery</a></li>
                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="masonry-fullwidth-gallery.html">Masonry Fullwidth Gallery</a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link" href="#">Blog</a><span class="rd-navbar-submenu-toggle"></span>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown rd-navbar-open-left">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="classic-blog.html">Classic blog</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-blog.html">Grid blog</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="modern-blog.html">Modern blog</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="masonry-blog.html">Masonry blog</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog post</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="rd-navbar-collapse-outer context-light">
                    <button class="rd-navbar-collapse-toggle" data-multitoggle="#rd-navbar-collapse"><span></span><span></span><span></span></button>
                    <div class="rd-navbar-collapse" id="rd-navbar-collapse">
                      <button class="rd-navbar-collapse-close" data-multitoggle="#rd-navbar-collapse"><span class="rd-navbar-collapse-toggle-element active"><span></span></span></button>
                      <h4 class="font-weight-sbold">Address &amp; Phone</h4>
                      <h5 class="ls-1">9 Valley St. Brooklyn, NY 11203</h5>
                      <h5 class="ls-1"><a href="tel:#">1-800-346-6277</a></h5>
                      <div class="divider divider-small"></div>
                      <h4 class="font-weight-sbold">Locations</h4>
                      <!-- Owl Carousel-->
                      <div class="owl-carousel owl-carousel-tour-minimal owl-loaded" data-items="1" data-dots="true" data-nav="false" data-auto-width="true" data-loop="true" data-margin="0" data-autoplay="false" data-mouse-drag="false" style="">
                        
                        
                        
                      <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-520px, 0px, 0px); transition: all 0s ease 0s; width: 1820px;"><div class="owl-item cloned" style="width: auto;"><div class="owl-item-inner">
                          <article class="tour-minimal context-dark">
                            <div class="tour-minimal-inner" style="background-image: url(images/tour-2-258x273.jpg);">
                              <div class="tour-minimal-main">
                                <h4 class="tour-minimal-title"><a href="#">London</a></h4>
                              </div>
                            </div>
                          </article>
                        </div></div><div class="owl-item cloned" style="width: auto;"><div class="owl-item-inner">
                          <article class="tour-minimal context-dark">
                            <div class="tour-minimal-inner" style="background-image: url(images/tour-3-258x273.jpg);">
                              <div class="tour-minimal-main">
                                <h4 class="tour-minimal-title"><a href="#">Barcelona</a></h4>
                              </div>
                            </div>
                          </article>
                        </div></div><div class="owl-item active" style="width: auto;"><div class="owl-item-inner">
                          <article class="tour-minimal context-dark">
                            <div class="tour-minimal-inner" style="background-image: url(images/tour-1-258x273.jpg);">
                              <div class="tour-minimal-main">
                                <h4 class="tour-minimal-title"><a href="#">Amsterdam</a></h4>
                              </div>
                            </div>
                          </article>
                        </div></div><div class="owl-item active" style="width: auto;"><div class="owl-item-inner">
                          <article class="tour-minimal context-dark">
                            <div class="tour-minimal-inner" style="background-image: url(images/tour-2-258x273.jpg);">
                              <div class="tour-minimal-main">
                                <h4 class="tour-minimal-title"><a href="#">London</a></h4>
                              </div>
                            </div>
                          </article>
                        </div></div><div class="owl-item" style="width: auto;"><div class="owl-item-inner">
                          <article class="tour-minimal context-dark">
                            <div class="tour-minimal-inner" style="background-image: url(images/tour-3-258x273.jpg);">
                              <div class="tour-minimal-main">
                                <h4 class="tour-minimal-title"><a href="#">Barcelona</a></h4>
                              </div>
                            </div>
                          </article>
                        </div></div><div class="owl-item cloned" style="width: auto;"><div class="owl-item-inner">
                          <article class="tour-minimal context-dark">
                            <div class="tour-minimal-inner" style="background-image: url(images/tour-1-258x273.jpg);">
                              <div class="tour-minimal-main">
                                <h4 class="tour-minimal-title"><a href="#">Amsterdam</a></h4>
                              </div>
                            </div>
                          </article>
                        </div></div><div class="owl-item cloned" style="width: auto;"><div class="owl-item-inner">
                          <article class="tour-minimal context-dark">
                            <div class="tour-minimal-inner" style="background-image: url(images/tour-2-258x273.jpg);">
                              <div class="tour-minimal-main">
                                <h4 class="tour-minimal-title"><a href="#">London</a></h4>
                              </div>
                            </div>
                          </article>
                        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div><a class="button button-default-outline" href="contact-us.html">Get in Touch</a>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
          <div class="container">
            <div class="jumbotron-2-content-inner">
              <div class="row justify-content-start">
                <div class="col-xl-5">
                  <h1 class="text-white">New Places, Unforgettable Dating.</h1>
                  <p class="text-white-8 text-md intro-subtitle ls-ng-1">Still looking for your significant other? Loven is the place for you! Join us now to meet single men and women worldwide.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="jumbotron-2-block">
          <div class="jumbotron-2-inner">
            <div class="container">
              <form class="search-form row row-narrow-20 align-items-center justify-content-center row-20">
                <div class="col-xl-7 block-m">
                  <div class="group-20">
                    <div class="form-wrap">
                      <label class="form-label form-label-outside rd-input-label" for="gender">I am</label>
                      <select class="form-input form-control-has-validation form-control-last-child select2-hidden-accessible" id="gender" name="gender" data-constraints="@Required" data-placeholder="Man" data-select2-id="gender" tabindex="-1" aria-hidden="true">
                        <option label="placeholder" data-select2-id="2"></option>
                        <option>Man</option>
                        <option>Woman</option>
                        <option>Non-Binary</option>
                      </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 121.333px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-gender-container"><span class="select2-selection__rendered" id="select2-gender-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Man</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="form-validation"></span>
                    </div>
                    <div class="form-wrap">
                      <label class="form-label form-label-outside rd-input-label" for="looking">Looking for</label>
                      <select class="form-input form-control-has-validation form-control-last-child select2-hidden-accessible" id="looking" name="gender" data-constraints="@Required" data-placeholder="Woman" data-select2-id="looking" tabindex="-1" aria-hidden="true">
                        <option label="placeholder" data-select2-id="4"></option>
                        <option>Woman</option>
                        <option>Man</option>
                        <option>Non-Binary</option>
                      </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 119.417px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-looking-container"><span class="select2-selection__rendered" id="select2-looking-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Woman</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="form-validation"></span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-5 block-s">
                  <div class="form-wrap">
                    <label class="form-label form-label-outside rd-input-label" for="start-age">Age</label>
                  </div>
                  <div class="small-group">
                    <div class="form-wrap">
                      <select class="form-input form-control-has-validation form-control-last-child select2-hidden-accessible" id="start-age" name="gender" data-constraints="@Required" data-placeholder="18" data-select2-id="start-age" tabindex="-1" aria-hidden="true">
                        <option label="placeholder" data-select2-id="6"></option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                      </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 97px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-start-age-container"><span class="select2-selection__rendered" id="select2-start-age-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">18</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="form-validation"></span>
                    </div><span class="divider-1"></span>
                    <div class="form-wrap">
                      <select class="form-input form-control-has-validation form-control-last-child select2-hidden-accessible" id="end-age" name="gender" data-constraints="@Required" data-placeholder="30" data-select2-id="end-age" tabindex="-1" aria-hidden="true">
                        <option label="placeholder" data-select2-id="8"></option>
                        <option>31</option>
                        <option>32</option>
                        <option>33</option>
                        <option>34</option>
                      </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: 99px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-end-age-container"><span class="select2-selection__rendered" id="select2-end-age-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">30</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="form-validation"></span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-7 block-l">
                  <div class="form-wrap">
                    <label class="form-label form-label-outside rd-input-label" for="country">Country</label>
                  </div>
                  <div class="group-20 align-items-end big-group">
                    <div class="form-wrap">
                      <select class="form-input form-control-has-validation form-control-last-child select2-hidden-accessible" id="country" name="country" data-constraints="@Required" data-placeholder="Choose your country" data-select2-id="country" tabindex="-1" aria-hidden="true">
                        <option label="placeholder" data-select2-id="10"></option>
                        <option>USA</option>
                        <option>Canada</option>
                        <option>UK</option>
                        <option>Ireland</option>
                        <option>France</option>
                      </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="9" style="width: 121.333px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-country-container"><span class="select2-selection__rendered" id="select2-country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose your country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="form-validation"></span>
                    </div>
                    <div class="form-wrap form-button">
                      <button class="button button-icon button-icon-left button-primary" type="submit"><span class="icon mdi mdi-magnify"></span>Find your partner</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="divider-3"></div>
          <div class="container mt-30 mt-md-45 mt-xxl-75 text-center">
            <h2 class="wow fadeIn" style="visibility: hidden; animation-name: none;">Only True People</h2>
            <p class="text-gray-700 wow fadeIn" data-wow-delay=".025s" style="visibility: hidden; animation-delay: 0.025s; animation-name: none;"><span style="max-width: 850px;">Every user registered on Loven is verified via photo and mobile phone so you don’t have to worry how real or fake anyone is.</span></p>
            <div class="row row-30 row-xl-50 mt-md-45 mt-xxl-60">
              <div class="col-sm-6 col-lg-4">
                <!-- Tour 3-->
                <article class="tour-3 bg-image context-dark wow fadeIn" style="background-image: url(&quot;images/visitor-1-370x417.jpg&quot;); visibility: hidden; animation-name: none;">
                  <div class="tour-3-inner">
                    <div class="tour-3-main">
                      <h3 class="tour-3-title"><a href="person-page.html">Jenny Wilson</a></h3>
                      <ul class="tour-3-meta">
                        <li><span class="icon mdi material-design-clock100"></span><span>active 10 days ago</span></li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-lg-4">
                <!-- Tour 3-->
                <article class="tour-3 bg-image context-dark wow fadeIn" style="background-image: url(&quot;images/visitor-2-370x417.jpg&quot;); visibility: hidden; animation-delay: 0.1s; animation-name: none;" data-wow-delay=".1s">
                  <div class="tour-3-inner">
                    <div class="tour-3-main">
                      <h3 class="tour-3-title"><a href="person-page.html">Kathryn Murphy</a></h3>
                      <ul class="tour-3-meta">
                        <li><span class="icon mdi material-design-clock100"></span><span>active 10 days ago</span></li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-lg-4">
                <!-- Tour 3-->
                <article class="tour-3 bg-image context-dark wow fadeIn" style="background-image: url(&quot;images/visitor-3-370x417.jpg&quot;); visibility: hidden; animation-delay: 0.2s; animation-name: none;" data-wow-delay=".2s">
                  <div class="tour-3-inner">
                    <div class="tour-3-main">
                      <h3 class="tour-3-title"><a href="person-page.html">Marvin McKinney</a></h3>
                      <ul class="tour-3-meta">
                        <li><span class="icon mdi material-design-clock100"></span><span>active 8 days ago</span></li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-lg-4">
                <!-- Tour 3-->
                <article class="tour-3 bg-image context-dark wow fadeIn" style="background-image: url(&quot;images/visitor-4-370x417.jpg&quot;); visibility: hidden; animation-delay: 0.3s; animation-name: none;" data-wow-delay=".3s">
                  <div class="tour-3-inner">
                    <div class="tour-3-main">
                      <h3 class="tour-3-title"><a href="person-page.html">Ralph Edwards</a></h3>
                      <ul class="tour-3-meta">
                        <li><span class="icon mdi material-design-clock100"></span><span>active 5 days ago</span></li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-lg-4">
                <!-- Tour 3-->
                <article class="tour-3 bg-image context-dark wow fadeIn" style="background-image: url(&quot;images/visitor-5-370x417.jpg&quot;); visibility: hidden; animation-delay: 0.4s; animation-name: none;" data-wow-delay=".4s">
                  <div class="tour-3-inner">
                    <div class="tour-3-main">
                      <h3 class="tour-3-title"><a href="person-page.html">Albert Flores</a></h3>
                      <ul class="tour-3-meta">
                        <li><span class="icon mdi material-design-clock100"></span><span>active 3 days ago</span></li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-lg-4">
                <!-- Tour 3-->
                <article class="tour-3 bg-image context-dark wow fadeIn" style="background-image: url(&quot;images/visitor-6-370x417.jpg&quot;); visibility: hidden; animation-delay: 0.5s; animation-name: none;" data-wow-delay=".5s">
                  <div class="tour-3-inner">
                    <div class="tour-3-main">
                      <h3 class="tour-3-title"><a href="person-page.html">Eleanor Pena</a></h3>
                      <ul class="tour-3-meta">
                        <li><span class="icon mdi material-design-clock100"></span><span>active 2 days ago</span></li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 wow fadeIn text-center" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;"><a class="button button-sm button-primary wow fadeIn" href="#" data-wow-delay=".07s" style="visibility: hidden; animation-delay: 0.07s; animation-name: none;">View more</a></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="range">
          <div class="cell-lg-7 cell-xl-8 cell-xxl-9">
            <div class="cell-inner section-lg text-center text-sm-left">
              <h2 class="text-center text-xl-left wow fadeIn" style="visibility: visible; animation-name: fadeIn;">Why Choose Loven</h2>
              <p class="text-center text-xl-left wow fadeIn" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.05s; animation-name: fadeIn;">Here’s why lots of people choose our website.</p>
              <!-- Owl Carousel-->
              <div class="owl-carousel owl-1 list-group-1 mt-lg-50 owl-loaded" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="2" data-xl-items="3" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="30" data-mouse-drag="false" style="">
                
                
                
              <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 968px;"><div class="owl-item active" style="width: 292.334px; margin-right: 30px;"><article class="lg-1-item wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                  <div class="icon lg-1-item-icon mdi mdi-account-search"></div>
                  <div class="lg-1-item-main">
                    <h3 class="lg-1-item-title font-weight-normal"><span class="lg-1-item-counter"></span>Simple to Use</h3>
                    <p>Loven is very easy to use - just choose your and your partner’s gender, age, and location, and you’re all set!</p>
                  </div>
                </article></div><div class="owl-item active" style="width: 292.334px; margin-right: 30px;"><article class="lg-1-item wow fadeIn" data-wow-delay=".025s" style="visibility: visible; animation-delay: 0.025s; animation-name: fadeIn;">
                  <div class="icon lg-1-item-icon mdi material-design-compass106"></div>
                  <div class="lg-1-item-main">
                    <h3 class="lg-1-item-title font-weight-normal"><span class="lg-1-item-counter"></span>Smart Matching</h3>
                    <p>Our matching system is based on geolocation and interests. It helps you find the best people to meet or spend time with.</p>
                  </div>
                </article></div><div class="owl-item" style="width: 292.334px; margin-right: 30px;"><article class="lg-1-item wow fadeIn" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.05s; animation-name: fadeIn;">
                  <div class="icon lg-1-item-icon mdi mdi-comment-processing"></div>
                  <div class="lg-1-item-main">
                    <h3 class="lg-1-item-title font-weight-normal"><span class="lg-1-item-counter"></span>Cool Community</h3>
                    <p>Besides being #1 dating service, we have a supportive and understanding community that’s always ready to help.</p>
                  </div>
                </article></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
            </div>
          </div>
          <div class="cell-lg-5 cell-xl-4 cell-xxl-3 height-fill">
            <div class="box-3 bg-image" style="background-image: url(images/about-2.jpg);"><a class="box-3-play" data-lightgallery="item" href="../../watch.html?v=V7mJgSzbckc&amp;t=1s&amp;ab_channel=productpage_video"><span class="icon mdi mdi-play"></span></a></div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 flex-lg-row-reverse align-items-center justify-content-xl-between">
            <div class="col-lg-4 col-xl-5 col-xxl-4">
              <div class="block-7">
                <h2 class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">Meet Singles <br> in Your Area</h2>
                <p class="ls-ng-1 text-md text-black-5 mt-md-20 mt-xxl-50 wow fadeIn" data-wow-delay=".025s" style="visibility: visible; animation-delay: 0.025s; animation-name: fadeIn;">If you want to meet local singles for dating, companionship, friendship or even more, you have come to the right place.</p><a class="button button-lg button-icon button-icon-left button-primary offset-xl-t-45 wow fadeIn" href="#" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.05s; animation-name: fadeIn;"><span class="icon mdi mdi-magnify"></span>Find your partner</a>
              </div>
            </div>
            <div class="col-lg-8 col-xl-7">
              <div class="row row-30">
                <div class="col-sm-6 wow fadeIn" style="visibility: visible; animation-name: fadeIn;"><a class="destination-1 context-dark" href="#">
                    <figure class="destination-1-figure">
                      <div class="destination-1-image bg-image" style="background-image: url(images/destinations-1-363x260.jpg);"></div>
                    </figure>
                    <div class="destination-1-caption">
                      <p class="destination-1-decoration-title">Amsterdam</p>
                      <p class="heading-3 destination-1-title">Amsterdam</p>
                      <div class="destination-1-comment"><span>from $560</span></div>
                    </div></a>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay=".025s" style="visibility: visible; animation-delay: 0.025s; animation-name: fadeIn;"><a class="destination-1 context-dark" href="#">
                    <figure class="destination-1-figure">
                      <div class="destination-1-image bg-image" style="background-image: url(images/destinations-2-363x260.jpg);"></div>
                    </figure>
                    <div class="destination-1-caption">
                      <p class="destination-1-decoration-title">London</p>
                      <p class="heading-3 destination-1-title">London</p>
                      <div class="destination-1-comment"><span>from $500</span></div>
                    </div></a>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay=".025s" style="visibility: hidden; animation-delay: 0.025s; animation-name: none;"><a class="destination-1 context-dark" href="#">
                    <figure class="destination-1-figure">
                      <div class="destination-1-image bg-image" style="background-image: url(images/destinations-3-363x260.jpg);"></div>
                    </figure>
                    <div class="destination-1-caption">
                      <p class="destination-1-decoration-title">Barcelona</p>
                      <p class="heading-3 destination-1-title">Barcelona</p>
                      <div class="destination-1-comment"><span>from $800</span></div>
                    </div></a>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay=".05s" style="visibility: hidden; animation-delay: 0.05s; animation-name: none;"><a class="destination-1 context-dark" href="#">
                    <figure class="destination-1-figure">
                      <div class="destination-1-image bg-image" style="background-image: url(images/destinations-4-363x260.jpg);"></div>
                    </figure>
                    <div class="destination-1-caption">
                      <p class="destination-1-decoration-title">New York</p>
                      <p class="heading-3 destination-1-title">New York</p>
                      <div class="destination-1-comment"><span>from $670</span></div>
                    </div></a>
                </div>
                <div class="col-sm-6 d-none d-lg-block"></div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay=".075s" style="visibility: hidden; animation-delay: 0.075s; animation-name: none;"><a class="destination-1 context-dark" href="#">
                    <figure class="destination-1-figure">
                      <div class="destination-1-image bg-image" style="background-image: url(images/destinations-5-363x260.jpg);"></div>
                    </figure>
                    <div class="destination-1-caption">
                      <p class="destination-1-decoration-title">Paris</p>
                      <p class="heading-3 destination-1-title">Paris</p>
                      <div class="destination-1-comment"><span>from $400</span></div>
                    </div></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section cta-section position-relative section-sm context-dark bg-img-2">
        <div class="container">
          <div class="row justify-content-lg-end justify-content-center">
            <div class="col-md-8 col-lg-5 d-flex flex-column justify-content-center wow fadeInRight" style="visibility: hidden; animation-name: none;">
              <h2>Premium Membership</h2>
              <p class="text-white-7">Enjoy the benefits of our dating services membership! Use the psychological matching to find the best people and experience other great bonuses.</p>
              <div class="unit cta-unit unit-spacing-md flex-column flex-sm-row align-items-center offset-xl-t-40">
                <div class="unit-left"><a class="button button-md button-light" href="#">view all options</a></div>
                <div class="unit-body"><span class="text-white-7">14 days for free</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection