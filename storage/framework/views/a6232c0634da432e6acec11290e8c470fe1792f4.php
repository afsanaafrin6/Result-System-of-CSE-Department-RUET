 
 

<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
          <center><h2>Sign Up</h2><br></center>
        <?php if(count($errors)): ?>
          <div class"alert alert-danger">
            <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li><?php echo e($error); ?></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

          </div>
          <?php endif; ?>
        <?php echo Form::open(array('route' =>'users.store')); ?>



<div class="form-group">
<?php echo Form::label('name', 'Name:'); ?>

<?php echo Form::text('name',$value = null, array('class' =>'form-control', 'placeholder'=>'Name')); ?></div>
<div class="err">
<?php if($errors->has('name')): ?> 
      <ul>
         <li><?php echo e($errors->first('name')); ?>  </li>
      </ul>               
  <?php endif; ?> 
</div>
<div class="form-group">
<?php echo Form::label('email', 'Email:'); ?>

<?php echo Form::email('email',$value = null, array('class' =>'form-control', 'placeholder'=>'Email')); ?></div>
<div class="err">
<?php if($errors->has('email')): ?> 
      <ul>
         <li><?php echo e($errors->first('email')); ?>  </li>
      </ul>               
  <?php endif; ?>
</div>
<!-- <div class="form-group">
<?php echo Form::label('department', 'Department:'); ?>

<?php echo Form::text('department',$value = null, array('class' =>'form-control', 'placeholder'=>'Department')); ?></div> -->
<div class="form-group">
                            <label for="department">Department: </label>
                            <select name="department" id="department">
                            <option value="CSE"> CSE </option>
                            <option value="EEE"> EEE </option>
                            <option value="ETE"> ETE</option>
                            <option value="ECE"> ECE </option>
                            <option value="CE"> CE </option>
                            <option value="GCE"> GCE </option>
                            <option value="URP"> URP </option>
                            <option value="IPE"> IPE </option>
                            <option value="ME"> ME </option>
                            <option value="MTE"> MTE </option>
                            <option value="ARCH"> ARCH </option>
                            
                          </select>
                          </div>

<div class="form-group">
<?php echo Form::label('code', 'Code:'); ?>

<?php echo Form::text('code',$value = null, array('class' =>'form-control', 'placeholder'=>'Code')); ?></div>
<div class="err">
<?php if($errors->has('code')): ?> 
      <ul>
         <li ><?php echo e($errors->first('code')); ?>  </li>
      </ul>               
  <?php endif; ?>
</div>
<!-- <div class="form-group">
<?php echo Form::label('field', 'Field:'); ?>

<?php echo Form::text('field',$value = null, array('class' =>'form-control', 'placeholder'=>'field')); ?></div> -->
<div class="form-group">
                            <label for="field">Role</label>
                            <select name="field" id="field">
                            <option value="t"> Teacher </option>
                            <option value="s"> Student </option>
                            </select>
                          </div>
<div class="err">
<?php if($errors->has('field')): ?> 
      <ul>
         <li><?php echo e($errors->first('field')); ?>  </li>
      </ul>               
  <?php endif; ?>
</div>
<!-- <div class="form-group"> 
<?php echo Form::label('password'); ?><br>
<?php echo Form::password('password',null,array('class'=>'form-control' )); ?>

</div> -->
<div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
<div class="err">
<?php if($errors->has('password')): ?> 
      <ul>
         <li><?php echo e($errors->first('password')); ?>  </li>
      </ul>               
  <?php endif; ?>
</div>
<?php echo Form::token(); ?>

<?php echo Form::submit('Sign Up', array('class' => 'btn btn-success')); ?>

<?php echo Form::close(); ?>




    </div>
    <div class="col-md-2"></div>
    
  </div>

</div><br><br>
<br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>