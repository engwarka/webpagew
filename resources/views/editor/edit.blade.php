

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
<body>
<form   action="/edit" method="POST"
style="margin: 79px 0px 0px 70px;width:40%;text-align:right;padding:15px;border:2px solid blue;"
>
@if($errors->any())

<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif

@csrf
<input type="hidden"name="id"  value="{{$messages['id']}}">
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">تسلسل الوصل</label>
    <input name="maden" type="text"  class="form-control"  value="{{$subfatoras['maden']}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">التاريخ</label>
    <input  name="date_fatora" type="date"  class="form-control" value="{{$subfatoras['date_fatora']}}">

  </div>



  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">الوارد</label>
    <input name="rased" type="text"   class="form-control" value="{{$subfatoras['rased']}}">
  </div>
  <button type="submit" class="btn btn-primary" >تاكيدالوصل</button>
</form>

</body>

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

