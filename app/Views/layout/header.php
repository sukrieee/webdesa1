<link href="css/tinyslide.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/tinyslide.js"></script>
<header>
    <section class="main-nav nav-two  sticky-header">
        <div class="container">
            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <!-- Primary Menu -->
                    <div id="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="menu-main-menu-container">
                    <ul id="primary-menu" class="menu">
                        <li id="menu-item-143" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-135 current_page_item menu-item-143"><a title="												" href="#" aria-current="page">Home</a></li>
                        <li id="menu-item-153" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-153"><a href="#">Profil Deswita</a></li>
                        <li id="menu-item-1168" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-1168"><a href="#">Artikel</a>
                            <ul class="sub-menu">
                                <li id="menu-item-189" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-189"><a href="#">Event&#038;Atraksi</a></li>
                                <li id="menu-item-155" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-155"><a href="#">Destinasi</a></li>
                                <li id="menu-item-205" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-205"><a href="#">Tokoh</a></li>
                                <li id="menu-item-1114" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1114"><a href="#">Homestay</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-1169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1169"><a href="#">Account</a>
                            <ul class="sub-menu">
                                <li id="menu-item-1170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1170"><a href="#">Login</a></li>
                                <li id="menu-item-1172" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1172"><a href="#">Members</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-183" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-183"><a href="/gallery">Gallery</a></li>
                        <li id="menu-item-181" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-181"><a href="#">About</a></li>
                        <li>
                            <div>
                                <form role="search" method="get" class="search-form" action="#">
                                    <input class="cari" />
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav><!-- #site-navigation -->
        </div>
    </section>
    <section id="tiny" class="tinyslide">
        <aside class="slides">
            <figure>
                <img src="slide1.png" alt="" />
            </figure>
            <figure>
                <img src="slide2.png" alt="" />
            </figure>
            <figure>
                <img src="slide3.jpg" alt="" />
            </figure>
            <figure>
                <img src="slide4.jpg" alt="" />
            </figure>
        </aside>
    </section>
    <script>
        var tiny = $('#tiny').tiny().data('api_tiny');
    </script>

</header>