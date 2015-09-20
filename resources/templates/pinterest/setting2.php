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










<div class="tocAndFormWrapper tocAndFormWrapper_setting">
    <ul class="toc" xstyle="left: 345px; top: 95px;">
        <li class="selected"><a href="#accountBasics">Account Basics</a></li>
        <li><a href="#profile">Profile</a></li>
        <li><a href="#emailNotifications">Email Notifications</a></li>
        <li><a href="#socialNetworks">Social Networks</a></li>
        <li><a href="#apps">Apps</a></li>
    </ul>

<form class="standardForm standardForm_setting" method="post" xstyle="height: 2625px;">
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
                    <select class="ui-Select Module" name="locale"></select>
                </div>
            </li>
                        <li>
                <h3><label>Country</label></h3>
                <div>
                    <select class="ui-Select Module" name="country"></select>
                </div>
            </li>
                                    <li>
                        <h3>Gender</h3>
    <div class="fieldsetWrapper">
        <fieldset class="formInlineCheckedSet">
                    <ul>
                            <li>    <label>
                    <input name="gender" type="radio" checked="checked" value="male">
                <span class="gender">Male</span>
    </label>
</li>
                            <li>    <label>
                    <input name="gender" type="radio" value="female">
                <span class="gender">Female</span>
    </label>
</li>
                            <li>    <label>
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
                            <li>    <label>
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

        <ul class="full_page UserEdit Module">


    





    <li class="sectionTitle" id="profile">
        <h2>Profile</h2>
    </li>

<li>
    <h3><label for="userFirstName">Name</label></h3>
    <div>
                <input type="text" class="name first" name="first_name" id="userFirstName" value="Leakon">
                    <input type="text" class="name last" name="last_name" id="userLastName" value="Liu">
            </div>
</li>
<li>
    <h3><label>Picture</label></h3>
    <div>
        <div class="profileImageWrapper">
            <img src="static/avatar/leakon_1407141101_75.jpg" class="profileImage" style="">

        </div>
        <button type="button" class="rounded ShowModalButton Button Module changePhoto hasText btn">    


<span class="buttonText">Change Picture</span>
        </button>
    </div>
</li>

<li>
    <h3><label for="userUserName">Username</label></h3>
    <div>
                <span class="domain" title="www.pinterest.com/">www.pinterest.com/</span>
        <input type="text" name="username" class="username" id="userUserName" value="leakon">
    </div>
</li>
<li>
    <h3><label for="userAbout">About You</label></h3>
    <div>
        <textarea name="about" id="userAbout"></textarea>
    </div>
</li>
<li>
    <h3><label for="userLocation">Location</label></h3>
    <div>
        <input type="text" name="location" id="userLocation" value="">
    </div>
</li>
<li>
    <h3><label for="userWebsite">Website</label></h3>
    <div class="UserEditVerifyWebsite Module">


<div class="verifiedDomainContainer hidden">
        <span class="verifiedDomainIcon"></span>
        Site verified
</div>

<button disabled="disabled" type="button" class="rounded Button Module verifyButton disabled hasText btn">
        


<span class="buttonText">Verify Website</span>
        </button>

<div class="fillWidth">
    <input type="url" name="website_url" class="website" id="userWebsite" value="">
</div>
</div>
</li>

</ul>

            
    


        

        

        <div class="formFooter fixedsticky-on">

            <div class="formFooterDelete">

                <button type="button" class="rounded deleteAccountButton Button Module hasText btn">    


<span class="buttonText">Deactivate Account</span>
        </button>
            </div>

            <div class="formFooterButtons">

                                <button type="button" class="rounded NavigateButton Button Module hasText cancel btn">
    


<span class="buttonText">Cancel</span>
        </button>

                <button type="submit" class="rounded Button primary Module hasText btn saveSettingsButton">    


<span class="buttonText">Save Settings</span>
        </button>
            </div>
        </div><div class="fixedsticky-dummy" style="height: 53px;"></div>
    </form>
</div>

































































































        </div>
        </div>

   
</div>
</div>


</body>
</html>

