<?php $__env->startSection('content'); ?>

<center><h2>Update Profile</h2></center><br>

<div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h3 class="panel-title">To Do...</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                              <?php if(\Auth::user()->field=='s'): ?>
                              <a href="<?php echo e(route('shome')); ?>" class="text-danger"><li class="list-group-item list-group-item-danger">View Profile</li></a>
                              
                              
                              <a href="<?php echo e(route('teachercourses.index')); ?>" class="text-info"><li class="list-group-item list-group-item-info">Add Course</li></a>
                              <a href="<?php echo e(route('teachercourseshow',\Auth::user()->code)); ?>" class="text-warning"><li class="list-group-item list-group-item-warning">All Courses</li></a>
                              
                              <a href="<?php echo e(route('studentcgpashow',\Auth::user()->code)); ?>" class="text-success"><li class="list-group-item list-group-item-success">View Result</li></a>
                              <?php else: ?>
                              <a href="<?php echo e(route('home')); ?>" class="text-success"><li class="list-group-item list-group-item-success">View Profile</li></a>
                              
                              <a href="<?php echo e(route('teachercourses.create')); ?>" class="text-info"><li class="list-group-item list-group-item-info">Add Course</li></a>
                              <a href="<?php echo e(route('teachercourseshow',\Auth::user()->code)); ?>" class="text-warning"><li class="list-group-item list-group-item-warning">All Courses</li></a>
                              <?php endif; ?>
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                    	<form class="form-horizontal" accept-charset="UTF-8" action="<?php echo e(route('update',\Auth::user()->id)); ?>" method="POST">
											  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
											<div class="form-group">
											<label for="name">Name:</label>
											<input type="text" id="name" value="" name="name" placeholder="User Name" class="form-control">
											</div>
											<div class="form-group">
											<label for="email">Email:</label>
											<input type="email" id="email" name="email" placeholder="Email Address" class="form-control">
											</div>
                                            
                                            <div class="form-group">
											<label for="phoneno">Phone/Mobile No:</label>
											<input type="phoneno" id="phoneno" name="phoneno" placeholder="PhoneNo" class="form-control">
											</div>

											<div class="form-group">
											<label for="contactaddress">Contact Address:</label>
											<input type="contactaddress" id="contactaddress" name="contactaddress" placeholder="Contact Address" class="form-control">
											</div>

											<!-- <div class="form-group">
											<label for="email">Blood Group:</label>
											<input type="bloodgroup" id="bloodgroup" name="bloodgroup" placeholder="Blood Group" class="form-control">
											</div> -->

											<div class="form-group">
                            <label for="bloodgroup">Blood Group</label>
                            <select name="bloodgroup" id="bloodgroup" >
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                          </div>
											<input type="submit" value="Update" class="btn btn-success">
</form>
                    </div>
                    <div class="col-md-2"></div>

</div>
</div>
<br><br>
<br><br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>