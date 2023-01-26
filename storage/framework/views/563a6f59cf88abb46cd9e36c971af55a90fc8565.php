 
 <?php $__env->startSection('content'); ?>
<center><h3 class="text-success">CT Marks  </h3></center><br>
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

                              <a href="<?php echo e(route('studentcgpashow',\Auth::user()->code)); ?>" class="text-success"><li class="list-group-item list-group-item-success">View Result</li></a></ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                      
                    <?php if($cts): ?>
                    <table class="table table-hover table-striped">
                    	
                       
                       	<tr>
                       		<th>CT1</th>
                       		<td><?php echo e($cts->ct1); ?></td>
                       	</tr>
                       	<tr>
                       		<th>CT2</th>
                       		<td><?php echo e($cts->ct2); ?></td>
                       	</tr>
                       <tr>
                       		<th>CT3</th>
                       		<td><?php echo e($cts->ct3); ?></td>
                       	</tr>
                       	<tr>
                       		<th>CT4</th>
                       		<td><?php echo e($cts->ct4); ?></td>
                       	</tr>
                       	<tr>
                       		<th>Average</th>
                       		<td><?php echo e($cts->average); ?></td>
                       	</tr>
                       	
                    </table>

                  <?php else: ?>
                  <h3>no Marks here!</h3>
                  <?php endif; ?>
        
  
                    </div>
                    <div class="col-md-2"></div>

</div>
</div>


 <?php $__env->stopSection(); ?>
 
<!-- <h3><?php echo e(\Auth::user()->name); ?></h3>
   <a href="<?php echo e(route('shome')); ?>">Home</a>
	<ul>
		<li><?php echo e(\Auth::user()->code); ?></li>
		<?php if($cts): ?>
		<li>CT1:<?php echo e($cts->ct1); ?></li>
		<li>CT2:<?php echo e($cts->ct2); ?></li>
		<li>CT3:<?php echo e($cts->ct3); ?></li>
		<li>CT4:<?php echo e($cts->ct4); ?></li>
		<li>Average:<?php echo e($cts->average); ?></li>
        <?php endif; ?>
	</ul> -->
	

 
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>