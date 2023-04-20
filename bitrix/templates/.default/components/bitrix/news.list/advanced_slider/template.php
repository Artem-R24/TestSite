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

<div class="slider">
	<div class="slide-track">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	  <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
		<div class="slide">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" height="250" width="250" alt="" />
		</div>
	  <?endif;?>
	<?endforeach;?>	
	</div>
</div>