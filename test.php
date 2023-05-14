<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест");
?>
<?
$id = 8;
$props = array("TITLE","TEXT","NUM");
?>
<?$comp = $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"advanced_slider",
	Array(
		"IBLOCK_ID" => $id,
		"PROPERTY_CODE" => $props
	)
);?><br>
<?
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
echo "DONE!";
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>