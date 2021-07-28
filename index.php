<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>

<div style="text-align: center; margin-top: 60px;">
	<form action="/" method="POST">
		<p>
			<label for="date">Выберите дату: </label>
			<input type="date" id="date" name="date"/ value="<?=$_POST['date'] ?? ''?>">
		</p>
		<p>
			<button type="submit">Отправить</button>
		</p>
	</form>
	
	<? if (isset($_POST['date'])) : ?>
	<p>Ближайший рабочий день:</p>
	<?php
		$APPLICATION->IncludeComponent(
		"test_task:date.current",
		".default",
		Array(
		),
		false
		);
	?>
	<?php endif; ?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>