<?php


$sorgu = $db->query("SELECT * FROM `main` WHERE `id` = '1'")->fetch_assoc();
$gercek_site = $sorgu['sitelink'];
global $gercek_site;


function unicodeString($str) {
    $aa = preg_replace('/u([\da-fA-F]{4})/', '&#x\1;', $str);
    return str_replace('\\','',$aa);
}


function giris($user,$pass){
    global $gercek_site;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://'.$gercek_site.'/login');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Host' => $gercek_site,
        'Sec-Ch-Ua: "Chromium";v="107", "Not=A?Brand";v="24"',
        'Accept: application/json, text/plain, */*',
        'Content-Type: application/x-www-form-urlencoded',
        'X-Requested-With: XMLHttpRequest',
        'Sec-Ch-Ua-Mobile: ?0',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.5304.107 Safari/537.36',
        'Sec-Ch-Ua-Platform: "Windows"',
        'Origin: https://'.$gercek_site,
        'Sec-Fetch-Site: same-origin',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Dest: empty',
        'Referer: https://'.$gercek_site.'/login',
        'Accept-Encoding: gzip, deflate',
        'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'username='.urlencode($user).'&password='.urlencode($pass).'&captcha=');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    curl_close($ch);
    $durum = json_decode($response,false);

    if (!($durum->status == "1")){
        return "hata";
    }else{
        return $durum->token;
    }
}


//aray olarak çıktı veriri
function vericek($token){
    global $gercek_site;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://'.$gercek_site.'/getMyDetails');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Sec-Ch-Ua: "Chromium";v="107", "Not=A?Brand";v="24"',
        'Authorization: Bearer '.$token,
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.5304.107 Safari/537.36',
        'Content-Type: application/x-www-form-urlencoded',
        'Accept: application/json, text/plain, */*',
        'X-Requested-With: XMLHttpRequest',
        'Sec-Ch-Ua-Platform: "Windows"',
        'Origin: https://'.$gercek_site,
        'Sec-Fetch-Site: same-origin',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Dest: empty',
        'Referer: https://'.$gercek_site.'/membership',
        'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'detailed=true');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate,sdch');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    $durum = json_decode($response,false);
    if (!($durum->status == "1")){
        return "hata";
    }else{
        return unicodeString($response);
    }
}



//aray olarak çıktı veriri
function oyungecmis($token){
    global $gercek_site;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://'.$gercek_site.'/getData/transactionList');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Sec-Ch-Ua: "Chromium";v="107", "Not=A?Brand";v="24"',
        'Authorization: Bearer '.$token,
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.5304.107 Safari/537.36',
        'Content-Type: application/x-www-form-urlencoded',
        'Accept: application/json, text/plain, */*',
        'X-Requested-With: XMLHttpRequest',
        'Sec-Ch-Ua-Platform: "Windows"',
        'Origin: https://'.$gercek_site,
        'Sec-Fetch-Site: same-origin',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Dest: empty',
        'Referer: https://'.$gercek_site.'/transactions',
        'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    ]);
    $tariha = str_replace('.','-',date('Y.m.d'));
    $tarihb = str_replace('.','-',date('Y.m.d', time() - 2629745));
    curl_setopt($ch, CURLOPT_POSTFIELDS, "start=0&length=10&sortBy=id&sortDesc=ASC&date1=".$tarihb."&date2=".$tariha."&status=0&date=");
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate,sdch');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    $durum = json_decode($response,false);
    if (!($durum->status == "1")){
        return "hata";
    }else{
        return unicodeString($response);
    }
}

function bonusgetir($token){
    global $gercek_site;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://'.$gercek_site.'/getData/bonuses');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Sec-Ch-Ua: "Chromium";v="107", "Not=A?Brand";v="24"',
        'Authorization: Bearer '.$token,
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.5304.107 Safari/537.36',
        'Content-Type: application/x-www-form-urlencoded',
        'Accept: application/json, text/plain, */*',
        'X-Requested-With: XMLHttpRequest',
        'Sec-Ch-Ua-Platform: "Windows"',
        'Origin: https://'.$gercek_site,
        'Sec-Fetch-Site: same-origin',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Dest: empty',
        'Referer: https://'.$gercek_site.'/bonuses',
        'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'detailed=true');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate,sdch');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    $durum = json_decode($response,false);
    if (!($durum->status == "1")){
        return "hata";
    }else{
        return unicodeString($response);
    }
}

// echo giris("Barisduzguner@gmail.com","21111999");
// print_r (bonusgetir("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vb253aW42MjkuY29tL2xvZ2luIiwiaWF0IjoxNjY4OTAwMjYzLCJuYmYiOjE2Njg5MDAyNjMsImp0aSI6IlprNXpZWGZpazhQYjZKQkIiLCJzdWIiOjExMjQ2NjQsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEiLCJ1c2VyIjp7Imd1YXJkIjoid2ViIiwiYmlkIjoiZWVmZjJjNGEtOWI5OC00OGVlLWIzYjAtYTg1NGVmYmNkMTBiIiwiaWQiOjExMjQ2NjQsInVzZXJuYW1lIjoiUG95cmF6MDE0OSIsImlwIjoiOTUuNS42MC4yNiJ9fQ.mi5sl1TdY2zn884P6DUxEzXngidi8OLsqjORzC2E4rs"));