$(document).ready(function() {

    setTimeout( function(){
        //  Fade out loader
        $(".loader").toggle("clip");
      }, 1000);

    $(window).scroll(function(e){
        navFn();
    })
});
