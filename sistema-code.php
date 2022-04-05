<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<body>
		<h1>Teste PHP</h1>
		<pre>
			<?php

function getOS() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    $os_array = array(
        'windows nt 10'      =>  'Windows 10',
        'windows nt 6\.3'     =>  'Windows 8.1',
        'windows nt 6\.2'     =>  'Windows 8',
        'windows nt 6\.1'     =>  'Windows 7',
        'windows nt 6\.0'     =>  'Windows Vista',
        'windows nt 5\.2'     =>  'Windows Server 2003/XP x64',
        'windows nt 5\.1'     =>  'Windows XP',
        'windows xp'         =>  'Windows XP',
        'windows nt 5\.0'     =>  'Windows 2000',
        'windows me'         =>  'Windows ME',
        'win98'              =>  'Windows 98',
        'win95'              =>  'Windows 95',
        'win16'              =>  'Windows 3.11',
        'macintosh|mac os x' =>  'Mac OS X',
        'mac_powerpc'        =>  'Mac OS 9',
        'linux'              =>  'Linux',
        'ubuntu'             =>  'Ubuntu',
        'iphone'             =>  'iPhone',
        'ipod'               =>  'iPod',
        'ipad'               =>  'iPad',
        'android'            =>  'Android',
        'blackberry'         =>  'BlackBerry',
        'webos'              =>  'Mobile'
    );

    foreach ($os_array as $regex => $value) {
        if (preg_match('/' . $regex . '/i', $user_agent)) {
            return $value;
        }
    }

    return 'Unknown OS Platform';
}

function getBrowser() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    $browser_array = array(
        'msie'       =>  'Internet Explorer',
        'firefox'    =>  'Firefox',
        'safari'     =>  'Safari',
        'chrome'     =>  'Chrome',
        'edge'       =>  'Edge',
        'opera'      =>  'Opera',
        'netscape'   =>  'Netscape',
        'maxthon'    =>  'Maxthon',
        'konqueror'  =>  'Konqueror',
        'mobile'     =>  'Handheld Browser'
    );

    foreach ($browser_array as $regex => $value) {
        if (preg_match('/' . $regex . '/i', $user_agent)) {
            return $value;
        }
    }

    return 'Unknown Browser';
}

echo 'Sistema operacional: ', getOS(), PHP_EOL;
echo 'Navegador: ', getBrowser(), PHP_EOL;
echo 'User-Agent: ', $_SERVER['HTTP_USER_AGENT'], PHP_EOL;
?>
			<a href="sistema-form.php">voltar</a>
		</pre>
	</body>
</html>