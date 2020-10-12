<?php
  date_default_timezone_set('Europe/Berlin');
	if($_COOKIE['islogin'] != 'asdegnpaosrgh34085odgfn') {
		echo 'Du bist Ausgeloggt!';
		sleep(2);
		header('Location: ./');
	} else {
		if(isset($_POST['help'])) {
			header('Location: ./talkdown');
		}
?>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aktuelle Stimmung</title>
        <meta name="language" content="de">
        <meta name="date" content="2019-06-23 18:00">
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
    <body class="page1">
        <main class="mood">
			<?php
				if((strtotime(date('G:i')) - strtotime(trim(explode('-', explode(';', file_get_contents('./assets/data/data.csv'))[0])[0])))/60 > 180) {
					$error = true;
					echo '<big>In den letzten drei Stunden wurden keine Stimmungsangaben gemacht</big><br>';
				} else {
			?>
			<aside>Zuletzt Aktualisiert: <?php echo explode(';', file_get_contents('./assets/data/data.csv'))[0]; ?></aside>
            <div class="stress mood">
                <img src="./assets/img/stress.png" alt="Stress">
                <div class="chart chart<?php echo explode(';', file_get_contents('./assets/data/data.csv'))[1]; ?>">Stress</div>
            </div>
            <div class="muede mood">
                <img src="./assets/img/muede.png" alt="Müde">
                <div class="chart chart<?php echo explode(';', file_get_contents('./assets/data/data.csv'))[2]; ?>">Müde</div>
            </div>
            <div class="pain mood">
                <img src="./assets/img/pain.png" alt="Emotionale Schmerzen">
                <div class="chart chart<?php echo explode(';', file_get_contents('./assets/data/data.csv'))[3]; ?>">Pain</div>
            </div>
            <div class="depri mood">
                <img src="./assets/img/depression.png" alt="Depressiv">
                <div class="chart chart<?php echo explode(';', file_get_contents('./assets/data/data.csv'))[4]; ?>">Depri</div>
            </div>
            <div class="angst mood">
                <img src="./assets/img/angst.png" alt="Angst">
                <div class="chart chart<?php echo explode(';', file_get_contents('./assets/data/data.csv'))[5]; ?>">Angst</div>
            </div>
            <div class="ssv mood">
                <img src="./assets/img/ssv.png" alt="Selbstverletztendes Verhalten (bzw. Gedanken)">
                <div class="chart chart<?php echo explode(';', file_get_contents('./assets/data/data.csv'))[6]; ?>">SSV</div>
            </div>
            <div class="smg mood">
                <img src="./assets/img/smg.png" alt="Selbstmordgedanken">
                <div class="chart chart<?php echo explode(';', file_get_contents('./assets/data/data.csv'))[7]; ?>">SMG</div>
            </div>
			<?php } ?>
        </main>
        <form method="post">
            <button name="help">Ich will helfen</button>
        </form>
        <footer>
            <hr>
            <a href="./logout" rel="nofollow" title="Du wirst Ausgeloggt und musst dich beim nächsten mal neu einloggen">Ausloggen</a>
        </footer>
    </body>
</html>
<?php
	}
?>
