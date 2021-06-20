<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SAZAL</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/frontend/images/My-Favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.animatedheadline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-image-scroll.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
</head>

<body data-spy="scroll" data-target=".main_menu" data-offset="50">

    <!--==========================
             NAV START 
    ===========================-->
    <nav class="navbar navbar-expand-md fixed-top main_menu p-0">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                <img src="images/My-Logo.png" alt="logo" class="img-fluid main-logo">
            </a>
            <span class="menu_icon">
                <i class="far fa-bars"></i>
            </span>
        </div>

        <div class="side_menu">
            <span class="close_icon">
                <i class="fal fa-times"></i>
            </span>
            <ul class="side_menu">
                <li class="nav-item">
                    <a class="nav-link" href="#banner_part">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skill">skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#service">service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#porifolio">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">contact</a>
                </li>
            </ul>
            <ul class="side_menu_icon">
                <li><a href="{{ $socials->facebook }}" target="_blank"><i
                            class="fab fa-facebook-f"></i></a></li>
                {{-- <li><a href="https://www.instagram.com/ins_sazal/" target="_blank"><i class="fab fa-instagram"></i></a> --}}
                </li>
                <li><a href="{{ $socials->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="{{ $socials->linkedin }}" target="_blank"><i
                            class="fab fa-linkedin-in"></i></a></li>
                <li><a href="{{ $socials->github }}" target="_blank"><i class="fab fa-github"></i></a></li>
            </ul>
            <div class="side_menu_text">
                <div class="side_menu_call">
                    <i class="fal fa-phone-alt"></i>
                    <a href="callto:+8801711132267">+8801711132267</a>
                </div>
                <div class="side_menu_mail">
                    <i class="fal fa-envelope"></i>
                    <a href="mailto:freelancersazal@gmail.com">gdazad2267@gmail.com</a>
                </div>
                <div class="side_menu_add">
                    <i class="fal fa-map-marker-alt"></i>
                    <p>Ullapara, Sirajgang</p>
                </div>
            </div>
        </div>
    </nav>
    <!--==========================
               NAV END 
    ===========================-->



    @yield('content')




    <!--==========================
         FOOTER SECTION START
     ===========================-->
    <footer class="sec_shape">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-12 col-sm-8 col-md-7">
                    <div class="footer_details">
                        <div class="footer_logo">
                            <img src="images/My-Logo.png" alt="sazal">
                        </div>
                        <p>{!! $footers->footer_text !!}</p>
                    </div>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 col-md-3">
                    <div class="footer_details">
                        <h5>Work With Us</h5>
                        <ul class="link">
                            <li><a href="{{ $footers->fiverr }}" target="_blank">Fiverr</a></li>
                            <li>
                                <a href="{{ $footers->upwork }}"
                                    target="_blank">Upwork</a>
                            </li>
                            <li>
                                <a href="{{ $footers->freelancer }}"
                                    target="_blank">Freelancer</a>
                            </li>
                            <li>
                                <a href="{{ $footers->peopleperhour }}" target="_blank">Peopleperhour</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-12 col-sm-7">
                    <div class="footer_details mt_xsm">
                        <h5>facebook page</h5>
                        <div class="fb_page">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwebdev.milon%2F&tabs&width=340&height=70&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>© Copyright 2020 - 2021 <a href="">A K Azad Milon</a> All Rights Reserved.</p>
        </div>
        <div class="scroll_btn">
            <i class="fas fa-chevron-up"></i>
        </div>
    </footer>
    <!--==========================
         FOOTER SECTION END
     ===========================-->



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/frontend/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <!--fontawesome.js -->
    <script src="{{ asset('assets/frontend/js/Font-Awesome.js') }}"></script>
    <!--type.js -->
    <script src="{{ asset('assets/frontend/js/jquery.animatedheadline.min.js') }}"></script>
    <!--parallax.js -->
    <script src="{{ asset('assets/frontend/js/parallax.min.js') }}"></script>
    <!--barfiller.js -->
    <script src="{{ asset('assets/frontend/js/jquery.barfiller.js') }}"></script>
    <!--wow.js-->
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <!--counter.js-->
    <script src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <!--isotope.js-->
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <!--slick.js-->
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <!--jquery-image-scroll.js-->
    <script src="{{ asset('assets/frontend/js/jquery-image-scroll.js') }}"></script>
    <!--main.js-->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/60ce6b7665b7290ac636dbe5/1f8j57i1q';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
    <!--End of Tawk.to Script-->

</body>

</html>