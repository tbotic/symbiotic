// header transparent - light

$(window).scroll(function() {
    if ($(document).scrollTop() >= 70) {
      $('#main-nav').removeClass('bg-transparent').addClass('bg-light');
      $('#main-nav').removeClass('navbar-dark').addClass('navbar-light');
      $('#eu-header p').css('color','#000');
    } else {
      if(!$(".navbar-collapse").hasClass("show")) {
        $('#main-nav').removeClass('bg-light').addClass('bg-transparent');
        $('#main-nav').removeClass('navbar-light').addClass('navbar-dark');
        $('#eu-header p').css('color','rgba(255, 255, 255, 0.7)');
      }
    }
  });

  $(document).ready(function() {
    $(".navbar-toggler").click(function(){
      if ($("#main-nav").hasClass("bg-transparent")) {
        $('#main-nav').removeClass('bg-transparent').addClass('bg-light');
        $('#main-nav').removeClass('navbar-dark').addClass('navbar-light');
      } else {
        $('#main-nav').removeClass('bg-light').addClass('bg-transparent');
        $('#main-nav').removeClass('navbar-light').addClass('navbar-dark');
      }
    }); 
  });

$(document).ready(function(){
    $(".alert").delay(2000).slideUp(300);
});

// stavi footer na dno stranice

$(document).ready(function () {
	setInterval(function () {
		var docHeight = $(window).height();
		var footerHeight = $('footer').height();
		var footerTop = $('footer').position().top + footerHeight;
		var marginTop = (docHeight - footerTop);

		if (footerTop < docHeight)
			$('footer').css('margin-top', marginTop + 'px'); // padding of 30 on footer
		else
			$('footer').css('margin-top', '0px');
		// console.log("docheight: " + docHeight + "\n" + "footerheight: " + footerHeight + "\n" + "footertop: " + footerTop + "\n" + "new docheight: " + $(window).height() + "\n" + "margintop: " + marginTop);
	}, 250);
});

// prikazi newsletter modal

$(document).ready(function() {
  $(document).mouseleave(function () {
    $('#newsletter-modal').modal('show');
  });
});

$('#deny').click(function() {
  $('[name=email]').removeAttr('required');
  $('form').submit();
});