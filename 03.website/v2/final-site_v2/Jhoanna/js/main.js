$('#menuBars').click(function(){
    $('#navigationMenu').slideToggle(1000);
});

$('#horMenuBars').click(function(){
    $('#horizontalMenu').animate({'width': 'toggle'});
});

$('#horMenuBars').click(function(){
    $('#r_horizontalMenuWrap').animate({'width': 'toggle'});
});

$('.iconImg').hover(function(){
   $(this).next('.iconTxt').children('div').toggle(1000);
});