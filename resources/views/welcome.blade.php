@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="home">
        <div class="filter"></div>
        <div class="bg">
            <a href="#" class="navAClick profile">
                <h1>Emil Cerezo</h1>
                <i>Web developer</i>
            </a>
            <span data-target="sideBar" class="custom-btn-collapse" hidden><i class="material-icons">menu</i></span>
            <nav class=" nav-collapse">
                <div class="nav-content">
                    <a href="#aboutme" class="navAClick" id="aboutme"><i class="fa fa-user"></i><span>About Me</span></a>
                    <a href="#work" class="navAClick" id="work"><i class="fa fa-desktop"></i><span>Work</span></a>
                    <a href="#expertise" class="navAClick" id="expertise"><i class="fa fa-mouse-pointer"></i><span>Expertise</span></a>
                    <a href="#contact" class="navAClick" id="contact"><i class="fa fa-envelope"></i><span>Contact</span></a>
                </div>
            </nav>
            <nav id="sideBar" >
                <div class="nav-content">
                    <a href="#aboutme" class="navAClick" id="aboutme"><i class="fa fa-user"></i><span>About Me</span></a>
                    <a href="#work" class="navAClick" id="work"><i class="fa fa-desktop"></i><span>Work</span></a>
                    <a href="#expertise" class="navAClick" id="expertise"><i class="fa fa-mouse-pointer"></i><span>Expertise</span></a>
                    <a href="#contact" class="navAClick" id="contact"><i class="fa fa-envelope"></i><span>Contact</span></a>
                </div>
                <a data-target="sideBar" id="closeSidebar" >Close</a>
            </nav>

        </div>
    </div>

    <aside id="aboutme">@include('aboutme')</aside>
    <aside id="work">@include('work')</aside>
    <aside id="expertise">@include('expertise')</aside>
    <aside id="contact">@include('contact')</aside>
@endsection