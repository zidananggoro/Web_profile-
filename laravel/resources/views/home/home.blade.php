<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="{{url('tampilan/assets/css/swiper-bundle.min.css')}}">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="{{url('tampilan/assets/css/styles.css')}}">

        <title>Ertha</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
          <nav class="nav container">
              <a href="#" class="nav__logo">Ertha </a>

              <div class="nav__menu" id="nav-menu">
                  <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home " class="nav__link active-link">
                                <i class="uil uil-estate nav__icon"></i> Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="uil uil-user nav__icon"></i> About
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i> Skills
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">
                                <i class="uil uil-briefcase-alt nav__icon"></i> Services
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i> Portfolio
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i> Contactme
                            </a>
                        </li>
                  </ul>
                  <i class="uil uil-times nav__close" id="nav-close"></i>
              </div>

              <div class="nav__btns">
                    <!-- theme change butoon -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
              </div>
          </nav>  
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="https://www.linkedin.com/in/ertha-risky-149482231/" target="_blank" class="home__social-icon">
                                <i class="uil uil-linkedin-alt"></i>
                            </a>
                            <a href="https://dribbble.com/" target="_blank" class="home__social-icon">
                                <i class="uil uil-dribbble"></i>
                            </a>
                            <a href="https://github.com/ertharisky" target="_blank" class="home__social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>
                        </div>
                            <div class="home__img">
                                <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <mask id="mask0" mask-type="alpha">
                                        <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                    </mask>
                                    <g mask="url(#mask0)">
                                        <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>

                                        <image class="home__blob-img" xlink:href="{{url('tampilan/assets/img/gamabar.png')}}"/>
                                    </g>
                                </svg>
                          </div>

                          <div class="home__data">
                              <h1 class="home__title">HI, I'am Ertha</h1>
                              <h3 class="home__subtitle">Junior developer</h3>
                              <p class="home__description">High level experience in web design and development knowledge, producing quality work.</p>
                              <a href="#contact" class="button button--flex">
                                 Contact me <i class="uil uil-message button__icon"></i>
                              </a>
                          </div>
                    </div>

                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-button button--flex">
                            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                            <span class="hoem__scroll-name">
                                Scroll down
                            </span>
                            <i class="uil uil-arrow-down home__scroll-arrow"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title">About Me</h2>
                <span class="section__subtitle">My Introduction</span>

                <div class="about__container container grid">
                    <img src="{{url('tampilan/assets/img/ggwp.jpg')}}" alt="" class="about__img">

                    <div class="about__data">
                        <p class="about__description">Web developer, with extensive knowledge and years of experience, working in web technologies and Ui / Ux design, delivering quality work.</p>

                        <div class="about__info">
                            <div>
                                <span class="about__info-title">08+</span>
                                <span class="about__info-name">Years <br> experience</span>
                            </div>
                            <div>
                                <span class="about__info-title">20+</span>
                                <span class="about__info-name">completed <br> project</span>
                            </div>
                            <div>
                                <span class="about__info-title">05+</span>
                                <span class="about__info-name">Companies <br> worked</span>
                            </div>
                        </div>

                        <div class="about__buttons">
                            <a download="" href="assets/pdf/Alexa-Cv.pdf" class="button button--flex">
                                Download CV<i class="uil uil-download-alt button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <h2 class="section__title">Skills</h2>
                <span class="section__subtitle">My technical level</span>

                <div class="skills__container container grid">
                    <div>
                          <!--==================== SKILLS 1 ====================-->
                          <div class="skills__content skills__open">
                              <div class="skills__header">
                                  <i class="uil uil-brackets-curly skills__icon"></i>

                                  <div>
                                      <h1 class="skills__titles">Frontend Developer</h1>
                                      <span class="skills__subtitle">More than 4 years</span>
                                  </div>

                                  <i class="uil uil-angle-down skills__arrow"></i>
                              </div>

                              <div class="skills__list grid">
                                  <div class="skills__data">
                                      <div class="skills__titles">
                                          <h3 class="skills__name">HTML</h3>
                                          <span class="skills__number">90%</span>
                                      </div>
                                      <div class="skills__bar">
                                          <span class="skills__percentage skills__html"></span>
                                      </div>
                                  </div>

                                  <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__css"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Java Script</h3>
                                        <span class="skills__number">70%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__js"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">React</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__react"></span>
                                    </div>
                                </div>
                              </div>
                          </div>
                           <!--==================== SKILLS 2 ====================-->
                           <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-server-network skills__icon"></i>

                                <div>
                                    <h1 class="skills__titles">Backend Developer</h1>
                                    <span class="skills__subtitle">More than 2 years</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">PHP</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__php"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                  <div class="skills__titles">
                                      <h3 class="skills__name">Laravel</h3>
                                      <span class="skills__number">80%</span>
                                  </div>
                                  <div class="skills__bar">
                                      <span class="skills__percentage skills__laravel"></span>
                                  </div>
                              </div>

                              <div class="skills__data">
                                  <div class="skills__titles">
                                      <h3 class="skills__name">Java</h3>
                                      <span class="skills__number">70%</span>
                                  </div>
                                  <div class="skills__bar">
                                      <span class="skills__percentage skills__java"></span>
                                  </div>
                              </div>

                              <div class="skills__data">
                                  <div class="skills__titles">
                                      <h3 class="skills__name">Python</h3>
                                      <span class="skills__number">90%</span>
                                  </div>
                                  <div class="skills__bar">
                                      <span class="skills__percentage skills__python"></span>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!--==================== SKILLS 3 ====================-->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-swatchbook skills__icon"></i>

                                <div>
                                    <h1 class="skills__titles">Desainer</h1>
                                    <span class="skills__subtitle">More than 4 years</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Photoshop</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__photo"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                  <div class="skills__titles">
                                      <h3 class="skills__name">Figma</h3>
                                      <span class="skills__number">80%</span>
                                  </div>
                                  <div class="skills__bar">
                                      <span class="skills__percentage skills__figma"></span>
                                  </div>
                              </div>

                              <div class="skills__data">
                                  <div class="skills__titles">
                                      <h3 class="skills__name">Adobe Xd</h3>
                                      <span class="skills__number">70%</span>
                                  </div>
                                  <div class="skills__bar">
                                      <span class="skills__percentage skills__adobe"></span>
                                  </div>
                              </div>

                              <div class="skills__data">
                                  <div class="skills__titles">
                                      <h3 class="skills__name">Ilustator</h3>
                                      <span class="skills__number">90%</span>
                                  </div>
                                  <div class="skills__bar">
                                      <span class="skills__percentage skills__ilustrator"></span>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">
                <h2 class="section__title">Qualification</h2>
                <span class="section__subtitle">My Personal Journey</span>

                <div class="qualification__container container">
                    <div class="qualification__tabs">
                        <div class="qualification__button button--flex qualification__active" data-target="#education">
                            <i class="uil uil-graduation-cap qualification__icon"></i>
                            Education
                        </div>

                        <div class="qualification__button button--flex" data-target="#work">
                            <i class="uil uil-briefcase-alt qualification__icon"></i>
                            Work
                        </div>
                    </div>
                    <div class="qualification__sections">
                         <!--==================== QUALIFICATION CONTENT 1 ====================-->
                         <div class="qualification__content qualification__active" data-content id="education">
                               <!--==================== QUALIFICATION 1 ====================-->
                               <div class="qualification__data">
                                   <div>
                                       <h3 class="qualification__title">Computer Engginer</h3>
                                       <span class="qualification__subtitle">University</span>
                                       <div class="qualification__calendar">
                                           <i class="uil uil-calendar-alt"></i>
                                           2009-2014
                                       </div>
                                   </div>
                                   <div>
                                       <span class="qualification__rounder"></span>
                                       <span class="qualification__line"></span>
                                       
                                   </div>
                               </div>
                                <!--==================== QUALIFICATION 2 ====================-->
                                <div class="qualification__data">
                                    <div></div>

                                    <div>
                                        <span class="qualification__rounder"></span>
                                        <span class="qualification__line"></span>
                                        
                                    </div>

                                    <div>
                                        <h3 class="qualification__title">WEb desain</h3>
                                        <span class="qualification__subtitle">Spain - Institute</span>
                                        <div class="qualification__calendar">
                                            <i class="uil uil-calendar-alt"></i>
                                            2009-2014
                                        </div>
                                    </div>
                                </div>
                                 <!--==================== QUALIFICATION 3 ====================-->
                               <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Web Developer</h3>
                                    <span class="qualification__subtitle">Peru-Institute</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2017-2014
                                    </div>
                                </div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                    
                                </div>
                            </div>
                             <!--==================== QUALIFICATION 4 ====================-->
                             <div class="qualification__data">
                                 <div></div>

                                 <div>
                                    <span class="qualification__rounder"></span>
                                    <!--<span class="qualification__line"></span> -->
                                    
                                </div>

                                <div>
                                    <h3 class="qualification__title">Computer Engginer</h3>
                                    <span class="qualification__subtitle">University</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2009-2014
                                    </div>
                                </div>
                                
                            </div>
                         </div>

                         <!--==================== QUALIFICATION CONTENT 2 ====================-->
                         <div class="qualification__content " data-content id="work">
                            <!--==================== QUALIFICATION 1 ====================-->
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Nggaur</h3>
                                    <span class="qualification__subtitle">University</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2009-2014
                                    </div>
                                </div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                    
                                </div>
                            </div>
                             <!--==================== QUALIFICATION 2 ====================-->
                             <div class="qualification__data">
                                 <div></div>

                                 <div>
                                     <span class="qualification__rounder"></span>
                                     <span class="qualification__line"></span>
                                     
                                 </div>

                                 <div>
                                     <h3 class="qualification__title">galer</h3>
                                     <span class="qualification__subtitle">Spain - Institute</span>
                                     <div class="qualification__calendar">
                                         <i class="uil uil-calendar-alt"></i>
                                         2009-2014
                                     </div>
                                 </div>
                             </div>
                              <!--==================== QUALIFICATION 3 ====================-->
                            <div class="qualification__data">
                             <div>
                                 <h3 class="qualification__title">kokor</h3>
                                 <span class="qualification__subtitle">Peru-Institute</span>
                                 <div class="qualification__calendar">
                                     <i class="uil uil-calendar-alt"></i>
                                     2017-2014
                                 </div>
                             </div>
                             <div>
                                 <span class="qualification__rounder"></span>
                                 <span class="qualification__line"></span>
                                 
                             </div>
                         </div>
                          <!--==================== QUALIFICATION 4 ====================-->
                          <div class="qualification__data">
                              <div></div>

                              <div>
                                 <span class="qualification__rounder"></span>
                                 <!--<span class="qualification__line"></span> -->
                                 
                             </div>

                             <div>
                                 <h3 class="qualification__title">ngeseng</h3>
                                 <span class="qualification__subtitle">University</span>
                                 <div class="qualification__calendar">
                                     <i class="uil uil-calendar-alt"></i>
                                     2009-2014
                                 </div>
                             </div>
                             
                         </div>
                      </div>
                    </div>
                </div>
            </section>

            <!--==================== SERVICES ====================-->
            <section class="services section" id="services">
                <h2 class="section__title">Services</h2>
                <span class="section__subtitle">What I offer</span>

                <div class="services__container container grid">
                     <!--==================== SERVICES 1 ====================-->
                     <div class="services__content">
                         <div>
                             <i class="uil uil-web-grid services__icon"></i>
                             <h3 class="services__title">UI/UX <br> Desainer</h3>
                         </div>

                         <span class="button button--flex button--small button--link services__button">
                             ViwMore
                             <i class="uil uil-arrow-right button__icon"></i>
                         </span>

                         <div class="services__modal">
                             <div class="services__modal-content">
                                 <h4 class="services__modal-title">Ui/Ux <br>Desainer</h4>
                                 <i class="uil uil-times services__modal-close"></i>

                                 <ul class="services__modal-services grid">
                                     <li class="services__modal-services">
                                         <i class="uil uil-check-circle service__modal-icon"></i>
                                         <p>I develop the user interface</p>
                                     </li>
                                     <li class="services__modal-services">
                                        <i class="uil uil-check-circle service__modal-icon"></i>
                                        <p>Web development</p>
                                    </li>
                                    <li class="services__modal-services">
                                        <i class="uil uil-check-circle service__modal-icon"></i>
                                        <p>I create ux element interactions</p>
                                    </li>
                                    <li class="services__modal-services">
                                        <i class="uil uil-check-circle service__modal-icon"></i>
                                        <p>I positin your company brand</p>
                                    </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <!--==================== SERVICES 2 ====================-->
                     <div class="services__content">
                        <div>
                            <i class="uil uil-arrow services__icon"></i>
                            <h3 class="services__title">Frontend <br> Developer</h3>
                        </div>

                        <span class="button button--flex button--small button--link services__button">
                            ViwMore
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">Frontend <br> Developer</h4>
                                <i class="uil uil-times services__modal-close"></i>

                                <ul class="services__modal-services grid">
                                    <li class="services__modal-services">
                                        <i class="uil uil-check-circle service__modal-icon"></i>
                                        <p>I develop the user interface</p>
                                    </li>
                                    <li class="services__modal-services">
                                       <i class="uil uil-check-circle service__modal-icon"></i>
                                       <p>Web development</p>
                                   </li>
                                   <li class="services__modal-services">
                                       <i class="uil uil-check-circle service__modal-icon"></i>
                                       <p>I create ux element interactions</p>
                                   </li>
                                   <li class="services__modal-services">
                                       <i class="uil uil-check-circle service__modal-icon"></i>
                                       <p>I positin your company brand</p>
                                   </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--==================== SERVICES 3 ====================-->
                    <div class="services__content">
                        <div>
                            <i class="uil uil-pen"></i>
                            <h3 class="services__title">Branding <br> Desainer</h3>
                        </div>

                        <span class="button button--flex button--small button--link services__button">
                            ViwMore
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">Branding <br> Desainer</h4>
                                <i class="uil uil-times services__modal-close"></i>

                                <ul class="services__modal-services grid">
                                    <li class="services__modal-services">
                                        <i class="uil uil-check-circle service__modal-icon"></i>
                                        <p>I develop the user interface</p>
                                    </li>
                                    <li class="services__modal-services">
                                       <i class="uil uil-check-circle service__modal-icon"></i>
                                       <p>Web development</p>
                                   </li>
                                   <li class="services__modal-services">
                                       <i class="uil uil-check-circle service__modal-icon"></i>
                                       <p>I create ux element interactions</p>
                                   </li>
                                   <li class="services__modal-services">
                                       <i class="uil uil-check-circle service__modal-icon"></i>
                                       <p>I positin your company brand</p>
                                   </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">
                <h2 class="section__title">portfolio</h2>
                <span class="section__subtitle">Most recent work</span>

                <div class="portfolio__container container swiper-container">
                    <div class="swiper-wrapper">
                    <!--==================== PORTFOLIO 1 ====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="{{url('tampilan/assets/img/portfolio1.jpg')}}" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Modern Website</h3>
                            <p class="portfolio__description">I make make website and desain</p>
                            <a href="#" class="button button--flex button--small portfolio__button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                       <!--==================== PORTFOLIO 2 ====================-->
                       <div class="portfolio__content grid swiper-slide">
                        <img src="{{url('tampilan/assets/img/portfolio2.jpg')}}" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Brand desain</h3>
                            <p class="portfolio__description">I can make desain in figma and adobe xd</p>
                            <a href="#" class="button button--flex button--small portfolio__button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                       <!--==================== PORTFOLIO 3 ====================-->
                       <div class="portfolio__content grid swiper-slide">
                        <img src="{{url('tampilan/assets/img/portfolio3.jpg')}}" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Online store</h3>
                            <p class="portfolio__description">I can make a online store</p>
                            <a href="#" class="button button--flex button--small portfolio__button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                        <div class="swiper-button-next">
                            <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                        </div>

                        <div class="swiper-pagination"></div>
            </div>
            </section>

            <!--==================== PROJECT IN MIND ====================-->
            <section class="project section">
                    <div class="project__bg">
                        <div class="project__container container grid">
                            <div class="project__data">
                                <h2 class="project__title">You have a new projet</h2>
                                <p class="project__description">Contactme</p>
                                <a href="#contact" class="button button--flex button--white">
                                    Contact me
                                    <i class="uil uil-message project__icon button__icon"></i>
                                </a>
                            </div>

                            <img src="" alt="" class="project__img">
                        </div>
                    </div>
            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section">
                <h2 class="section__title">TESTIMONIAL</h2>
                <span class="section__subtitle">My client saying</span>

                <div class="testimonial__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== TESTIMONIAL 1 ====================-->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="{{url('tampilan/assets/img/testimonial1.jpg')}}" alt="" class="testimonial__img">


                                    <div>
                                        <h3 class="testimonial__name">Niki</h3>
                                        <span class="testimonial__client">client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>

                                </div>
                            </div>

                            <p class="testimonial__description">
                                great person and humble
                            </p>
                        </div>
                        <!--==================== TESTIMONIAL 2 ====================-->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="{{url('tampilan/assets/img/testimonial2.jpg')}}" alt="" class="testimonial__img">


                                    <div>
                                        <h3 class="testimonial__name">Naufal</h3>
                                        <span class="testimonial__client">client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>

                                </div>
                            </div>

                            <p class="testimonial__description">
                                My project__description build so fast and easy.
                            </p>
                        </div>
                        <!--==================== TESTIMONIAL 3 ====================-->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="{{url('tampilan/assets/img/testimonial3.jpg')}}" alt="" class="testimonial__img">


                                    <div>
                                        <h3 class="testimonial__name">Najwa</h3>
                                        <span class="testimonial__client">client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>

                                </div>
                            </div>

                            <p class="testimonial__description">
                                My project__description build so fast and easy.
                            </p>
                        </div>
                    </div>

                    <!---===================== SWIPER BUTTONS =====================-->
                    <div class="swiper-pagination swiper-pagination-testimonial"></div>
                </div>
            </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
                    <h2 class="section__title">Contact me</h2>
                    <span class="section__subtitle">get in tounch</span>

                    <div class="contact__container container grid">
                        <div>
                            <div class="contact__information">
                                <i class="uil uil-phone contact__icon"></i>

                                <div>
                                    <h3 class="contact__title">call me</h3>
                                    <span class="contact__subtitle">0822 - 6431 - 3984</span>
                                </div>
                            </div>
                            <div class="contact__information">
                                <i class="uil uil-envelope contact__icon"></i>

                                <div>
                                    <h3 class="contact__title">email me</h3>
                                    <span class="contact__subtitle">erthasaretha@email.com</span>
                                </div>
                            </div>
                            <div class="contact__information">
                                <i class="uil uil-map-marker contact__icon"></i>

                                <div>
                                    <h3 class="contact__title">location</h3>
                                    <span class="contact__subtitle">Tulungagung - Indonesia</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
         <div class="footer__bg">
             <div class="footer__container container grid">
                 <div>
                     <h1 class="footer__title">Ertha</h1>
                     <span class="footer__subtitle">Junior web develop</span>
                 </div>

                 <ul class="footer__links">
                     <li>
                         <a href="#services" class="footer__link">Services</a>
                     </li>
                     <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contactme</a>
                    </li>
                 </ul>

                 <div class="footer__socials">
                     <a href="https://www.facebook.com/ertha.saretha" target="_blank" class="footer__social">
                        <i class="uil uil-facebook-f"></i>
                     </a>
                     <a href="https://www.instagram.com/ertharisky/?hl=en" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/ertha-risky-149482231/" target="_blank" class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                 </div>
             </div>

             <p class="footer_copy">&#169; ZidanAnggoro. All right reserved</p>
         </div>
        </footer>
        
        <!--==================== SCROLL TOP ====================-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>

        <!--==================== SWIPER JS ====================-->
        <script src="{{url('tampilan/assets/js/swiper-bundle.min.js')}}"></script>

        <!--==================== MAIN JS ====================-->
        <script src="{{url('tampilan/assets/js/main.js')}}"></script>
    </body>
</html>
