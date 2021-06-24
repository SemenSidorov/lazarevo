<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

\Bitrix\Main\Page\Asset::getInstance()->addCss(
	'/bitrix/css/main/system.auth/flat/style.css'
);

if ($arResult['AUTHORIZED'])
{
	echo Loc::getMessage('MAIN_AUTH_FORM_SUCCESS');
	return;
}
?>
<?if ($arResult['ERRORS']):?>
<?print_r($arResult['ERRORS']);?>
<div class="alert alert-danger">
	<? foreach ($arResult['ERRORS'] as $error)
	{
		echo $error;
	}
	?>
</div>
<?endif;?>

<div class="wrap">
	<div class="reg-page">
		<h1>Авторизация</h1>
		<div class="social">
			<p>Пожалуйста авторизируйтесь</p>
			<a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social1.png"></a>
			<a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social2.png"></a>
		</div>
		<form name="<?= $arResult['FORM_ID'];?>" method="post" target="_top" action="<?= POST_FORM_ACTION_URI;?>">
			<input type="text" placeholder="<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_LOGIN');?>" name="<?= $arResult['FIELDS']['login'];?>" maxlength="255" value="<?= \htmlspecialcharsbx($arResult['LAST_LOGIN']);?>" />
			<input type="password" placeholder="<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_PASS');?>" name="<?= $arResult['FIELDS']['password'];?>" maxlength="255" autocomplete="off" />
			<?if ($arResult['STORE_PASSWORD'] == 'Y'):?>
				<input type="checkbox" id="USER_REMEMBER" name="<?= $arResult['FIELDS']['remember'];?>" value="Y" />
				<label for="agree"><?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_REMEMBER');?></label>
			<?endif?>
			<div class="button">
				<input type="submit" class="btn btn-primary" name="<?= $arResult['FIELDS']['action'];?>" value="<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_SUBMIT');?>" />
				<p>
					<a href="<?= $arResult['AUTH_FORGOT_PASSWORD_URL'];?>" rel="nofollow">
						<?= Loc::getMessage('MAIN_AUTH_FORM_URL_FORGOT_PASSWORD');?>
					</a>
				</p>
				<p>Если вы впервые на сайте, заполните, пожалуйста, регистрационную форму.</p>
				<p>
					<a href="<?= $arResult['AUTH_REGISTER_URL'];?>" rel="nofollow">
						<?= Loc::getMessage('MAIN_AUTH_FORM_URL_REGISTER_URL');?>
					</a>
				</p>
			</div>
		</form>
	</div>
</div>
