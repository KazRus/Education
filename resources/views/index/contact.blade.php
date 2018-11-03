@extends('index.layout.body')

@section('meta-tags')

    <title>Контакты</title>
    <meta name="description" content="Desc">
    <meta name="keywords" content="keywords">

@endsection

@section('content')

    <section class="page_breadcrumbs ds parallax section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight2">Контакты</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Главная
                            </a>
                        </li>
                        <li class="active">Контакты</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_100 section_padding_bottom_75">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5811.187789177574!2d76.93849873599851!3d43.259932325030036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836e9815a38ff3%3A0xac0ca074c9539113!2z0JDRgNCx0LDRgg!5e0!3m2!1sru!2skz!4v1541148454985"
                            width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="row topmargin_40">
                <div class="col-sm-4 to_animate" data-animation="pullDown">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight2 size_normal">
                            <i class="rt-icon2-phone5"></i>
                        </div>
                        <p>
                            <span class="grey">Phone:</span> +12 345 678 9123<br>
                            <span class="grey">Fax:</span> +12 345 678 9123
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 to_animate" data-animation="pullDown">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight2 size_normal">
                            <i class="rt-icon2-location2"></i>
                        </div>
                        <p>
                            PO Box 54378<br>
                            4321 Your Address,<br>
                            Your City, Your Country
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 to_animate" data-animation="pullDown">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight2 size_normal">
                            <i class="rt-icon2-mail"></i>
                        </div>
                        <p>support@starford.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


