<?php
	if($_COOKIE['islogin'] != 'asdegnpaosrgh34085odgfn') {
		if (isset($_POST['password'])) {
			if (hash('sha256', trim($_POST['password'])) === '3875c0ec2c1293c6a7ea8478da08428f4d4b3729be9f0117293429be358c6b0a') { // u#LPt7+3b
				$error = false;
				setcookie('islogin', 'asdegnpaosrgh34085odgfn', time()+(3600*2));
				header('Location: ./stimmung');
			} else {
				$error = true;
				$msg = 'Das Passwort war falsch';
			}
		}
?>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="language" content="de">
        <meta name="date" content="2019-06-23 18:00">
        <meta name="robots" content="noindex, nofollow">
        <meta name="msapplication-TitleColor" content="#2980b9">
        <meta name="theme-color" content="#2980b9">
				<meta name="msapplication-TileImage" content="./assets/icon/ms-icon-144x144.png">
				<title>⠀</title>
				<link rel="apple-touch-icon" sizes="57x57" href="./assets/icon/apple-icon-57x57.png">
				<link rel="apple-touch-icon" sizes="60x60" href="./assets/icon/apple-icon-60x60.png">
				<link rel="apple-touch-icon" sizes="72x72" href="./assets/icon/apple-icon-72x72.png">
				<link rel="apple-touch-icon" sizes="76x76" href="./assets/icon/apple-icon-76x76.png">
				<link rel="apple-touch-icon" sizes="114x114" href="./assets/icon/apple-icon-114x114.png">
				<link rel="apple-touch-icon" sizes="120x120" href="./assets/icon/apple-icon-120x120.png">
				<link rel="apple-touch-icon" sizes="144x144" href="./assets/icon/apple-icon-144x144.png">
				<link rel="apple-touch-icon" sizes="152x152" href="./assets/icon/apple-icon-152x152.png">
				<link rel="apple-touch-icon" sizes="180x180" href="./assets/icon/apple-icon-180x180.png">
				<link rel="stylesheet" href="./assets/data/style.css">
    </head>
    <body>
        <main>
            <div>
                <img src="./assets/img/main.png" rel="nofollow" id="mainimage">
                <form method="post">
										<?php echo $msg; ?>
                    <label for="inputPassword">
                        <input type="password" name="password" id="inputPassword" placeholder="Passwort" maxlength="64" required>
                    </label>
                    <button>Einloggen</button>
                </form>
            </div>
        </main>
    </body>
</html>
<?php
	} else {
		header('Location: ./stimmung');
	}
?>
