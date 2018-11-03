@extends('index.layout.body')

@section('meta-tags')

    <title>Новости</title>
    <meta name="description" content="Desc">
    <meta name="keywords" content="keywords">

@endsection

@section('content')

    <section class="page_breadcrumbs ds parallax section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight2">Новости</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="/">
                                Главная
                            </a>
                        </li>
                        <li class="active">Новости</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
        <div class="container">
            <div class="row">

                <div class="col-sm-10 col-sm-push-1">


                    <article class="post side-item side-md content-padding with_border">

                        <div class="row">

                            <div class="col-md-5">
                                <div class="item-media">
                                    <img src="images/events/08.jpg" alt="">
                                    <div class="media-links">
                                        <a class="abs-link" title="" href="/news-detail"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="item-content">
                                    <h4 class="entry-title">
                                        <a href="/news-detail">Magna aliquyam erased voluptua</a>
                                    </h4>

                                    <p class=" grey darklinks">
                                        <span class="rightpadding_20"><i class="fa fa-calendar rightpadding_5 highlight2"></i> Feb 12, 2017</span>
                                        <i class="fa fa-map-marker rightpadding_5 highlight2"></i> Conference Hall
                                    </p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam et dolore magna aliquyam erat.</p>

                                </div>
                            </div>

                        </div>
                    </article>

                    <article class="post side-item side-md content-padding with_border">

                        <div class="row">

                            <div class="col-md-5">
                                <div class="item-media">
                                    <img src="images/events/06.jpg" alt="">
                                    <div class="media-links">
                                        <a class="abs-link" title="" href="/news-detail"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="item-content">
                                    <h4 class="entry-title">
                                        <a href="/news-detail">Sed diam et dolore magna</a>
                                    </h4>

                                    <p class=" grey darklinks">
                                        <span class="rightpadding_20"><i class="fa fa-calendar rightpadding_5 highlight2"></i> Feb 12, 2017</span>
                                        <i class="fa fa-map-marker rightpadding_5 highlight2"></i> Conference Hall
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum harum maxime dolorem expedita soluta iusto.
                                    </p>

                                </div>
                            </div>

                        </div>
                    </article>


                    <article class="post side-item side-md content-padding with_border">

                        <div class="row">

                            <div class="col-md-5">
                                <div class="item-media">
                                    <img src="images/events/01.jpg" alt="">
                                    <div class="media-links">
                                        <a class="abs-link" title="" href="/news-detail"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="item-content">
                                    <h4 class="entry-title">
                                        <a href="/news-detail">Consetetur sadipscing elitr</a>
                                    </h4>

                                    <p class=" grey darklinks">
                                        <span class="rightpadding_20"><i class="fa fa-calendar rightpadding_5 highlight2"></i> Feb 12, 2017</span>
                                        <i class="fa fa-map-marker rightpadding_5 highlight2"></i> Conference Hall
                                    </p>
                                    <p>
                                        Eveniet aspernatur! Exercitationem dolores iure qui rem vero ab quidem officia incidunt sequi, laborum, quo.
                                    </p>

                                </div>
                            </div>

                        </div>
                    </article>






                    <div class="row topmargin_60">
                        <div class="col-sm-12 text-center">
                            <div class="with_padding small_padding content-justify vertical-center cs main_bg_color2">
                                <a href="#" class="small-text big text-left">
                                    show<br> <span class="big">Prev</span>
                                </a>
                                <ul class="pagination">
                                    <li class="active"><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                </ul>
                                <a href="#" class="small-text big text-right">
                                    show<br> <span class="big">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!--eof .col-sm-* (main content)-->

            </div>
        </div>
    </section>

@endsection


