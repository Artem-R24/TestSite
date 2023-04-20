<?
$d=array(1,2,3,4,5);
<?foreach($d as $p):?>
	/*$arSelect = Array("ID","IBLOCK_ID","PROPERTY_*");
	$arFilter = Array("IBLOCK_ID"=>$id);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	while($ob = $res->GetNextElement()){ 
	   $arProps = $ob->GetProperties();
	   $strTags="";
	   <?foreach($props as $prop):?>
	      if(strcmp($strTags,"")!=0)
			  strTags+=', ';
	      $strTags+=$arProps[$prop]['VALUE'];
	   <?endforeach;?>
	   if(strcmp($ob->GetFields()['TAGS'],$strTags)!=0)
		{
		   $el = new CIBlockElement;
		   $result = $el->Update($ob->GetFields()['ID'],Array('TAGS'=>$strTags));
		}
	}*/
	echo '*'
	//test_dump($props);
<?endforeach;?>
?>
