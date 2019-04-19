<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��������-������� \"������\"");
?><?$APPLICATION->IncludeComponent(
	"redsign:daysarticle2.list",
	"day_list",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "day_list",
		"CONVERT_CURRENCY" => "Y",
		"COUNT_ELEMENTS" => "5",
		"CURRENCY_ID" => "RUB",
		"IBLOCK_ID" => "2",
		"MAX_HEIGHT" => "50",
		"MAX_WIDTH" => "50",
		"OFFERS_LIMIT" => "1000",
		"OFFERS_PROPERTY_CODE" => array(0=>"CML2_LINK",1=>"ARTNUMBER",2=>"COLOR_REF",3=>"SIZES_SHOES",4=>"SIZES_CLOTHES",5=>"",),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"PRICE_CODE" => "BASE",
		"PRICE_VAT_INCLUDE" => "Y",
		"PROPERTY_CODE" => array(0=>"TITLE",1=>"KEYWORDS",2=>"META_DESCRIPTION",3=>"BRAND_REF",4=>"NEWPRODUCT",5=>"SALELEADER",6=>"SPECIALOFFER",7=>"ARTNUMBER",8=>"MANUFACTURER",9=>"MATERIAL",10=>"COLOR",11=>"BLOG_POST_ID",12=>"BLOG_COMMENTS_CNT",13=>"RECOMMEND",14=>"TREND",),
		"SHOW_TYPE" => "Y",
		"TEXT_OR_PROP" => "text"
	)
);?>
<br/>
<?
global $arrFilterRecMain;
$arrFilterRecMain['PROPERTY_REC_VALUE'] = '��';
$APPLICATION->IncludeComponent("bitrix:catalog.section", "main_rec", Array(
	"ACTION_VARIABLE" => "action",	// �������� ����������, � ������� ���������� ��������
		"ADD_PICT_PROP" => "-",	// �������������� �������� ��������� ������
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// ��������� � ������� �������� ������� � �����������
		"ADD_SECTIONS_CHAIN" => "N",	// �������� ������ � ������� ���������
		"ADD_TO_BASKET_ACTION" => "ADD",	// ���������� ������ ���������� � ������� ��� �������
		"AJAX_MODE" => "N",	// �������� ����� AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
		"BACKGROUND_IMAGE" => "-",	// ���������� ������� �������� ��� ������� �� ��������
		"BASKET_URL" => "/personal/basket.php",	// URL, ������� �� �������� � �������� ����������
		"BROWSER_TITLE" => "-",	// ���������� ��������� ���� �������� �� ��������
		"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_TYPE" => "A",	// ��� �����������
		"COMPATIBLE_MODE" => "Y",	// �������� ����� �������������
		"CONVERT_CURRENCY" => "N",	// ���������� ���� � ����� ������
		"CUSTOM_FILTER" => "",
		"DETAIL_URL" => "",	// URL, ������� �� �������� � ���������� �������� �������
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",	// �� ���������� js-���������� � ����������
		"DISPLAY_BOTTOM_PAGER" => "N",	// �������� ��� �������
		"DISPLAY_COMPARE" => "N",	// ��������� ��������� �������
		"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"ELEMENT_SORT_FIELD" => "sort",	// �� ������ ���� ��������� ��������
		"ELEMENT_SORT_FIELD2" => "id",	// ���� ��� ������ ���������� ���������
		"ELEMENT_SORT_ORDER" => "asc",	// ������� ���������� ���������
		"ELEMENT_SORT_ORDER2" => "desc",	// ������� ������ ���������� ���������
		"ENLARGE_PRODUCT" => "STRICT",	// �������� ������ � ������
		"FILTER_NAME" => "arrFilterRecMain",	// ��� ������� �� ���������� ������� ��� ���������� ���������
		"HIDE_NOT_AVAILABLE" => "N",	// ����������� ������
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",	// ����������� �������� �����������
		"IBLOCK_ID" => "2",	// ��������
		"IBLOCK_TYPE" => "catalog",	// ��� ���������
		"INCLUDE_SUBSECTIONS" => "Y",	// ���������� �������� ����������� �������
		"LABEL_PROP" => "",	// �������� ����� ������
		"LAZY_LOAD" => "N",	// �������� ������ ������� �������� Lazy Load
		"LINE_ELEMENT_COUNT" => "3",	// ���������� ��������� ��������� � ����� ������ �������
		"LOAD_ON_SCROLL" => "N",	// ���������� ������ ��� ��������� �� �����
		"MESSAGE_404" => "",	// ��������� ��� ������ (�� ��������� �� ����������)
		"MESS_BTN_ADD_TO_BASKET" => "� �������",	// ����� ������ "�������� � �������"
		"MESS_BTN_BUY" => "������",	// ����� ������ "������"
		"MESS_BTN_DETAIL" => "���������",	// ����� ������ "���������"
		"MESS_BTN_SUBSCRIBE" => "�����������",	// ����� ������ "��������� � �����������"
		"MESS_NOT_AVAILABLE" => "��� � �������",	// ��������� �� ���������� ������
		"META_DESCRIPTION" => "-",	// ���������� �������� �������� �� ��������
		"META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� ��������
		"OFFERS_FIELD_CODE" => array(	// ���� �����������
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "5",	// ������������ ���������� ����������� ��� ������ (0 - ���)
		"OFFERS_SORT_FIELD" => "sort",	// �� ������ ���� ��������� ����������� ������
		"OFFERS_SORT_FIELD2" => "id",	// ���� ��� ������ ���������� ����������� ������
		"OFFERS_SORT_ORDER" => "asc",	// ������� ���������� ����������� ������
		"OFFERS_SORT_ORDER2" => "desc",	// ������� ������ ���������� ����������� ������
		"PAGER_BASE_LINK_ENABLE" => "N",	// �������� ��������� ������
		"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
		"PAGER_SHOW_ALL" => "N",	// ���������� ������ "���"
		"PAGER_SHOW_ALWAYS" => "N",	// �������� ������
		"PAGER_TEMPLATE" => ".default",	// ������ ������������ ���������
		"PAGER_TITLE" => "������",	// �������� ���������
		"PAGE_ELEMENT_COUNT" => "5",	// ���������� ��������� �� ��������
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// ��������� ��������� � ������� ������, � ������� ��������� �� ��� ��������������
		"PRICE_CODE" => array(	// ��� ����
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",	// �������� ��� � ����
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",	// ������� ����������� ������ ������
		"PRODUCT_DISPLAY_MODE" => "N",	// ����� �����������
		"PRODUCT_ID_VARIABLE" => "id",	// �������� ����������, � ������� ���������� ��� ������ ��� �������
		"PRODUCT_PROPS_VARIABLE" => "prop",	// �������� ����������, � ������� ���������� �������������� ������
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// �������� ����������, � ������� ���������� ���������� ������
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'5','BIG_DATA':false}]",	// ������� ����������� �������
		"PRODUCT_SUBSCRIPTION" => "Y",	// ��������� ���������� ��� ������������� �������
		"PROPERTY_CODE_MOBILE" => "",	// �������� �������, ������������ �� ��������� �����������
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],	// �������� ID �������� (��� �������� ������������)
		"RCM_TYPE" => "personal",	// ��� ������������
		"SECTION_CODE" => "",	// ��� �������
		"SECTION_ID" => "",	// ID �������
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// �������� ����������, � ������� ���������� ��� ������
		"SECTION_URL" => "",	// URL, ������� �� �������� � ���������� �������
		"SECTION_USER_FIELDS" => array(	// �������� �������
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",	// �������� ��������� ���
		"SET_BROWSER_TITLE" => "Y",	// ������������� ��������� ���� ��������
		"SET_LAST_MODIFIED" => "N",	// ������������� � ���������� ������ ����� ����������� ��������
		"SET_META_DESCRIPTION" => "Y",	// ������������� �������� ��������
		"SET_META_KEYWORDS" => "Y",	// ������������� �������� ����� ��������
		"SET_STATUS_404" => "N",	// ������������� ������ 404
		"SET_TITLE" => "Y",	// ������������� ��������� ��������
		"SHOW_404" => "N",	// ����� ����������� ��������
		"SHOW_ALL_WO_SECTION" => "Y",	// ���������� ��� ��������, ���� �� ������ ������
		"SHOW_CLOSE_POPUP" => "N",	// ���������� ������ ����������� ������� �� ����������� �����
		"SHOW_DISCOUNT_PERCENT" => "N",	// ���������� ������� ������
		"SHOW_FROM_SECTION" => "N",	// ���������� ������ �� �������
		"SHOW_MAX_QUANTITY" => "N",	// ���������� ������� ������
		"SHOW_OLD_PRICE" => "N",	// ���������� ������ ����
		"SHOW_PRICE_COUNT" => "1",	// �������� ���� ��� ����������
		"SHOW_SLIDER" => "Y",	// ���������� ������� ��� �������
		"SLIDER_INTERVAL" => "3000",	// �������� ����� �������, ��
		"SLIDER_PROGRESS" => "N",	// ���������� ������ ���������
		"TEMPLATE_THEME" => "blue",	// �������� ����
		"USE_ENHANCED_ECOMMERCE" => "N",	// ���������� ������ ����������� �������� � Google � ������
		"USE_MAIN_ELEMENT_SECTION" => "N",	// ������������ �������� ������ ��� ������ ��������
		"USE_PRICE_COUNT" => "N",	// ������������ ����� ��� � �����������
		"USE_PRODUCT_QUANTITY" => "N",	// ��������� �������� ���������� ������
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>