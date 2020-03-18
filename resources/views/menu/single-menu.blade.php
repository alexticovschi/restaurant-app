@extends('layouts.app')

@section('title')
{{$settings["general"]->site_title}} {{$food_item}}
@endsection

@section('content')
    <!-- Banner -->
    <section class="banner-area banner-area2 menu-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Menu</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    <div class="single-menu-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <div class="content-box single-menu">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="single-menu__title text-centered">Burgers</h1>
                            </div>
                            <div class="col-md-6">
                                <div class="single-menu__wrapper">
                                    <div class="single-menu__item">
                                        <h4 class="single-menu__name">Texas Burger</h4>
                                        <span class="single-menu__price">&pound;9</span>
                                    </div>
                                    <div class="single-menu__description">
                                        <p>Bread, Meat, Tomato, Cheese, BBQ Sauce</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-menu__wrapper">
                                    <div class="single-menu__item">
                                        <h4 class="single-menu__name">Texas Burger</h4>
                                        <span class="single-menu__price">&pound;9</span>
                                    </div>
                                    <div class="single-menu__description">
                                        <p>Bread, Meat, Tomato, Cheese, BBQ Sauce</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-menu__wrapper">
                                    <div class="single-menu__item">
                                        <h4 class="single-menu__name">Texas Burger</h4>
                                        <span class="single-menu__price">&pound;9</span>
                                    </div>
                                    <div class="single-menu__description">
                                        <p>Bread, Meat, Tomato, Cheese, BBQ Sauce</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-menu__wrapper">
                                    <div class="single-menu__item">
                                        <h4 class="single-menu__name">Texas Burger</h4>
                                        <span class="single-menu__price">&pound;9</span>
                                    </div>
                                    <div class="single-menu__description">
                                        <p>Bread, Meat, Tomato, Cheese, BBQ Sauce</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
