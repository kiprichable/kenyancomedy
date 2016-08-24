@extends('layouts.app')

@section('content')
    <style type="text/css">
        /* Global */

        img {
            max-width: 100%;
        }

        a {
            -webkit-transition: all 150ms ease;
            -moz-transition: all 150ms ease;
            -ms-transition: all 150ms ease;
            -o-transition: all 150ms ease;
            transition: all 150ms ease;
        }

        a:hover {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
            filter: alpha(opacity=50); /* IE7 */
            opacity: 0.6;
            text-decoration: none;
        }

        body {
            border-top: 0;
            background: #c4e17f;
            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4)
        }

        .thumbnails li > .fff .caption {
            background: #fff !important;
            padding: 10px
        }

        /* Page Header */
        .page-header {
            background: #f9f9f9;
            margin: -30px -40px 40px;
            padding: 20px 40px;
            border-top: 4px solid #ccc;
            color: #999;
            text-transform: uppercase;
        }

        .page-header h3 {
            line-height: 0.88rem;
            color: #000;
        }

        ul.thumbnails {
            margin-bottom: 0px;
        }

        /* Thumbnail Box */
        .caption h4 {
            color: #444;
        }

        .caption p {
            color: #999;
        }

        /* Carousel Control */
        .control-box {
            text-align: right;
            width: 100%;
        }

        .transition {
            -webkit-transform: scale(1.6);
            -moz-transform: scale(1.6);
            -o-transform: scale(1.6);
            transform: scale(1.6);
        }
        .my-video {
            -webkit-transition: all .4s ease-in-out;
            -moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -ms-transition: all .4s ease-in-out;
        }

        .my-video {
            margin:5px;
        }

        /* Mobile Only */
        @media (max-width: 767px) {
            .page-header, .control-box {
                text-align: center;
            }
        }

        @media (max-width: 479px) {
            .caption {
                word-break: break-all;
            }
        }

        li {
            list-style-type: none;
        }

        ::selection {
            background: #ff5e99;
            color: #FFFFFF;
            text-shadow: 0;
        }

        ::-moz-selection {
            background: #ff5e99;
            color: #FFFFFF;
        }

    </style>

    <div class="container">
        <div class="col-xs-12">

            <div class="page-header">
                <h3>Kenyan Comedy</h3>
                <p>For all of your favourite comedies and skits</p>
            </div>

            {{--TODO:: LOOP THROUGH TYPES IN FUTURE AND DISPLAY THEM HERE RIGHT NOW I HAVE 2 LINES --}}

            <div class="carousel slide" id="myCarousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <ul class="thumbnails">
                            <h3>Recent uploads</h3>
                            @foreach($videos as $video)
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div>
                                        <video id ="my-video" class="my-video video-js vjs-big-play-centered"
                                               poster="videos/7.jpg"
                                               data-setup="{}"
                                               width="260px" height="160px"
                                               controls preload="none"
                                               >
                                            <source src="videos/test.mp4" alt="" type="video/mp4">

                                        <p class="vjs-no-js">
                                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                        </p>
                                        </video>
                                    </div>
                                    <div class="caption"  width="260px" height="160px">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div><!-- /Slide1 -->
                    <div class="item">
                        <ul class="thumbnails">
                            <h3>Most watched</h3>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /Slide2 -->
                    <div class="item">
                        <ul class="thumbnails">
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /Slide3 -->
                </div>


                <nav>
                    <ul class="control-box pager">
                        <li><a data-slide="prev" href="#myCarousel" class=""><i
                                        class="glyphicon glyphicon-chevron-left"></i></a></li>
                        <li><a data-slide="next" href="#myCarousel" class=""><i
                                        class="glyphicon glyphicon-chevron-right"></i></li>
                    </ul>
                </nav>
                <!-- /.control-box -->

            </div><!-- /#myCarousel -->


            <div class="carousel slide" id="myCarousel2">
                <h3>Most watched</h3>
                <div class="carousel-inner">
                    <div class="item active">
                        <ul class="thumbnails">
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /Slide1 -->
                    <div class="item">
                        <ul class="thumbnails">
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /Slide2 -->
                    <div class="item">
                        <ul class="thumbnails">
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Praesent commodo</h4>
                                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                                        <a class="btn btn-mini" href="#">» Read More</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /Slide3 -->
                </div>


                <nav>
                    <ul class="control-box pager">
                        <li><a data-slide="prev" href="#myCarousel2" class=""><i class="glyphicon
                        glyphicon-chevron-left"></i></a></li>
                        <li><a data-slide="next" href="#myCarousel2" class=""><i class="glyphicon
                        glyphicon-chevron-right"></i></li>
                    </ul>
                </nav>
                <!-- /.control-box -->

            </div><!-- /#myCarousel -->

        </div><!-- /.col-xs-12 -->

    </div><!-- /.container -->



    <script type="text/javascript">

        $(document).ready(function(){
            $('.my-video').hover(function() {
                $(".my-video").addClass('transition');

            }, function() {
                $(".my-video").removeClass('transition');
            });
        });

    </script>
@endsection
