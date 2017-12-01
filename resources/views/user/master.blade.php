<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cua Hang ruou che</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Van Tiep">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link href="{!! url('public/user/css/bootstrap.css') !!}" rel="stylesheet">
    <link href="{!! url('public/user/css/bootstrap-responsive.css') !!}" rel="stylesheet">
    <link href="{!! url('public/user/css/style.css') !!}" rel="stylesheet">
    <link href="{!! url('public/user/css/flexslider.css') !!}" type="text/css" media="screen" rel="stylesheet"/>
    <link href="{!! url('public/user/css/jquery.fancybox.css') !!}" rel="stylesheet">
    <link href="{!! url('public/user/css/cloud-zoom.css') !!}" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- fav -->
    <link rel="shortcut icon" href="assets/ico/favicon.html">
    <!-------------------------Facebook meta -------------------------------->
    <meta property=”fb:app_id” content=”937162853100934”/>
    <meta property=”fb:admins” content=”937162853100934”>
</head>
<body>

<!-- Facebook live chat -->

<style>.fb-livechat, .fb-widget {
        display: none
    }

    .ctrlq.fb-button, .ctrlq.fb-close {
        position: fixed;
        right: 24px;
        cursor: pointer
    }

    .ctrlq.fb-button {
        z-index: 999;
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff;
        width: 60px;
        height: 60px;
        text-align: center;
        bottom: 30px;
        border: 0;
        outline: 0;
        border-radius: 60px;
        -webkit-border-radius: 60px;
        -moz-border-radius: 60px;
        -ms-border-radius: 60px;
        -o-border-radius: 60px;
        box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16);
        -webkit-transition: box-shadow .2s ease;
        background-size: 80%;
        transition: all .2s ease-in-out
    }

    .ctrlq.fb-button:focus, .ctrlq.fb-button:hover {
        transform: scale(1.1);
        box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)
    }

    .fb-widget {
        background: #fff;
        z-index: 1000;
        position: fixed;
        width: 360px;
        height: 435px;
        overflow: hidden;
        opacity: 0;
        bottom: 0;
        right: 24px;
        border-radius: 6px;
        -o-border-radius: 6px;
        -webkit-border-radius: 6px;
        box-shadow: 0 5px 40px rgba(0, 0, 0, .16);
        -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16);
        -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16);
        -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)
    }

    .fb-credit {
        text-align: center;
        margin-top: 8px
    }

    .fb-credit a {
        transition: none;
        color: #bec2c9;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 12px;
        text-decoration: none;
        border: 0;
        font-weight: 400
    }

    .ctrlq.fb-overlay {
        z-index: 0;
        position: fixed;
        height: 100vh;
        width: 100vw;
        -webkit-transition: opacity .4s, visibility .4s;
        transition: opacity .4s, visibility .4s;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, .05);
        display: none
    }

    .ctrlq.fb-close {
        z-index: 4;
        padding: 0 6px;
        background: #365899;
        font-weight: 700;
        font-size: 11px;
        color: #fff;
        margin: 8px;
        border-radius: 3px
    }

    .ctrlq.fb-close::after {
        content: "X";
        font-family: sans-serif
    }

    .bubble {
        width: 20px;
        height: 20px;
        background: #c00;
        color: #fff;
        position: absolute;
        z-index: 999999999;
        text-align: center;
        vertical-align: middle;
        top: -2px;
        left: -5px;
        border-radius: 50%;
    }

    .bubble-msg {
        width: 120px;
        left: -140px;
        top: 5px;
        position: relative;
        background: rgba(59, 89, 152, .8);
        color: #fff;
        padding: 5px 8px;
        border-radius: 8px;
        text-align: center;
        font-size: 13px;
    }
</style>
<div class="fb-livechat">
    <div class="ctrlq fb-overlay"></div>
    <div class="fb-widget">
        <div class="ctrlq fb-close"></div>
        <div class="fb-page" data-href="https://www.facebook.com/GvthcsLA" data-tabs="messages" data-width="360"
             data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"></div>
        <div class="fb-credit"><a href="https://chanhtuoi.com" target="_blank">Powered by Chanhtuoi</a></div>
        <div id="fb-root"></div>
    </div>
    <a href="https://m.me/GvthcsLA" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button">
        <div class="bubble">1</div>
        <div class="bubble-msg">Bạn cần hỗ trợ?</div>
    </a>
</div>
<script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        function detectmob() {
            if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
                return true;
            } else {
                return false;
            }
        }

        var t = {delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")};
        setTimeout(function () {
            $("div.fb-livechat").fadeIn()
        }, 8 * t.delay);
        if (!detectmob()) {
            $(".ctrlq").on("click", function (e) {
                e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({
                    bottom: 0,
                    opacity: 0
                }, 2 * t.delay, function () {
                    $(this).hide("slow"), t.button.show()
                })) : t.button.fadeOut("medium", function () {
                    t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)
                })
            })
        }
    });
</script>
<!-- End facebook live chat -->

<!-- Header Start -->
<header>
    @include('user.blocks.headerstrip')
    <div class="container">
        @include('user.blocks.nav')
    </div>
</header>
<!-- Header End -->
<div id="maincontainer">

    @yield('content')
</div>
<!-- Footer -->
<footer id="footer">
    @include('user.blocks.footersocial')
    @include('user.blocks.footerlinks')
    @include('user.blocks.copyrightbottom')
    <a id="gotop" href="http://www.mafiashare.net">Back to top</a>
</footer>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{!! url('public/user/js/jquery.js') !!}"></script>
<script src="{!! url('public/user/js/bootstrap.js') !!}"></script>
<script src="{!! url('public/user/js/respond.min.js') !!}"></script>
<script src="{!! url('public/user/js/application.js') !!}"></script>
<script src="{!! url('public/user/js/bootstrap-tooltip.js') !!}"></script>
<script defer src="{!! url('public/user/js/jquery.fancybox.js') !!}"></script>
<script defer src="{!! url('public/user/js/jquery.flexslider.js') !!}"></script>
<script type="text/javascript" src="{!! url('public/user/js/jquery.tweet.js') !!}"></script>
<script src="{!! url('public/user/js/cloud-zoom.1.0.2.js') !!}"></script>
<script type="text/javascript" src="{!! url('public/user/js/jquery.validate.js') !!}"></script>
<script type="text/javascript" src="{!! url('public/user/js/jquery.carouFredSel-6.1.0-packed.js') !!}"></script>
<script type="text/javascript" src="{!! url('public/user/js/jquery.mousewheel.min.js') !!}"></script>
<script type="text/javascript" src="{!! url('public/user/js/jquery.touchSwipe.min.js') !!}"></script>
<script type="text/javascript" src="{!! url('public/user/js/jquery.ba-throttle-debounce.min.js') !!}"></script>
<script defer src="{!! url('public/user/js/custom.js') !!}"></script>
<script defer src="{!! url('public/user/js/myScript.js') !!}"></script>
</body>

<!-- Facebook comment-->
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=937162853100934';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook comment-->

</html>