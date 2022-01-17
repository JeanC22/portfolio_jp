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
  <div id="progressbar"></div>
<div id="scrollpath"></div>
@include('components.nav')
        @include('components.alert')
      <div class="container-fluid">
        <div class="row ">
              <div class="col-9">
                    <div class="row">
                      <div class="col backg-jp mt-5 ms-5 ">
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum corporis dolores sequi maiores alias rerum reiciendis molestiae omnis vitae, eligendi adipisci inventore explicabo voluptatibus ab magni facilis quasi at atque!
                      </div>
                      <div class="col mt-5 bg-">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum corporis dolores sequi maiores alias rerum reiciendis molestiae omnis vitae, eligendi adipisci inventore explicabo voluptatibus ab magni facilis quasi at atque!
                    </div>
                    </div>
              </div>
                <div class="col-3 ">
                  <div class="row">
                    <div class="col me-5 mt-5 mb-5">
                    <img src="{{ URL::asset('../resources/img/asd.png') }}"  width="325"alt="" srcset="">   
                  </div>
                </div>
              </div>
              </div>
          </div>
      </div>
    @include('components.footer')
</body>
<script type="text/javascript">
	let progress = document.getElementById('progressbar');
	let totalHeight = document.body.scrollHeight - window.innerHeight;
	window.onscroll = function () {
		let progressHeight = (window.pageYOffset / totalHeight) * 100;
		progress.style.height = progressHeight + "%";
	}
</script>
<script type='text/javascript' src="{{ URL::asset('../node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>


</html>
