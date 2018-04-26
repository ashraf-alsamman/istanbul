<!DOCTYPE html>
<html >
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token 
         <meta name="csrf-token" content="{{ csrf_token() }}">
         -->
      <title>istanbul</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">  </script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"/>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <!-- Latest compiled and minified CSS -->
      <!--
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
         -->
      <!-- (Optional) Latest compiled and minified JavaScript translation files -->
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
      <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Styles -->
 
        
    </script> 
      <link href="{{ asset('css/mysite.css') }}" rel="stylesheet" type="text/css" >
      <style>
      </style>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

              <style type="text/css">
            #nprogress .bar {
                background: red !important;
                height:50px;
            }
 
            #nprogress .peg {
                box-shadow: 0 0 10px red, 0 0 5px red !important;
            }
 
            #nprogress .spinner-icon {
                border-top-color: red !important;
                border-left-color: red !important;
            }
        </style> 



        
   </head>
   <body>



     
<nav class="navbar navbar-default hidden-md hidden-lg">
  <div class="container-fluid" style=" background-color:#38464f;color:#fff">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
 
      <li><a href="#">FASHION</a></li>
      <li><a href="#">STORE BOOKS & MEDIA</a></li>
      <li><a href="#">CLEARANCE SALE</a></li>
      <li><a href="#">BOOKS & MEDIA</a></li>
      <li><a href="#">CLEARANCE SALE</a></li>
      <li><a href="#">MOBILE PHONES</a></li>
    </ul>

    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>

  </div>
</nav>







   
      <div class="  istNavbar hidden-xs hidden-sm" id="mainNav">
         <div class="container">
            <div class="collapse navbar-collapse" id="navbarResponsive" style="float:right">
               <ul class="navbar-nav" style="color:#fff;list-style-type: none; FONT-SIZE: 12PX;">
                  <li class="istNavbarlI nav-item mx-0 mx-lg-1 ">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger active" href="#portfolio">CONTACT & SUPPORT : <span style="color:#d1cf1d">+1800 1234 5678</span></a>
                  </li>
                  <li class="istNavbarlI nav-item mx-0 mx-lg-1">  
                     | &nbsp;<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger active" href="#portfolio">  CONTACT US</a>
                  </li>
                  <li class="istNavbarlI nav-item mx-0 mx-lg-1">
                     | &nbsp;<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">  HELP</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="istNavbarHeader   hidden-xs hidden-sm" id="mainNav">
         <div class="container">
            <div class="row"><span style="float:right;color:#fff;margin: 12px 81px 7px 0;">CONTACT & SUPPORT : +1800 1234 5678</span></div>
            <div class="row">
               <div class="col-md-2 hidden-xs hidden-sm"><img src="/logo.png"style="margin-top: -16px;" /></div>
               <div class="col col-sm-6 col-xs-6" >
                  <div class="row">
                     <div class="col col-sm-3 col-xs-3" style="margin-right:-3px">
                        <select class="selectpicker"  data-width="auto"  data-style="selectWIst"  data-icon="fa-search">
                           <option  >All Categories</option>
                        </select>
                     </div>
                     <input class=" col-xs-8" style="border-width: 0px;height: 37px;" type="" placeholder=" | Search entire store here..." name="">
                     <button class=" col-xs-1"  style="background-color:#2ca5fa;border-width: 0px;height: 37px;">
                     <i class="fa fa-search" style="color:#fff"></i>
                     </button>
                  </div>
               </div>
               <div class="col col-sm-3 col-xs-3">
                  <div class=" row vdivide" style="color:#fff;list-style-type: none;">
                     <div class=" col-sm-4" style="color:#fff;text-align:center">
                        <a style="text-align:center" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger " href="#portfolio">
                           <i class="fa fa-user" style="color:#fff;font-size:18px"></i>
                           <p style="color:#fff;font-size:9px;margin-top:8px;FONT-WEIGHT: BOLD;">MY ACOUNT</p>
                        </a>
                     </div>
                     <div class=" col-sm-4" style="color:#fff;text-align:center">
                        <a style="text-align:center" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger " href="#portfolio">
                           <i class="fa fa-map-marker " style="color:#fff;font-size:18px"></i>
                           <p style="color:#fff;font-size:9px;margin-top:8px;FONT-WEIGHT: BOLD;">TRACK ORDER</p>
                        </a>
                     </div>
                     <div class=" col-sm-4" style="color:#fff;text-align:center">
                        <a style="text-align:center" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger " href="#portfolio">
                           <i class="fa fa-lock" style="color:#fff;font-size:18px"></i>
                           <p style="color:#fff;font-size:9px;margin-top:8px;FONT-WEIGHT: BOLD;">LOGIN</p>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col col-sm-1 col-xs-1">
                  <select class="selectpicker"  data-width="auto"  data-style="selectIst"  data-icon="fa-search">
                     <option data-content="<span class='fa fa-shopping-cart'> 0 </span>"> 0 </option>
                  </select>
               </div>
            </div>
         </div>
      </div>
      </div>
      <div class=" navbarmenuIst hidden-xs hidden-sm" id="mainNav" >
         <div class="container" >
            <div class="col col-sm-2 col-xs-2" style="margin-top: 20px;">
               <select class="selectpicker"  data-width="auto"  data-style="selectIst"  data-icon="fa-search">
                  <option >Shop Everything</option>
               </select>
            </div>
            <ul class="navbar-nav col-sm-8 col-xs-8" style="color:#fff;list-style-type: none; FONT-SIZE: 12PX;">
               <li class="istNavbarlI nav-item mx-0 mx-lg-1">  
                  <a class="MenuactiveIst" href="#portfolio">FASHION STORE</a>
               </li>
               <li class="istNavbarlI nav-item mx-0 mx-lg-1">
                  <a class="MenuIst" href="#about">BOOKS & MEDIA</a>
               </li>
               <li class="istNavbarlI nav-item mx-0 mx-lg-1">
                  <a class="MenuIst" href="#about">CLEARANCE SALE</a>
               </li>
               <li class="istNavbarlI nav-item mx-0 mx-lg-1">
                  <a class="MenuIst" href="#about">BOOKS & MEDIA</a>
               </li>
               <li class="istNavbarlI nav-item mx-0 mx-lg-1">
                  <a class="MenuIst" href="#about">CLEARANCE SALE</a>
               </li>
               <li class="istNavbarlI nav-item mx-0 mx-lg-1">
                  <a class="MenuIst" href="#about">MOBILE  PHONES</a>
               </li>
            </ul>
         </div>
      </div>
      <div class="navbar navbarundermenuIst hidden-xs hidden-sm" id="mainNav" >
         <div class="container" >
            <div class=" col-md-1" ></div>
            <div class=" col-md-10" style="width:80%">
               <div class=" col-md-4" >
                  <div class=" col-md-3">  <i class="fa fa-plane" style="font-size:36px;color:#2ca5fa"></i></div>
                  <div class=" col-md-1" ></div>
                  <div  class="col-md-6"  >
                     <p class="row" style="font-weight:bold">FREE SHIPPING</p>
                     <p class="row" style="font-size:12px;color:#666666;margin-top:5px">In Order Min $200</p>
                  </div>
               </div>
               <div class=" col-md-4" >
                  <div class=" col-md-3">  <i class="fa fa-clock-o" style="font-size:36px;color:#2ca5fa"></i></div>
                  <div class=" col-md-1" ></div>
                  <div  class="col-md-6"  >
                     <p class="row" style="font-weight:bold">FREE SHIPPING</p>
                     <p class="row" style="font-size:12px;color:#666666;margin-top:5px">In Order Min $200</p>
                  </div>
               </div>
               <div class=" col-md-4" >
                  <div class=" col-md-3">  <i class="fa fa-soccer-ball-o" style="font-size:36px;color:#2ca5fa"></i></div>
                  <div class=" col-md-1" ></div>
                  <div  class="col-md-6"  >
                     <p class="row" style="font-weight:bold">FREE SHIPPING</p>
                     <p class="row" style="font-size:12px;color:#666666;margin-top:5px">In Order Min $200</p>
                  </div>
               </div>
            </div>
            <div class=" col-md-1" ></div>
         </div>
      </div>
      @yield('content')
   </body>
</html>