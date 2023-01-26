 
 <?php $__env->startSection('content'); ?>
<center><h3>CT Marks</h3></center><br>

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
                              <a href="<?php echo e(route('teachercourseshow',\Auth::user()->code)); ?>" class="text-warning"><li class="list-group-item list-group-item-warning">All Courses</li></a></ul>

                              
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
        <?php if($tcourses): ?>               
        <table>
         <form class="form-horizontal" accept-charset="UTF-8" action="<?php echo e(route('ct.store')); ?>" enctype="multipart/form-data" method="POST">
                    <tr>
                        <th>Roll</th>
                        <th>CT1</th>
                        <th>CT2</th>
                        <th>CT3</th>
                        <th>CT4</th>
                        <th>Average</th>
         
                    </tr>
                  
                    
                        <?php ($i=1); ?>
        <?php $__currentLoopData = $tcourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
              
                  <?php echo e(csrf_field()); ?>

                 <input type="hidden" id="section" value="<?php echo e($course->section); ?>" name="section"  class="form-control">
                  <input type="hidden" id="semester" value="<?php echo e($course->semester); ?>" name="semester"  class="form-control">
                  <input type="hidden" id="course1" value="<?php echo e($course->course1); ?>" name="course1"  class="form-control">
                 
                
                    <tr>
                        
                        <td>
                        <input type="text" id="code" value="<?php echo e($course->code); ?>" name="course_code[]" placeholder="code" class="form-control"></td>
                        <td><input type="text" id="ct1" value="0" name="ct1[]" placeholder="0" class="form-control"></td>
                        <td><input type="text" id="ct2" value="0" name="ct2" placeholder="0" class="form-control"></td>
                        <td><input type="text" id="ct3" value="0" name="ct3" placeholder="0" class="form-control"></td>
                        <td><input type="text" id="ct4" value="0" name="ct4" placeholder="0" class="form-control"></td>
                        <td><input type="text" id="average" value="0" name="average" placeholder="0" class="form-control"></td>
                        
                    </tr>
                 
                 

   
    
    <?php ($i++); ?>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <input type="hidden" name="num_rows" value="<?php echo e($i-1); ?>">
      <input type="submit" value="Add" class="btn btn-success"><br><br>   
      </form>
      </table>
      <?php endif; ?>
    
                    </div>
                    <div class="col-md-2"></div>

</div>
</div>
 <?php $__env->stopSection(); ?>
 
    
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>