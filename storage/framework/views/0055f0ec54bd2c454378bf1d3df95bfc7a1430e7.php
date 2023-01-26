 
 <?php $__env->startSection('content'); ?>
 <center><h3><?php echo e(\Auth::user()->name); ?></h3></center><br>

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
                                <thead>
                                    <tr>
                                        <th class="success">Teacher ID</th>
                                        <td><?php echo e(\Auth::user()->code); ?></td>
                                    </tr>
                                    <tr>
                                        <th class="success">Name</th>
                                        <td><?php echo e(\Auth::user()->name); ?></td>
                                    </tr>
                                    <tr>
                                        <th class="success">Email</th>
                                        <td><?php echo e(\Auth::user()->email); ?></td>
                                    </tr>
                                    <tr>
                                        <th class="success">Department</th>
                                        <td><?php echo e(\Auth::user()->department); ?></td>
                                    </tr>
                                    <tr>
                                        <th class="success">Phn/Mobile No.</th>
                                        <td><?php echo e(\Auth::user()->phoneno); ?></td>
                                    </tr>
                                    <tr>
                                        <th class="success">Contact Address</th>
                                        <td><?php echo e(\Auth::user()->contactaddress); ?></td>
                                    </tr>
                                 
                                   <tr>
                                        <th class="success">Blood group</th>
                                        <td><?php echo e(\Auth::user()->bloodgroup); ?></td>
                                    </tr>
                                   
                                    
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-2"></div>

</div>
</div>
	
 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>