 
 <?php $__env->startSection('content'); ?>
<center><h3 class="text-success">Course Update</h3></center><br>
	<!-- <ul>
		
		 <li>
         <?php echo e(\Auth::user()->code); ?>

          <a href="<?php echo e(route('shome')); ?>">Home</a>
         
    </li>
	</ul> -->


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
                             <table>
                  
                  <form class="form-horizontal" accept-charset="UTF-8" action="<?php echo e(route('teachercourseupdate',$tcourses->id)); ?>" method="POST">
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    
                       <tr>
                        
                        <td>Semester</td>
                        <td>Section</td>
                        <td>Course</td>

                        
                        
                       </tr>
                
                  <tr>
                  
                         <td>
                         <input type="text" id="semester" value="<?php echo e($tcourses->semester); ?>" name="semester" placeholder="semester" class="form-control">
                           </td>

                         <td><input type="text" id="section" value="<?php echo e($tcourses->section); ?>" name="section" placeholder="section" class="form-control"></td>


                         <td><input type="text" id="course1" value="<?php echo e($tcourses->course1); ?>" name="course1" placeholder="course" class="form-control"></td>
                    
                    
                    
                  </tr>
                 
                 </table> 
                 <br>
   <input type="submit" value="Update Course" class="btn btn-success">
</form>
                    </div>
                    <div class="col-md-2"></div>

</div>
</div>
    


	


 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>