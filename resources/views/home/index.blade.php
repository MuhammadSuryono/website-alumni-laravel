@extends('layout')
@section('slider')
    @include('components.slider')
@endsection
@section("content")
    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Tentang Kami</h5>
                        <h2>Ikatan Alumni SMA Negeri 6 Lubuklinggau </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br> <br> auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris</p>
                        <a href="#" class="main-btn mt-55">Learn More</a>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        <div class="event-title">
                            <h3>Kegiatan Mendatang</h3>
                        </div> <!-- event title -->
                        <ul>
                            <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                    <a href="events-singel.html"><h4>Campus clean workshop</h4></a>
                                    <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                    <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                </div>
                            </li>
                            <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                    <a href="events-singel.html"><h4>Tech Summit</h4></a>
                                    <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                    <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                </div>
                            </li>
                            <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                    <a href="events-singel.html"><h4>Enviroement conference</h4></a>
                                    <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                    <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
            <img src="template/images/schedulr_image.jpg" alt="About">
        </div>
    </section>

    <section id="apply-aprt" class="pb-120">
        <div class="container">
            <div class="apply">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-1">
                            <h3>Apply for fall 2019</h3>
                            <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                            <a href="#" class="main-btn">Apply Now</a>
                        </div> <!-- apply cont -->
                    </div>
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-2">
                            <h3>Apply for scholarship</h3>
                            <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                            <a href="#" class="main-btn">Apply Now</a>
                        </div> <!-- apply cont -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="news-part" class="pt-115 pb-110 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>Berita Terkini</h5>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="singel-news">
                        <div class="news-thum pb-25">
                            <img src="template/images/news/n-1.jpg" alt="News">
                        </div>
                        <div class="news-cont">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                <li><a href="#"> <span>By</span> Adam linn</a></li>
                            </ul>
                            <a href="blog-singel.html"><h3>Tips to grade high cgpa in university life</h3></a>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt .</p>
                        </div>
                    </div> <!-- singel news -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="template/images/news/ns-1.jpg" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href="blog-singel.html"><h3>Intellectual communication</h3></a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons  vel.</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="template/images/news/ns-2.jpg" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href="blog-singel.html"><h3>Study makes you perfect</h3></a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons  vel.</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="template/images/news/ns-3.jpg" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href="blog-singel.html"><h3>Technology edcution is now....</h3></a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons  vel.</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(template/images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">30,000</span>+</span>
                        <p>Students enrolled</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">41,000</span>+</span>
                        <p>Courses Uploaded</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">11,000</span>+</span>
                        <p>People certifie</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">39,000</span>+</span>
                        <p>Global Teachers</p>
                    </div> <!-- singel counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <section id="teachers-part" class="pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Keanggotaan Alumni</h5>
                        <h2></h2>
                    </div> <!-- section title -->
                    <div class="teachers-cont">
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br> <br> auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris</p>
                        <a href="#" class="main-btn mt-55">Gabung Bersama Kami</a>
                    </div> <!-- teachers cont -->
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="teachers mt-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="template/images/teachers/t-1.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                                        <span>Vice chencelor</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="template/images/teachers/t-2.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>David card</h6></a>
                                        <span>Pro chencelor</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="template/images/teachers/t-3.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>Rebeka alig</h6></a>
                                        <span>Pro chencelor</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="template/images/teachers/t-4.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>Hanna bein</h6></a>
                                        <span>Aerobics head</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- teachers -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@endsection
