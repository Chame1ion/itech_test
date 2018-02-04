<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/articles/#",
		"RULE" => "",
		"ID" => "my_components:iblock.element.add.form",
		"PATH" => "/articlesadd.php",
	),
	array(
		"CONDITION" => "#^/articles/#",
		"RULE" => "",
		"ID" => "my_components:news",
		"PATH" => "/articles/novosti.php",
	),
	array(
		"CONDITION" => "#^/photo/#",
		"RULE" => "",
		"ID" => "bitrix:photogallery",
		"PATH" => "/photo.php",
	),
);

?>