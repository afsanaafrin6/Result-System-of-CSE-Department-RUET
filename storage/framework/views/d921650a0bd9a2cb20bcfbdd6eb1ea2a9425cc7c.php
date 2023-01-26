 
 <?php $__env->startSection('content'); ?>
<!-- <h3><?php echo e(\Auth::user()->name); ?></h3>
<?php echo e($cur_date=date('y-m-d')); ?>

   <a href="<?php echo e(route('home')); ?>">Home</a> -->
<center><h3>Attendance</h3></center><br>

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
                          <ul>
    
    <table>
                 <tr>
                        <th>Roll</th>
                        
                        
                        <th style="padding-left:10px;">Attendance</th>
         
                      </tr>  
               
                  <form class="form-horizontal" accept-charset="UTF-8" action="<?php echo e(route('studentattend.store')); ?>" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                    <?php ($i=0); ?>
                    <!-- <input type="text" id="cycle"  name="cycle[]" placeholder="cycle" class="form-control"> -->

                            <label for="cycle">Cycle</label>
                            <select name="cycle[]" id="cycle" >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>

                                </select>
                                <label for="day" style="margin-left: 10px;">Day</label>
                            <select name="day[]" id="day" >
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    
                                </select>
                              <br><br>
                    <input type="text" id="date"  name="date[]" placeholder="date y-m-d" class="form-control">
                <?php $__currentLoopData = $tcourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
              
                  <?php echo e(csrf_field()); ?>

                
                <tbody>
                  <tr>
                      <input type="hidden" id="semester" value="<?php echo e($course->semester); ?>" name="semester"  class="form-control">
                  <input type="hidden" id="course1" value="<?php echo e($course->course1); ?>" name="course1"  class="form-control">
                  <input type="hidden" id="section" value="<?php echo e($course->section); ?>" name="section"  class="form-control">
                  
                    <td>
                        <input type="text" id="code" value="<?php echo e($course->code); ?>" name="code[]" placeholder="code" class="form-control"></td>
                        
                    <td>
                            <input type="radio"  value="1" name="attendance[<?php echo e($i); ?>]" checked style="margin-left: 10px;">P
                            <input type="radio"  value="0" name="attendance[<?php echo e($i); ?>]" style="margin-left: 10px;">A
                            <!-- <select name="attendance[]" id="attendance">
                                   <option value="1">P</option>
                                   <option value="0">A</option>
                                   
                            </select> -->
                        </td>
                    
                    
                  </tr>
                </tbody> 
                 

    
    
    <?php ($i++); ?>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <input type="hidden" name="num_rows" value="<?php echo e($i); ?>">
      <input type="submit" value="Add" class="btn btn-success"><br><br> 
      </div>  
      </form>
      </table> 
  </ul>
                    </div>
                    <div class="col-md-2"></div>

</div>
</div>

	
 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>