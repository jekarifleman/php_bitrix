<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

	 $startDate = explode('-', $_POST['date']);
	 $startDate = $startDate[2] . '.' . $startDate[1] . '.' . $startDate[0];

	 $holidays = $arResult['DATES']; 
	 $i = 1; 
	 $nextBusinessDay = date('d.m.Y', strtotime($startDate . ' +' . $i . ' Weekday')); 
		while (in_array($nextBusinessDay, $holidays)) { 
		$i++; 
		$nextBusinessDay = date('d.m.Y', strtotime($startDate . ' +' . $i . ' Weekday')); 
	 } 
?>
<p><?=$nextBusinessDay;?></p>