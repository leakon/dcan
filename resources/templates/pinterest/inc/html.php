<?php

class PinterestHtml_Home {

    public static function sample($param = array()) {

        $string     = <<< END_OF_TEXT
<div>Sample</div>
END_OF_TEXT;

        return  $string;

    }

    public static function htmlHead($param = array()) {

        $string     = <<< END_OF_TEXT

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="static/bundle1.066c84bf.css">
        <link rel="stylesheet" href="static/bundle2.13af34fe.css">
        <link rel="stylesheet" href="static/bundle3.5bac5b84.css">

        <link rel="stylesheet" href="static/ecart.css">
        <link rel="stylesheet" href="static/overwrite.css">
        
        <script src="static/js/jquery_1.11.1/jquery-1.11.1.js"></script>

    <title>蛋蛋咖啡 品质即刻送达</title>
    <meta property="description" name="description" content="蛋蛋咖啡，给写字楼的同学们提供方便快捷的食品饮料午餐预定配送，高端品质，即刻送达！" data-app="">
    <meta property="pinterest" name="pinterest" content="nohover" data-app="">

</head>

END_OF_TEXT;

        return  $string;

    }

    public static function oneItem($param = array()) {

        $string     = <<< END_OF_TEXT

<div class="item " xxstyle="top: 0px; xleft: 250px; left: __PLACE_HOLDER_ITEM_LEFT__; visibility: visible;">
<div data-component-type="0" class="PinBase Pin Module summary">
<div class="pinWrapper">

    <div class="pinImageActionButtonWrapper">

        <div class="repinSendButtonWrapper">
            <button data-element-type="0" type="button" class="rounded ShowModalButton Button primary Module primaryOnHover btn repinSmall">    
                <em></em> <span class="accessibilityText">Pin it</span>
            </button>

            <button type="button" class="rounded Button DropdownButton Module hasText sendSmall sendPinGrid btn">
                <em></em><span class="buttonText">Send</span>
            </button>
        </div>

        <div class="likeEditButtonWrapper">
            <button data-text-unlike="Unlike" data-element-type="1" data-text-like="Like" type="button" class="LikeButton rounded PinLikeButton Button Module likeSmall btn">
                <em></em><span class="accessibilityText">Like</span>
            </button>
        </div>

                                            
        <div class="pinHolder">
            <a href="/pin/276971445808427384/" class="pinImageWrapper" data-element-type="35" style="background: #5b7452;">
            <div class="pinDomain">蛋蛋</div>
            <div class="fadeContainer">
                <div class="hoverMask"></div>
                <img src="__PLACE_HOLDER_IMAGE_SRC__" class="pinImg fullBleed loaded fade loaded fade" xstyle="height:449px;width:236px;" onload="" alt="">
            </div>
            </a>
        </div>
        <!-- EndOf pinHolder -->

    </div>
    <!-- EndOf pinImageActionButtonWrapper -->
        
    <div class="pinMeta ">
        <p class="pinDescription">Villa Arsana Estate, a luxurious rental retreat in Tabanan, Bali.</p>
        <div class="pinSocialMeta">                    
        <a class="socialItem" href="/pin/276971445808427384/repins/" title="&lt;span class='value'&gt;18&lt;/span&gt; &lt;span class='label'&gt;repins&lt;/span&gt;">
            <em class="repinIconSmall"></em>
            <em class="socialMetaCount repinCountSmall">18</em>
        </a>
        <a class="socialItem likes" href="/pin/276971445808427384/likes/" title="&lt;span class='value'&gt;4&lt;/span&gt; &lt;span class='label'&gt;likes&lt;/span&gt;">
            <em class="likeIconSmall"></em>
            <em class="socialMetaCount likeCountSmall">4</em>
        </a>
        </div>
    </div>
    
    <div class="pinCredits">
        <div class="creditItem">
        <a href="/ginia/pools/" title="More from pools">
            <img src="static/avatar/leakon_1407141101_60.jpg" class="creditImg user" style="" alt="pools">
            <div class="creditName">Virginia Stevenson</div>
            <div class="creditTitle">pools</div>
        </a>
        </div>
    </div>
    
</div>
</div>
</div>

END_OF_TEXT;

        $s_left     = isset($param['s_left']) ? $param['s_left'] : '250px';

        $imgs       = array();
        #$imgs[]     = 'static/user_content/b29c5408e6c9617946ee2a8fd7a1a299.jpg';
        $imgs[]     = 'static/user_content/36ef243cbc7eb39d36779ba700067790.jpg';
        #$imgs[]     = 'static/user_content/ba686eb6668415b2fb7dedb77cbfc6b7.jpg';

        $idx        = rand(0, count($imgs) - 1);
        $img        = $imgs[$idx];

        $string     = str_replace('__PLACE_HOLDER_IMAGE_SRC__', $img, $string);
        $string     = str_replace('__PLACE_HOLDER_ITEM_LEFT__', $s_left, $string);

        return  $string;

    }



    public static function sideBar($param = array()) {

        $string     = <<< END_OF_TEXT

<div class="item dd_side_bar" style="" xxstyle="top: 0px; left: 750px; visibility: visible;">
<div data-component-type="38" class="UserNews split Module">

    
    <div class="topItem">
        <div data-component-type="24" class="FriendsToFollow Module">
        <h2 class="memoTitle"><a href="/find_friends/invite/">邀请朋友</a></h2>
        <ul class="List Module">
    
                <li data-index="0" class="">
                <div class="UserContact Module">
                <div class="content">
                    <div class="contactWrapper" data-element-type="202">
                      <span class="thumbImageWrapper">
                         <img src="static/avatar/leakon_1407141101_60.jpg" alt="Profile image of David  Liang">
                      </span>
                      <div class="contactUser">
                          <span class="contactUsername">David  Liang</span>
                          <br>
                          <button type="button" class="Button contactAction hasText Module borderless">
                            <span class="buttonText">Invite</span>
                        </button>
                      </div>
                    </div>
                    <i class="dismiss" data-element-type="150"></i>
                </div>
                <div class="contactConfirmation">You invited David  Liang!</div>
                </div>
                </li>


                <li data-index="1" class="">
                <div class="UserContact Module">
                <div class="content">
                    <div class="contactWrapper" data-element-type="202">
                      <span class="thumbImageWrapper">
                         <img src="static/avatar/leakon_1407141101_60.jpg" alt="Profile image of Harvard Lu">
                      </span>
                      <div class="contactUser">
                          <span class="contactUsername">Harvard Lu</span>
                          <br>
                          <button type="button" class="Button contactAction hasText Module borderless">
                <span class="buttonText">Invite</span>
                        </button>
                      </div>
                    </div>
                    <i class="dismiss" data-element-type="150"></i>
                </div>
                <div class="contactConfirmation">
                    You invited Harvard Lu!</div>
                </div>
                </li>


                <li data-index="2" class="">
                <div class="UserContact Module">
                <div class="content">
                    <div class="contactWrapper" data-element-type="202">
                      <span class="thumbImageWrapper">
                         <img src="static/avatar/leakon_1407141101_60.jpg" alt="Profile image of Andy Lee">
                      </span>
                      <div class="contactUser">
                          <span class="contactUsername">Andy Lee</span>
                          <br>
                          <button type="button" class="Button contactAction hasText Module borderless">
                <span class="buttonText">Invite</span>
                        </button>
                      </div>
                    </div>
                    <i class="dismiss" data-element-type="150"></i>
                </div>
                <div class="contactConfirmation">
                    You invited Andy Lee!</div>
                </div>
                </li>

        </ul>
        </div>

            <div class="buttonHolder">
                <button data-element-type="215" type="button" class="rounded Button Module hasText btn sendInvite">    
                    <em></em><span class="buttonText">Invite Friends</span>
                </button>
            </div>

    </div>
    <!-- EndOf topItem -->

<div class="bottomItem">
    <div class="FriendsToFollow Module">
                    <h2 class="memoTitle"> <a href="/find_friends/">Find Friends</a> </h2>
                    <ul class="List Module">

                    <li data-index="0" class="">
                    <div class="small UserBase User Module followFriendsItem">
                        <div class="content">
                            <a href="/jiaqi/">
                                <span class="thumbImageWrapper">
                                        <img src="static/avatar/leakon_1407141101_60.jpg" alt="Eric Snow">
                                </span>
                            </a>
                            <div class="contactUser">
                                <a href="/jiaqi/" class="contactUsername">Eric Snow</a>
                                <br>
                                            <button type="button" class="UserFollowButton Button Module hasText notNavigatable borderless ui-FollowButton">
                    <span class="buttonText">Follow</span>
                            </button>
                            </div>
                            <i class="dismiss"></i>
                        </div>
                        <div class="contactConfirmation">Now following Eric Pins!</div>
                    </div>
                    </li>

                        
                    <li data-index="1" class="">
                    <div class="small UserBase User Module followFriendsItem">
                        <div class="content">
                            <a href="/wizardvoz/">
                                <span class="thumbImageWrapper">
                                        <img src="static/avatar/leakon_1407141101_60.jpg" alt="Jeff Tang">
                                </span>
                            </a>
                            <div class="contactUser">
                                <a href="/wizardvoz/" class="contactUsername">Jeff Tang</a>
                                <br>
                                            <button type="button" class="UserFollowButton Button Module hasText notNavigatable borderless ui-FollowButton">
                    <span class="buttonText">Follow</span>
                            </button>
                            </div>
                            <i class="dismiss"></i>
                        </div>
                        <div class="contactConfirmation">Now following Jeff Pins!</div>
                    </div>
                    </li>

                        
                    <li data-index="2" class="">
                        <div class="small UserBase User Module followFriendsItem">
                        <div class="content">
                            <a href="/fantasy0412/"><span class="thumbImageWrapper"><img src="static/avatar/leakon_1407141101_60.jpg" alt="月辰 景月辰"></span></a>
                            <div class="contactUser">
                                <a href="/fantasy0412/" class="contactUsername">月辰 景月辰</a>
                                <br>
                                    <button type="button" class="UserFollowButton Button Module hasText notNavigatable borderless ui-FollowButton">
                                    <span class="buttonText">Follow</span>
                                    </button>
                            </div>
                            <i class="dismiss"></i>
                        </div>
                        <div class="contactConfirmation"> Now following 月辰 Pins!    </div> 
                        </div>
                    </li>
                    </ul>
    </div>
</div>


</div>
</div>


END_OF_TEXT;

        return  $string;


    }



    public static function headerMenu($param = array()) {

        $string     = <<< END_OF_TEXT

<div data-component-type="8" class="Header Module">
<div class="headerBackground"></div>
<div class="headerContainer centeredWithinWrapper ">

        <div class="leftHeaderContent">
                <a data-element-type="147" href="/categories/" type="button" class="rounded Button DropdownButton Module primaryOnHover btn categories">
                    <em></em><span class="accessibilityText">Categories</span>
                </a>
                <div data-component-type="43" class="inHeader ui-SearchForm Module">
                <form action="/search/" method="GET" name="search">
                    <div class="inHeader search Module ui-TypeaheadField">
                        <input autocomplete="off" name="q" data-element-type="227" placeholder="Search" class="ui-Input Module field">
                        <div class="inHeader search ui-Typeahead Module">
                            <ul class="results" data-component-type="35"></ul>
                        </div>
                    </div>
                    <button class="submit" type="submit">Search</button>
                </form>
                </div>
        </div>

        <div class="dd_logo">
            <a href="#" id="logo" class="logo" data-force-refresh="1" data-element-type="146">蛋蛋咖啡</a>
        </div>

        <div class="rightHeaderContent">
            <button data-element-type="18" type="button" class="rounded Button DropdownButton Module addPinHeader primaryOnHover btn">
                <em></em><span class="accessibilityText">Add a Pin</span>
            </button>
            <button data-element-type="139" type="button" class="rounded primaryOnHover Button DropdownButton Module NotificationsButton notifs regular btn merged">
                <em></em><span class="accessibilityText">Notifications</span><span class="buttonBadge"></span>
            </button>
            <div class="userMenuWrapper">
                <div data-element-type="40" class="UserMenu merged Module">
                <div class="usernameLink">
                <span class="profileImage" style="background-image:url(static/avatar/leakon_1407141101_30.jpg)"></span>
                <span class="profileName">Leakon</span>
                </div>
                </div>
            </div>
        </div>

</div>
<div class="bookmarkletAnchor"></div>
</div>

END_OF_TEXT;

        return  $string;


    }




    public static function navBar($param = array()) {

        $string     = <<< END_OF_TEXT

    <div class="UserInfoBar InfoBarBase gridWidth Module centeredWithinWrapper v1 ajax">


        <div class="metaLeft showName">
            <div class="UserBase thumb Module hasText User small inline">
                <span><a href="#" title="">首页</a></span>
                <span>&gt;</span>
                <span><a href="#" title="">远洋光华国际</a></span>
                <span>&gt;</span>
                <span><a href="#" title="">商品列表</a></span>
            </div>
        </div>





    </div>

END_OF_TEXT;

        return  $string;


    }


    public static function footer($param = array()) {

        $string     = <<< END_OF_TEXT

<div class="ajax GridFooter Module centeredWithinWrapper" style="display: block;">
<div class="gridLoadingWrapper">
    <hr>
    <div class="gridLoading">
        <span class="gridFooterLogoIcon"></span>
        <span class="gridFooterSpinner"></span>
    </div>
</div>
</div>

END_OF_TEXT;

        return  $string;


    }



    public static function settingMain($param = array()) {

        $string     = <<< END_OF_TEXT

    <div class="standardForm" method="post">
        <ul>
            <li class="sectionTitle" id="accountBasics">
              <h2>Account Basics</h2>
            </li>
            <li>
                <h3><label>Email Address</label></h3>
                <div>
                    <input type="text" name="email" value="leakon@gmail.com">
                </div>
            </li>
            <li>
                <h3>Password</h3>
                <div>
                <button type="button" class="ShowModalButton Button Module hasText changePasswordButton borderless">
                    <span class="buttonText">Change your password...</span>
                </button>
                </div>
            </li>
            <li>
                <h3><label>Language</label></h3>
                <div>
                <select class="ui-Select Module" name="locale">
                        <option value="en-US" selected="selected"> English (US) </option>
                        <option value="es-419"> Español (América) </option>
                </select>
                </div>
            </li>
            <li>
                <h3><label>Country</label></h3>
                <div>
                <select class="ui-Select Module" name="country">
                        <option value="SX"> Sint Maarten (Dutch part) </option>
                        <option value="SK"> Slovakia (Slovensko) </option>
                        <option value="SI"> Slovenia (Slovenija) </option>
                </select>
                </div>
            </li>

            <li>
            <h3>Gender</h3>
            <div class="fieldsetWrapper">
                <fieldset class="formInlineCheckedSet">
                <ul>
                    <li>
                        <label>
                        <input name="gender" type="radio" checked="checked" value="male">
                        <span class="gender">Male</span>
                        </label>
                    </li>
                    <li>
                        <label>
                        <input name="gender" type="radio" value="female">
                        <span class="gender">Female</span>
                        </label>
                    </li>
                    <li>
                        <label>
                        <input name="gender" type="radio" value="unspecified">
                        <span class="gender">Unspecified</span>
                        </label>
                    </li>
                </ul>
                </fieldset>
            </div>

            </li>


            <li>

                <h3>Search Privacy</h3>
                <div class="fieldsetWrapper">
                    <fieldset class="formInlineCheckedSet">
                        <ul>
                        <li>
                            <label>
                            <div class="fancyToggle ui-Checkbox Module">
                            <div class="slider"></div>
                            <p class="onText status">Yes</p>
                            <p class="offText status">No</p>
                            <input type="checkbox" class="ui-Checkbox Module" name="exclude_from_search">
                            </div>
                            <span class="exclude_from_search">Keep search engines (ex: Google) from showing your Pinterest profile in search results. <a href="http://www.pinterest.com/_/_/help/entries/21051553">Learn more</a></span>
                            </label>
                        </li>
                        </ul>
                    </fieldset>
                </div>

            </li>


            <li>

                <h3><label>Personalization</label></h3>
                    <div class="personalizationSettings">
                    <span class="personalizationDetails">
                    Let Pinterest show you Related Pins and other recommendations based on:
                    </span>
                        <h3></h3>
                        <div class="fieldsetWrapper">
                        <fieldset class="formCheckedSet">
                        <ul>
                        <li>    <label>
                        <input name="personalize_from_offsite_browsing" type="radio" checked="checked" value="on">
                        <span class="personalize_from_offsite_browsing">Your activity on Pinterest AND other sites you've visited recently. <a href="http://www.pinterest.com/_/_/help/entries/25010303">Learn more</a></span>
                        </label>
                        </li>
                        <li>    <label>
                        <input name="personalize_from_offsite_browsing" type="radio" value="off">
                        <span class="personalize_from_offsite_browsing">Your activity on Pinterest.</span>
                        </label>
                        </li>
                        </ul>

                        </fieldset>
                        </div>

                    </div>
            </li>



            <li>
                <h3><label>Search history</label></h3>
                <div>
                <button type="button" class="rounded clearRecentSearches Button Module hasText btn">    
                    <span class="buttonText">Clear Recent Searches</span>
                </button>
                <span class="clearRecentSearchDetails">
                Remove things you've recently searched for from search suggestions
                </span>
                </div>
            </li>

            <li>
                <h3><label>Recent contacts</label></h3>
                <div>
                <button type="button" class="rounded Button clearRecentSentPins Module hasText btn">    
                    <span class="buttonText">Clear Recent Contacts</span>
                </button>
                <span class="clearRecentContactsDetails">
                Remove people you've sent Pins to from recent contact suggestions
                </span>
                </div>
            </li>

        </ul>








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







        <div class="fixedsticky-dummy" style="height: 53px;"></div>

    </div>



END_OF_TEXT;

        return  $string;


    }



}











