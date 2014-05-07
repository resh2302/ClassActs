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
   		$('#menuName').text("HOME").show();	
   }
   else if($(this).attr('id') == "r_IT")
   {
   		$('#menuName').text("IT").show();	

   }
   else if($(this).attr('id') == "r_media")
   {
   		$('#menuName').text("MEDIA").show();	
   	
   }
   else if($(this).attr('id') == "r_art")
   {
   		$('#menuName').text("ART").show();	
   	
   }
   else if($(this).attr('id') == "r_about")
   {
   		$('#menuName').text("ABOUT").show();	
   	
   }
   else if($(this).attr('id') == "r_contact")
   {
   		$('#menuName').text("CONTACT").show();	
   	
   }
});

$('.iconImg').mouseout(function(){
	$('#menuName').fadeOut();
});

//function to get querystring

function getQueryVariable(variable)
{
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        if (pair[0] == variable) {
            return pair[1];
        }
    }
    return(false);
}

//isotope change
function isoChange(obj)
{
    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '.it',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
    
    $('.portfolioFilter a.current').removeClass('current');
        $(obj).addClass('current');

        var selector = $(obj).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
}