$(function() {

$('#menu').click(function(){
		 if($('.header-nav-list').hasClass('active')){
		    $('.header-nav-list').slideUp('300').removeClass('active');
		 }else{
		  $('.header-nav-list').slideDown('300').addClass('active');
		  }
});

$('.hide').click(function(){
	      var $this = $(this);
          var $dest = $this.closest(".blue_ribbon");	
		  $dest.siblings('.wrap').slideUp('300').removeClass('active');
		  $this.css('display','none');
		  $this.siblings('.show').css('display','block');
});

$('.show').click(function(){		 
		  var $this = $(this);
          var $dest = $this.closest(".blue_ribbon");	
		  $dest.siblings('.wrap').slideDown('300').addClass('active');
		  $this.css('display','none');
		  $this.siblings('.hide').css('display','block');
});







// $(document).on( "click",'#add-more-lang', function() {
//     $(form_lang).fadeIn().insertAfter($(this).parent().parent());
// });



});