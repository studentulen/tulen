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
        <div class="logo"><?if(!CSite::InDir('/')):?><a href="/"><?endif;?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                    )
                );?>
                <?if(!CSite::InDir('/')):?></a><?endif;?></div>

        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top_menu",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N",
                "MAX_LEVEL" => "2",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "left",
                "USE_EXT" => "Y"
            ),
            false
        );?><br>
        <div class="clear"></div>

    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:photo.section",
        "photoslider",
        Array(
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BROWSER_TITLE" => "-",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "ELEMENT_SORT_FIELD" => "sort",
            "ELEMENT_SORT_ORDER" => "asc",
            "FIELD_CODE" => array("ID", "NAME", "SORT", "PREVIEW_PICTURE", ""),
            "FILTER_NAME" => "arrFilter",
            "IBLOCK_ID" => "7",
            "IBLOCK_TYPE" => "content",
            "LINE_ELEMENT_COUNT" => "3",
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Фотографии",
            "PAGE_ELEMENT_COUNT" => "20",
            "PROPERTY_CODE" => array("URL", ""),
            "SECTION_CODE" => "",
            "SECTION_ID" => $_REQUEST["SECTION_ID"],
            "SECTION_URL" => "",
            "SECTION_USER_FIELDS" => array("", ""),
            "SET_LAST_MODIFIED" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N"
        )
    );?>
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