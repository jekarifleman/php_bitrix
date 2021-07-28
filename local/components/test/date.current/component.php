<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

\Bitrix\Main\Loader::includeModule('iblock');

$arDates = [];

$arFilter = array(
    'IBLOCK_ID' => 1,
    'ACTIVE' => 'Y',
);

$res = CIBlockElement::GetList(array(), $arFilter, false, false, array('ID','NAME','ACTIVE', 'DATE'));

echo "<pre>";

// запрос элементов инфоблока
while ($element = $res->GetNext()) {
    // запрос свойств конкретного элемента инфоблока
	$db_props = CIBlockElement::GetProperty($arFilter['IBLOCK_ID'], $element['ID'], array("sort" => "asc"), Array());
	while($ar_props = $db_props->Fetch()){
		   //Выводим все параметры данного свойства
		$arDates[] = $ar_props['VALUE'];
	}
}

$arResult['DATES'] = $arDates;
$this->IncludeComponentTemplate();
?>
