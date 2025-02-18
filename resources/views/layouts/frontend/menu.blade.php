<!-- Start Navbar Area -->
        <div class="navbar-area" id="navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{route('website.home')}}">
                        <img src="{{Storage::url($settings->site_logo)}}" class="logo" alt="Logo">
                    </a>
                    <div class="other-all-option">
                        
                        {{-- <div class="other-option d-lg-none">
                            <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" class="search-button"><i class='bx bx-search'></i></button>
                        </div> --}}
                        <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                            <span class="burger-menu">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </span>
                        </a>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            
                            <li class="nav-item ">
                                <a href="about.html" class="nav-link active">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">
                                    About Us
                                </a>
                            </li>
                             <li class="nav-item">
                                <a href="about.html" class="nav-link">
                                    Services
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">
                                    Projects
                                </a>
                            </li>
                            
                            
                            
                            
                            
                        </ul>
                        <div class="others-option d-flex align-items-center">
                            
                            <div class="option-item">
                                <a href="contact.html" class="social-ads-btn"><span>Start A Project?</span> <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Responsive Navbar Area -->
        <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
            <div class="offcanvas-header">
                <a class="logo d-inline-block" href="{{route('website.home')}}">
                   <img src="{{Storage::url($settings->site_logo)}}" class="responsive-logo" alt="Logo">
                </a>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="accordion" id="navbarAccordion">
                    <div class="accordion-item">
                        <a class="accordion-link without-icon active" href="about.html">
                           Home
                        </a>
                    </div>
                    <div class="accordion-item">
                        <a class="accordion-link without-icon" href="about.html">
                            About Us
                        </a>
                    </div>
                    
                    <div class="accordion-item">
                        <a class="accordion-link without-icon" href="about.html">
                            Services
                        </a>
                    </div>
                    <div class="accordion-item">
                        <a class="accordion-link without-icon" href="about.html">
                            Projects
                        </a>
                    </div>         
                    <div class="accordion-item">
                        <a class="accordion-link without-icon" href="contact.html">
                            Contact
                        </a>
                    </div>
                </div>
                <div class="offcanvas-contact-info">
                    <h4>Follow On</h4>
                    <ul class="social-profile list-style">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="https://www.instagram.com" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="https://www.linkedin.com" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                        <li><a href="https://dribbble.com" target="_blank"><i class='bx bxl-dribbble'></i></a></li>
                        <li><a href="https://www.pinterest.com" target="_blank"><i class='bx bxl-pinterest'></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Responsive Navbar Area -->