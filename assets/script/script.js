$(document).ready(function(){
    AOS.init();
// $(".opneNav").click(function(){
//   $(this).toggle("change");
// }) 


$(".opneNav, .closebtn").click(function(){
$("#mySidenav").toggleClass("responsive");
});

$('.scrolldownbtn').click(function() {
    // Calculate 10% of the window's height
    var scrollAmount = window.innerHeight * 0.1;
    // Scroll the window by scrollAmount
    window.scrollBy({
      top: scrollAmount,
      behavior: 'smooth' // Smooth scrolling
    });
});
  


});

