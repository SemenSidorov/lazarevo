<?

include ($_SERVER["DOCUMENT_ROOT"]. "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->RestartBuffer();

http_response_code(404);
require($_SERVER["DOCUMENT_ROOT"].'/../errordocs/404.html');
?>
