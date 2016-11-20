<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.11.16
 * Time: 20:14
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH;?>/_include/js/js.js"></script>
</head>

<body onload="new Accordian('basic-accordian',5,'header_highlight');">
<?$APPLICATION->ShowPanel();?>
<div id="main_container">
    <div id="header">
        <div id="logo"><a href="home.html"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/logo.gif" alt="" title="" border="0" /></a></div>

        <div id="menu">
            <ul>
                <li><a class="current" href="#" title="">home</a></li>
                <li class="divider"></li>
                <li><a href="#" title="">webdesign</a></li>
                <li class="divider"></li>
                <li><a href="#" title="">identity</a></li>
                <li class="divider"></li>
                <li><a href="#" title="">print</a></li>
                <li class="divider"></li>
                <li><a href="#" title="">contact</a></li>
            </ul>
        </div>

    </div>


    <div id="middle_box"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/middle_banner.png" alt="" title="" />
    </div>

    <div id="main_content">

        <div class="left_content">

            <div id="basic-accordian">
                <div id="test-header" class="accordion_headings header_highlight" >featured projects</div>

                <div id="test-content">
                    <div class="accordion_child">
                        <h2>Project name</h2>
                        <img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/project.gif" alt="" title="" />
                        <p class="tab">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                </div>



                <div id="test1-header" class="accordion_headings" >our clients</div>

                <div id="test1-content">
                    <div class="accordion_child">
                        <h2>our clients</h2>
                        <p class="tab">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                        <p class="tab">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>

                </div>


                <div id="test2-header" class="accordion_headings" >main services</div>
                <div id="test2-content">
                    <div class="accordion_child">
                        <h2>main services</h2>
                        <p class="tab">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                        <p class="tab">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        </p>
                    </div>
                </div>

            </div>

        </div>

        <div class="right_content">
            <div class="title">Latest news</div>
            <div class="news_tab">
                <h1>Ut enim ad minim veniam</h1>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                <div class="news_details"><span class="date">13.02.2008</span> <span class="user">by admin</span></div>
            </div>

            <div class="news_tab">
                <h1>Ut enim ad minim veniam</h1>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                <div class="news_details"><span class="date">13.02.2008</span> <span class="user">by admin</span></div>
            </div>

            <div class="news_tab">
                <h1>Ut enim ad minim veniam</h1>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                <div class="news_details"><span class="date">13.02.2008</span> <span class="user">by admin</span></div>
            </div>

            <a href="#" class="read_more">view all news</a>

        </div>


        <div class="clear"></div>
    </div>