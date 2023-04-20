<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');

$data=Array(2=>Array('MATERIAL','MANUFACTURER'),8=>Array('TITLE','TEXT','NUM'));
foreach($data as $id=>$props)
{
	$arSelect = Array("ID","IBLOCK_ID","PROPERTY_*");
	$arFilter = Array("IBLOCK_ID"=>$id);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	while($ob = $res->GetNextElement()){ 
	   $arProps = $ob->GetProperties();
	   $strTags="";
	   foreach($props as $prop)
	   {
	      if(strcmp($strTags,"")!=0)
		    $strTags=$strTags.', ';
	      $strTags=$strTags.$arProps[$prop]['VALUE'];
	   }
	   if(strcmp($ob->GetFields()['TAGS'],$strTags)!=0)
		{
		   $el = new CIBlockElement;
		   $result = $el->Update($ob->GetFields()['ID'],Array('TAGS'=>$strTags));
		}
	}
}
echo "Done!";
?>