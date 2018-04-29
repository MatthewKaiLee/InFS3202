 $(document).ready(function () {
    $('.forgot-pass').click(function(event) {
      if($(".pr-wrap").hasClass("show-pass-reset")) {
        $(".pr-wrap").removeClass("show-pass-reset");
      } else {
        $(".pr-wrap").toggleClass("show-pass-reset");
      }
    }); 
    
    $('.pass-reset-submit').click(function(event) {
      $(".pr-wrap").removeClass("show-pass-reset");
    }); 
});
