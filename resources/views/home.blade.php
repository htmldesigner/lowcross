@extends('layouts.index')
@section('content')
<section class="main" id="main-page">
    <div class="container">
        <div class="gold-blocks">
                <div class="gold-border">
                    <div>
                        Search Cases
                    </div>
                </div>
                <div class="gold-border">
                    <div>
                        About us
                    </div>
                </div>
                <div class="gold-border">
                    <div>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    {{ __('Log out') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <a href="{{ route('login') }}">{{ __('Log in') }}</a>
                    </div>
                </div>
                <div class="gold-border">
                    <div>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{ __('Create account') }}</a>
                        @endif
                            @endauth
                            @endif
                    </div>
                </div>
            @if (Auth::check())
                <div class="gold-border">
                    <div>
                        <a href="{{ url('/profile') }}">{{ __('Profile') }}</a>
                    </div>
                </div>
            @endif

        </div>
    </div>
</section>
@endsection