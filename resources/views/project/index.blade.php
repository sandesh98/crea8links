@extends('layouts.master')

@section('content')
    <section class="page-title-bg pt-250 pb-100" data-bg-img="{{ asset('img/section-pattern/page-title.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Projecten</h2>
                        <ul class="list-inline">
                            <li><a href="{{ route('home.index') }}">Home</a></li>
                            <li>Projecten</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title End -->

    <!-- About Section Begin -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Begin -->
                    <div class="section-title mb-50 mb-lg-0">
                        <h3>Wat Wij Gedaan Hebben</h3>
                        <h2>Wij Werken <br>
                            Door Heel Het Land</h2>
                        <p>Enjoyed minutes related on fanny dried as often me. Goodness as reserved raptures to mistaken
                            steepest oh he. Gravity he
                            mr sixteen esteems. Mile home new way with high said. Finished horrible blessing landlord
                            dwelling dissuade if. Rent
                            fond am he in on read. Anxious cordial demands settled entered in do to colonel landlord
                            dwelling dissuade.</p>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('img/case-study-about@2x.jpg') }}" data-rjs="2" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    @include('partials.project.projects')

@endsection