$(function() {
  $('.team-member img').click(function(){
    console.log($(this).data('team'));
    if (!$('.' + $(this).data('team')).hasClass('active')) {
      console.log('5');
        $('.team-profile').removeClass('active');
      $('.' + $(this).data('team')).addClass('active');
      
			$('html,body').animate({
				scrollTop: $('.' + $(this).data('team')).offset().top - 100
			}, 500);      
      
    }
  });
});