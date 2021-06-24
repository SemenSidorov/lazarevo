<?
use Bitrix\Main\Sms\TemplateTable;

AddEventHandler("sale", "OnOrderNewSendEmail", "OnOrderNewSendEmailHandler");
// AddEventHandler("sale", "OnOrderDeliverSendEmail", "OnOrderDeliverSendEmailHandler");
AddEventHandler("sale", "OnOrderPaySendEmail", "OnOrderPaySendEmailHandler");
AddEventHandler("sale", "OnOrderCancelSendEmail", "OnOrderCancelSendEmailHandler");
AddEventHandler("sale", "OnSaleStatusEMail", "OnSaleStatusEMailHandler");
// AddEventHandler("sale", "OnOrderStatusSendEmail", "OnOrderStatusSendEmailHandler");
// AddEventHandler("sale", "OnOrderRemindSendEmail", "OnOrderRemindSendEmailHandler");
// AddEventHandler("sale", "OnOrderRecurringSendEmail", "OnOrderRecurringSendEmailHandler");
// AddEventHandler("sale", "OnOrderRecurringCancelSendEmail", "OnOrderRecurringCancelSendEmailHandler");
AddEventHandler("main", "OnAfterUserRegister", "OnAfterUserRegisterHandler");

function OnOrderNewSendEmailHandler($id, $eventName, $arFields){
  $arFilter = ["EVENT_NAME" => $eventName."_SMS", "ACTIVE" => "Y"];
  $eTemps = TemplateTable::getList(['filter' => $arFilter, 'order' => ['ID' => 'DESC']]);
  if($eTemp = $eTemps->fetch()){
    $message = $eTemp["MESSAGE"];
    foreach ($arFields as $key => $field) {
      $message = str_replace('#'.$key.'#', htmlspecialchars_decode($field), $message);
    }
    $message = str_replace('#SITE_NAME#', "http://lazarevo.brevis.pro/", $message);
    $message = str_replace('&nbsp;', " ", $message);
    $message = str_replace('&#8381;', "руб", $message);
    $message = str_replace('<br/>', "", $message);

  	$order = CSaleOrder::GetByID($arFields["ORDER_ID"]);
  	$user = CUser::GetByID($order["USER_ID"]);
  	$user = $user->Fetch();

    $number = (int)preg_replace('/[^0-9]/', '', $user["PERSONAL_PHONE"]);
    $username = "CNT_lzrvsk";
    $password = "70Me1PQb";
    $json = [
      "from" => "lazarevskoe",
      "to" => $number,
      "message" => $message,
    ];

    // авторизация
    $ch = curl_init("https://a2p-api.megalabs.ru/sms/v1/sms/");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
  }
}

// function OnOrderDeliverSendEmailHandler($id, $eventName, $arFields){
//   $arFilter = ["EVENT_NAME" => $eventName."_SMS", "ACTIVE" => "Y"];
//   $eTemps = TemplateTable::getList(['filter' => $arFilter, 'order' => ['ID' => 'DESC']]);
//   if($eTemp = $eTemps->fetch()){
//     $message = $eTemp["MESSAGE"];
//     foreach ($arFields as $key => $field) {
//       $message = str_replace('#'.$key.'#', htmlspecialchars_decode($field), $message);
//     }
//     $message = str_replace('#SITE_NAME#', "http://lazarevo.brevis.pro/", $message);
//     $message = str_replace('&nbsp;', " ", $message);
//     $message = str_replace('&#8381;', "руб", $message);
//     $message = str_replace('<br/>', "", $message);
//
//   	$order = CSaleOrder::GetByID($arFields["ORDER_ID"]);
//   	$user = CUser::GetByID($order["USER_ID"]);
//   	$user = $user->Fetch();
//
//     $number = (int)preg_replace('/[^0-9]/', '', $user["PERSONAL_PHONE"]);
//     $username = "CNT_lzrvsk";
//     $password = "70Me1PQb";
//     $json = [
//       "from" => "lazarevskoe",
//       "to" => $number,
//       "message" => $message,
//     ];
//
//     // авторизация
//     $ch = curl_init("https://a2p-api.megalabs.ru/sms/v1/sms/");
//     curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//     curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
//     curl_setopt($ch, CURLOPT_ENCODING, '');
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     $response = curl_exec($ch);
//     curl_close($ch);
//   }
// }

function OnOrderPaySendEmailHandler($id, $eventName, $arFields){
  $arFilter = ["EVENT_NAME" => $eventName."_SMS", "ACTIVE" => "Y"];
  $eTemps = TemplateTable::getList(['filter' => $arFilter, 'order' => ['ID' => 'DESC']]);
  if($eTemp = $eTemps->fetch()){
    $message = $eTemp["MESSAGE"];
    foreach ($arFields as $key => $field) {
      $message = str_replace('#'.$key.'#', htmlspecialchars_decode($field), $message);
    }
    $message = str_replace('#SITE_NAME#', "http://lazarevo.brevis.pro/", $message);
    $message = str_replace('&nbsp;', " ", $message);
    $message = str_replace('&#8381;', "руб", $message);
    $message = str_replace('<br/>', "", $message);

  	$order = CSaleOrder::GetByID($arFields["ORDER_ID"]);
  	$user = CUser::GetByID($order["USER_ID"]);
  	$user = $user->Fetch();

    $number = (int)preg_replace('/[^0-9]/', '', $user["PERSONAL_PHONE"]);
    $username = "CNT_lzrvsk";
    $password = "70Me1PQb";
    $json = [
      "from" => "lazarevskoe",
      "to" => $number,
      "message" => $message,
    ];

    // авторизация
    $ch = curl_init("https://a2p-api.megalabs.ru/sms/v1/sms/");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
  }
}

function OnOrderCancelSendEmailHandler($id, $eventName, $arFields){
  $arFilter = ["EVENT_NAME" => $eventName."_SMS", "ACTIVE" => "Y"];
  $eTemps = TemplateTable::getList(['filter' => $arFilter, 'order' => ['ID' => 'DESC']]);
  if($eTemp = $eTemps->fetch()){
    $message = $eTemp["MESSAGE"];
    foreach ($arFields as $key => $field) {
      $message = str_replace('#'.$key.'#', htmlspecialchars_decode($field), $message);
    }
    $message = str_replace('#SITE_NAME#', "http://lazarevo.brevis.pro/", $message);
    $message = str_replace('&nbsp;', " ", $message);
    $message = str_replace('&#8381;', "руб", $message);
    $message = str_replace('<br/>', "", $message);

  	$order = CSaleOrder::GetByID($arFields["ORDER_ID"]);
  	$user = CUser::GetByID($order["USER_ID"]);
  	$user = $user->Fetch();

    $number = (int)preg_replace('/[^0-9]/', '', $user["PERSONAL_PHONE"]);
    $username = "CNT_lzrvsk";
    $password = "70Me1PQb";
    $json = [
      "from" => "lazarevskoe",
      "to" => $number,
      "message" => $message,
    ];

    // авторизация
    $ch = curl_init("https://a2p-api.megalabs.ru/sms/v1/sms/");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
  }
}

function OnSaleStatusEMailHandler($id, $eventName, $arFields){
  $arFilter = ["EVENT_NAME" => $eventName."_SMS", "ACTIVE" => "Y"];
  $eTemps = TemplateTable::getList(['filter' => $arFilter, 'order' => ['ID' => 'DESC']]);
  if($eTemp = $eTemps->fetch()){
    $message = $eTemp["MESSAGE"];
    foreach ($arFields as $key => $field) {
      $message = str_replace('#'.$key.'#', htmlspecialchars_decode($field), $message);
    }
    $message = str_replace('#SITE_NAME#', "http://lazarevo.brevis.pro/", $message);
    $message = str_replace('&nbsp;', " ", $message);
    $message = str_replace('&#8381;', "руб", $message);
    $message = str_replace('<br/>', "", $message);

  	$order = CSaleOrder::GetByID($arFields["ORDER_ID"]);
  	$user = CUser::GetByID($order["USER_ID"]);
  	$user = $user->Fetch();

    $number = (int)preg_replace('/[^0-9]/', '', $user["PERSONAL_PHONE"]);
    $username = "CNT_lzrvsk";
    $password = "70Me1PQb";
    $json = [
      "from" => "lazarevskoe",
      "to" => $number,
      "message" => $message,
    ];

    // авторизация
    $ch = curl_init("https://a2p-api.megalabs.ru/sms/v1/sms/");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
  }
}

// function OnOrderStatusSendEmailHandler($id, $eventName, $arFields){
//   $arFilter = ["EVENT_NAME" => $eventName."_SMS", "ACTIVE" => "Y"];
//   $eTemps = TemplateTable::getList(['filter' => $arFilter, 'order' => ['ID' => 'DESC']]);
//   if($eTemp = $eTemps->fetch()){
//     $message = $eTemp["MESSAGE"];
//     foreach ($arFields as $key => $field) {
//       $message = str_replace('#'.$key.'#', htmlspecialchars_decode($field), $message);
//     }
//     $message = str_replace('#SITE_NAME#', "http://lazarevo.brevis.pro/", $message);
//     $message = str_replace('&nbsp;', " ", $message);
//     $message = str_replace('&#8381;', "руб", $message);
//     $message = str_replace('<br/>', "", $message);
//
//   	$order = CSaleOrder::GetByID($arFields["ORDER_ID"]);
//   	$user = CUser::GetByID($order["USER_ID"]);
//   	$user = $user->Fetch();
//
//     $number = (int)preg_replace('/[^0-9]/', '', $user["PERSONAL_PHONE"]);
//     $username = "CNT_lzrvsk";
//     $password = "70Me1PQb";
//     $json = [
//       "from" => "lazarevskoe",
//       "to" => $number,
//       "message" => $message,
//     ];
//
//     // авторизация
//     $ch = curl_init("https://a2p-api.megalabs.ru/sms/v1/sms/");
//     curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//     curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
//     curl_setopt($ch, CURLOPT_ENCODING, '');
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     $response = curl_exec($ch);
//     curl_close($ch);
//   }
// }

// function OnOrderRemindSendEmailHandler($id, $eventName, $arFields){
//   $arFilter = ["EVENT_NAME" => $eventName."_SMS", "ACTIVE" => "Y"];
//   $eTemps = TemplateTable::getList(['filter' => $arFilter, 'order' => ['ID' => 'DESC']]);
//   if($eTemp = $eTemps->fetch()){
//     $message = $eTemp["MESSAGE"];
//     foreach ($arFields as $key => $field) {
//       $message = str_replace('#'.$key.'#', htmlspecialchars_decode($field), $message);
//     }
//     $message = str_replace('#SITE_NAME#', "http://lazarevo.brevis.pro/", $message);
//     $message = str_replace('&nbsp;', " ", $message);
//     $message = str_replace('&#8381;', "руб", $message);
//     $message = str_replace('<br/>', "", $message);
//
//   	$order = CSaleOrder::GetByID($arFields["ORDER_ID"]);
//   	$user = CUser::GetByID($order["USER_ID"]);
//   	$user = $user->Fetch();
//
//     $number = (int)preg_replace('/[^0-9]/', '', $user["PERSONAL_PHONE"]);
//     $username = "CNT_lzrvsk";
//     $password = "70Me1PQb";
//     $json = [
//       "from" => "lazarevskoe",
//       "to" => $number,
//       "message" => $message,
//     ];
//
//     // авторизация
//     $ch = curl_init("https://a2p-api.megalabs.ru/sms/v1/sms/");
//     curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//     curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
//     curl_setopt($ch, CURLOPT_ENCODING, '');
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     $response = curl_exec($ch);
//     curl_close($ch);
//   }
// }

// function OnOrderRecurringSendEmailHandler($id, $eventName, $arFields){
//   $arFilter = ["EVENT_NAME" => $eventName."_SMS", "ACTIVE" => "Y"];
//   $eTemps = TemplateTable::getList(['filter' => $arFilter, 'order' => ['ID' => 'DESC']]);
//   if($eTemp = $eTemps->fetch()){
//     $message = $eTemp["MESSAGE"];
//     foreach ($arFields as $key => $field) {
//       $message = str_replace('#'.$key.'#', htmlspecialchars_decode($field), $message);
//     }
//     $message = str_replace('#SITE_NAME#', "http://lazarevo.brevis.pro/", $message);
//     $message = str_replace('&nbsp;', " ", $message);
//     $message = str_replace('&#8381;', "руб", $message);
//     $message = str_replace('<br/>', "", $message);
//
//   	$order = CSaleOrder::GetByID($arFields["ORDER_ID"]);
//   	$user = CUser::GetByID($order["USER_ID"]);
//   	$user = $user->Fetch();
//
//     $number = (int)preg_replace('/[^0-9]/', '', $user["PERSONAL_PHONE"]);
//     $username = "CNT_lzrvsk";
//     $password = "70Me1PQb";
//     $json = [
//       "from" => "lazarevskoe",
//       "to" => $number,
//       "message" => $message,
//     ];
//
//     // авторизация
//     $ch = curl_init("https://a2p-api.megalabs.ru/sms/v1/sms/");
//     curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//     curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
//     curl_setopt($ch, CURLOPT_ENCODING, '');
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     $response = curl_exec($ch);
//     curl_close($ch);
//   }
// }

// function OnOrderRecurringCancelSendEmailHandler($id, $eventName, $arFields){
//   $arFilter = ["EVENT_NAME" => $eventName."_SMS", "ACTIVE" => "Y"];
//   $eTemps = TemplateTable::getList(['filter' => $arFilter, 'order' => ['ID' => 'DESC']]);
//   if($eTemp = $eTemps->fetch()){
//     $message = $eTemp["MESSAGE"];
//     foreach ($arFields as $key => $field) {
//       $message = str_replace('#'.$key.'#', htmlspecialchars_decode($field), $message);
//     }
//     $message = str_replace('#SITE_NAME#', "http://lazarevo.brevis.pro/", $message);
//     $message = str_replace('&nbsp;', " ", $message);
//     $message = str_replace('&#8381;', "руб", $message);
//     $message = str_replace('<br/>', "", $message);
//
//   	$order = CSaleOrder::GetByID($arFields["ORDER_ID"]);
//   	$user = CUser::GetByID($order["USER_ID"]);
//   	$user = $user->Fetch();
//
//     $number = (int)preg_replace('/[^0-9]/', '', $user["PERSONAL_PHONE"]);
//     $username = "CNT_lzrvsk";
//     $password = "70Me1PQb";
//     $json = [
//       "from" => "lazarevskoe",
//       "to" => $number,
//       "message" => $message,
//     ];
//
//     // авторизация
//     $ch = curl_init("https://a2p-api.megalabs.ru/sms/v1/sms/");
//     curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//     curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
//     curl_setopt($ch, CURLOPT_ENCODING, '');
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     $response = curl_exec($ch);
//     curl_close($ch);
//   }
// }

function OnAfterUserRegisterHandler($arFields){
  if($arFields["USER_ID"]){
  	$user = CUser::GetByID($arFields["USER_ID"]);
  	$user = $user->Fetch();

    $str="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQSTUVWXYZ1234567890";
    $rand_num = rand(0, 51);
    $str = str_shuffle($str);
    $token = substr($str, $rand_num, 10);

    $message = "Здравствуйте! Вы зарегистрировались на сайте http://lazarevo.brevis.pro/ ! Введите код подтверждения - " . $token . " либо перейдите по ссылке - http://lazarevo.brevis.pro/personal/auch/confirm/?ID=" . $arFields["USER_ID"] . "&TOKEN=" . $token;

    $number = (int)preg_replace('/[^0-9]/', '', $user["PERSONAL_PHONE"]);
    $username = "CNT_lzrvsk";
    $password = "70Me1PQb";
    $json = [
      "from" => "lazarevskoe",
      "to" => $number,
      "message" => $message,
    ];

    // авторизация
    $ch = curl_init("https://a2p-api.megalabs.ru/sms/v1/sms/");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);

    $user = new CUser;
    $user->Update($arFields["USER_ID"], ["ACTIVE" => "N", "UF_CODE" => $token]);
  }
}
