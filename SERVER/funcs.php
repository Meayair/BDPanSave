<?php
function curl_get($url,$post="",$head = array(
            'Content-Type: application/x-www-form-urlencoded',
        )){
    $curl = curl_init();
    // 1. 设置HTTP URL (API地址)
    curl_setopt($curl, CURLOPT_URL, $url);
    
    // 2. 设置HTTP HEADER (表单POST,可于此处添加cookie)




    curl_setopt($curl, CURLOPT_HTTPHEADER, $head);
    
    // 3. 设置HTTP BODY (URL键值对)
    if(!empty($post)){
    $body = http_build_query($post);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
    }
    
    // 4. 获取响应结果
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_NOBODY, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
    
    
};
function bdsave($link,$BDUSS){
    $url = "https://pan.baidu.com/rest/2.0/services/cloud_dl";
    $post = array(
        'method'=>'add_task',
        'app_id'=>'250528',
        'source_url'=>$link,
        'save_path'=>'%2FMeayair%2F',
        'type'=>'3',
    );
    $head = array(
            "Content-Type: application/x-www-form-urlencoded",
            "Cookie:BDUSS=$BDUSS;"
        );
    return curl_get($url,$post,$head);
}
