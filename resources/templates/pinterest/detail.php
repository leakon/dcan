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
            
                        <!-- ######## Custom Main Begin ######## -->
                        <div class="dd_list_main">


    <div class="standardForm">
        <ul>
            <li class="sectionTitle" id="accountBasics">
            <h2>甜甜圈</h2>
                <p><img src="http://dfan.me/static/resource/item_images/thumbnail/gk_1001.jpg" /></p>
                <p><span>价格：14.00</span></p>
                <p>数量 <input type="text" id="ItemQty" name="quantity" value="1" style="width:20px;"/></p>
                <p><input type="button" value="加入购物车" onclick="AddToCart(1)" /></p>
            </li>
        </ul>
    </div>

    <div>
        <div class="fixedsticky-dummy" style="height: 53px;"></div>
    </div>



    <div class="UserInfoBar InfoBarBase gridWidth Module centeredWithinWrapper v1 ajax dd_detail_switch_tab">
        <ul class="userStats">
            <li>
                <a href="/leakon/boards/" class="active"><div class="ajax Module BoardCount"><span class="label">商品介绍</span></div></a>
            </li>
            <li>
                <a href="/leakon/pins/"><div class="PinCount ajax Module"><span class="label">评价</span></div></a>
            </li>
            <li>
                <a href="/leakon/likes/"><span class="label">购买记录</span></a>
            </li>
        </ul>
    </div>


    <div class="standardForm">
        <ul>
            <li class="sectionTitle" id="accountBasics">
            <h2>甜甜圈</h2>
                <p><img src="http://dfan.me/static/resource/item_images/thumbnail/gk_1001.jpg" /></p>
                <p><span>价格：14.00</span></p>
                <p>数量 <input type="text" id="ItemQty" name="quantity" value="1" style="width:20px;"/></p>
                <p><input type="button" value="加入购物车" onclick="AddToCart(1)" /></p>
            </li>
        </ul>
    </div>

    <div>
        <div class="fixedsticky-dummy" style="height: 53px;"></div>
    </div>





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

