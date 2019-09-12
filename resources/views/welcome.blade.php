@extends('layouts.app')

@section('content')

<div class="ui twelve column container pb-3">
    <div class="column">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" style="max-height:400px" src="/images/background/pic2.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lorem ipsum</h5>
                        <p> dolor sit amet consectetur adipisicing elit. Esse, eos. Molestias fugit rerum architecto sapiente beatae! Adipisci officia pariatur, non reprehenderit autem deserunt, fugit, explicabo est dolorum voluptates sequi aspernatur?</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" style="max-height:400px" src="/images/background/pic1.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lorem ipsum</h5>
                        <p> dolor sit amet consectetur adipisicing elit. Esse, eos. Molestias fugit rerum architecto sapiente beatae! Adipisci officia pariatur, non reprehenderit autem deserunt, fugit, explicabo est dolorum voluptates sequi aspernatur?</p>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<hr>

<div class="ui five column doubling stackable grid container pb-3 pt-2">
    <div class="ui secondary  menu">
        <a class="item active">
            Kue Manis
        </a>
        <a class="item">
            Kue Asin
        </a>
        <a class="item">
            Kue Basah            
        </a>
    </div>
</div>

<div class="ui five column doubling stackable grid container piled segment">
    <div class="row bottom aligned">
        <div class="one wide column"></div>
        <div class="five wide column">
            <h2 class="ui header">Kue mantap maknyus!</h2>
        </div>
        <div class="ten wide column right aligned">
            <div class="ui red animated button" tabindex="0">
                <div class="visible content">Lebih banyak</div>
                <div class="hidden content">
                    <i class="right arrow icon"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="column">
        <div class="ui pink segment">
            <div class="ui medium image">
                <img src="https://pixselo.com/wp-content/uploads/2018/03/dummy-placeholder-image-400x400-300x300.jpg" alt="">
                <div class="ui red right ribbon label">
                    <i class="dollar sign icon"></i> -80%
                </div>
            </div>

            <hr>

            <div class="content">
                <a href="#" class="header">Kue Bolu</a>
                <div class="description">
                    <p>Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak!</p>
                </div>
                <div class="extra">
                    <v-rating></v-rating>
                </div>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="ui pink segment">
            <div class="ui medium image">
                <img src="https://pixselo.com/wp-content/uploads/2018/03/dummy-placeholder-image-400x400-300x300.jpg" alt="">
                <div class="ui red right ribbon label">
                    <i class="dollar sign icon"></i> -80%
                </div>
            </div>

            <hr>

            <div class="content">
                <a href="#" class="header">Kue Bolu</a>
                <div class="description">
                    <p>Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak!</p>
                </div>
                <div class="extra">
                    <v-rating></v-rating>
                </div>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="ui pink segment">
            <div class="ui medium image">
                <img src="https://pixselo.com/wp-content/uploads/2018/03/dummy-placeholder-image-400x400-300x300.jpg" alt="">
            </div>

            <hr>

            <div class="content">
                <a href="#" class="header">Kue Bolu</a>
                <div class="description">
                    <p>Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak!</p>
                </div>
                <div class="extra">
                    <v-rating></v-rating>
                </div>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="ui pink segment">
            <div class="ui medium image">
                <img src="https://pixselo.com/wp-content/uploads/2018/03/dummy-placeholder-image-400x400-300x300.jpg" alt="">
            </div>

            <hr>

            <div class="content">
                <a href="#" class="header">Kue Bolu</a>
                <div class="description">
                    <p>Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak!</p>
                </div>
                <div class="extra">
                    <v-rating></v-rating>
                </div>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="ui pink segment">
            <div class="ui medium image">
                <img src="https://pixselo.com/wp-content/uploads/2018/03/dummy-placeholder-image-400x400-300x300.jpg" alt="">
            </div>

            <hr>

            <div class="content">
                <a href="#" class="header">Kue Bolu</a>
                <div class="description">
                    <p>Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak! Ini kue bolu enak!</p>
                </div>
                <div class="extra">
                    <v-rating></v-rating>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection