<?php

if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        
        $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
          // آدرس آي پي واقعي کاربر را بر ميگرداند وقتي که کاربر بدون وي پي ان وارد صفحه ميشود
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {   
        
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
          // آدرس آيپي واقعي کاربر رو بر ميگرداند هنگامي که کاربر با وي پي ان است
    }
else
    {
        
        $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
           //آدرس آی پی جایی که کاربر مشغول مشاهده صفحه جاری است را بر می گرداند
    }

$file = 'ip.txt';
$fp = fopen($file, 'a');

fwrite($fp, $ipaddress);

fclose($fp);
?>


str_replace(":",".");