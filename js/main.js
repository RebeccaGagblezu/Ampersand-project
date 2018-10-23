$(document).ready(function() {
    "use strict";
  
    // $('.navbar-light .navbar-nav .nav-link').click(function(e) {
    //   // e.preventDefault();
    //   $('.navbar-light .navbar-nav .nav-link').removeClass('active');
    //   $(this).addClass('active');
    // });

    $(".topNav .navbar-light .navbar-nav .nav-link").on("click", function(){
      $(".topNav .navbar-light .navbar-nav .nav-link").removeClass("active");
      $(this).addClass("active");
  });
      
  });

  
 