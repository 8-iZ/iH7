<?php 

switch ($m) {
	case '🆕':
	case '⏮':
	case 'GO':
	case 'СТАРТ':
	case 'START':
	case 'НОВЫЙ СЕАНС':
		$m = '/start';
		break;
	case 'ОБНОВИТЬ':
	case 'ПEPEЗAПУCTИTЬ':
		$m = '/update';
		break;
	case '⏪':
	case 'НAЗAД':
		$m = '/back';
		break;
	case '✖️':
	case '❌':
	case 'НЕТ':
	case 'ОТМЕНА':
	case 'ОТКАЗЫВАЮСЬ=':
		$m = '/cancel';
		break;
}

?>