<!doctype html>
<html class="no-js" lang="en">

    <?php
    require_once './caHeader.php';
    ?>

    <div id="wrapper">
        <div id="program-content">
            <div class="row">
                <div class="large-4 small-12 columns">
                    <div id="mainHorizontal">
                        <span id="horMenuBars" class="fa fa-bars"></span>
                        <div id="r_horizontalMenuWrap">
                            <div class="menuIcon" >
                                <div id="r_IT" class="iconImg"></div>
                                <div class="iconTxt r_ITtxt">
                                    <div>IT</div>
                                </div>
                            </div>
                            <div class="menuIcon" >
                                <div id="r_media"class="iconImg" ></div>
                                <div class="iconTxt r_mediatxt">
                                    <div>MEDIA</div>
                                </div>
                            </div>
                            <div class="menuIcon" >
                                <div id="r_art" class="iconImg"></div>
                                <div class="iconTxt r_arttxt">
                                    <div>ART</div>
                                </div>
                            </div>
                            <div class="menuIcon" >
                                <div id="r_about" class="iconImg"></div>
                                <div class="iconTxt r_abouttxt">
                                    <div>ABOUT</div>
                                </div>
                            </div>
                            <div class="menuIcon" >
                                <div id="r_contact" class="iconImg"></div>
                                <div class="iconTxt r_ontacttxt">
                                    <div>CONTACT</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="large-8 small-12 columns">
                    <nav class="top-bar" data-topbar>
                        <ul class="title-area">
                            <li class="name">
                                <h1></h1>
                            </li>
                            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                        </ul>

                        <section class="top-bar-section">
                            <!-- Right Nav Section -->
                            <ul class="right portfolioFilter">

                                <!--  <li><a href="#" data-filter="*" class="current">ALL</a></li> -->
                                <li><a href="#" data-filter=".it">INFORMATION TECHNOLOGY</a></li>
                                <li class="current"><a href="#" data-filter=".media">MEDIA</a></li>
                                <li><a href="#" data-filter=".art">ART</a></li>
                            </ul>
                        </section>
                    </nav>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="portfolioContainer">



                <div class="it row">




                    <div class="program_brief small-12 large-3 columns">
                        <div class= "label_tab">
                            <div class="label">We are Art Students</div>
                        </div> 
                    </div> 
                    <div class="program_des small-12 large-4 columns">
                        <img src="img/surf.jpg" alt="image">
                        <div class="label">jkljljkljl</div>
                    </div> 
                    <div class="program_des small-12 large-4 columns">
                        <img src="img/surf.jpg" alt="image">
                        <div class="label">jkljljkljl</div>
                    </div> 

           <!--  <img src="img/surf.jpg" alt="image"> -->
                </div> <!--  end row -->

                <div class="media">
                    <img src="img/burger.jpg" alt="image">
                </div>

                <div class="art">
                    <img src="img/subway.jpg" alt="image">
                </div>



            </div> <!-- end portfolioContainer -->


        </div><!-- program-content -->



    </div><!-- end wrapper -->

    <?php
    require_once './caFooter.php';
    ?>

</body>
</html>

