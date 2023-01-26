 
 <?php $__env->startSection('content'); ?>
<h3><?php echo e(\Auth::user()->name); ?></h3>
   <a href="<?php echo e(route('home')); ?>">Home</a>
    <ul>
        <li><?php echo e(\Auth::user()->code); ?></li>
        <?php $__currentLoopData = $tcourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li>
              
          
                 <a href="<?php echo e(route('attendances',['course1'=>$course->course1,'section'=>$course->section,'id'=>$course->id])); ?>"><?php echo e($course->course1); ?>   <?php echo e($course->section); ?>  </a>  

    </li>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
    </ul>
    
 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>