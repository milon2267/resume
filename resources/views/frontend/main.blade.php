@extends('frontend.master')

@section('content')
    <!--==========================
        BANNER SECTION START
    ===========================-->
    <section class="banner" id="banner_part" style="background: url({{ asset('frontend_image/'.$banners->created_at->format('Y/m/').$banners->id.'/'.$banners->bg_image) }})">
        <div class="banner_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-3 offset-xl-1 col-8 offset-2 col-sm-5 offset-sm-0">
                        <div class="banner_small_img wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                            <img src="{{ asset('frontend_image/'.$banners->created_at->format('Y/m/').$banners->id.'/'.$banners->main_image) }}" alt="sazal" class="img-fluid w-100 img-thumbnail">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 col-sm-7">
                        <div class="banner-text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                            <h5><b>{{ $banners->sub_title }}</b></h5>
                            <h1>{{ $banners->title }}</h1>
                            <!--HEADLINE START-->
                            <div class="intro animate-clip">
                                <h4 class="ah-headline media">
                                    <span class="ah-words-wrapper slide-color">
                                        <b class="is-visible">FREELANCER.</b>
                                        <b>FRONTEND WEB DEVELOPER.</b>
                                        <b>BACKEND WEB DEVELOPER.</b>
                                        <b>FULL STACK WEB DEVELOPER.</b>
                                        <b>HTML5</b>
                                        <b>CSS3</b>
                                        <b>JAVASCRIPT</b>
                                        <b>JQUARY</b>
                                        <b>BOOSTRAP</b>
                                        <b>PHP</b>
                                        <b>LARAVEL</b>
                                    </span>
                                </h4>
                                <p>{!! $banners->description !!}</p>
                            </div>
                            <!--HEADLINE END-->
                            <a href="{{ $banners->button_1 }}" class="btn common-btn mt-4">ABOUT ME <i class="fa fa-user"></i></a>
                            <a href="{{ $banners->button_2 }}"
                                class="btn common-btn mt-4" target="_blank">hire me <i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
         BANNER SECTION END
    ===========================-->



    <!--==========================
         ABOUT SECTION START
    ===========================-->
    <section id="about" class="sec_shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="about-heading wow flash" data-wow-duration="1s" data-wow-delay="0s">
                        <h2>ABOUT <span>ME</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 m-auto">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <a class="nav-link common-btn active" id="home-tab" data-toggle="tab" href="#home"
                                role="tab" aria-controls="home" aria-selected="true">
                                about me
                                <i class="fas fa-user"></i>
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <a class="nav-link common-btn" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">
                                education
                                <i class="fas fa-user-graduate"></i>
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <a class="nav-link common-btn" id="contact-tab" data-toggle="tab" href="#contacts"
                                role="tab" aria-controls="contacts" aria-selected="false">
                                experience
                                <i class="fas fa-user-tie"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div id="scene" class="col-lg-4 col-xl-4 col-md-5">
                                    <div class="about-img-details wow fadeInUp" data-wow-duration="1s"
                                        data-wow-delay=".5s" data-depth="1">
                                        <img src="{{ asset('frontend_image/'.$abouts->created_at->format('Y/m/').$abouts->id.'/'.$abouts->image) }}" alt="{{ $abouts->title }}"
                                            class="img-fluid about-img W-100 img-thumbnail">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xl-7 col-md-7">
                                    <div class="about-text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        <h5>{{ $abouts->title }}</h5>
                                        <p>
                                            {!! $abouts->description !!}
                                        </p>
                                        <a href="{{ $abouts->download_link }}"
                                        target="_blank" class="btn common-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Download CV<i class="fas fa-cloud-download-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                @foreach ($educations as $education)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="experience_text">
                                            <div class="exp_baj">
                                                <i class="{{ $education->icon }}"></i>
                                            </div>
                                            <span class="model">{{ $education->graduation }}</span>
                                            <div class="middel_text">
                                                <i class="far fa-calendar-check"></i>
                                                <h6>{{ $education->university }}</h6>
                                                <p>{{ $education->year }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                @foreach ($experiences as $experience)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="experience_text">
                                            <div class="exp_baj">
                                                <i id="roated_icon" class="{{ $experience->icon }}"></i>
                                            </div>
                                            <span class="model">{{ $experience->work }}</span>
                                            <div class="middel_text">
                                                <i class="far fa-calendar-check"></i>
                                                <h6>{{ $experience->experience }}</h6>
                                                <p>{{ $experience->year }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
         ABOUT SECTION END
    ===========================-->



    <!--==========================
       SKILL SECTION START
    ===========================-->
    <section id="skill" class="sec_shape">
        <div class="skills_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tecnic-heading wow flash" data-wow-duration="1s" data-wow-delay="0s">
                            <h2>my <span>SKILLS</span></h2>
                        </div>
                    </div>
                </div>
                <div class="tecnical-skill">
                    <div class="row">
                        @foreach ( $skills as $key=> $skill )
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_bar wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <p class="skills-title">{{ $skill->title }}</p>
                                <div id="bar{{ $key+1 }}" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="{{ $skill->percentage }}"></span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
      SKILL SECTION END
    ===========================-->



    <!--==========================
        SERVICE SECTION START
    ===========================-->
    <section id="service" class="sec_shape">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-heading wow flash" data-wow-duration="1s" data-wow-delay=".3s">
                        <h2>MY <span>SERVICE</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $key=> $service)
                    <div class="col-lg-4 col-12 col-sm-6 col-md-6">
                        <div class="service-details wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <div class="large_icon">
                                <i class="far fa-file-code"></i>
                            </div>
                            <span>{{ $key+1 }}</span>
                            <div class="small_icon">
                                <i class="{{ $service->icon }}"></i>
                            </div>
                            <h5>{{ $service->title }}</h5>
                            <P>{!! $service->summary !!}</P>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--==========================
         SERVICE SECTION END
    ===========================-->



    <!--==========================
        COADING START
    ===========================-->
    {{-- <section id="coding" class="sec_shape">
        <div class="container">
            <div class="col-lg-12 col-12 col-sm-12">
                <div class="coding-heading wow flash" data-wow-duration="1s" data-wow-delay=".3s">
                    <h2>coding <span>structure</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="coding_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <p>Blocks, Elements and Modifiers. A smart HTML/CSS structure that can easely be reused. Layout
                            driven by the purpose of modularity.</p>
                        <ul>
                            <li><i class="far fa-check-circle"></i> Simple and Smart HTML code structure</li>
                            <li><i class="far fa-check-circle"></i> Works reintegrated in any part of the layout</li>
                            <li><i class="far fa-check-circle"></i> Reuse the elements from one design to another</li>
                            <li><i class="far fa-check-circle"></i> Looks good on all devices Responsive code</li>
                            <li><i class="far fa-check-circle"></i> Meaningful comment in each section</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="coding_img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <img src="images/coding.jpg" alt="images" class="ing-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--==========================
         COADING  END
    ===========================-->



    <!--==========================
           WORK SECTION START
    ===========================-->
    {{-- <section class="work" class="sec_shape">
        <div class="work_overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-3 col-6 col-sm-6 col-md-6 mb-md-3">
                        <div class="work-text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <i class="fas fa-file-chart-line"></i>
                            <div class="work_small_text">
                                <span class="counter">50</span>
                                <h5>Project Done</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-sm-6 col-md-6 mb-md-3">
                        <div class="work-text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <i class="fal fa-handshake-alt"></i>
                            <div class="work_small_text">
                                <span class="counter">80</span>
                                <h5>Happy Client</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-sm-6 col-md-6 mb-md-3">
                        <div class="work-text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <i class="far fa-coffee"></i>
                            <div class="work_small_text">
                                <span class="counter">75</span>
                                <h5>Cup of Coffee</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-sm-6 col-md-6 mb-md-3">
                        <div class="work-text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <i class="fal fa-trophy-alt"></i>
                            <div class="work_small_text">
                                <span class="counter">2</span>
                                <h5>winning Award</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--==========================
           WORK SECTION END
    ===========================-->



    <!--==========================
        TEAM SECTION START
    ===========================-->
    {{-- <section id="team" class="sec_shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-heading wow flash" data-wow-duration="1s" data-wow-delay="0s">
                        <h2>MY <span>TEAM</span></h2>
                    </div>
                </div>
            </div>
            <div class="row team_slider">
                <div class="col-12">
                    <div class="team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="team_img">
                            <img src="images/rasel.jpg" alt="" class="img-fluid w-100 member">
                        </div>
                        <div class="team-text">
                            <h6>Rasel Ahmed</h6>
                            <p>Full Stack Developer</p>
                            <ul class="team_link">
                                <li><a href="https://www.facebook.com/rahmmedbd3/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/rahmmedbd1" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://github.com/rahmmed47" target="_blank"><i
                                            class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="team_img">
                            <img src="images/mahidul.jpg" alt="" class="img-fluid w-100 member">
                        </div>
                        <div class="team-text">
                            <h6>mahidul islam</h6>
                            <p>UI/UX &amp; Front-End Developer</p>
                            <ul class="team_link">
                                <li><a href="https://www.facebook.com/mahidulislam045/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/themahidul" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/inmahidul/" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://github.com/codermahidul" target="_blank"><i
                                            class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="team_img">
                            <img src="images/taufik.jpg" alt="" class="img-fluid w-100 member">
                        </div>
                        <div class="team-text">
                            <h6>Taufik mahbub</h6>
                            <p>Front-End Developer</p>
                            <ul class="team_link">
                                <li><a href="https://www.facebook.com/taufik.mahbub.1/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/Taufik43999089" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="www.linkedin.com/in/taufik-mahbub-086a11205" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://github.com/taufik9890" target="_blank"><i
                                            class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="team_img">
                            <img src="images/priom.jpg" alt="" class="img-fluid w-100 member">
                        </div>
                        <div class="team-text">
                            <h6>Mashiour Rahaman</h6>
                            <p>Front-End Developer</p>
                            <ul class="team_link">
                                <li><a href="https://www.facebook.com/deejey.dh" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="team_img">
                            <img src="images/hasina_apu.jpg" alt="" class="img-fluid w-100 member">
                        </div>
                        <div class="team-text">
                            <h6>Hasina Parvin Ruma</h6>
                            <p>UI/UX Designer</p>
                            <ul class="team_link">
                                <li><a href="https://www.facebook.com/gdruma66/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--==========================
        TEAM SECTION END
    ===========================-->



    <!--==========================
      TESTIMONIAL SECTION START
    ===========================-->
    <section id="testimonial" class="sec_shape">
        <div class="testy_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-heading wow flash" data-wow-duration="1s" data-wow-delay=".3s">
                            <h2>clients <span>reviews</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row testi_slider">
                    @foreach ($reviews as $review)
                    <div class="col-lg-12">
                        <div class="clients_details wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <div class="clients_img">
                                <img src="{{ asset('frontend_image/review/'.$review->created_at->format('Y/m/').$review->id.'/'.$review->image) }}" class="img-fluid" alt="{{ $review->name }}">
                                <h4>{{ $review->name }}</h4>
                                <p>{{ $review->country }}</p>
                            </div>
                            <span class="shape"></span>
                            <div class="clients_text">
                                <p><i class="far fa-quote-left"></i> {!! $review->summary !!}
                                    <i class="far fa-quote-right"></i></p>
                            </div>
                            <div class="clients_rating">
                                @if ($review->star==5)
                                    @for ($i=1;$i<=5; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                @elseif($review->star==4)
                                    @for ($i=1;$i<=4; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                @elseif($review->star==3)
                                    @for ($i=1;$i<=3; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--==========================
       TESTIMONIAL SECTION END
    ===========================-->



    <!--==========================
       PORTFOLIO SECTION START
    ===========================-->
    <section id="porifolio" class="sec_shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 col-sm-12 ol-md-12">
                    <div class="portfolio-heading wow flash" data-wow-duration="1s" data-wow-delay=".3s">
                        <h2>MY <span>PROJECT</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="portfolio_filter wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <button class="common-btn active" data-filter="*">ALL</button>
                        @foreach ($categories as $category)
                            <button class="common-btn" data-filter=".design{{ $category->id }}">{{ $category->category_name }}</button>
                        @endforeach
                        
                        
                    </div>
                </div>
            </div>
            <div class="row grid">
                @foreach ($categories as $category)
                    @foreach ($category->projects as $cat_project)
                        <div class="col-lg-4 col-12 col-sm-6 col-md-6 design{{ $category->id }}">
                            <div class="portfolio-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <div class="portfolio_images screen" data-duration="3000">
                                    <img src="{{ asset('frontend_image/'.$cat_project->created_at->format('Y/m/').$cat_project->id.'/'.$cat_project->project_file) }}" alt="gallery1" class="img-fluid w-100">
                                    <a href="{{ $cat_project->live_link }}" class="live_link" target="_blank">live view <i class="fas fa-long-arrow-alt-right"></i></a>
                                    <a href="{{ $cat_project->git_link }}" class="live_link1" target="_blank">Git View <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
                
            </div>
        </div>
    </section>
    <!--==========================
        PORTFOLIO SECTION END
    ===========================-->




    <!--==========================
         BLOOG SECTION START 
    ===========================-->
    <!--
    <section id="bloog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bloog-heading wow flash" data-wow-duration="1s" data-wow-delay="0s">
                        <h2>LATEST <span>BLOOG</span> </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="bloog-details wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="blog_images">
                            <img src="images/blog_1.jpg" alt="" class="img-fluid w-100">
                            <span>Web Designer</span>
                            <p>jan-10-2018, <i class="far fa-clock"></i> 10 min</p>
                            <a href="#" class="blog_link"><i class="fas fa-link"></i></a>
                        </div>
                        <div class="bloog_text">
                            <span>Jhon Deo</span>
                            <a href="#bloog">The Most Popular Blog Post &amp; top Digital Eorld Places...</a>
                            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="bloog-details wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="blog_images">
                            <img src="images/blog_2.jpg" alt="" class="img-fluid w-100">
                            <span>Web Designer</span>
                            <p>jan-10-2018, <i class="far fa-clock"></i> 10 min</p>
                            <a href="#" class="blog_link"><i class="fas fa-link"></i></a>
                        </div>
                        <div class="bloog_text">
                            <span>Jhon Deo</span>
                            <a href="#bloog">The Most Popular Blog Post &amp; top Digital Eorld Places...</a>
                            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="bloog-details wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="blog_images">
                            <img src="images/blog_3.jpg" alt="" class="img-fluid w-100">
                            <span>Web Designer</span>
                            <p>jan-10-2018, <i class="far fa-clock"></i> 10 min</p>
                            <a href="#" class="blog_link"><i class="fas fa-link"></i></a>
                        </div>
                        <div class="bloog_text">
                            <span>Jhon Deo</span>
                            <a href="#bloog">The Most Popular Blog Post &amp; top Digital Eorld Places...</a>
                            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="bloog-details wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="blog_images">
                            <img src="images/blog_4.jpg" alt="" class="img-fluid w-100">
                            <span>Web Designer</span>
                            <p>jan-10-2018, <i class="far fa-clock"></i> 10 min</p>
                            <a href="#" class="blog_link"><i class="fas fa-link"></i></a>
                        </div>
                        <div class="bloog_text">
                            <span>Jhon Deo</span>
                            <a href="#bloog">The Most Popular Blog Post &amp; top Digital Eorld Places...</a>
                            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="bloog-details wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="blog_images">
                            <img src="images/blog_1.jpg" alt="" class="img-fluid w-100">
                            <span>Web Designer</span>
                            <p>jan-10-2018, <i class="far fa-clock"></i> 10 min</p>
                            <a href="#" class="blog_link"><i class="fas fa-link"></i></a>
                        </div>
                        <div class="bloog_text">
                            <span>Jhon Deo</span>
                            <a href="#bloog">The Most Popular Blog Post &amp; top Digital Eorld Places...</a>
                            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="bloog-details wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="blog_images">
                            <img src="images/blog_2.jpg" alt="" class="img-fluid w-100">
                            <span>Web Designer</span>
                            <p>jan-10-2018, <i class="far fa-clock"></i> 10 min</p>
                            <a href="#" class="blog_link"><i class="fas fa-link"></i></a>
                        </div>
                        <div class="bloog_text">
                            <span>Jhon Deo</span>
                            <a href="#bloog">The Most Popular Blog Post &amp; top Digital Eorld Places...</a>
                            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <!--==========================
        BLOOG SECTION END 
    ===========================-->



    <!--==========================
        CONTACT SECTION START
    ===========================-->
    <section id="contact" class="sec_shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 col-sm-12 col-md-12">
                    <div class="contact-heading wow flash" data-wow-duration="1s" data-wow-delay=".3s">
                        <h2>CONTACT <span>me</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-sm-6 col-md-5">
                   <div class="row">
                    <h4 class="con_top_text ml-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">contact me</h4>
                    @foreach ($contacts as $contact)
                        <div class="col-12">
                            <div class="contact_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <h5>Call Us On <i class="fal fa-phone"></i></h5>
                                <a href="callto:+8801710502864">Home: +{{ $contact->home }}</a>
                                <a href="callto:+8801822005547">Office: +{{ $contact->office }}</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contact_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <h5>Mail Me <i class="fal fa-envelope"></i></h5>
                                <a href="mailto:sazal1912@gmail.com">Personal: {{ $contact->mail }}</a>
                                <a href="mailto:freelancersazal@gmail.com">Office: {{ $contact->mail1 }}</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contact_text mb-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <h5>Visit address <i class="fal fa-map-marker-alt"></i></h5>
                                <p>{{ $contact->address }}</p>
                            </div>
                        </div>
                    @endforeach
                    
                    </div>
                   </div>
                <div class="col-lg-8 col-xl-6 col-12 col-sm-12 order-sm-3 col-md-12">
                    <h4 class="con_top_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Get in touch</h4>
                    <form action="{{ route('message.store') }}" method="POST">
                        @csrf
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-12 col-sm-6 col-md-6">
                                    <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fal fa-user"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="name" placeholder="Name" class="form-control form-control-lg">
                                        </div>
                                    </div>
                                    <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-envelope"></i>
                                                </span>
                                            </div>
                                            <input type="email" name="email" placeholder="Email"
                                                class="form-control form-control-lg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 col-sm-6 col-md-6">
                                    <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fal fa-mobile"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="phone" placeholder="Phone Number"
                                                class="form-control form-control-lg">
                                        </div>
                                    </div>
                                    <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fal fa-file-edit"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="subject" placeholder="Subject"
                                                class="form-control form-control-lg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12 col-sm-12 col-md-12">
                                    <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-edit"></i>
                                                </span>
                                            </div>
                                            <textarea name="message" placeholder="Message...." rows="4"
                                                class="form-control form-control-lg"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" value="submit" class="btn common-btn wow fadeInUp"
                                    data-wow-duration="1s" data-wow-delay=".5s"><b><i class="far fa-paper-plane"></i>
                                        Send</b></button>
                            </div>
                            @if (session('message'))
                                <strong>{{ session('message') }}</strong>
                            @endif
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-xl-3 d-lg-none d-xl-block order-xl-3 col-12 col-sm-6 col-md-7">
                    <h4 class="con_top_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">view location</h4>
                    <div class="con_map wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29199.787582070996!2d90.43684579374435!3d23.819543211521548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c62fce7d991f%3A0xacfaf1ac8e944c05!2sBasundhara%20Residential%20Area%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1615485090688!5m2!1sen!2sbd" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        CONTACT SECTION END
     ===========================-->



    <!--==========================
        WINDOW BUTTON START
     ===========================-->
    <div class="dis_social_icon">
        <span class="menu_btn">
            <i class="fad fa-chevron-double-left" id="arrow_icon"></i>
        </span>
        <ul class="icon_list">
            <li><a href="{{ $socials->facebook }}" target="_blank"><i
                        class="fab fa-facebook-f"></i></a></li>
            {{-- <li><a href="{{ $social->twitter }}" target="_blank"><i class="fab fa-instagram"></i></a></li> --}}
            <li><a href="{{ $socials->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="{{ $socials->linkdin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </li>
            <li><a href="{{ $socials->github }}" target="_blank"><i class="fab fa-github"></i></a></li>
        </ul>
    </div>
    <!--==========================
         WINDOW BUTTON END
     ===========================-->
@endsection