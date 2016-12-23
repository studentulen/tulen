<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?//echo '<div style="background-color:#fff;"><pre>'.print_r($arResult, "true").'</pre></div>';?>
<div class="slide slide-roundabout bg1">
    <div class="containit ornament-right">
        <div class="roundaboutshadow">
            <h1 class="mb4">Самые странные товары мира у нас в магазине.</h1>
            <p class="mb20">Но лучше ничего здесь не покупать.</p>
            <!-- roundabout images targets, prettyphoto opens on click of the middle item -->
            <!-- the actual roundabout -->
            <?if (!empty($arResult["ROWS"])):?>
                <ul id="roundabout">
                    <?foreach ($arResult["ROWS"] as $rowNum => $row):?>
                        <?foreach ($row as $columnNum => $item):?>
                            <?if(!isset($item) || empty($item)) continue;?>
                            <li id="roundaboutimage1"><a href="<?=$item["PROPERTIES"]["URL"]["VALUE"]?>"><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="" /></a></li>
                        <?endforeach;?>
                    <?endforeach;?>
                </ul>
            <?endif;?>
            <div id="filler"><!--  --></div>
        </div>
        <!-- start the roundabout with descriptions -->
        <script type="text/javascript">


            $(document).ready(function() {
                var interval;
                $('#roundabout')
                    .roundabout({
                        shape: 'lazySusan',
                        easing: 'swing',
                        minOpacity: 1, // 1 fully visible, 0 invisible
                        minScale: 0.5, // tiny!
                        duration: 400,
                        btnNext: '#roundaboutnext',
                        btnPrev: '#roundaboutprevious',
                        clickToFocus: true
                    });
            });
            function startAutoPlay() {
                return setInterval(function() {
                    $('#roundabout').roundabout_animateToNextChild();
                }, 3000);
            }
            //]]>
        </script>
    </div>

</div>