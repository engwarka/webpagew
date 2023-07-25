

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
   <body  style="direction: rtl;background-color:white !important;">

      <header style="margin-top:40px;width:90%;">
         <!-- header inner -->
         <div  class="headd">
            <div class="headerr">
               <div class="container" style="margin-top:20px;">
                  <div class="row">
                  <div class="right-top" >
                  <h1>منظمة بدر/ مؤسسة الشهداء</h1></div>


</div><hr>


<div class="row">

<div class="col-10">
<table style="width:100%;text-align:center;font-style: bold;border:2px solid blue;">
  <tr style="font-style: bold;color:black;background-color: darkturquoise;">

    <th>رقم السند</th>
    <th>التاريخ</th>
    <th>المبلغ المسدد</th>
    <th>الملاحظات</th>
    <th>الحذف</th>

  </tr>

  <tbody>
  @foreach ($kashaft as $kashaf)
  <tr>

  <td>{{$kashaf->ktasalsal}}</td>
  <td>{{$kashaf->kdate_fatora}}</td>
<td>{{$kashaf->ktasded}}</td>
<td>{{$kashaf->kpart}}</td>
<td><a href="{{route("kashaf.delete",["kashaf_id"=>$kashaf->id])}}"><i class="icon-close"></i>حذف </a></td>

@endforeach

  </tr>

  </tbody>
</table>


</div>





            </div></div>


      </header>


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

