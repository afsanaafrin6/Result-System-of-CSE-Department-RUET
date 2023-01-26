 
 

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
					<center><h2>Login</h2><br></center>
				<?php if(count($errors)): ?>
				  <div class"alert alert-danger">
				  	<ul>
				  		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  		 <li><?php echo e($error); ?></li>
				  		 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  	</ul>

				  </div>
				  <?php endif; ?>
				<?php echo Form::open(array('route' =>'handlelogin')); ?>


				
				<div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
				<?php echo Form::token(); ?>

				<?php echo Form::submit('Log In', array('class' => 'btn btn-success')); ?>

				<?php echo Form::close(); ?>




		</div>
		<div class="col-md-2"></div>
		
	</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>