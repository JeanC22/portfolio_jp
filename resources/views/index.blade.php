<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title onload="jpanimacion()"> JPortfolio</title>
    <!-- CSS only -->
    
    <link href="{{ URL::asset('./resources/css/loader.css') }} " rel="stylesheet">
    <link href="{{ URL::asset('./resources/css/style.css') }} " rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body class="" onload="scrollbar()" >
  <div class="contenedor_loader" id="onload">
      @include('components.contenido')
    </div>
  <div id="progressbar"></div>
<div id="scrollpath"></div>
@include('components.nav')
        @include('components.alert')
      <div class="container-fluid">
        <div class="row ">
              <div class="col-9">
                    <div class="row">
                      <div class=" col  mt-5 ms-5 ">
                           <div class="row ">
                             <div class="col-5 mb-5">
                              <a href="#" class="btn_jp">
                                <span>
                                  Servicios
                                 </span>
                                </a>
                            </div>
                              <div class="col-5 mb-5">
                                <a href="#" class="btn_jp">
                                  <span>
                                  Contacto 
                                  </span>
                                </a>  
                            </div>
                           </div>
                            <div class="row">
                              <div class="col-5  mb-5">
                                 <a href="#" class="btn_jp">
                                   <span>
                                     Sobre mí 
                                    </span>
                                  </a>
                                </div>
                                <div class="col-5 mb-5 " >
                                   <a href="#" class="btn_jp">
                                     <span>
                                       Skills 
                                      </span>
                                    </a>  
                              </div>
                              <div class="row">
                                <div class="col-5 mb-5">
                                   <a href="#" class="btn_jp">
                                     <span>
                                      Portfolio
                                      </span>
                                    </a>
                                  </div>
                                </div>
                           </div>
                      </div>
                      <div class="col mt-5 backg-jp h3" id="contenidoContainer">
                        asdasd
                    </div>
                  </div>
              </div>
                <div class="col-3 ">
                  <div class="row">
                    <div class="col me-5 mt-5 mb-5">
                    <img src="{{ URL::asset('./resources/img/asd.png') }}"  width="325"alt="" srcset="">   
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
<script>
  window.onload = function () {
  let tl= gsap.timeline();
  tl.to('#animationLPart1',{
    duration: 1,
    x:219,
    sacle:0,
    backgroundColor:'black',
    ease:'linear',
    display:'none'
  });
  
   tl.to('#animationLPart2',{
    duration: 1,
    y: 175,
    sacle:0,
     backgroundColor:'black',
     ease:'linear',
     display:'none'
  });
  tl.to('#animationLPart3',{
    duration: 1,
    x: -219,
    sacle:0,
    backgroundColor:'black',
    ease:'linear',
    display:'none'
  });
  tl.to('#animationLPart4',{
    duration: 1,
    y: -189,
    sacle:0,
    backgroundColor:'black',
    ease:'linear',
    display:'none'
  });

};
</script>
<script>
  setTimeout(dspnone, 4300);
    var loader = document.getElementById("onload");
    function dspnone(){
      loader.style.display = "none";
    }

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ URL::asset('./resources/js/scrollbar.js') }}"></script>
<script src="{{ URL::asset('./resources/js/contenido.js') }}"></script>
<script type='text/javascript' src="{{ URL::asset('./node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>


</html>
