@extends('layouts.main')
@section('dropdown')
<div class="dropdown">
                    <button class="dropbtn">{{ Auth::user()->name }}</button>
                    <div class="dropdown-content">
                      
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a  href="/home"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
</div>
@endsection
@section('content')

<div><h2>if you are seing this you are Chef </h2></div>


@endsection