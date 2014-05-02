$('#menuBars').click(function(){
    $('#navigationMenu').slideToggle(1000);
});

$('#horMenuBars').click(function(){
    $('#horizontalMenu').animate({'width': 'toggle'});
});

$('#horMenuBars').click(function(){
    $('#r_horizontalMenuWrap').animate({'width': 'toggle'});
});

$('.iconImg').mouseover(function(){
   // $(this).next('.iconTxt').children('div').toggle(1000);
   if($(this).attr('id') == "r_Home"){
   		$('#menuName').text("HOME").fadeIn();	
   }
   else if($(this).attr('id') == "r_IT")
   {
   		$('#menuName').text("IT").fadeIn();	

   }
   else if($(this).attr('id') == "r_media")
   {
   		$('#menuName').text("MEDIA").fadeIn();	
   	
   }
   else if($(this).attr('id') == "r_art")
   {
   		$('#menuName').text("ART").fadeIn();	
   	
   }
   else if($(this).attr('id') == "r_about")
   {
   		$('#menuName').text("ABOUT").fadeIn();	
   	
   }
   else if($(this).attr('id') == "r_contact")
   {
   		$('#menuName').text("CONTACT").fadeIn();	
   	
   }
});

$('.iconImg').mouseout(function(){
	$('#menuName').fadeOut();
});