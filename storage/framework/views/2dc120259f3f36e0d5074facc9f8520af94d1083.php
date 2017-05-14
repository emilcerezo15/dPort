<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
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

    <aside class="aboutme"><?php echo $__env->make('aboutme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></aside>
    <aside class="work"><?php echo $__env->make('work', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></aside>
    <aside class="process"><?php echo $__env->make('process', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></aside>
    <aside class="contact"><?php echo $__env->make('contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></aside>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>