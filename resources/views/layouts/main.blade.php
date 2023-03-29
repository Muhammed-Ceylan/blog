    <!-- blog_main -->
    <div class="blog_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>@yield('main_title')</h2>
                    </div>
                </div>
            </div>
            <!-- fist section -->
            <div class="row">
                <div class="col-md-12">
                    <div class="our_two_box">
                        <div class="row d_flex">


                            {{-- Burada bir foreach döngüsü olacak ve kaç makale varsa o kadar üretecek --}}
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="our_img">
                                    <figure><img src="images/our_img1.jpg" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="our_text_box">
                                    <h3 class="awesome pa_wi">Makale Başlığı</h3>
                                    <p>Makale İçeriği</p>
                                    <div class="post_box padding_bottom1">
                                        <h4 class="flot_left1">Makale yazan: Muhammed Ceylan</h4>
                                        <ul class="like">
                                            <li><a href="#"><img src="images/like.png" alt="#" />Beğen</a>
                                            </li>
                                            <li><a href="#"><img src="images/comm.png" alt="#" />Yorum
                                                    Yaz</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
            <!-- end fist section -->
        </div>
    </div>
    <!-- end blog_main -->
