 
 <?php $__env->startSection('content'); ?>
<!-- <h3><?php echo e(\Auth::user()->name); ?></h3>
<?php echo e($cur_date=date('y-m-d')); ?>

   <a href="<?php echo e(route('home')); ?>">Home</a> -->
   <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h3 class="panel-title">To Do...</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                                <a href="<?php echo e(route('home')); ?>" class="text-success"><li class="list-group-item list-group-item-success">View Profile</li></a>
                              
                              <a href="<?php echo e(route('edit',\Auth::user()->id)); ?>" class="text-danger"><li class="list-group-item list-group-item-danger">Edit Profile</li></a>
                              <a href="<?php echo e(route('teachercourses.create')); ?>" class="text-info"><li class="list-group-item list-group-item-info">Add Course</li></a>
                              <a href="<?php echo e(route('teachercourseshow',\Auth::user()->code)); ?>" class="text-warning"><li class="list-group-item list-group-item-warning">All Courses</li></a>
                              </ul>
                              
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                      
    
       <?php if($attends): ?>          
   
            
  <table class="table table-hover table-striped">
                     
                       
                        <tr>
                           
                          <th>Roll</th>
                          <th>Date</th>
                          <th>Present/Absent</th>

                        </tr>
                        <tr>
                          <?php $__currentLoopData = $attends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                         
                          <td><?php echo e($att->code); ?></td>
                          <td><?php echo e($att->date); ?></td>
                          
                          <td><?php echo e($att->attendance); ?></td>
                        </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </table>

                    
                    <?php endif; ?> 
                    </div>
                    <div class="col-md-2"></div>

</div>
</div>
	
 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>