<?php

require_once(dirname(__FILE__) . '/inc/html.php');


?><!DOCTYPE html>
<html lang="en" class="en fixedsticky-withoutfixedfixed columns-4">
<?php
    echo    PinterestHtml_Home::htmlHead();
?>
<body>

<div data-component-type="17" class="App full AppBase Module">

<?php
    echo    PinterestHtml_Home::headerMenu();
?>
<div class="appContent ">


        <div class="mainContainer">


        <?php
            echo    PinterestHtml_Home::navBar();
        ?>


        <div class="Module UserSettingsPage">
        <div class="tocAndFormWrapper">

            <div class="AuthHomePage Module">
            <div class="hasFooter Grid Module">

            <div class="padItems Module centeredWithinWrapper GridItems variableHeightLayout">
            
        <?php
        ?>


                        <!-- ######## Custom Main Begin ######## -->
                        <div class="dd_list_main">
                                <?php

            echo    PinterestHtml_Home::settingMain();


                                ?>
                        </div>

                        <div class="dd_list_separator_line"></div>
                        
                        <div class="dd_list_sidebar">
                                <?php
                                    echo    PinterestHtml_Home::sideBar();
                                ?>
                        </div>


                        <!-- ######## Custom Main End ######## -->





            <?php
                echo    PinterestHtml_Home::footer();
            ?>

            </div><!-- EndOf padItems -->
            </div>
            </div>

        </div>
        </div>
        </div>

   
</div>
</div>


</body>
</html>

