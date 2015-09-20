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

        <div class="HomePage Module">
        <div class="AuthHomePage Module">
            <div class="hasFooter Grid Module">
            <div class="padItems Module centeredWithinWrapper GridItems variableHeightLayout">


                        <!-- ######## Custom Main Begin ######## -->
                        <div class="dd_list_main">
                                <?php

                                    for ($idx = 0; $idx < 12; $idx++) {
                                        echo    PinterestHtml_Home::oneItem();
                                    }

                                ?>
                        </div>

                        <div class="dd_list_separator_line"></div>
                        
                        <div class="dd_list_sidebar">
                                <?php
                                    echo    PinterestHtml_Home::sideBar();
                                ?>
                        </div>


                        <?php
                            echo    PinterestHtml_Home::footer();
                        ?>
                        <!-- ######## Custom Main End ######## -->



            </div><!-- EndOf padItems -->
            </div><!-- EndOf hasFooter Grid Module -->
        </div>
        </div>


</div>
</div>
</div>


</body>
</html>
