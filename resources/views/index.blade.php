<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ganamos @yield('titulo')</title>
    <!-- CSS only -->
    <link href="@yield('estilos')">
    <link href="{{ URL::asset('../resources/css/style.css') }} " rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>
@include('components.nav')
        @include('components.alert')
      <div class="container-fluid">
        <div class="row" ><div class="col-12" ></div></div>
          <div class="row ">
              <div class="col-6">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum vel maiores minima ratione, optio sapiente facere natus suscipit ullam delectus blanditiis quam voluptates nostrum deserunt itaque architecto totam ad maxime.
              </div>
            
              <div class="col-6">
                  <div class="row" style="background-color:rgb(225, 225, 225) ">
                  </div>
                  <div class="row">
                   <img src="{{ URL::asset('../resources/img/jp.jpg') }}" width="100vh" height="400" alt="" srcset="">   
                </div>
                  <div class="row" style="background-color:rgb(225, 225, 225) ">
                      
                  </div>
              </div>
          </div>
      </div>
    @include('components.footer')
</body>

<script type='text/javascript' src="{{ URL::asset('../node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>


</html>
