 
 <?php $__env->startSection('content'); ?>
<center><h3 class="text-success">All Courses</h3></center><br>
   <!-- <a href="<?php echo e(route('shome')); ?>">Home</a> -->
   <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h3 class="panel-title">To Do...</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                              <a href="<?php echo e(route('shome')); ?>" class="text-danger"><li class="list-group-item list-group-item-danger">View Profile</li></a>
                              <a href="<?php echo e(route('edit',\Auth::user()->id)); ?>" class="text-success"><li class="list-group-item list-group-item-success">Edit Profile</li></a>
                              <a href="<?php echo e(route('teachercourses.create')); ?>" class="text-info"><li class="list-group-item list-group-item-info">Add Course</li></a></ul>
                              <!-- <a href="<?php echo e(route('teachercourseshow',\Auth::user()->code)); ?>" class="text-warning"><li class="list-group-item list-group-item-warning">All Courses</li></a></ul> -->
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                      <div class="table">
                      <table class="table table-hover table-striped">
                      
                       <tr>
                        <th>Course</th>
                        <th>update</th>
                        <th>Delete</th>
                        <th>Ct Marks</th>
                        <th>Attendance</th>
                        <th>Marks</th>
                        <th>Attendance Show </th>
                       </tr>
                     
                <?php $__currentLoopData = $tcourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                   
                   <td style="color: green;font-weight: bold;"><?php echo e($course->course1); ?></td>
                         <td>
                            <a href="<?php echo e(route('teachercourseedit',$course->id)); ?>">Update</a>
                           </td>

                         <td><a href="<?php echo e(route('teachercoursed',$course->id)); ?>">delete</a></td>


                         <td><a href="<?php echo e(route('ctmarks',['course1'=>$course->course1,'section'=>$course->section,'id'=>$course->id])); ?>">Ct Marks </a></td>
                    <td><a href="<?php echo e(route('attendances',['course1'=>$course->course1,'section'=>$course->section,'id'=>$course->id])); ?>">Attendance  </a></td>
                    <td><a href="<?php echo e(route('marks',['course1'=>$course->course1,'section'=>$course->section,'id'=>$course->id])); ?>">Marks  </a></td>
                    <td><a href="<?php echo e(route('attend',['course1'=>$course->course1,'section'=>$course->section,'id'=>$course->id])); ?>">Attendance Show </a></td>

                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                 
                 </table>
                 </div> 
                    </div>
                    <div class="col-md-2"></div>

</div>
</div>
  
  
  
 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>