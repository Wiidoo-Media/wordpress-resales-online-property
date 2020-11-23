<?php
$fid = $_GET["id"];
$roh_api_key = $_GET["roh_api_key"];
$roh_client_id = $_GET["roh_client_id"];
$P_Lang = 1;
$P_ApiId = $_GET["P_ApiId"];

echo '<option value="" selected>Setting</option>';
//echo "<option value='' selected>Setting</option>";

$url = "https://webapi.resales-online.com/V6/SearchFeatures";
$data = array(
        "p1" => $roh_client_id,
        "p2" => $roh_api_key,
        "P_ApiId" => $P_ApiId
        );
$query_url = sprintf("%s?%s", $url, http_build_query($data));
header('Content-type: application/json');
$api = file_get_contents($query_url);
//echo $api;
$api_resp = json_decode($api);
//echo $api_resp->transaction->status;
//echo $api_resp->LocationData->Country;
//echo $api_resp->LocationData->ProvinceArea->ProvinceAreaName;
$PropLoc = $api_resp->FeaturesData->Category;
foreach ($PropLoc[0]->Feature as $match) {
    //    foreach ($match->Feature as $matchi) {
   // $ParamName = $match->ParamName;
   // $Name = $match->Name;
   
        
        echo '<option>test</option>';
   
    }
 //       }

}