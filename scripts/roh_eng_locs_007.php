<?php
$roh_api_key = $_GET["roh_api_key"];
$roh_client_id = $_GET["roh_client_id"];
$P_ApiId = $_GET["P_ApiId"];
$url = "https://webapi.resales-online.com/V6/SearchLocations";
$data = array(
        "p1" => $roh_client_id,
        "p2" => $roh_api_key,
        "P_ApiId" => $P_ApiId,
        'P_SortType' => 1,
        
        );
$query_url = sprintf("%s?%s", $url, http_build_query($data));
header('Content-type: application/json');
$api = file_get_contents($query_url);
//echo $api;
$api_resp = json_decode($api);
//echo $api_resp->transaction->status;
//echo $api_resp->LocationData->Country;
//echo $api_resp->LocationData->ProvinceArea->ProvinceAreaName;
$PropLoc = $api_resp->LocationData->ProvinceArea->Locations->Location;
$cnt = 0;
foreach ($PropLoc as $match) {


echo '<option value="'.$match.'">'.$match.'</option>';

}