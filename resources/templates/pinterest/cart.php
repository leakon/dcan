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








    <div class="standardForm">
        <ul>
            <li class="sectionTitle" id="accountBasics">







<div class="cart-table">

            <div class="ctable-header group">
                    <h4 class="ctable-title">美食篮子</h4>
                    <span class="ctable-categ">单价</span>
                    <span class="ctable-categ">数量</span>
                    <span class="ctable-categ">总计</span>
            </div>

            <div class="cart-group cart_group" data-id="0">
                <ul class="cgroup-list">
                    <li class="cgroup-item s_food" data-id="5515850">
                        <div class="cdish-name"> 香卤鸡腿煲仔饭 </div>
                        <div class="cdish-price symbol-rmb">17</div>
                        <div class="cdish-modify">
                        <a class="cdish-action desc dec_btn">-</a><input
                        class="cdish-qty set_num" type="text" value="1"><a class="cdish-action incr inc_btn">+</a>
                        </div>
                        <div class="cdish-total symbol-rmb">17</div>
                        <div class="cdish-del"> <a class="del del_btn">×</a> </div>
                    </li>
                    <li class="cgroup-item s_food" data-id="5515849">
                        <div class="cdish-name"> 猪肚煲仔饭 </div>
                        <div class="cdish-price symbol-rmb">17</div>
                        <div class="cdish-modify">
                        <a class="cdish-action desc dec_btn">-</a><input
                        class="cdish-qty set_num" type="text" value="4"><a class="cdish-action incr inc_btn">+</a>
                        </div>
                        <div class="cdish-total symbol-rmb">68</div>
                        <div class="cdish-del"> <a class="del del_btn">×</a> </div>
                    </li>
                </ul>
            </div>

            <div class="cart-group cart_group">
                <ul class="cgroup-list cart_extra">
                <li class="cgroup-item s_food" data-id="11">
                    <div class="cdish-name"> 脉动 </div>
                    <div class="cdish-price symbol-rmb">0</div>
                    <div class="cdish-modify"> 5 </div>
                    <div class="cdish-total symbol-rmb">0</div>
                </li>
                </ul>
            </div>

            <div class="ctable-footer group">
                <div  class="cart-note"></div>
                <div class="float-r">
                    <div class="cart-summary basket_info">
                    共5份美食　应付金额：
                    <span  class="symbol-rmb cart-cost">85</span>
                    </div>
                </div>
            </div>

</div>
<!-- EndOf cart-table -->
<div  class="cart-module cpayment-module group">
  <h3 class="cmodule-title"><i class="icon-cmodule payment"></i>支付方式：</h3>
  <div class="cmodule-content">
      <div class="cart-payment">
    <a  data-payonline="0" class="cpayment-choice
          ">
            餐到付款
    </a>
    <a  data-payonline="1" class="cpayment-choice
        ">在线支付</a>
  </div>

      <div  class="activity-tip hide">在线支付立减<strong >0</strong>元!</div>
  
    </div>
</div>








            </li>
        </ul>
    </div>





    <div class="formFooter fixedsticky-off">

        <div class="formFooterButtons">

        <button type="button" class="rounded NavigateButton Button Module hasText cancel btn">
            <span class="buttonText">Cancel</span>
        </button>

        <button type="submit" class="rounded Button primary Module hasText btn saveSettingsButton">    
            <span class="buttonText">Save Settings</span>
        </button>
        </div>
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

