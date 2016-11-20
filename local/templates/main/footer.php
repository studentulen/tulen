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
<div id="footer">
    <div class="one-fourth panel border-vert-left">
        <div class="padleft">
            <h4>Contact</h4>
            <p>Curabitur placerat, urna eu fringilla placerat, urna eu venenatis</p>

            <b class="big"><?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone.php"
                    )
                );?>
            </b><br/>
            <b class="big"><?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone2.php"
                    )
                );?>
            </b><br/>
            <a href="#"><?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/email.php"
                    )
                );?></a><br/>
        </div>
    </div>
    <div class="copyright">
        <img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/footer_logo.gif" alt="" title="" />
    </div>
    <div class="footer_links">
        <a href=""><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/csstemplatesmarket.gif" alt="csstemplatesmarket" title="csstemplatesmarket" border="0" /></a>
    </div>


</div>


</div>
</body>
</html>
