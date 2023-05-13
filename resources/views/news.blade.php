@extends('layouts.master')


@section('title')
news 
 
@endsection 

@section('content')


    <!-- ======= Featured Section ======= -->

<main>
<section class="news-section section-padding" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 mb-5">
                <h2>Latest News</h2>
            </div>

            <div class="col-lg-7 col-12">
                <div class="news-block">
                    <div class="news-block-top">
                        <a href="news-detail.html">
                            <img src="images/news/medium-shot-volunteers-with-clothing-donations.jpg" class="news-image img-fluid" alt="">
                        </a>

                        <div class="news-category-block">
                            <a href="#" class="category-block-link">
                                Lifestyle,
                            </a>

                            <a href="#" class="category-block-link">
                                Clothing Donation
                            </a>
                        </div>
                    </div>

                    <div class="news-block-info">
                        <div class="d-flex mt-2">
                            <div class="news-block-date">
                                <p>
                                    <i class="bi-calendar4 custom-icon me-1"></i>
                                    October 12, 2036
                                </p>
                            </div>

                            <div class="news-block-author mx-5">
                                <p>
                                    <i class="bi-person custom-icon me-1"></i>
                                    By Admin
                                </p>
                            </div>

                            <div class="news-block-comment">
                                <p>
                                    <i class="bi-chat-left custom-icon me-1"></i>
                                    32 Comments
                                </p>
                            </div>
                        </div>

                        <div class="news-block-title mb-2">
                            <h4><a href="news-detail.html" class="news-block-title-link">Clothing donation to urban area</a></h4>
                        </div>

                        <div class="news-block-body">
                            <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional charity theme based on Bootstrap</p>
                        </div>
                    </div>
                </div>

                <div class="news-block mt-3">
                    <div class="news-block-top">
                        <a href="news-detail.html">
                            <img src="images/news/medium-shot-people-collecting-foodstuff.jpg" class="news-image img-fluid" alt="">
                        </a>

                        <div class="news-category-block">
                            <a href="#" class="category-block-link">
                                Food,
                            </a>

                            <a href="#" class="category-block-link">
                                Donation,
                            </a>

                            <a href="#" class="category-block-link">
                                Caring
                            </a>
                        </div>
                    </div>

                    <div class="news-block-info">
                        <div class="d-flex mt-2">
                            <div class="news-block-date">
                                <p>
                                    <i class="bi-calendar4 custom-icon me-1"></i>
                                    October 20, 2036
                                </p>
                            </div>

                            <div class="news-block-author mx-5">
                                <p>
                                    <i class="bi-person custom-icon me-1"></i>
                                    By Admin
                                </p>
                            </div>

                            <div class="news-block-comment">
                                <p>
                                    <i class="bi-chat-left custom-icon me-1"></i>
                                    35 Comments
                                </p>
                            </div>
                        </div>

                        <div class="news-block-title mb-2">
                            <h4><a href="news-detail.html" class="news-block-title-link">Food donation area</a></h4>
                        </div>

                        <div class="news-block-body">
                            <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus elementum, tempor risus vel, condimentum orci</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 mx-auto">
                <form class="custom-form search-form" action="#" method="get" role="form">
                    <input name="search" type="search" class="form-control" id="search" placeholder="Search" aria-label="Search">

                    <button type="submit" class="form-control">
                        <i class="bi-search"></i>
                    </button>
                </form>

                <h5 class="mt-5 mb-3">Recent news</h5>

                <div class="news-block news-block-two-col d-flex mt-4">
                    <div class="news-block-two-col-image-wrap">
                        <a href="news-detail.html">
                            <img src="images/news/africa-humanitarian-aid-doctor.jpg" class="news-image img-fluid" alt="">
                        </a>
                    </div>

                    <div class="news-block-two-col-info">
                        <div class="news-block-title mb-2">
                            <h6><a href="news-detail.html" class="news-block-title-link">Food donation area</a></h6>
                        </div>

                        <div class="news-block-date">
                            <p>
                                <i class="bi-calendar4 custom-icon me-1"></i>
                                October 16, 2036
                            </p>
                        </div>
                    </div>
                </div>

                <div class="news-block news-block-two-col d-flex mt-4">
                    <div class="news-block-two-col-image-wrap">
                        <a href="news-detail.html">
                            <img src="images/news/close-up-happy-people-working-together.jpg" class="news-image img-fluid" alt="">
                        </a>
                    </div>

                    <div class="news-block-two-col-info">
                        <div class="news-block-title mb-2">
                            <h6><a href="news-detail.html" class="news-block-title-link">Volunteering Clean</a></h6>
                        </div>

                        <div class="news-block-date">
                            <p>
                                <i class="bi-calendar4 custom-icon me-1"></i>
                                October 24, 2036
                            </p>
                        </div>
                    </div>
                </div>

                <div class="category-block d-flex flex-column">
                    <h5 class="mb-3">Categories</h5>

                    <a href="#" class="category-block-link">
                        Drinking water
                        <span class="badge">20</span>
                    </a>

                    <a href="#" class="category-block-link">
                        Food Donation
                        <span class="badge">30</span>
                    </a>

                    <a href="#" class="category-block-link">
                        Children Education
                        <span class="badge">10</span>
                    </a>

                    <a href="#" class="category-block-link">
                        Poverty Development
                        <span class="badge">15</span>
                    </a>

                    <a href="#" class="category-block-link">
                        Clothing Donation
                        <span class="badge">20</span>
                    </a>
                </div>

                <div class="tags-block">
                    <h5 class="mb-3">Tags</h5>

                    <a href="#" class="tags-block-link">
                        Donation
                    </a>

                    <a href="#" class="tags-block-link">
                        Clothing
                    </a>

                    <a href="#" class="tags-block-link">
                        Food
                    </a>

                    <a href="#" class="tags-block-link">
                        Children
                    </a>

                    <a href="#" class="tags-block-link">
                        Education
                    </a>

                    <a href="#" class="tags-block-link">
                        Poverty
                    </a>

                    <a href="#" class="tags-block-link">
                        Clean Water
                    </a>
                </div>

                <form class="custom-form subscribe-form" action="#" method="get" role="form">
                    <h5 class="mb-4">Newsletter Form</h5>

                    <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required>

                    <div class="col-lg-12 col-12">
                        <button type="submit" class="form-control">Subscribe</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
</main>
@endsection 