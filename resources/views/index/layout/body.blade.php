<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->

<html class="no-js">


@include('index.layout.head')

<body>

<div class="preloader">
    <div class="preloader_image"></div>
</div>

<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form form-inline" action="./">
            <div class="form-group bottommargin_0">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword"
                       id="modal-search-input">
            </div>
            <button type="submit" class="theme_button">Пойск</button>
        </form>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls with_padding">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->

    </div>
</div>

<div id="canvas">
    <div id="box_wrapper">

        @include('index.layout.header')

        @yield('content')

        @include('index.layout.footer')

    </div>

</div>

<script src="/js/compressed.js"></script>
<script src="/js/main.js"></script>

</body>

</html>