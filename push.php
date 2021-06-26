<?php
$urls = array(
    'http://chchi2019.icachi.org',
    'http://chchi2019.icachi.org/index.html',
    'http://chchi2019.icachi.org/node/5.html',
    'http://chchi2019.icachi.org/node/1.html',
    'http://chchi2019.icachi.org/node/2.html',
    'http://chchi2019.icachi.org/node/4.html',
    'http://chchi2019.icachi.org/node/6.html',
    'http://chchi2019.icachi.org/node/7.html',
    'http://chchi2019.icachi.org/node/8.html',
    'http://chchi2019.icachi.org/node/10.html',
);
$api = 'http://data.zz.baidu.com/urls?site=chchi2019.icachi.org&token=phoM2Hl8B9xBhRO1';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
?>