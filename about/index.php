<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О себе");
?>
	<div style="padding: 0 100px 0  100px  ">
		<h3> На данным момент я, Иванчиков Дмитрий Андреевич, являюсь студентом 4 курса Тульского Государственного Университета. Параллельно прохожу стажеровку в ООО"Максимастер".</h3>
	</div>
<?
$APPLICATION->IncludeComponent("maximaster:brend", "",
	array(
		"BREND_ID" => $arResult[1]
	),
	false
); ?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>