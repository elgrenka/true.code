<?

if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <link rel="shortcut icon" type="image/x-icon"
          href="../../../bitrix/virtual_file_system.php"/>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH
                                    .'/assets/css/style.css'); ?>
    <? $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>
	
						