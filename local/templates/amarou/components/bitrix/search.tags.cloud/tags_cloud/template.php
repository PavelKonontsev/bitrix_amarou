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


<h5 class="widget-title">Tags</h5>
<div class="widget-content">

<?
if(is_array($arResult["SEARCH"]) && !empty($arResult["SEARCH"])):
?>
<ul class="list-unstyled">
    <? foreach ($arResult["SEARCH"] as $key => $res): ?>
    <li><a href="<?=$res["URL"]?>"><?=$res["NAME"]?></a></li>
    <? endforeach; ?>
</ul>
<?
else:
	echo GetMessage('SEARCH_NOTHING_TO_FOUND');
endif;
?>

</div><!-- /.widget-content -->

