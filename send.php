<?php

//$curl = curl_init('https://rich-hildred.rhcloud.com/Mailer/c512c9f7?subject="test"&email="test@test.com"&message="testing 123"');

/*$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://rich-hildred.rhcloud.com/Mailer/4953dc8bd6100c7fc61abb1/?email=test%40test.com&subject=this+is+another+test&message=test+3'
));

$oRet = curl_exec($curl);
print_r($oRet);
curl_close($curl);*/

$sRet = file_get_contents('https://rich-hildred.rhcloud.com/Mailer/4953dc8bd6100c7fc61abb1?email=test%40test.com&subject=this+is+another+test&message=test+3');

echo $sRet;
