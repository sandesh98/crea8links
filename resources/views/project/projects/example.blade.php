@extends('layouts.master')

@section('content')
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="project-details">
                        <div class="row">
                            <div class="col-12">
                                <!-- Project Image Begin -->
                                <div class="project-image">
                                    <img src="{{ asset('img/project/project-details.jpg') }}" data-rjs="2" alt="">
                                </div>
                                <!-- Project Image End -->
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <ul class="list-inline project-meta">
                                    <li>Client: <a href="#">Tim Peter Corp</a></li>
                                    <li>Perspective: <a href="#">Asset Management</a><a href="#"> Financial
                                            Regulation</a></li>
                                    <li>Role: <a href="#">Business Analyst</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row justify-content-center pb-100">
                            <div class="col-lg-10">
                                <div class="project-details-content">
                                    <h3>Project Requirements:</h3>

                                    <p>Surprise not wandered speedily husbands although yet end. Are court tiled cease
                                        young built fat
                                        one man taken. We
                                        highest ye friends is exposed equally in. Turned it up should no valley cousin
                                        he. Speaking
                                        numerous ask did horrible packages set. Ashamed herself has distant can studied
                                        mrs. Led
                                        therefore its middleton perpetual fulfilled provision frankness. Small he drawn
                                        after among
                                        every three no. All having but you edward genius though remark one.Offered say
                                        visited elderly
                                        and. Waited period are played family man formed. He ye body or made on pain part
                                        meet. You one
                                        delay nor begin our folly abode. By disposed replying mr me unpacked no. As
                                        moonlight of my
                                        resolving unwilling.</p>
                                    <h3>Challange:</h3>
                                    <p>Moments its musical age explain. But extremity sex now education concluded
                                        earnestly her
                                        continual. Oh furniture
                                        acuteness suspected continual ye something frankness. Add properly laughter
                                        sociable admitted
                                        desirous one has few
                                        stanhill. Opinion regular in perhaps another enjoyed no engaged he at. It
                                        conveying he continual
                                        ye suspected as
                                        necessary. Separate met packages shy for kindness. Boy favourable day can
                                        introduced sentiments
                                        entreaties. Noisier
                                        carried of in warrant because. So mr plate seems cause chief widen first. Two
                                        differed husbands
                                        met screened his. Bed was form wife out ask draw.</p>
                                    <h3>Solutions:</h3>
                                    <p>Surprise not wandered speedily husbands although yet end. Are court tiled cease
                                        young built fat
                                        one man taken. We
                                        highest ye friends is exposed equally in. Turned it up should no valley cousin
                                        he. Speaking
                                        numerous ask did horrible packages set. Ashamed herself has distant can studied
                                        mrs. Led
                                        therefore its middleton perpetual fulfilled provision frankness. Small he drawn
                                        after among
                                        every three no. All having but you edward genius though remark one.Offered say
                                        visited elderly
                                        and. Waited period are played family man formed. He ye body or made on pain part
                                        meet. You one
                                        delay nor begin our folly abode. By disposed replying mr me unpacked no. As
                                        moonlight of my
                                        resolving unwilling.</p>

                                    <ul class="list-check mb-5">
                                        <li><i class="fa fa-check"></i> Become successful & superior</li>
                                        <li><i class="fa fa-check"></i> Provide quick solution for business</li>
                                        <li><i class="fa fa-check"></i> Use opportunities to boost sales</li>
                                        <li><i class="fa fa-check"></i> Planning & executing projects</li>
                                    </ul>

                                    <a href="#" class="btn"><span>DOWNLOAD PAPER</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center pt-100">
                            <div class="col-lg-10">
                                <!-- Post Pagination Begin -->
                                <div class="post-pagination d-flex align-items-center justify-content-between flex-column flex-md-row">
                                    <!-- Single Post Pagination Begin -->
                                    <div class="single-post-pagination media align-items-center mb-50 mb-md-0">
                                        <div class="pagination-image">
                                            <a href="#"><img src="{{ asset('img/post-pegination-1.png') }}" data-rjs="2" alt=""></a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="d-inline-flex align-items-center"><img
                                                        src="{{ asset('img/icons/angle-left.svg') }}" data-rjs="2" class="svg"
                                                        alt="">Vorige</a>
                                            <h6>Role of Hedge Funds in Institutional Portfolios: Florida Retirement
                                                System</h6>
                                        </div>
                                    </div>
                                    <!-- Single Post Pagination End -->

                                    <!-- Single Post Pagination Begin -->
                                    <div class="single-post-pagination next media flex-row-reverse align-items-center">
                                        <div class="pagination-image">
                                            <a href="#"><img src="{{ asset('img/post-pegination-2.png') }}" data-rjs="2" alt=""></a>
                                        </div>
                                        <div class="media-body text-right">
                                            <a href="#" class="d-inline-flex flex-row-reverse align-items-center"><img
                                                        src="{{ asset('img/icons/angle-right.svg') }}" alt=""
                                                        class="svg">Volgende</a>
                                            <h6>Role of Hedge Funds in Institutional Portfolios: Florida Retirement
                                                System</h6>
                                        </div>
                                    </div>
                                    <!-- Single Post Pagination End -->
                                </div>
                                <!-- Post Pagination End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection