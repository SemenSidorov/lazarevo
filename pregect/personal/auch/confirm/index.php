<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Подтверждение регистрации");
?>
<?/*$APPLICATION->IncludeComponent("bitrix:system.auth.confirmation", "new", Array(
	"CONFIRM_CODE" => "confirm_code",	// Название переменной, в которой передается код подтверждения
		"LOGIN" => "login",	// Название переменной, в которой передается логин пользователя
		"USER_ID" => "confirm_user_id",	// Название переменной, в которой передается ID пользователя
	),
	false
);*/?>
<?
	if($_GET["ID"] && $_GET["TOKEN"]){
		$user = CUser::GetByID($_GET["ID"]);
		$user = $user->Fetch();
		if($user["UF_CODE"] == $_GET["TOKEN"]){
	    $obUser = new CUser;
	    $obUser->Update($user["ID"], ["ACTIVE" => "Y", "UF_CODE" => ""]);
			global $USER;
			$USER->Authorize($user["ID"]);
			LocalRedirect("/personal/");
		}
	}
	if($_GET["LOGIN"] && $_GET["TOKEN"]){
		$user = CUser::GetByLogin($_GET["LOGIN"]);
		$user = $user->Fetch();
		if($user["UF_CODE"] == $_GET["TOKEN"]){
			$obUser = new CUser;
	    $obUser->Update($user["ID"], ["ACTIVE" => "Y", "UF_CODE" => ""]);
			global $USER;
			$USER->Authorize($user["ID"]);
			LocalRedirect("/personal/");
		}
	}
?>
<div class="wrap register_wrap">
<form id="confirmReg" method="get">
	<input type="text" name="LOGIN" placeholder="Логин" value="">
	<input type="text" name="TOKEN" placeholder="Код подтверждения" value="">
	<input type="submit" name="" value="Отправить">
</form>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
