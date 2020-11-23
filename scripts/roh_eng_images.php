<?php
if ($_GET["P_RefId"]!="") {
    $P_RefId = $_GET["P_RefId"];
}else{
    $P_RefId = "R2875349";
}

$url = "https://webapi.resales-online.com/V5/PropertyDetails";
$data = array(
        "p1" => "1015703",
        "p2" => "f37198c146eb9fc1a82db0c7d6b5a1b54ba1b208",
        "P_ApiId" => "778",
        "P_RefId" => $P_RefId
        );
$query_url = sprintf("%s?%s", $url, http_build_query($data));
header('Content-type: application/json');
$api = file_get_contents($query_url);
$api_resp = json_decode($api);
    $AgencyRef = $api_resp->Property->AgencyRef;
    $Country = $api_resp->Property->Country;
    $Province = $api_resp->Property->Province;
    $Area = $api_resp->Property->Area;
    $Location = $api_resp->Property->Location;

    $Type = $api_resp->Property->Type;
    $Type2 = $api_resp->Property->Type2;
    $Bedrooms = $api_resp->Property->Bedrooms;
    $Bathrooms = $api_resp->Property->Bathrooms;
    $Currency = $api_resp->Property->Currency;
    $Price = $api_resp->Property->Price;
    $OriginalPrice = $api_resp->Property->OriginalPrice;
    $Dimensions = $api_resp->Property->Dimensions;
    $Built = $api_resp->Property->Built;
    $Terrace = $api_resp->Property->Terrace;
    $GardenPlot = $api_resp->Property->GardenPlot;
    $IBI_Fees_Year = $api_resp->Property->IBI_Fees_Year;
    $Pool = $api_resp->Property->Pool;
    $Parking = $api_resp->Property->Parking;
    $Garden = $api_resp->Property->Garden;
    $Description = $api_resp->Property->Description;
    $img_amount_tot = $api_resp->Property->Pictures->Count;
    $PropImages = $api_resp->Property->Pictures->Picture;

    echo '<div class="w3-content" style="max-width:1200px;">';
    $cnt1 = 0;
    foreach ($PropImages as $match) {
    $PictureURL = $match->PictureURL;
        if ($cnt1!=0) {
            echo '<img class="mySlides" src="'.$PictureURL.'" style="width:100%;display:none">';
        }else{
            echo '<img class="mySlides" src="'.$PictureURL.'" style="width:100%;>';
        }
        $cnt1++;
    }
    echo '<div class="w3-row-padding w3-section">';
    
    $cnt2 = 0;
    foreach ($PropImages as $match) {
    $PictureURL2 = $match->PictureURL;
    echo '<div class="w3-col s3 m2 l1">';
    echo '<img class="demo w3-opacity w3-hover-opacity-off" src="'.$PictureURL2.'" style="width:100%;height:55px;cursor:pointer;margin-bottom:5px;" onclick="currentDiv('.$cnt2.')">';
    echo '</div>';
    $cnt2++;
    }
    
    echo '</div>';
    echo '</div>';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';


