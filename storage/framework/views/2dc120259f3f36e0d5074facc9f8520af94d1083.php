<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
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
                <a data-target="sideBar" id="closeSidebar" ><i class="fa fa-close"></i></a>
            </nav>

        </div>
    </div>

    <aside id="aboutme"><?php echo $__env->make('aboutme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></aside>
    <aside id="work"><?php echo $__env->make('work', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></aside>
    <aside id="expertise"><?php echo $__env->make('expertise', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></aside>
    <aside id="contact"><?php echo $__env->make('contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></aside>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>