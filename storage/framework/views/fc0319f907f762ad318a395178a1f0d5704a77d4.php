 
 <?php $__env->startSection('content'); ?>

   <script src="<?php echo e(asset('js/app.js')); ?>"></script>
	<center><h3> CT Marks </h3></center><br>

  <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h3 class="panel-title">To Do...</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                                <a href="<?php echo e(route('home')); ?>" class="text-success"><li class="list-group-item list-group-item-success">View Profiles</li></a>
                               
                              <a href="<?php echo e(route('edit',\Auth::user()->id)); ?>" class="text-danger"><li class="list-group-item list-group-item-danger">Edit Profile</li></a>
                              <a href="<?php echo e(route('teachercourses.create')); ?>" class="text-info"><li class="list-group-item list-group-item-info">Add Course</li></a>
                              <a href="<?php echo e(route('teachercourseshow',\Auth::user()->code)); ?>" class="text-warning"><li class="list-group-item list-group-item-warning">All Courses</li></a>

                             </ul> 
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                       
    <table>
      <form class="form-horizontal" accept-charset="UTF-8" action="<?php echo e(route('ctupdate')); ?>" enctype="multipart/form-data" method="POST">
                 
                  <tr>
                    <th>Roll</th>
                    <th>CT1</th>
                    <th>CT2</th>
                    <th>CT3</th>
                    <th>CT4</th>
                    <th>Average</th>
         
                  </tr>
                  

                  
                    <?php ($i=1); ?>
    <?php $__currentLoopData = $cts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
              
                  <?php echo e(csrf_field()); ?>

                  <input type="hidden" id="id" value="<?php echo e($ct->id); ?>" name="id[]"  class="form-control">
                 <input type="hidden" id="section" value="<?php echo e($ct->section); ?>" name="section"  class="form-control">
                  <input type="hidden" id="semester" value="<?php echo e($ct->semester); ?>" name="semester"  class="form-control">
                  <input type="hidden" id="course1" value="<?php echo e($ct->course1); ?>" name="course1"  class="form-control">
                  <input type="hidden" id="boardviva" value="<?php echo e($ct->boardviva); ?>" name="boardviva" placeholder="0" class="form-control">
                  <input type="hidden" id="exam" value="<?php echo e($ct->exam); ?>" name="exam" placeholder="0" class="form-control">
                  
                 <tbody>
                  <tr>
                    
                    <td>
                        <input type="text" id="code" value="<?php echo e($ct->code); ?>" name="ct_code[]" placeholder="code" class="form-control"></td>
                    <td><input type="text" id="ct1" value="<?php echo e($ct->ct1); ?>" name="ct1[]" placeholder="0" class="form-control ct1"></td>
                    <td><input type="text" id="ct2" value="<?php echo e($ct->ct2); ?>" name="ct2[]" placeholder="0" class="form-control ct2"></td>
                    <td><input type="text" id="ct3" value="<?php echo e($ct->ct3); ?>" name="ct3[]" placeholder="0" class="form-control ct3"></td>
                    <td><input type="text" id="ct4" value="<?php echo e($ct->ct4); ?>" name="ct4[]" placeholder="0" class="form-control ct4"></td>
                        
                    <td><input type="text" id="average" value="<?php echo e($ct->average); ?>" name="average[]" placeholder="0" class="form-control average"></td>
                    
                  </tr>
                 </tbody>
                

    
    
    <?php ($i++); ?>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <input type="hidden" name="num_rows" value="<?php echo e($i-1); ?>">
      <input type="submit" value="Add" class="btn btn-success"><br><br> 
      </form>
  </table>
                    </div>
                    <div class="col-md-2"></div>

</div>
</div>

  <script>
      
      $('tbody').delegate('.ct1,.ct2,.ct3,.ct4','keyup',function(){
           var tr=$(this).parent().parent();
           var ct1=tr.find('.ct1').val();
           var ct2=tr.find('.ct2').val();
           var ct3=tr.find('.ct3').val();
           var ct4=tr.find('.ct4').val();
           var av=[ct1,ct2,ct3,ct4];
           av.sort(function(a,b){return b-a});
           var aver=parseInt(av[0])+parseInt(av[1])+parseInt(av[2]);
           var ave=parseInt(aver)/3;
           var average=Math.ceil(ave);
           if(average-ave>.5)
            {average=average-1;
              //document.write(average);
            }

            tr.find('.average').val(average);
      });

  </script>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>