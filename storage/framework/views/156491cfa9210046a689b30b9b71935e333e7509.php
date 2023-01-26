 
 <?php $__env->startSection('content'); ?>
<center><h3>ADD COURSE(S)</h3><br></center>
    <!-- <ul>
        
         <li>
         <?php echo e(\Auth::user()->code); ?>

          <a href="<?php echo e(route('shome')); ?>">Home</a>
         
    </li>
    </ul> -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

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
                              <!-- <a href="<?php echo e(route('teachercourses.create')); ?>" class="text-info"><li class="list-group-item list-group-item-info">Add Course</li></a> -->
                              <a href="<?php echo e(route('teachercourseshow',\Auth::user()->code)); ?>" class="text-warning"><li class="list-group-item list-group-item-warning">All Courses</li></a></ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                              <form class="form-horizontal" accept-charset="UTF-8" action="<?php echo e(route('teachercourses.store')); ?>" method="POST">
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        
        <br/>
        <div class="form-inline">
                <!-- <input type="hidden" id="code" value="<?php echo e(\Auth::user()->code); ?>" name="rows[code]" placeholder="code" class="form-control">
                 
                 <input type="hidden" id="field" value="<?php echo e(\Auth::user()->field); ?>" name="rows[field]" placeholder="field" class="form-control field"> -->
                 <div class="form first">
                 <div class="form-group">
                <input type="hidden" class="form-control" name="rows[0][code]" value="<?php echo e(\Auth::user()->code); ?>" placeholder="code"/>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="rows[0][field]" value="<?php echo e(\Auth::user()->field); ?>" placeholder="field" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="rows[0][section]" placeholder="section"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="rows[0][semester]" placeholder="semester"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="rows[0][course1]" placeholder="course"/>
            </div>
            <div class="form-group">
                <input type="button" value="ADD" class="btn btn-success" onclick="createNew()" />
            </div>
            </div>
            <div id="mydiv"></div>
        </div>

        <br/>

        <div class="form-group">
            <input type="submit" value="Add All" class="btn btn-success">
            <a href="" class="btn btn-default">Cancel</a>
        </div>
        <!-- <?php echo e(Form::close()); ?> -->
                    </div>
                    <div class="col-md-2"></div>

</div>
</div>
    



<script>
    var i = 2;

    function createNew() {
        $("#mydiv").append('<div class="form-group">'+'<input type="hidden" name="rows[' + i +'][code]" value="<?php echo e(\Auth::user()->code); ?>" class="form-control" placeholder="code"/>'+'</div>'+
            '<div class="form-group">'+'<input type="hidden" name="rows[' + i +'][field]" value="<?php echo e(\Auth::user()->field); ?>" class="form-control" placeholder="field"/>'+'</div>'+
            '<div class="form-group">'+'<input type="text" name="rows[' + i +'][section]" class="form-control" placeholder="section"/>'+'</div>'+
                '</div>'+'<div class="form-group">'+'<input type="text" name="rows[' + i +'][semester]" class="form-control" placeholder="semester"/>'+'</div>'+'<div class="form-group">'+'<input type="text" name="rows[' + i +'][course1]" class="form-control" placeholder="course "/>'+'</div>'+'<div class="form-group">'+
                '<input type="button" name="" class="btn btn-success" value="ADD" onclick="createNew()" />'+
                '</div><br/>');
        i++;
    }
</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>