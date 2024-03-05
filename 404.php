<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>

<h1>404: Страница не найдена!</h1>

<h3>Карта сайта</h3>
<?
$APPLICATION->IncludeComponent(
	"bitrix:main.map", 
	".default", 
	array(
		"LEVEL" => "2",
		"COL_NUM" => "2",
		"SHOW_DESCRIPTION" => "Y",
		"SET_TITLE" => "N",
		"CACHE_TIME" => "36000000",
		"COMPONENT_TEMPLATE" => ".default",
		"CACHE_TYPE" => "A"
	),
	false
);



require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
