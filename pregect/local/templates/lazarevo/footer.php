<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
	<footer class="footer">
		<a href="#top" class="totop"></a>
		<div class="wrap">
			<div class="flex">
				<div class="logo">
					<a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo2.png"></a>
				</div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"footer",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"COMPONENT_TEMPLATE" => ".default",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => "",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "N"
					)
				);?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:catalog.section.list",
					"footer_menu",
					Array(
						"ADD_SECTIONS_CHAIN" => "N",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"COMPONENT_TEMPLATE" => "menu",
						"COUNT_ELEMENTS" => "Y",
						"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
						"FILTER_NAME" => "sectionsFilter",
						"IBLOCK_ID" => "5",
						"IBLOCK_TYPE" => "catalog",
						"SECTION_CODE" => "",
						"SECTION_FIELDS" => array(0=>"",1=>"",),
						"SECTION_ID" => "",
						"SECTION_URL" => "",
						"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
						"SHOW_PARENT_NAME" => "Y",
						"TOP_DEPTH" => "1",
						"VIEW_MODE" => "LINE"
					)
				);?>
				<div class="dev">
					Разработка корпоративного сайта <br/>
					<a href="#">интернет-агентство BREVIS</a>
				</div>
			</div>
			<div class="line"></div>
			<div class="flex">
				<div class="data">
					БИК 047003715 <br/>
					к/с 30101810400000000715 <br/>
					Код по ОКПО 00567209 <br/>
					Код по ОКВЭД 01-46 <br/>
					Код по ОКОНХ 21220
				</div>
				<div class="data other">
					ИНН 7118503160 <br/>
					КПП 711801001 <br/>
					ОГРН 1107154005210 <br/>
					р/с 40702810301080000447 <br/>
					ТУЛЬСКИЙ РФ АО «РОССЕЛЬХОЗБАНК» г. Тула
				</div>
				<div class="payment">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/payment.png">
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
