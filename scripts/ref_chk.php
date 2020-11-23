<?php
if (isset($_GET["P_ApiId"])) {

if ($_GET["saved_lang"]!="") {
    $saved_lang = $_GET["saved_lang"];
}else{
    $saved_lang = "en";
}
$P_Lang = '';
if ($saved_lang!='en') {
    if ($saved_lang!='es') {
    $P_Lang = 1;
    }else{
    $P_Lang = 2;
    }
}else{
$P_Lang = 1;
}
$roh_api_key = $_GET["roh_api_key"];
$roh_client_id = $_GET["roh_client_id"];
$P_ApiId = $_GET["P_ApiId"];
$P_RefId = $_GET["P_RefId"];
$cnt = 0;
$url = "https://webapi.resales-online.com/V5/SearchProperties";

$data = array(
        "p1" => $roh_client_id,
        "p2" => $roh_api_key,
        "P_Lang" => $P_Lang,
        "P_ApiId" => $P_ApiId,
        "P_RefId" => $P_RefId
        );    


$query_url = sprintf("%s?%s", $url, http_build_query($data));
header('Content-type: application/json');
$api = file_get_contents($query_url);
$api_resp = json_decode($api);
$PropertyCount = $api_resp->QueryInfo->PropertyCount;
$s_status = $api_resp->transaction->status;
$SearchType = $api_resp->QueryInfo->SearchType;
$P_QueryId = $api_resp->QueryInfo->QueryId;
if ($PropertyCount!=0) {
    echo '<button class="w3-button w3-left" id="ref_vw_butt" onclick="ref_viewor();">View</button>';
}else{
echo 'Please try again';
}
}