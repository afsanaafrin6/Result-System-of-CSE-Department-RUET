 
 <?php $__env->startSection('content'); ?>
<center><h3 class="text-success">Result</h3></center><br>
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
                              <a href="<?php echo e(route('teachercourses.index')); ?>" class="text-info"><li class="list-group-item list-group-item-info">Add Course</li></a>
                              <a href="<?php echo e(route('teachercourseshow',\Auth::user()->code)); ?>" class="text-warning"><li class="list-group-item list-group-item-warning">All Courses</li></a>

                              <!-- <a href="<?php echo e(route('studentcgpashow',\Auth::user()->code)); ?>" class="text-success"><li class="list-group-item list-group-item-success">View Result</li></a></ul> -->
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                      
    
        <?php if($cts): ?>  
        <table class="table table-hover table-striped">
                      
                       <tr>
                        <th>Course</th>
                        <th>Grade Point</th>
                        <th>Letter Grade</th>
                        
                        
                        
                       </tr>       
        <?php $__currentLoopData = $cts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
               <?php if( $att->totalmarks>=80): ?>
               <td><?php echo e($att->course1); ?></td>
               <td>4.0</td>
               <td>A+</td>
               <?php elseif( $att->totalmarks<80 && $att->totalmarks>=75): ?>
               <td><?php echo e($att->course1); ?></td>
               <td>3.75</td>
               <td>A</td>
               
                <?php elseif( $att->totalmarks<75 && $att->totalmarks>=70): ?>
                  <td><?php echo e($att->course1); ?></td>
               <td>3.5</td>
               <td>A-</td>
               <?php elseif( $att->totalmarks<70 && $att->totalmarks>=65): ?>
                 <td><?php echo e($att->course1); ?></td>
               <td>3.25</td>
               <td>B+</td>
               <?php elseif( $att->totalmarks<65 && $att->totalmarks>=60): ?>
                  <td><?php echo e($att->course1); ?></td>
               <td>3.0</td>
               <td>B</td>
               <?php elseif( $att->totalmarks<60 && $att->totalmarks>=55): ?>
                  <td><?php echo e($att->course1); ?></td>
               <td>2.75</td>
               <td>B-</td>
               <?php elseif( $att->totalmarks<55 && $att->totalmarks>=50): ?>
                  <td><?php echo e($att->course1); ?></td>
               <td>2.5</td>
               <td>c+</td>
               <?php elseif( $att->totalmarks<50 && $att->totalmarks>=45): ?>
               <td><?php echo e($att->course1); ?></td>
               <td>2.25</td>
               <td>c</td>
               <?php elseif( $att->totalmarks<45 && $att->totalmarks>=40): ?>
                 <td><?php echo e($att->course1); ?></td>
               <td>2.0</td>
               <td>D</td>
               <?php elseif( $att->totalmarks<40): ?>
               <td><?php echo e($att->course1); ?></td>
               <td>0</td>
               <td>F</td>
               



               <?php endif; ?>   
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </table>       
         <?php else: ?>
        <h3>no result here!</h3>

         <?php endif; ?>     
             
        
  
                    </div>
                    <div class="col-md-2"></div>

</div>
</div>


 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>