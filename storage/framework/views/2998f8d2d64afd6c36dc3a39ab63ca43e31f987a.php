 
 <?php $__env->startSection('content'); ?>

 <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h3 class="panel-title">To Do...</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                                <a href="<?php echo e(route('shome')); ?>" class="text-success"><li class="list-group-item list-group-item-success">View Profile</li></a>

                              <a href="<?php echo e(route('edit',\Auth::user()->id)); ?>" class="text-danger"><li class="list-group-item list-group-item-danger">Edit Profile</li></a>
                              <a href="<?php echo e(route('teachercourses.index')); ?>" class="text-info"><li class="list-group-item list-group-item-info">Add Course</li></a>
                              <a href="<?php echo e(route('teachercourseshow',\Auth::user()->code)); ?>" class="text-warning"><li class="list-group-item list-group-item-warning">All Courses</li></a>

                              <a href="<?php echo e(route('studentcgpashow',\Auth::user()->code)); ?>" class="text-success"><li class="list-group-item list-group-item-success">View Result</li></a></ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                      
                      <center><h3 class="text-success">Attendance Info </h3></center><br>
                    <?php if($attends): ?>
                    <table class="table table-hover table-striped">
                      
                       
                        <tr>
                           
                          <th>Total Class</th>
                          <td><?php echo e($total_count); ?></td>
                        </tr>
                        <?php $__currentLoopData = $attends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <th>Present</th>
                          <td><?php echo e($att->codecount); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <?php $__currentLoopData = $abss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $abss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <tr>
                          <th>Absent</th>
                          <td><?php echo e($abss->abcount); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <th>Percentange</th>
                          <td><?php echo e($percentage); ?>%</td>
                        </tr>
                    </table><br>
                  <center><h3 class="text-success">Attendance Date</h3></center><br>
                  
                  <table class="table table-hover table-striped">
                    
                       <tr>
                           <th>Date</th>
                           <th>Present/Absent</th>
                        </tr>
                   <?php $__currentLoopData = $attend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e($att->date); ?></td>
                           <?php if($att->attendance==1): ?>
                           <td>P</td>
                           <?php else: ?>
                             <td>A</td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    
                  <?php else: ?>
                  <h3>no attendance yet!</h3>
                  <?php endif; ?>
        
  
                    </div>
                    <div class="col-md-2"></div>

</div>
</div><br><br><br><br>
 <?php $__env->stopSection(); ?>
 <!-- <h3><?php echo e(\Auth::user()->name); ?></h3>
<?php echo e($cur_date=date('y-m-d')); ?>

   <a href="<?php echo e(route('shome')); ?>">Home</a>
  <ul>
    
        <?php if($attends): ?>         
    <?php $__currentLoopData = $attends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
               
        <p>Present:<?php echo e($att->codecount); ?></p>
                  
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>       
         
         <?php $__currentLoopData = $abss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $abss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
               
        <p>Absent:<?php echo e($abss->abcount); ?></p>
                  
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
         <p>Total class:<?php echo e($total_count); ?></p>
         <?php $__currentLoopData = $attend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
               
       <h4> <?php echo e($att->code); ?>

        <?php echo e($att->date); ?>  
        <?php if($att->attendance==1): ?>
           P
        <?php else: ?>
            A
       <?php endif; ?>   
    </h4>

                  
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          <?php echo e($percentage); ?> 
   <?php endif; ?>
  </ul> -->
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>