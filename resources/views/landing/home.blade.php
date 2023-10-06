@extends('layout.landing')
@section('title','Home')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
@endSection
@section('content')
    <div class="section mb-5">
        <div class="container d-flex banner flex-wrap my-3 w-100 justify-content-between">
            <div class="d-flex flex-column mx-auto" style="width: 25rem">
                <h1 class="text-days">Boost your skill<br>
                    with experts <img src="{{ asset('img/Star_6.png') }}" alt=""></h1>
                <p class="text-inter text-break my-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod temporidunt ut labore veniam...
                </p>
                <div class="d-flex align-items-center mt-3 mb-5">
                    <a class="nav-text-inter btn btn-outline-dark shadow-box me-5" href="/course">Explore courses</a>
                    <img src="{{ asset('img/Exclude.png') }}" width="50px" alt="">
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <img src="{{ asset('img/stanford.png') }}" width="20%" alt="">
                    <img src="{{ asset('img/illinois.png') }}" width="20%" alt="">
                    <img src="{{ asset('img/duke_updated_2020.png') }}" width="20%" alt="">
                </div>
            </div>
            <div class="mask-banner me-auto mt-3">
                <img src="{{ asset('img/teenager-student-girl-yellow-pointing-finger-side 1.png') }}" alt="">
            </div>
            <div class="d-flex flex-column pt-5 justify-content-end">
                <div class="item">
                    <h4 class="text-days">320 K</h4>
                    <p class="text-inter mb-3">Successful campaign</p>
                    <hr>
                </div>
                <div class="item">
                    <h4 class="text-days">100%</h4>
                    <p class="text-inter mb-3">Success rate</p>
                    <hr>
                </div>
                <div class="item">
                    <h4 class="text-days">20 K</h4>
                    <p class="text-inter mb-3">Hapy Clientss</p>
                    <hr>
                </div>
                <div class="item">
                    <h4 class="text-days">980</h4>
                    <p class="text-inter mb-3">5 Star Reviews</p>
                    <hr>
                </div>
                <div class="item mt-3">
                    <img src="{{asset('img/Frame.png')}}" width="30%" alt="frame">
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <p class="text-center text-inter mb-5" style="color: black">Learn from more than 160 member universities</p>
        </div>
    </div>
    <div class="section d-flex mt-5">
        <div class="container mx-auto mt-5">
            <div class="container item-between">
                <div class="d-flex bg-light justify-content-evenly border border-dark border-3 rounded shadow-box w-100 d-flex p-3 mb-3">
                    <div class="d-flex align-items-center">
                        <div class="icon p-1 border border-2 rounded border-dark me-3">
                            <i class="fa-solid fa-building-columns fa-xl" style="color: #334456;"></i>
                        </div>
                        <div class="content my-auto">
                            <h6 class="text-days">Best University</h6>
                            <p class="text-inter mb-0">Lorem ipsum dolor sit amet, consec<br>
                                temporidunt ut labore veniam...</p>
                        </div>
                    </div>
                    <div class="vl rounded"></div>
                    <div class="d-flex align-items-center">
                        <div class="icon p-1 border border-2 rounded border-dark me-3">
                            <i class="fa-solid fa-swatchbook fa-xl" style="color: #334456;"></i>
                        </div>
                        <div class="content my-auto">
                            <h6 class="text-days">Great materials</h6>
                            <p class="text-inter mb-0">Lorem ipsum dolor sit amet, consec<br>
                                temporidunt ut labore veniam...</p>
                        </div>
                    </div>
                    <div class="vl rounded"></div>
                    <div class="d-flex align-items-center">
                        <div class="icon p-1 border border-2 rounded border-dark me-3">
                            <i class="fa-solid fa-stethoscope fa-xl" style="color: #334456;"></i>
                        </div>
                        <div class="content my-auto">
                            <h6 class="text-days">Professional Course</h6>
                            <p class="text-inter mb-0">Lorem ipsum dolor sit amet, consec<br>
                                temporidunt ut labore veniam...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex my-5">
                <div class="row title-section mx-auto w-100 px-5">
                    <h3 class="col-md text-center text-days">Featured Courses</h3>
                    <p class="col-xl text-left text-inter mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br>eiusmod temporidunt ut labore veniam...</p>
                </div>
            </div>
            <div class="course-list d-flex flex-column pt-3">
                <div class="card-deck d-flex flex-wrap course-items">
                    <div class="card rounded-4 border border-2 border-dark my-2 mx-auto p-2" style="width: 22rem;">
                        <img src="{{asset('img/card-img.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="campus-rate d-flex my-3 justify-content-between align-items-center">
                                <img src="{{asset('img/duke_updated_2020.png')}}" alt="">
                                <img src="{{asset('img/stars.png')}}" alt="">
                            </div>
                            <h5 class="card-title text-break text-days">Medical Basics 101:Anatomy of human body</h5>
                            <p class="card-text text-inter">consectetur adipiscing elit, sed do eiusmod tempot ut labore veniam ipsum dolor sit amet...</p>
                            <div class="button-enroled d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-outline-dark rounded-3 text-inter">Join</a>
                                <div class="d-flex align-items-center">
                                    <p class="fw-bold text-days my-auto me-1">23450</p>
                                    <p class="text-inter my-auto">Enroled</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-4 border border-2 border-dark my-2 mx-auto p-2" style="width: 22rem;">
                        <img src="{{asset('img/card-img.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="campus-rate d-flex my-3 justify-content-between align-items-center">
                                <img src="{{asset('img/duke_updated_2020.png')}}" alt="">
                                <img src="{{asset('img/stars.png')}}" alt="">
                            </div>
                            <h5 class="card-title text-break text-days">Medical Basics 101:Anatomy of human body</h5>
                            <p class="card-text text-inter">consectetur adipiscing elit, sed do eiusmod tempot ut labore veniam ipsum dolor sit amet...</p>
                            <div class="button-enroled d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-outline-dark rounded-3 text-inter">Join</a>
                                <div class="d-flex align-items-center">
                                    <p class="fw-bold text-days my-auto me-1">23450</p>
                                    <p class="text-inter my-auto">Enroled</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-4 border border-2 border-dark my-2 mx-auto p-2" style="width: 22rem;">
                        <img src="{{asset('img/card-img.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="campus-rate d-flex my-3 justify-content-between align-items-center">
                                <img src="{{asset('img/duke_updated_2020.png')}}" alt="">
                                <img src="{{asset('img/stars.png')}}" alt="">
                            </div>
                            <h5 class="card-title text-break text-days">Medical Basics 101:Anatomy of human body</h5>
                            <p class="card-text text-inter">consectetur adipiscing elit, sed do eiusmod tempot ut labore veniam ipsum dolor sit amet...</p>
                            <div class="button-enroled d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-outline-dark rounded-3 text-inter">Join</a>
                                <div class="d-flex align-items-center">
                                    <p class="fw-bold text-days my-auto me-1">23450</p>
                                    <p class="text-inter my-auto">Enroled</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-4 border border-2 border-dark my-2 mx-auto p-2" style="width: 22rem;">
                        <img src="{{asset('img/card-img.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="campus-rate d-flex my-3 justify-content-between align-items-center">
                                <img src="{{asset('img/duke_updated_2020.png')}}" alt="">
                                <img src="{{asset('img/stars.png')}}" alt="">
                            </div>
                            <h5 class="card-title text-break text-days">Medical Basics 101:Anatomy of human body</h5>
                            <p class="card-text text-inter">consectetur adipiscing elit, sed do eiusmod tempot ut labore veniam ipsum dolor sit amet...</p>
                            <div class="button-enroled d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-outline-dark rounded-3 text-inter">Join</a>
                                <div class="d-flex align-items-center">
                                    <p class="fw-bold text-days my-auto me-1">23450</p>
                                    <p class="text-inter my-auto">Enroled</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-4 border border-2 border-dark my-2 mx-auto p-2" style="width: 22rem;">
                        <img src="{{asset('img/card-img.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="campus-rate d-flex my-3 justify-content-between align-items-center">
                                <img src="{{asset('img/duke_updated_2020.png')}}" alt="">
                                <img src="{{asset('img/stars.png')}}" alt="">
                            </div>
                            <h5 class="card-title text-break text-days">Medical Basics 101:Anatomy of human body</h5>
                            <p class="card-text text-inter">consectetur adipiscing elit, sed do eiusmod tempot ut labore veniam ipsum dolor sit amet...</p>
                            <div class="button-enroled d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-outline-dark rounded-3 text-inter">Join</a>
                                <div class="d-flex align-items-center">
                                    <p class="fw-bold text-days my-auto me-1">23450</p>
                                    <p class="text-inter my-auto">Enroled</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-4 border border-2 border-dark my-2 mx-auto p-2" style="width: 22rem;">
                        <img src="{{asset('img/card-img.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="campus-rate d-flex my-3 justify-content-between align-items-center">
                                <img src="{{asset('img/duke_updated_2020.png')}}" alt="">
                                <img src="{{asset('img/stars.png')}}" alt="">
                            </div>
                            <h5 class="card-title text-break text-days">Medical Basics 101:Anatomy of human body</h5>
                            <p class="card-text text-inter">consectetur adipiscing elit, sed do eiusmod tempot ut labore veniam ipsum dolor sit amet...</p>
                            <div class="button-enroled d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-outline-dark rounded-3 text-inter">Join</a>
                                <div class="d-flex align-items-center">
                                    <p class="fw-bold text-days my-auto me-1">23450</p>
                                    <p class="text-inter my-auto">Enroled</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn mx-auto my-5 btn-outline-dark shadow-box">Explore courses</a>
            </div>
        </div>
    </div>
    <div class="section categories">
        <div class="container py-5">
            <h3 class="text-days mb-4 text-center">More Courses from Catagories</h3>
            <section class="splide mt-5" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="d-flex flex-column align-items-center">
                                <div class="bg-transparent mt-5">
                                    <div class="icon bg-dark border rounded-circle p-3">
                                        <i class="fa-solid fa-layer-group" style="color: #ffffff;"></i>
                                    </div>
                                </div>
                                <div class="card-shadow d-flex flex-column align-items-center border rounded p-3 border-2 px-5 border-dark">
                                    <h4 class="text-days mt-3">
                                        Design
                                    </h4>
                                    <p class="text-inter">
                                        Over 960 Courses
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <div class="section py-5">
        <div class="container">
            <div class="video_title d-flex flex-column align-items-center">
                <h3 class="text-days my-3">Watch our promo video</h3>
                <p class="text-inter mb-5">
                    consectetur adipiscing elit, sed do eiusmod tempot ut labore veniam ipsum...
                </p>
            </div>
            <div id="video_container"class="border-2 shadow-box rounded" style="position: relative;">
                <button id="play" class="btn play_video ms-auto"><i class="fa-solid fa-play" style="color: #ffffff;"></i></button>
                <button id="pause" class="btn play_video ms-auto d-none"><i class="fa-solid fa-pause" style="color: #ffffff;"></i></button>
                <img src="{{asset('img/video_preview.png')}}" alt="Preview" id="video_preview" class="rounded w-100" />
                <video controls class="rounded d-none my-auto" id="myVideo">
                    <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div class="section testimoni">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-around align-items-center my-5 mx-auto">
                <h3 class="text-days my-3">What our clients say</h3>
                <p class="text-inter mb-0 text-wrap w-50">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporidunt ut labore veniam...
                </p>
            </div>
            <div class="testimonis d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="d-flex flex-column align-items-center">
                    <div class="bg-transparent">
                        <img src="{{asset('img/user_img.png')}}" class="user-testi-img bg-dark border border-2 rounded-circle w-75" alt="">
                    </div>
                    <div class="card-shadow d-flex flex-column align-items-center border rounded p-3 border-2 px-5 border-dark mx-3">
                        <div class="d-flex flex-column align-items-center">
                            <h4 class="text-days mt-5">
                                Adam Smith
                            </h4>
                            <p class="text-inter">
                                Python Developer
                            </p>
                        </div>
                        <p class="text-wrap text-inter text-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco..
                        </p>
                        <div class="review-stars d-flex justify-content-evenly w-75 mt-3">
                            <img src="{{asset('img/star_review1.png')}}" alt="">
                            <img src="{{asset('img/star_review1.png')}}" alt="">
                            <img src="{{asset('img/star_review1.png')}}" alt="">
                            <img src="{{asset('img/star_review1.png')}}" alt="">
                            <img src="{{asset('img/star_review2.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <div class="bg-transparent">
                        <img src="{{asset('img/user_img.png')}}" class="user-testi-img bg-dark border border-2 rounded-circle w-75" alt="">
                    </div>
                    <div class="card-shadow d-flex flex-column align-items-center border rounded p-3 border-2 px-5 border-dark mx-3">
                        <div class="d-flex flex-column align-items-center">
                            <h4 class="text-days mt-5">
                                Adam Smith
                            </h4>
                            <p class="text-inter">
                                Python Developer
                            </p>
                        </div>
                        <p class="text-wrap text-inter text-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco..
                        </p>
                        <div class="review-stars d-flex justify-content-evenly w-75 mt-3">
                            <img src="{{asset('img/star_review1.png')}}" alt="">
                            <img src="{{asset('img/star_review1.png')}}" alt="">
                            <img src="{{asset('img/star_review1.png')}}" alt="">
                            <img src="{{asset('img/star_review1.png')}}" alt="">
                            <img src="{{asset('img/star_review2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <a href="#" class="btn btn-outline-dark mx-auto my-5 text-center shadow-box">View All Testimonials</a>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        new Splide('.splide', {
            type: 'loop',
            pagination: false,
            gap: '1rem',
            interval: 3000,
            perPage: 4,
            perMove: 1,
            autoplay: true,
        }).mount()

        var video = document.getElementById("myVideo");

        // Fungsi untuk menjalankan/menghentikan video
        function togglePlayPause() {
            if (video.paused || video.ended) {
                $('#play').addClass('d-none');
                $('#pause').removeClass('d-none');
                $('#myVideo').removeClass('d-none');
                $('#video_preview').addClass('d-none');
                video.play();
            } else {
                video.pause();
                $('#play').removeClass('d-none');
                $('#pause').addClass('d-none');
            }
        }

        $(".play_video").click(function() {
            togglePlayPause();
        });
    </script>
@endsection
