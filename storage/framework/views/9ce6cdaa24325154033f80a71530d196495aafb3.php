<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
   <!--  <link rel="stylesheet" href="<?php echo e(asset('css/animated.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>"> -->
    

<?php echo Html::script('resources/assets/invoice/js/bootstrap.js'); ?>

<?php echo Html::script('resources/assets/invoice/js/bootstrap.min.js'); ?>

<?php echo Html::script('resources/assets/invoice/js/jquery.min.js'); ?>

<?php echo Html::script('resources/assets/invoice/js/npm.js'); ?>

<!-- <script src="<?php echo e(asset('assets/invoice/js/bootstrap.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/invoice/js/bootstrap.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/invoice/js/jquery.min.js')); ?>" type="text/javascript"></script>-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RUET</title>
    <link rel="icon" type="images/png" href="/img/ruet-monogram-5846x7000.png">
    
    <!-- <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/animated.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('font-awesome-4.7.0/css/font-awesome.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('bootstrap-3.3.7-dist/css/animated.css')); ?>">

   
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <!-- <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->
     <script src="<?php echo e(asset('bootstrap-3.3.7-dist/js/bootstrap.min.js')); ?>"></script>
</head>
<body>
<div class="fullbody">
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
              <div class="col-xs-2"><img src="/img/ruet-monogram-5846x7000.png" alt="ruet-monogram"></div>
              <div class="col-xs-10">Heaven's Light is Our Guide</div>
          </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i> Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i>
 Menu <span class="caret"></span></a>
              
               
              
  <ul class="dropdown-menu"> 
    <?php if(\Auth::check()): ?>
    <li>
      <?php echo e(link_to_route('logout','Logout')); ?>

    </li>
    <?php else: ?>
    <li>
      <?php echo e(link_to_route('login','Login')); ?>

    </li>
    <?php endif; ?>
    <li>
      <?php echo e(link_to_route('users.create','Sign Up')); ?>

    </li>

   
  </ul>



            </li>
            
            
            
            <li>
                 <p id="clock"></p>
                 <p id="date"></p>

                 <script type="text/javascript">

                 function clock()
                 {
                   var date=new Date();
                   var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                   var months = ["Jan","Feb","March","April","May","June","July","August","September","October","November","December"];
                   var hhour=date.getHours();
                   var hour=hhour;
                   hour=date.getHours()%12;
                   var minute=date.getMinutes();
                   var second=date.getSeconds();

                   minute = checkTime(minute);
                   second = checkTime(second);
                    var t = check(hhour);

                   document.getElementById('clock').innerHTML=hour+":"+minute+":"+second+" "+t;
                   document.getElementById('date').innerHTML=days[date.getDay()]+", "+date.getUTCDate()+"-"+months[date.getUTCMonth()]+"-"+date.getUTCFullYear();
                }

                function checkTime(i)
                {
                    if(i<10)
                    {
                       i="0"+i;
                    }


                    return i;
                }
                     function check(i)
                     {
                         if(i>=12)
                             i="PM";
                         else
                             i="AM";
                         return i;
                     }

                 setInterval(clock,1000);

                 </script>
                
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="jumbotron">
        <div class="container">
            <div class="details animated fadeInLeft">
                <h2>Department of Computer Science & Engineering</h2>
                <p>Rajshahi University of Engineering & Technology</p>
            </div>
        </div>
        <img src="/img/bg.jpg" alt="background">
    </div>

    <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                       
                       
                        
                        
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-road"></i> Contact</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                              <li class="list-group-item list-group-item-active"><i class="fa fa-address-book" aria-hidden="true"></i>
<span> Mailing Address:</span> Registrar, Rajshahi University of Engineering & Technology, Kazla, Rajshahi-6204, Bangladesh.</li>
                              <li class="list-group-item list-group-item-success"><i class="fa fa-fax" aria-hidden="true"></i>
<span> Fax:</span> +88 (0721) 750105</li>
                              <li class="list-group-item list-group-item-warning"><i class="fa fa-phone" aria-hidden="true"></i>
<span> (Ph) PABX:</span> +88 (721) 750742-3, 751320-1</li>
                              <li class="list-group-item list-group-item-danger"><i class="fa fa-at" aria-hidden="true"></i>
<span> Website:</span> www.ruet.ac.bd</li>
                              <li class="list-group-item list-group-item-info"><i class="fa fa-envelope" aria-hidden="true"></i>
<span> E-mail:</span> registrar@ruet.ac.bd</li>
                            </ul>
                          </div>
                        </div>
                        
                    </div>
                    <div class="col-md-9">
                      
                      <div class="panel panel-success">
                          <div class="panel-heading">
                            <h3 class="panel-title">Department of Computer Science & Engineering</h3>
                          </div>
                          <div class="panel-body">
                            Computer engineering is a discipline that integrates several fields of electrical engineering and computer science required to develop computer hardware and software. Computer engineers are involved in many hardware and software aspects of computing, from the design of individual microprocessors, personal computers, and supercomputers, to circuit design.Computer engineering is a discipline that integrates several fields of electrical engineering and computer science required to develop computer hardware and software. Computer engineers are involved in many hardware and software aspects of computing, from the design of individual microprocessors, personal computers, and supercomputers, to circuit design
                            
                          </div>
                          <!--<a href="#" class="btn btn-success">See All News</a>-->
                        </div>
                      
                      <div class="row">
                          <div class="col-md-8">
                           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img src="/img/pic6.jpeg" alt="picture 1">
                                  <div class="carousel-caption">
                                    picture 1
                                  </div>
                                </div>
                                <div class="item">
                                  <img src="/img/pic2.jpg" alt="picture 2">
                                  <div class="carousel-caption">
                                    picture 2
                                  </div>
                                </div>
                                <div class="item">
                                  <img src="/img/pic3.jpg" alt="picture 3">
                                  <div class="carousel-caption">
                                    picture 3
                                  </div>
                                </div>
                              </div>
                              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                       </div>
                       <div class="col-md-4">
                           <div class="panel panel-success">
                          <div class="panel-heading">
                            <h3 class="panel-title">Head of the Department of Computer Science & Engineering</h3>
                          </div>
                          <div class="panel-body">
                            <div class="thumbnail">
                              <img src="/img/unknown.png" alt="Head of the Department of Computer Science & Engineering">
                              <div class="caption">
                                <h4>Dr. Md. Rabiul Islam</h4>
                                <p><a href="#" class="btn btn-success" role="button">Details</a></p>
                              </div>
                            </div>
                          </div>
                        </div>
                       </div>
                      </div>
                       
                       <div class="row">
                           <div class="col-md-6">
                               <div class="panel panel-success">
                          <div class="panel-heading">
                              <h3 class="panel-title"><i class="fa fa-book" aria-hidden="true"></i> Academic</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                              <a href="#" class="text-active"><li class="list-group-item list-group-item-active">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-success"><li class="list-group-item list-group-item-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-warning"><li class="list-group-item list-group-item-warning">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-danger"><li class="list-group-item list-group-item-danger">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-info"><li class="list-group-item list-group-item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                            </ul>
                          </div>
                        </div>
                           </div>
                           <div class="col-md-6">
                               <div class="panel panel-success">
                          <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-search" aria-hidden="true"></i> 
 Researches</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                                <a href="#" class="text-active"><li class="list-group-item list-group-item-active">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-success"><li class="list-group-item list-group-item-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-warning"><li class="list-group-item list-group-item-warning">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-danger"><li class="list-group-item list-group-item-danger">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-info"><li class="list-group-item list-group-item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                            </ul>
                          </div>
                        </div>
                           </div>
                       </div>
                       
                       <div class="row">
                           <div class="col-md-6">
                               <div class="panel panel-success">
                          <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-hand-peace-o" aria-hidden="true"></i> Facilities</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                                <a href="#" class="text-active"><li class="list-group-item list-group-item-active">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-success"><li class="list-group-item list-group-item-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-warning"><li class="list-group-item list-group-item-warning">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-danger"><li class="list-group-item list-group-item-danger">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-info"><li class="list-group-item list-group-item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                            </ul>
                          </div>
                        </div>
                           </div>
                           <div class="col-md-6">
                               <div class="panel panel-success">
                          <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-file-text" aria-hidden="true"></i> Forms</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                                <a href="#" class="text-active"><li class="list-group-item list-group-item-active">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-success"><li class="list-group-item list-group-item-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-warning"><li class="list-group-item list-group-item-warning">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-danger"><li class="list-group-item list-group-item-danger">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                              
                              <a href="#" class="text-info"><li class="list-group-item list-group-item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li></a>
                            </ul>
                          </div>
                        </div>
                           </div>
                       </div>
                        
                        <div class="nothing">
                            <hr>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>


    <?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->yieldContent('scripts'); ?>
<footer>
    <div class="container">
        Copyright &copy; by <a href="#">CSE, RUET</a>. All Right Reserved From 2017-2018.
    </div>
</footer>
</div>
</body>

</html>