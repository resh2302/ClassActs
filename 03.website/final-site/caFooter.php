<footer>
    <div>
        <ul>
            <li><img src="img/humber2.png" alt="Humber Logo" id="logo" ></li>
            <li><img src="img/cbc2.png" alt="CBC Logo" id="logo" ></li>
        </ul>
    </div>
</footer>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>


<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
<script>
    if (typeof jQuery == 'undefined') {
        document.write(unescape("%3Cscript src='js/jquery-1.11.0.js' type='text/javascript'%3E%3C/script%3E"));
    }
</script> 
<script src="js/jquery.isotope.js" type="text/javascript"></script> 

      <script type="text/javascript">

$(window).load(function(){
    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
    $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
});

</script>
 
<script type="text/javascript" src="js/main.js"></script>
    