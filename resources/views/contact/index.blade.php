@extends('layouts.master')

@section('content')
    <section class="page-title-bg pt-250 pb-100" data-bg-img="{{ asset('img/section-pattern/page-title.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Contact Us</h2>
                        <ul class="list-inline">
                            <li><a href="{{ route('home.index') }}">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contact.form')

{{--    @include('partials.contact.map')--}}
@endsection