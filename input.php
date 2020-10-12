<?php
	date_default_timezone_set('Europe/Berlin');
	if($_GET['auth'] == 'asdegnpaosrgh34085odgfn') {
		if(isset($_POST['save'])) {
			if(($_POST['stress'] == 0 || $_POST['stress'] == 1 || $_POST['stress'] == 2 || $_POST['stress'] == 3 || $_POST['stress'] == 4) && ($_POST['muede'] == 0 || $_POST['muede'] == 1 || $_POST['muede'] == 2 || $_POST['muede'] == 3 || $_POST['muede'] == 4) && ($_POST['pain'] == 0 || $_POST['pain'] == 1 || $_POST['pain'] == 2 || $_POST['pain'] == 3 || $_POST['pain'] == 4) && ($_POST['depri'] == 0 || $_POST['depri'] == 1 || $_POST['depri'] == 2 || $_POST['depri'] == 3 || $_POST['depri'] == 4) && ($_POST['angst'] == 0 || $_POST['angst'] == 1 || $_POST['angst'] == 2 || $_POST['angst'] == 3 || $_POST['angst'] == 4) && ($_POST['ssv'] == 0 || $_POST['ssv'] == 1 || $_POST['ssv'] == 2 || $_POST['ssv'] == 3 || $_POST['ssv'] == 4) && ($_POST['smg'] == 0 || $_POST['smg'] == 1 || $_POST['smg'] == 2 || $_POST['smg'] == 3 || $_POST['smg'] == 4)) {
				file_put_contents('./assets/data/data.csv', date('G:i - d.m.y').';'.$_POST['stress'].';'.$_POST['muede'].';'.$_POST['pain'].';'.$_POST['depri'].';'.$_POST['angst'].';'.$_POST['ssv'].';'.$_POST['smg']);
				$msg = 'Die Daten wurden abgespeichert';
			} else {
				$msg = 'Das Passwort war leider falsch';
			}
		}
?>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stimmungseingabe</title>
        <meta name="language" content="de">
        <meta name="date" content="2019-06-23 18:00">
        <meta name="description" content="">
        <meta name="robots" content="noindex, nofollow">
        <meta name="msapplication-TitleColor" content="#2980b9">
        <meta name="theme-color" content="#2980b9">
		<meta name="msapplication-TileImage" content="./assets/icon/ms-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="57x57" href="./assets/icon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="./assets/icon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="./assets/icon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="./assets/icon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="./assets/icon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="./assets/icon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="./assets/icon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="./assets/icon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="./assets/icon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="./assets/icon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./assets/icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="./assets/icon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="./assets/icon/favicon-16x16.png">
		<link rel="manifest" href="./assets/data/manifest.json">
        <link rel="stylesheet" href="./assets/data/style.css">
    </head>
    <body>
		<p class="inputinfo">
			Gebe von <strong>0</strong> bis <strong>4</strong> ein wie sehr dich diese Eigenschaft gerade belastet.<br>
			<center><h1><a href="./" rel="nofollow">Start</a></h1></center>
		</p>
		<form method="post" id="input">
			<big><?php echo $msg; ?></big>
			<label>Stress: </label>
			<input type="number" name="stress" min=0 max=4 maxlength="1">
			<br><br>
			<label>Müdigkeit und Erschöpfung: </label>
			<input type="number" name="muede" min=0 max=4 maxlength="1">
			<br><br>
			<label>Emotionale Schmerzen: </label>
			<input type="number" name="pain" min=0 max=4 maxlength="1">
			<br><br>
			<label>Depressionen: </label>
			<input type="number" name="depri" min=0 max=4 maxlength="1">
			<br><br>
			<label>Angst: </label>
			<input type="number" name="angst" min=0 max=4 maxlength="1">
			<br><br>
			<label>Gedanken an Selbstverletzung: </label>
			<input type="number" name="ssv" min=0 max=4 maxlength="1">
			<br><br>
			<label>Selbstmordgedanken: </label>
			<input type="number" name="smg" min=0 max=4 maxlength="1">
			<hr>
			<br>
			<small>Die Daten werden mit einer Zeitangabe abgespeichert und für alle die sich einloggen, für ein paar Stunden angezeigt.</small>
			<button name="save">Speichern</button>
		</form>
	</body>
</html>
<?php
	}
?>
