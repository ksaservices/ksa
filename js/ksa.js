
$(document).ready(function () {

     // Fixa navbar ao ultrapassa-lo
    var navbar = $('#navbar-main'),
    distance = navbar.offset().top,
    $window = $(window);

    $window.scroll(function() {
        if ($window.scrollTop() >= distance) {
            navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
            $("body").css("padding-top", "52px");
        } else {
            navbar.removeClass('navbar-fixed-top');
            $("body").css("padding-top", "0px");
        }
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplayHoverPause:true,
        rtl:true,
        margin:10,
        nav:false,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1,
            }
        }
    });
});



var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: {lat: 33.580113, lng: -7.628733},
    zoom: 13
  });


    var myLatLng = {lat: 33.580113, lng: -7.628733};
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'KSA',
        animation: google.maps.Animation.toggleBounce,
        icon: 'img/marker.png'
      });

    google.maps.event.addListener(marker, 'click', toggleBounce);

    setTimeout(function() {  marker.setAnimation(google.maps.Animation.BOUNCE); }, 2000);

}

function toggleBounce() {

  if (marker.getAnimation() != null) {
        marker.setAnimation(null);
    } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
    }
}



/*<!--Start of Tawk.to Script-->*/
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/56fba6f94ca63edd1d56b829/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
/*<!--end of Tawk.to Script-->*/

/*end scroll*/
      $(document).ready(function () {
        $(document).on("scroll", onScroll);
          
          //smoothscroll
          $('a[href^="#"]').on('click', function (e) {
              e.preventDefault();
              $(document).off("scroll");
              
              $('a').each(function () {
                  $(this).removeClass('active');
              })
              $(this).addClass('active');
            
              var target = this.hash,
                  menu = target;
              $target = $(target);
              $('html, body').stop().animate({
                  'scrollTop': $target.offset().top-50
              }, 500, 'swing', function () {
                  window.location.hash = target;
                  $(document).on("scroll", onScroll);
              });
          });
      });

      function onScroll(event){
          var scrollPos = $(document).scrollTop();
          $('#menu-center a').each(function () {
              var currLink = $(this);
              var refElement = $(currLink.attr("href"));
              if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                  $('#menu-center ul li a').removeClass("active");
                  currLink.addClass("active");
              }
              else{
                  currLink.removeClass("active");
              }
          });
      }
/*end scroll*/
