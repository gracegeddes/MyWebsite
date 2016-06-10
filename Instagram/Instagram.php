<?php
    // Supply a user id and an access token
    $userid = 1933574600;
    $accessToken = 1933574600.ab103e5.5eabe09904eb4b75b41d6e61405ad0e0;

    // Gets our data
    function fetchData($url){
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($ch, CURLOPT_TIMEOUT, 20);
         $result = curl_exec($ch);
         curl_close($ch); 
         return $result;
    }

    // Pulls and parses data.
    $result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
    $result = json_decode($result);
?>