<?php
{        $ch = curl_init();
        curl_setopt($ch, 
CURLOPT_URL,"https://freehostingmerahputih.id/auth.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, 
CURLOPT_POSTFIELDS,"fnama=df&lnama=gg&dom=0&subdom=ggbvfybb&domain=&unama=ezzzzz&hri=22&bln=07&thn=1887&almt=gyhgujhh&negara=ID&jk=male&surel=dfvfr@gmail.com&hp=081905335802&norobot=77&a=18&b=59&c=75&cheki=on");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 
'https://freehostingmerahputih.id/daftar.php');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\y";
        $x++;
        flush();
}
?>
