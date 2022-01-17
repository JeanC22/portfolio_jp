// window.addEventListener('load',()=>{
//   const contenedor_loader = document.querySelector('.contenedor_loader')
//   contenedor_loader.style.opacity = 0;
//   contenedor_loader.style.visibility = 'hidden';
// })


// function jpanimacion() {
let tl= gsap.timeline();
tl.to('#animationLPart1',{
  duration: 1,
  x:220,
  bacKgroundColor:'black',
  ease:'linear',
  display:'none'
});

 tl.to('#animationLPart2',{
  duration: 1,
  y: 190,
  sacle:0,
   backgroundColor:'black',
   ease:'linear',
   display:'none'
});
tl.to('#animationLPart3',{
  duration: 1,
  x: -220,
  sacle:0,
  backgroundColor:'black',
  ease:'linear',
  display:'none'
});
tl.to('#animationLPart4',{
  duration: 1,
  y: -190,
  sacle:0,
  backgroundColor:'black',
  ease:'linear',
  display:'none'
});
// }
windows.onload = function(){
  $('#onload').fadeout();
  $('body').removeClass('.overflow-hidden"')
}
