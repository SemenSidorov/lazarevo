<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<div class="wrap">
  <?$APPLICATION->IncludeComponent(
  	"bitrix:news.list",
  	"main_slider",
  	Array(
  		"ACTIVE_DATE_FORMAT" => "d.m.Y",
  		"ADD_SECTIONS_CHAIN" => "N",
  		"AJAX_MODE" => "N",
  		"AJAX_OPTION_ADDITIONAL" => "",
  		"AJAX_OPTION_HISTORY" => "N",
  		"AJAX_OPTION_JUMP" => "N",
  		"AJAX_OPTION_STYLE" => "Y",
  		"CACHE_FILTER" => "N",
  		"CACHE_GROUPS" => "Y",
  		"CACHE_TIME" => "36000000",
  		"CACHE_TYPE" => "A",
  		"CHECK_DATES" => "Y",
  		"DETAIL_URL" => "",
  		"DISPLAY_BOTTOM_PAGER" => "N",
  		"DISPLAY_DATE" => "Y",
  		"DISPLAY_NAME" => "Y",
  		"DISPLAY_PICTURE" => "Y",
  		"DISPLAY_PREVIEW_TEXT" => "Y",
  		"DISPLAY_TOP_PAGER" => "N",
  		"FIELD_CODE" => array(0=>"",1=>"",),
  		"FILTER_NAME" => "",
  		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
  		"IBLOCK_ID" => "6",
  		"IBLOCK_TYPE" => "content",
  		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
  		"INCLUDE_SUBSECTIONS" => "Y",
  		"MESSAGE_404" => "",
  		"NEWS_COUNT" => "20",
  		"PAGER_BASE_LINK_ENABLE" => "N",
  		"PAGER_DESC_NUMBERING" => "N",
  		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
  		"PAGER_SHOW_ALL" => "N",
  		"PAGER_SHOW_ALWAYS" => "N",
  		"PAGER_TEMPLATE" => ".default",
  		"PAGER_TITLE" => "Новости",
  		"PARENT_SECTION" => "",
  		"PARENT_SECTION_CODE" => "",
  		"PREVIEW_TRUNCATE_LEN" => "",
  		"PROPERTY_CODE" => array(0=>"LINK",1=>"",),
  		"SET_BROWSER_TITLE" => "N",
  		"SET_LAST_MODIFIED" => "N",
  		"SET_META_DESCRIPTION" => "N",
  		"SET_META_KEYWORDS" => "N",
  		"SET_STATUS_404" => "N",
  		"SET_TITLE" => "N",
  		"SHOW_404" => "N",
  		"SORT_BY1" => "ACTIVE_FROM",
  		"SORT_BY2" => "SORT",
  		"SORT_ORDER1" => "DESC",
  		"SORT_ORDER2" => "ASC",
  		"STRICT_SECTION_CHECK" => "N"
  	)
  );?>
  <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"main", 
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "main",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "SORT",
			5 => "DESCRIPTION",
			6 => "PICTURE",
			7 => "DETAIL_PICTURE",
			8 => "IBLOCK_TYPE_ID",
			9 => "IBLOCK_ID",
			10 => "IBLOCK_CODE",
			11 => "IBLOCK_EXTERNAL_ID",
			12 => "DATE_CREATE",
			13 => "CREATED_BY",
			14 => "TIMESTAMP_X",
			15 => "MODIFIED_BY",
			16 => "",
		),
		"SECTION_ID" => "0",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE"
	),
	false
);?>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/main_counts.php"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "main",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "main", Array(
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
		"BASKET_URL" => "/personal/basket/",	// URL, ведущий на страницу с корзиной покупателя
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COMPATIBLE_MODE" => "Y",	// Включить режим совместимости
		"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"ELEMENT_SORT_FIELD" => "PROPERTY_SHOW_INDEX",	// По какому полю сортируем элементы
		"ELEMENT_SORT_FIELD2" => "created",	// Поле для второй сортировки элементов
		"ELEMENT_SORT_ORDER" => "desc",	// Порядок сортировки элементов
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
		"ENLARGE_PRODUCT" => "STRICT",	// Выделять товары в списке
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"HIDE_NOT_AVAILABLE" => "Y",	// Недоступные товары
		"HIDE_NOT_AVAILABLE_OFFERS" => "Y",	// Недоступные торговые предложения
		"IBLOCK_ID" => "5",	// Инфоблок
		"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"LAZY_LOAD" => "N",	// Показать кнопку ленивой загрузки Lazy Load
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
		"LOAD_ON_SCROLL" => "N",	// Подгружать товары при прокрутке до конца
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Товары",	// Название категорий
		"PAGE_ELEMENT_COUNT" => "18",	// Количество элементов на странице
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PRICE_CODE" => array(	// Тип цены
			0 => "RUB",
		),
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",	// Порядок отображения блоков товара
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",	// Вариант отображения товаров
		"PRODUCT_SUBSCRIPTION" => "N",	// Разрешить оповещения для отсутствующих товаров
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],	// Параметр ID продукта (для товарных рекомендаций)
		"RCM_TYPE" => "personal",	// Тип рекомендации
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_ID" => "",	// ID раздела
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства раздела
			0 => "",
			1 => "SHOW_INDEX",
			2 => "",
		),
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
		"SHOW_CLOSE_POPUP" => "N",	// Показывать кнопку продолжения покупок во всплывающих окнах
		"SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
		"SHOW_FROM_SECTION" => "N",	// Показывать товары из раздела
		"SHOW_MAX_QUANTITY" => "N",	// Показывать остаток товара
		"SHOW_OLD_PRICE" => "N",	// Показывать старую цену
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"SHOW_SLIDER" => "N",	// Показывать слайдер для товаров
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"USE_ENHANCED_ECOMMERCE" => "N",	// Отправлять данные электронной торговли в Google и Яндекс
		"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"COMPONENT_TEMPLATE" => ".default",
		"CUSTOM_FILTER" => "",
		"PROPERTY_CODE_MOBILE" => "",	// Свойства товаров, отображаемые на мобильных устройствах
		"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
		"LABEL_PROP" => "",	// Свойства меток товара
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/main_advantages.php"
	)
);?>
<div class="index-about">
	<div class="wrap">
    <?$APPLICATION->IncludeComponent("bitrix:news.list", "main_production", Array(
    	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
    		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
    		"AJAX_MODE" => "N",	// Включить режим AJAX
    		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
    		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
    		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
    		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
    		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
    		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    		"CACHE_TYPE" => "A",	// Тип кеширования
    		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
    		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
    		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
    		"DISPLAY_NAME" => "Y",	// Выводить название элемента
    		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
    		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
    		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
    		"FIELD_CODE" => array(	// Поля
    			0 => "",
    			1 => "",
    		),
    		"FILTER_NAME" => "",	// Фильтр
    		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
    		"IBLOCK_ID" => "8",	// Код информационного блока
    		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
    		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
    		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
    		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
    		"NEWS_COUNT" => "20",	// Количество новостей на странице
    		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
    		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
    		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
    		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
    		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
    		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
    		"PAGER_TITLE" => "Новости",	// Название категорий
    		"PARENT_SECTION" => "",	// ID раздела
    		"PARENT_SECTION_CODE" => "",	// Код раздела
    		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
    		"PROPERTY_CODE" => array(	// Свойства
    			0 => "",
    			1 => "",
    		),
    		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
    		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
    		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
    		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
    		"SET_STATUS_404" => "N",	// Устанавливать статус 404
    		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
    		"SHOW_404" => "N",	// Показ специальной страницы
    		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
    		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
    		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
    		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
    		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
    	),
    	false
    );?>
    <?$APPLICATION->IncludeComponent("bitrix:news.list", "main_recipes", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "9",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>
  </div>
</div>
<div class="bottom-page-map" id="map">
	<div class="item" style="left: 20%; top: 20%;">
		<div class="info">
			<img src="img/map-item.jpg">
			<div class="name">
				ул. Михеева
			</div>
			<ul>
				<li>г. Тула, ул. Михеева, д.23</li>
				<li>09:00 - 20:00</li>
				<li><a href="#">+7 (910) 553-02-87</a></li>
			</ul>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
