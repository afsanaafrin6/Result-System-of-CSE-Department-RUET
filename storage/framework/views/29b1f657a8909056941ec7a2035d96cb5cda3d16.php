 
 <?php $__env->startSection('content'); ?>
 <center><h3>Attendance </h3></center><br>

  <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h3 class="panel-title">To Do...</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                               
                              <a href="<?php echo e(route('edit',\Auth::user()->id)); ?>" class="text-danger"><li class="list-group-item list-group-item-danger">Edit Profile</li></a>
                              <a href="<?php echo e(route('teachercourses.create')); ?>" class="text-info"><li class="list-group-item list-group-item-info">Add Course</li></a>
                              <a href="<?php echo e(route('teachercourseshow',\Auth::user()->code)); ?>" class="text-warning"><li class="list-group-item list-group-item-warning">All Courses</li></a>
                        </ul>
                              
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                      <div class="table">

                               <table class="table table-hover table-striped">
                                    <?php if($attends): ?>          
                                      
                                    <tr>
                                        <!-- <th class="success">Course</th> -->
                                        <th class="success">Date</th>
                                        <th class="success">Roll</th>
                                        <th class="success">Attendance</th>
                                        
                                    </tr>
                                    <?php $__currentLoopData = $attends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attends): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- <td><?php echo e($attends->course1); ?></td> -->
                                        <td><?php echo e($attends->date); ?></td>
                                        <td><?php echo e($attends->code); ?></td>
                                         <?php if( $attends->attendance==1 ): ?>
                                        <td>P</td>
                                         <?php else: ?>
                                         <td>A</td>
                                          <?php endif; ?>
                                    </tr>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                            </table>
                        </div>
                        <form class="form-horizontal" accept-charset="UTF-8" action="<?php echo e(route('showdate',['course1'=>$attends->course1])); ?>" method="GET" > 
      <input type="text" id="date"  name="date" placeholder="date y-m-d" class="form-control"><br> 
       <input type="submit" value="Add" class="btn btn-primary"> </form>
      <br>
        <form class="form-horizontal" accept-charset="UTF-8" action="<?php echo e(route('showcode',['course1'=>$attends->course1])); ?>" method="GET" >  
          
      <input type="text" id="code"  name="code" placeholder="code" class="form-control"><br>
       <input type="submit" value="Add" class="btn btn-primary"> </form>

        <?php else: ?>
         <h1>no attendance yet</h1>
        <?php endif; ?> 
                    </div>
                    <div class="col-md-2"></div>

</div>
</div>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>