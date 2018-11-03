@extends('index.layout.body')

@section('meta-tags')

    <title>Галерея</title>
    <meta name="description" content="Desc">
    <meta name="keywords" content="keywords">

@endsection

@section('content')

    <section class="page_breadcrumbs ds parallax section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight2">Галерея</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Главная
                            </a>
                        </li>
                        <li class="active">Галерея</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls page_portfolio columns_padding_5 section_padding_0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 margin_0">

                    <div class="cs main_color4 toppadding_40 bottompadding_40">
                        <div class="filters isotope_filters">
                            <a href="#" class="selected" data-filter="*">All</a>
                            <a href="#" data-filter=".books">Books</a>
                            <a href="#" data-filter=".cabinets">Cabinets</a>
                            <a href="#" data-filter=".courses">Courses</a>
                            <a href="#" data-filter=".events">Events</a>
                            <a href="#" data-filter=".teachers">Teachers</a>
                        </div>
                    </div>

                    <div class="isotope_container isotope row masonry-layout topmargin_5 bottommargin_5" data-filters=".isotope_filters">
                        <div class="isotope-item col-lg-3 col-md-4 col-sm-6 books">
                            <article class="vertical-item content-absolute content-padding post format-standard text-center hover-content clear-media hover-scale-media">

                                <div class="item-media">

                                    <img src="images/gallery/01.jpg" alt="">

                                    <div class="media-links">
                                        <a href="images/gallery/01.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a>
                                    </div>
                                </div>

                                <div class="item-content">

                                    <div class="cs main_color2 with_padding small_padding text-center">
                                        <h4 class="entry-title margin_0">
                                            <a href="gallery-single.html" rel="bookmark">
                                                Morbi euismod
                                            </a>
                                        </h4>
                                        <p class="small-text black">
                                            Teacher
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div>
                        <div class="isotope-item col-lg-3 col-md-4 col-sm-6 cabinets">
                            <article class="vertical-item content-absolute content-padding post format-standard text-center hover-content clear-media hover-scale-media">

                                <div class="item-media">

                                    <img src="images/gallery/02.jpg" alt="">

                                    <div class="media-links">
                                        <a href="images/gallery/02.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a>
                                    </div>
                                </div>

                                <div class="item-content">

                                    <div class="cs main_color2 with_padding small_padding text-center">
                                        <h4 class="entry-title margin_0">
                                            <a href="gallery-single.html" rel="bookmark">
                                                Vestibulum libero
                                            </a>
                                        </h4>
                                        <p class="small-text black">
                                            Teacher
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div>
                        <div class="isotope-item col-lg-3 col-md-4 col-sm-6 courses">
                            <article class="vertical-item content-absolute content-padding post format-standard text-center hover-content clear-media hover-scale-media">

                                <div class="item-media">
                                    <img src="images/gallery/03.jpg" alt="">

                                    <div class="media-links">
                                        <a href="images/gallery/03.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a>
                                    </div>
                                </div>

                                <div class="item-content">

                                    <div class="cs main_color2 with_padding small_padding text-center">
                                        <h4 class="entry-title margin_0">
                                            <a href="gallery-single.html" rel="bookmark">
                                                Pellentesque commodo
                                            </a>
                                        </h4>
                                        <p class="small-text black">
                                            Teacher
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div>
                        <div class="isotope-item col-lg-3 col-md-4 col-sm-6 events">
                            <article class="vertical-item content-absolute content-padding post format-standard text-center hover-content clear-media hover-scale-media">

                                <div class="item-media">

                                    <img src="images/gallery/04.jpg" alt="">

                                    <div class="media-links">
                                        <a href="images/gallery/04.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a>
                                    </div>
                                </div>

                                <div class="item-content">

                                    <div class="cs main_color2 with_padding small_padding text-center">
                                        <h4 class="entry-title margin_0">
                                            <a href="gallery-single.html" rel="bookmark">
                                                Lorem ipsum
                                            </a>
                                        </h4>
                                        <p class="small-text black">
                                            Teacher
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div>
                        <div class="isotope-item col-lg-3 col-md-4 col-sm-6 teachers">
                            <article class="vertical-item content-absolute content-padding post format-standard text-center hover-content clear-media hover-scale-media">

                                <div class="item-media">

                                    <img src="images/gallery/05.jpg" alt="">

                                    <div class="media-links">
                                        <a href="images/gallery/05.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a>
                                    </div>
                                </div>

                                <div class="item-content">

                                    <div class="cs main_color2 with_padding small_padding text-center">
                                        <h4 class="entry-title margin_0">
                                            <a href="gallery-single.html" rel="bookmark">
                                                Sarmiento museum
                                            </a>
                                        </h4>
                                        <p class="small-text black">
                                            Teacher
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div>
                        <div class="isotope-item col-lg-3 col-md-4 col-sm-6 courses">
                            <article class="vertical-item content-absolute content-padding post format-standard text-center hover-content clear-media hover-scale-media">

                                <div class="item-media">

                                    <img src="images/gallery/06.jpg" alt="">

                                    <div class="media-links">
                                        <a href="images/gallery/06.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a>
                                    </div>
                                </div>

                                <div class="item-content">

                                    <div class="cs main_color2 with_padding small_padding text-center">
                                        <h4 class="entry-title margin_0">
                                            <a href="gallery-single.html" rel="bookmark">
                                                Proin imperdiet
                                            </a>
                                        </h4>
                                        <p class="small-text black">
                                            Teacher
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div>
                        <div class="isotope-item col-lg-3 col-md-4 col-sm-6 books">
                            <article class="vertical-item content-absolute content-padding post format-standard text-center hover-content clear-media hover-scale-media">

                                <div class="item-media">

                                    <img src="images/gallery/07.jpg" alt="">

                                    <div class="media-links">
                                        <a href="images/gallery/07.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a>
                                    </div>
                                </div>

                                <div class="item-content">

                                    <div class="cs main_color2 with_padding small_padding text-center">
                                        <h4 class="entry-title margin_0">
                                            <a href="gallery-single.html" rel="bookmark">
                                                Aenean varius
                                            </a>
                                        </h4>
                                        <p class="small-text black">
                                            Teacher
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div>
                        <div class="isotope-item col-lg-3 col-md-4 col-sm-6 cabinets">
                            <article class="vertical-item content-absolute content-padding post format-standard text-center hover-content clear-media hover-scale-media">

                                <div class="item-media">

                                    <img src="images/gallery/08.jpg" alt="">

                                    <div class="media-links">
                                        <a href="images/gallery/08.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a>
                                    </div>
                                </div>

                                <div class="item-content">

                                    <div class="cs main_color2 with_padding small_padding text-center">
                                        <h4 class="entry-title margin_0">
                                            <a href="gallery-single.html" rel="bookmark">
                                                Praesent eleifend
                                            </a>
                                        </h4>
                                        <p class="small-text black">
                                            Teacher
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div>
                        <div class="isotope-item col-lg-3 col-md-4 col-sm-6 courses">
                            <article class="vertical-item content-absolute content-padding post format-standard text-center hover-content clear-media hover-scale-media">

                                <div class="item-media">

                                    <img src="images/gallery/09.jpg" alt="">

                                    <div class="media-links">
                                        <a href="images/gallery/09.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a>
                                    </div>
                                </div>

                                <div class="item-content">

                                    <div class="cs main_color2 with_padding small_padding text-center">
                                        <h4 class="entry-title margin_0">
                                            <a href="gallery-single.html" rel="bookmark">
                                                Phasellus volutpat
                                            </a>
                                        </h4>
                                        <p class="small-text black">
                                            Teacher
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div>
                        <div class="isotope-item col-lg-3 col-md-4 col-sm-6 events">
                            <article class="vertical-item content-absolute content-padding post format-standard text-center hover-content clear-media hover-scale-media">

                                <div class="item-media">

                                    <img src="images/gallery/10.jpg" alt="">

                                    <div class="media-links">
                                        <a href="images/gallery/10.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a>
                                    </div>
                                </div>

                                <div class="item-content">

                                    <div class="cs main_color2 with_padding small_padding text-center">
                                        <h4 class="entry-title margin_0">
                                            <a href="gallery-single.html" rel="bookmark">
                                                Fusce a vestibulum
                                            </a>
                                        </h4>
                                        <p class="small-text black">
                                            Teacher
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div>
                        <div class="isotope-item col-lg-3 col-md-4 col-sm-6 teachers">
                            <article class="vertical-item content-absolute content-padding post format-standard text-center hover-content clear-media hover-scale-media">

                                <div class="item-media">

                                    <img src="images/gallery/11.jpg" alt="">

                                    <div class="media-links">
                                        <a href="images/gallery/11.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a>
                                    </div>
                                </div>

                                <div class="item-content">

                                    <div class="cs main_color2 with_padding small_padding text-center">
                                        <h4 class="entry-title margin_0">
                                            <a href="gallery-single.html" rel="bookmark">
                                                Vivamus suscipit
                                            </a>
                                        </h4>
                                        <p class="small-text black">
                                            Teacher
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div>
                        <div class="isotope-item col-lg-3 col-md-4 col-sm-6 courses">
                            <article class="vertical-item content-absolute content-padding post format-standard text-center hover-content clear-media hover-scale-media">

                                <div class="item-media">

                                    <img src="images/gallery/12.jpg" alt="">

                                    <div class="media-links">
                                        <a href="images/gallery/12.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a>
                                    </div>
                                </div>

                                <div class="item-content">

                                    <div class="cs main_color2 with_padding small_padding text-center">
                                        <h4 class="entry-title margin_0">
                                            <a href="gallery-single.html" rel="bookmark">
                                                Proin congue
                                            </a>
                                        </h4>
                                        <p class="small-text black">
                                            Teacher
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div>
                    </div>
                    <!-- eof .isotope_container.row -->

                    <div class="with_padding content-justify vertical-center cs main_bg_color2">
                        <a href="#" class="small-text big text-left">
                            show <span class="big">Prev</span>
                        </a>
                        <ul class="pagination">
                            <li class="active"><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                        </ul>
                        <a href="#" class="small-text big text-right">
                            show <span class="big">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection


