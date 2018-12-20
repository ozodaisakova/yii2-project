$(document).ready(function() {
  $('.masthead').visibility({
      once: false,
      onBottomPassed: function() {
        $('.fixed.menu').transition('fade in');
      },
      onBottomPassedReverse: function() {
        $('.fixed.menu').transition('fade out');
      }
    }) ;
  $('.ui.sidebar') .sidebar('attach events', '.toc.item');

  animStrelka();

});

function  animStrelka(){
    $("#homeicondown").animate({bottom: "80px"}, 700);
    setTimeout(arguments.callee, 1000);
    $("#homeicondown").animate({bottom: "70px"}, 700);

}
