<?php
$roh_api_key = $_GET["roh_api_key"];
$roh_client_id = $_GET["roh_client_id"];
$P_ApiId = $_GET["P_ApiId"];
if ($_GET["saved_lang"]!="") {
    $saved_lang = $_GET["saved_lang"];
}else{
    $saved_lang = "en";
}
$P_Lang = '';
if ($saved_lang!='en') {
    if ($saved_lang!='es') {
        if ($saved_lang!='de') {
        $P_Lang = 1;
        $selo = 'All';
        }else{
        $P_Lang = 3;
        $selo = 'Alles';
        }
    }else{
    $P_Lang = 2;
    $selo = 'Todo';
    }
}else{
$P_Lang = 1;
    $selo = 'All';
}
//echo '<option value=all" selected>'.$selo.'</option>';
$url = "https://webapi.resales-online.com/V5/SearchPropertyTypes";
$data = array(
        "p1" => $roh_client_id,
        "p2" => $roh_api_key,
        "P_ApiId" => $P_ApiId,
        "P_Lang" => $P_Lang
        
        );
$query_url = sprintf("%s?%s", $url, http_build_query($data));
header('Content-type: application/json');
$api = file_get_contents($query_url);
//echo $api;
$api_resp = json_decode($api);
//echo $api_resp->transaction->status;
//echo $api_resp->LocationData->Country;
//echo $api_resp->LocationData->ProvinceArea->ProvinceAreaName;
$PropLoc = $api_resp->PropertyTypes->PropertyType;
foreach ($PropLoc as $match) {
echo "<option value='".$match->OptionValue."'><strong>".$match->Type."</strong></option>";
        foreach ($match->SubType as $matchi) {
        echo "<option value='".$matchi->OptionValue."'>   ".$matchi->Type."</option>";
        }

}