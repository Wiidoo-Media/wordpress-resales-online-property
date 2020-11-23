<?php
if ($_GET["p_SortType"]!="") {
    $p_SortType = $_GET["p_SortType"];
}else{
    $p_SortType = 1;
}
if ($_GET["p_new_devs"]!="") {
    $p_new_devs = $_GET["p_new_devs"];
}else{
    $p_new_devs = "include";
}
if ($_GET["p_PageNo"]!="") {
    $p_PageNo = $_GET["p_PageNo"];
}else{
    $p_PageNo = "1";
}
$cnt = 0;
$url = "https://webapi.resales-online.com/V5/SearchProperties";
$data = array(
        "p1" => "1015703",
        "p2" => "f37198c146eb9fc1a82db0c7d6b5a1b54ba1b208",
        "P_ApiId" => "778",
        "p_SortType" => $p_SortType,
        "p_PageNo" => $p_PageNo,
        "p_PageSize" => "12",
        "p_new_devs" => $p_new_devs
        );
$query_url = sprintf("%s?%s", $url, http_build_query($data));
header('Content-type: application/json');
$api = file_get_contents($query_url);
$api_resp = json_decode($api);
foreach ($api_resp->Property as $match) {
    $Reference = $match->Reference;
    $AgencyRef = $match->AgencyRef;
    $Country = $match->Country;
    $Province = $match->Province;
    $Area = $match->Area;
    $Location = $match->Location;
    $TypeVal = $match->TypeVal;
    $Type = $match->Type;
    $Type2 = $match->Type2;
    $Bedrooms = $match->Bedrooms;
    $Bathrooms = $match->Bathrooms;
    $Currency = $match->Currency;
    $Price = $match->Price;
    $OriginalPrice = $match->OriginalPrice;
    $MainImage = $match->MainImage;
    $Pool = $match->Pool;
    $Parking = $match->Parking;


echo '


  <div class="w3-card-2 w3-quarter w3-animate-opacity w3-btn" style="min-width:233px;" onclick="prop_view('.$cnt.')">

    <div class="w3-display-container">
      <h3>'.$Type.'</h3>
      <div style="background-image:url('.$MainImage.');background-size:cover;background-position:center center;height: 233px"></div>
      <h5>&euro; '.number_format($Price).'</h5>
<p class="w3-small">'.$Location.', '.$Area.', '.$Province.'</p>
      <div class="w3-section">
       <div class="w3-col s3">'.$Bedrooms.' <i class="fa fa-bed"></i></div>
       <div class="w3-col s3">'.$Bathrooms.' <i class="fa fa-bath"></i></div>
       <div class="w3-col s3">'.$Parking.' <i class="fa fa-car"></i></div>
       <div class="w3-col s3">'.$Pool.' <i class="fas fa-swimming-pool""></i></div>
 <input type="hidden" id="P_RefId_'.$cnt.'" value="'.$Reference.'">
      </div>
    </div>
   
  </div>


';
$cnt++;
}