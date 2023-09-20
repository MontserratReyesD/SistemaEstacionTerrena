  // Configure tooltips globally
  //$('[data-toggle="tooltip"]').tooltip()
  $(document).ready(function(){

    // Showing and hiding tooltip with same speed
    $('[data-toggle="tooltip"]').tooltip({
        delay: {show: 750, hide: 0},
        placement : 'top'
    });

  });
