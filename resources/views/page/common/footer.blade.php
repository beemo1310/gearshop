<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    <a href="{{ route('page.home') }}" class="logo">
                        <img src="{{ asset('page/images/icons/logo.webp') }}" alt="IMG-LOGO">
                    </a>
                </h4>

                <p class="stext-107 cl7 size-201">
                {{--Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us--}}
                {{--on (+1) 96 716 6879--}}
                </p>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Chính sách
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="{{ route('page.change.return') }}" class="stext-107 cl7 hov-cl1 trans-04">
                            Chính sách đổi hàng
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="{{ route('page.security') }}" class="stext-107 cl7 hov-cl1 trans-04">
                            Chính sách bảo mật
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Dịch vụ - Hướng dẫn
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="{{ route('page.transport') }}" class="stext-107 cl7 hov-cl1 trans-04">
                            Chính sách giao hàng
                        </a>
                    </li>


                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Hướng dẫn đăng ký tài khoản
                        </a>
                    </li>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Hướng dẫn bảo quản
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Cộng đồng
                </h4>



                <div class="p-t-27">
                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="zalo-chat-widget" data-oaid="1767023085875024842" data-welcome-message="Rất vui khi được hỗ trợ bạn!"
         data-autopopup="10" data-width="600" data-height="300" style="margin-bottom: 45px; margin-right: -25px"></div>
    <script src="https://sp.zalo.me/plugins/sdk.js"> </script>

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>
    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat" style="margin-bottom: 70px;"></div>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "107164875490542");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v16.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</footer>
