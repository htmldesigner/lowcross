@extends('layouts.index')

@section('content')
<section class="main">
    <div class="container">
        <div class="container">
            <div class="main-box">
                <div class="main-box-head">
                    <h1 class="main-box-head-header">TESTIMONIALS</h1>
                    <span class="main-box-head-header-description">

                  </span>
                </div>
                <div class="main-box-content" id="about">
                    <div class="article">
                        <h2>Testimonials</h2>
                    </div>
                    <div class="comments">
                        <div class="photo"><img src="{{ asset('img/empty.jpg')}}"></div>
                        <div class="text-comment">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at cupiditate deleniti ea eum in labore molestias nam, neque nisi non numquam porro praesentium quas qui saepe vel voluptatem. Natus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at cupiditate deleniti ea eum in labore molestias nam, neque nisi non numquam porro praesentium quas qui saepe vel voluptatem. Natus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at cupiditate deleniti ea eum in labore molestias nam, neque nisi non numquam porro praesentium quas qui saepe vel voluptatem. Natus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at cupiditate deleniti ea eum in labore molestias nam, neque nisi non numquam porro praesentium quas qui saepe vel voluptatem. Natus.</p>
                        <p class="comentator-date">10. 12. 2019</p>
                        <p class="comentator-name">Alex Murphy</p>
                        </div>
                    </div>

                    <div class="comments">
                        <div class="photo"><img src="{{ asset('img/empty.jpg')}}"></div>
                        <div class="text-comment">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at cupiditate deleniti ea eum in labore molestias nam, neque nisi non numquam porro praesentium quas qui saepe vel voluptatem. Natus.</p>
                            <p class="comentator-date">10. 12. 2019</p>
                            <p class="comentator-name">John Connor</p>
                        </div>
                    </div>

                    <div class="comments">
                        <div class="photo"><img src="{{ asset('img/empty.jpg')}}"></div>
                        <div class="text-comment">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at cupiditate deleniti ea eum in labore molestias nam, neque nisi non numquam porro praesentium quas qui saepe vel voluptatem. Natus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at cupiditate deleniti ea eum in labore molestias nam, neque nisi non numquam porro praesentium quas qui saepe vel voluptatem. Natus.</p>
                            <p class="comentator-date">10. 12. 2019</p>
                            <p class="comentator-name">Tony Stark</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection
