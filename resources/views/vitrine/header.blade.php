<div class="site-header">
    <div class="extend-container d-flex w-100 align-items-baseline justify-content-between align-items-end">
        <div class="inner-header p-relative">
            <div class="">
                <a href="index.html" data-dsn="parallax">
                    
                    <img class="light-logo" src="{{URL::asset('vitrine/assets/img/opuim-logoWHITE1.png')}}" style="width:100px;" alt=""/>
                </a>
            </div>
        </div>
        <div class="menu-icon d-flex align-items-baseline">
            <div class="text-menu p-relative  font-heading text-transform-upper">
                <div class="p-absolute text-button">Menu</div>
                <div class="p-absolute text-open">Open</div>
                <div class="p-absolute text-close">Close</div>
            </div>
            <div class="icon-m " data-dsn="parallax">
                <span class="menu-icon-line p-relative d-inline-block icon-top"></span>
                <span class="menu-icon-line p-relative d-inline-block icon-center"></span>
                <span class="menu-icon-line p-relative d-block icon-bottom"></span>
            </div>
        </div>

        <nav class="accent-menu main-navigation p-absolute  w-100  d-flex align-items-baseline ">
            <div class="menu-cover-title">Menu</div>

            <ul class="extend-container p-relative d-flex flex-column justify-content-center h-100">

                <li class="dsn-active dsn-drop-down" class="dsn-drop-down" onclick="
                    document.querySelector('.dsn-active')?.classList?.remove('dsn-active');
                    this.classList.add('dsn-active');">
                    <a href="#accueil" class="user-no-selection">
                        <span class="dsn-title-menu">ACCUEIL</span>
                    </a>


                    
                </li>

                <li class="dsn-drop-down" onclick="
                    document.querySelector('.dsn-active')?.classList?.remove('dsn-active');
                    this.classList.add('dsn-active');
                ">
                    <a href="#a-propos" class="user-no-selection">

                        <span class="dsn-title-menu">À PROPOS</span>
                        
                    </a>


                    
                </li>

                <li onclick="
                    document.querySelector('.dsn-active')?.classList?.remove('dsn-active');
                    this.classList.add('dsn-active');">
                    <a href="#menus" class="user-no-selection">

                        <span class="dsn-title-menu">MENUS</span>
                        
                    </a>


                </li>

                <li class="dsn-drop-down" onclick="
                    document.querySelector('.dsn-active')?.classList?.remove('dsn-active');
                    this.classList.add('dsn-active');">
                    <a href="#evenements" class="user-no-selection">

                        <span class="dsn-title-menu">ÉVÉNEMENTS</span>
                        
                    </a>


                    
                </li>

                <!-- <li class="dsn-drop-down">
                    <a href="#reserver" class="user-no-selection">

                        <span class="dsn-title-menu">RÉSERVATION</span>
                        
                    </a>

                </li> -->

                <li class="dsn-drop-down" onclick="
                    document.querySelector('.dsn-active')?.classList?.remove('dsn-active');
                    this.classList.add('dsn-active');">
                    <a href="#contact" class="user-no-selection">

                        <span class="dsn-title-menu">CONTACT</span>
                    </a>

                </li>
            </ul>

            <div class="container-content  d-flex flex-column justify-content-end">
                <div class="nav__info">
                    <div class="nav-content">
                        <p class="title-line">
                            Studio</p>
                        <p>
                            26-30 New Damietta<br>
                            El-Mahalla El-Kubra, SK1 66LM</p>
                    </div>
                    <div class="nav-content">
                        <p class="title-line">
                            Contact</p>
                        <p class="links over-hidden">
                            <a href="#" data-hover-text="+00 (2)012 3321" class="link-hover">+00 (2)012 3321</a>
                        </p>
                        <p class="links  over-hidden">
                            <a href="#" data-hover-text="info@dsngrid.com" class="link-hover">info@dsngrid.com</a>
                        </p>
                    </div>

                </div>

                <div class="nav-social">
                    <div class="nav-social-inner p-relative">
                        <p class="title-line">
                            Follow us</p>
                        <ul>
                            <li>
                                <a href="#" target="_blank" rel="nofollow">Dribbble.
                                    <div class="icon-circle"></div>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="nofollow">Behance.
                                    <div class="icon-circle"></div>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="nofollow">Linkedin.
                                    <div class="icon-circle">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="nofollow">Twitter.
                                    <div class="icon-circle"></div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="nav-border-bottom"></div>
        </nav>
    </div>
</div>