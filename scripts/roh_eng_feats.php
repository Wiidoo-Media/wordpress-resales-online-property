<?php
echo "<option value='all' selected>All</option>";
$url = "https://webapi.resales-online.com/V5/SearchFeatures";
$data = array(
        "p1" => "1015703",
        "p2" => "f37198c146eb9fc1a82db0c7d6b5a1b54ba1b208",
        "P_ApiId" => "778",
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
$PropLoc = $api_resp->FeaturesData->Category;
foreach ($PropLoc as $match) {
        foreach ($match->Feature as $matchi) {
        echo "<option value='".$matchi->ParamName."'>   ".$matchi->Name."</option>";
        }

}