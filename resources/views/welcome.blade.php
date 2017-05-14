@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="home">
        <div class="filter"></div>
        <div class="bg">
            <a href="#" class="navAClick">
                <h1>Emil Cerezo</h1>
                <label for="">Web developer</label>
            </a>
            <nav>
                <div class="nav-content">
                    <a href="#aboutme" class="navAClick" id="aboutme"><i class="fa fa-user"></i><span>About Me</span></a>
                    <a href="#work" class="navAClick" id="work"><i class="fa fa-desktop"></i><span>Work</span></a>
                    <a href="#process" class="navAClick" id="process"><i class="fa fa-mouse-pointer"></i><span>Process</span></a>
                    <a href="#contact" class="navAClick" id="contact"><i class="fa fa-envelope"></i><span>Contact</span></a>
                </div>
            </nav>
        </div>
    </div>

    <aside class="aboutme">@include('aboutme')</aside>
    <aside class="work">@include('work')</aside>
    <aside class="process">@include('process')</aside>
    <aside class="contact">@include('contact')</aside>
@endsection