

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>blogger</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->

            <div class="headerr">
                        <div class="center-desk">
                              @if(Auth::check())
                                 <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                                 @else
                                    <a class="nav-link" href="{{route('register')}}">تسجيل الخروج</a>

                                 @endif</div></div>
                                 <div class="contain">
                                 <div class="row">
                                 <div class="col-4 shaare">
                                 <h3>Badr Organization</h3>
                                 <h3>Martyrs Foundation</h3>
                              </div>
                                 <div class="col-4 shaar">
                                 <a href="#"><img src="images/شعار_منظمة_بدر.jpeg" /></a></div>

                              <div class="col-4 shaara">
                                 <h1>منظمة بدر</h1>
                                 <h1>مؤسسة الشهداء</h1>
                                </div>
                           </div>

                     </div></div><br><br>

                     <div class="row navbbar">

                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">



         <li class="nav-item ">
     <a class="nav-link" href="/website.kfatora_contain">كشف الفواتير</a>
    </li>
      <li class="nav-item">
  <a class="nav-link" href="/website.mashtarate">المشتريات</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="/website.sandok">الصندوق</a>
  </li>

  <li class="nav-item">
  <a class="nav-link" href="/website.er_contain">الايرادات</a>
  </li>

                                </ul>
                           </div>



                     </div>
                  </div>

                     </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->


      </header>



      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 ">
                     <div class="cont">
                        <h3> <strong class="multi"> مؤسسة شهداء بدر</strong><br>
                           Beadr Shuhada Foundation
                        </h3>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2023 All Rights Reserved. Design by warka ALameer </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>




      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

