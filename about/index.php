<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('О нас');
$APPLICATION->SetPageProperty('TITLE', 'О нас | We coders');
$APPLICATION->SetPageProperty('DESCRIPTION', 'О нас, о компании, we coders site');
$APPLICATION->SetPageProperty('KEYWORDS', 'Keywords++');
?>
<?= 'Значение свойства description = ' . $APPLICATION->GetPageProperty('DESCRIPTION') . ' '; ?>
    About page
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>