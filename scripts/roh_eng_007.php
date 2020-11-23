<?php
require('../../../../wp-load.php');
$bed_img = plugins_url('../images/bed.png', __FILE__);
$bed_img2 = plugins_url('../images/bed2.png', __FILE__);
$bath_img = plugins_url('../images/bath.png', __FILE__);
$bath_img2 = plugins_url('../images/bath2.png', __FILE__);
$expand_img = plugins_url('../images/expand.png', __FILE__);
$expand_img2 = plugins_url('../images/expand2.png', __FILE__);
$home_img = plugins_url('../images/home.png', __FILE__);
$home_img2 = plugins_url('../images/home2.png', __FILE__);
$chevight2 = plugins_url('../images/chevight2.png', __FILE__);

$sngl_pg_slug = $_GET["sngl_pg_slug"];
if ($_GET["p_SortType"]!="") {
    $p_SortType = $_GET["p_SortType"];
}else{
    $p_SortType = "";
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
if ($_GET["p_Location"]!="") {
    $p_Location = $_GET["p_Location"];
}else{
    $p_Location = "";
}
if ($_GET["p_Beds"]!="") {
    $p_Beds = $_GET["p_Beds"]."x";
  //  $p_SortType = "";
}else{
    $p_Beds = "";
}
if ($_GET["p_Baths"]!="") {
    $p_Baths = $_GET["p_Baths"];
}else{
    $p_Baths = "";
}
if ($_GET["p_Min"]!="") {
    $p_Min = $_GET["p_Min"];
}else{
    $p_Min = "";
}
if ($_GET["p_Max"]!="") {
    $p_Max = $_GET["p_Max"];
}else{
    $p_Max = "";
}
if ($_GET["p_PropertyTypes"]!="") {
    $p_PropertyTypes = $_GET["p_PropertyTypes"];
}else{
    $p_PropertyTypes = "";
}
if ($_GET["p_PageSize"]!="") {
    $p_PageSize = $_GET["p_PageSize"];
}else{
    $p_PageSize = "12";
}
if ($_GET["P_ApiId"]!="") {
    $P_ApiId = $_GET["P_ApiId"];
}else{
   // $P_ApiId = "778";
}
if ($_GET["listview"]!="") {
    $listview = $_GET["listview"];
}else{
    $listview = "1";
}

if ($_GET["QueryId"]!="") {
    //$P_ApiId = "778";
    $QueryId = $_GET["QueryId"];
    $strig = 1;

    
}else{
    $strig = 0;
    $QueryId = '';
    
    
}
if ($_GET["saved_plots"]!="") {
    $saved_plots = $_GET["saved_plots"];
}else{
    $saved_plots = "0";
}
if ($_GET["saved_terra"]!="") {
    $saved_terra = $_GET["saved_terra"];
}else{
    $saved_terra = "0";
}
if ($_GET["saved_built"]!="") {
    $saved_built = $_GET["saved_built"];

  //  $p_SortType = "0";
  //  $p_PageSize = "20";
  
    
}else{
    $saved_built = "0";
}

    $trig=0;
if ($_GET["p_MustHaveFeatures1"]!="") {
    $p_MustHaveFeatures1 = $_GET["p_MustHaveFeatures1"];
    $trig++;

}else{
    $p_MustHaveFeatures1 = "";
}
   if ($_GET["p_MustHaveFeatures2"]!="") {
       $p_MustHaveFeatures2 = $_GET["p_MustHaveFeatures2"];
    $trig++;
   }else{
       $p_MustHaveFeatures2 = "";
   }
   if ($_GET["p_MustHaveFeatures3"]!="") {
       $p_MustHaveFeatures3 = $_GET["p_MustHaveFeatures3"];
    $trig++;
   }else{
       $p_MustHaveFeatures3 = "";
   }
   if ($_GET["p_MustHaveFeatures4"]!="") {
       $p_MustHaveFeatures4 = $_GET["p_MustHaveFeatures4"];
    $trig++;
   }else{
       $p_MustHaveFeatures4 = "";
   }
   if ($_GET["p_MustHaveFeatures5"]!="") {
       $p_MustHaveFeatures5 = $_GET["p_MustHaveFeatures5"];
    $trig++;
   }else{
       $p_MustHaveFeatures5 = "";
   }
   if ($_GET["p_MustHaveFeatures6"]!="") {
       $p_MustHaveFeatures6 = $_GET["p_MustHaveFeatures6"];
    $trig++;
   }else{
       $p_MustHaveFeatures6 = "";
   }
   if ($_GET["p_MustHaveFeatures7"]!="") {
       $p_MustHaveFeatures7 = $_GET["p_MustHaveFeatures7"];
    $trig++;
   }else{
       $p_MustHaveFeatures7 = "";
   }
   if ($_GET["p_MustHaveFeatures8"]!="") {
       $p_MustHaveFeatures8 = $_GET["p_MustHaveFeatures8"];
    $trig++;
   }else{
       $p_MustHaveFeatures8 = "";
   }
   if ($_GET["p_MustHaveFeatures9"]!="") {
       $p_MustHaveFeatures9 = $_GET["p_MustHaveFeatures9"];
    $trig++;
   }else{
       $p_MustHaveFeatures9 = "";
   }
   if ($_GET["p_MustHaveFeatures10"]!="") {
       $p_MustHaveFeatures10 = $_GET["p_MustHaveFeatures10"];
    $trig++;
   }else{
       $p_MustHaveFeatures10 = "";
   }
   if ($_GET["p_MustHaveFeatures11"]!="") {
       $p_MustHaveFeatures11 = $_GET["p_MustHaveFeatures11"];
    $trig++;
   }else{
       $p_MustHaveFeatures11 = "";
   }
   if ($_GET["p_MustHaveFeatures12"]!="") {
       $p_MustHaveFeatures12 = $_GET["p_MustHaveFeatures12"];
    $trig++;
   }else{
       $p_MustHaveFeatures12 = "";
   }
   if ($_GET["p_MustHaveFeatures13"]!="") {
       $p_MustHaveFeatures13 = $_GET["p_MustHaveFeatures13"];
    $trig++;
   }else{
       $p_MustHaveFeatures13 = "";
   }
   if ($_GET["p_MustHaveFeatures14"]!="") {
       $p_MustHaveFeatures14 = $_GET["p_MustHaveFeatures14"];
    $trig++;
   }else{
       $p_MustHaveFeatures14 = "";
   }
   if ($_GET["p_MustHaveFeatures15"]!="") {
       $p_MustHaveFeatures15 = $_GET["p_MustHaveFeatures15"];
       $p_MustHaveFeatures15 = htmlentities($p_MustHaveFeatures15);
    $trig++;
   }else{
       $p_MustHaveFeatures15 = "";
   }
   if ($_GET["p_MustHaveFeatures16"]!="") {
       $p_MustHaveFeatures16 = $_GET["p_MustHaveFeatures16"];
    $trig++;
   }else{
       $p_MustHaveFeatures16 = "";
   }



if ($_GET["saved_lang"]!="") {
    $saved_lang = $_GET["saved_lang"];
}else{
    $saved_lang = "en";
}
$roh_api_key = $_GET["roh_api_key"];
$roh_client_id = $_GET["roh_client_id"];
$P_Lang = '';
$loadi = ''; //LOAD MORE PROPERTIES
if ($saved_lang!='en') {
    if ($saved_lang!='es') {
        if ($saved_lang!='de') {
            if ($saved_lang!='sv') {
                if ($saved_lang!='ru') {
                    if ($saved_lang!='nl') {
                        if ($saved_lang!='da') {
                            if ($saved_lang!='pl') {
                                if ($saved_lang!='no') {
                                    if ($saved_lang!='tr') {
                                    $P_Lang = 1;
                                        $loadi = 'LOAD MORE PROPERTIES';
                                        //for sale
                                        $sig_fs_en = 'For Sale';
                                        //short rent
                                        $sig_sr_en = 'Holiday Rentals';
                                        //long rent
                                        $sig_lr_en = 'Long Term Rentals';
                                    }else{
                                    $P_Lang = 11;
                                    $loadi = 'Uzun Süreli Kiralama'; //Turkish
                                        $sig_fs_en = 'Satılık';
                                        //short rent
                                        $sig_sr_en = 'Tatil kiraları';
                                        //long rent
                                        $sig_lr_en = 'Uzun Süreli Kiralama';
                                    }
                                }else{
                                $P_Lang = 10;
                                $loadi = 'LAST MER EGENSKAPER'; //norwiegen
                                    $sig_fs_en = 'Til salgs';
                                    //short rent
                                    $sig_sr_en = 'Ferieutleie';
                                    //long rent
                                    $sig_lr_en = 'Langtidsleie';
                                }
                            }else{
                            $P_Lang = 9;
                            $loadi = 'ZAŁADUJ WIĘCEJ WŁAŚCIWOŚCI'; //Polish
                                $sig_fs_en = 'Na sprzedaż';
                                //short rent
                                $sig_sr_en = 'Wynajem krótkoterminowy';
                                //long rent
                                $sig_lr_en = 'Wynajem długoterminowy';
                            }
                        }else{
                        $P_Lang = 6;
                        $loadi = 'LAD MERE EGENSKABER'; //Danish
                            $sig_fs_en = 'Til salg';
                            //short rent
                            $sig_sr_en = 'Ferieboliger';
                            //long rent
                            $sig_lr_en = 'Langtidslejemål';
                        }
                    }else{
                    $P_Lang = 5;
                    $loadi = 'MEER EIGENSCHAPPEN'; //Dutch
                        $sig_fs_en = 'Te koop';
                        //short rent
                        $sig_sr_en = 'Korte termijn huur';
                        //long rent
                        $sig_lr_en = 'Lange termijn huur';
                    }
                }else{
                $P_Lang = 7;
                $loadi = 'ЗАГРУЗИТЬ БОЛЬШЕ СВОЙСТВ'; //russian
                    $sig_fs_en = 'Продается';
                    //short rent
                    $sig_sr_en = 'Краткосрочная аренда';
                    //long rent
                    $sig_lr_en = 'Долгосрочная аренда';
                }
            }else{
            $P_Lang = 8;
            $loadi = 'LOAD MER PROPERTIES'; //swedish
                $sig_fs_en = 'Till Salu';
                //short rent
                $sig_sr_en = 'Semesteruthyrning';
                //long rent
                $sig_lr_en = 'Långtidsuthyrning';
            }
        }else{
        $P_Lang = 3;
        $loadi = 'LADE MEHR EIGENSCHAFTEN'; //german
                //for sale
                $sig_fs_en = 'Zu verkaufen';
                //short rent
                $sig_sr_en = 'kurzfristige Vermietung';
                //long rent
                $sig_lr_en = 'Langzeitmiete';
        }
    }else{
    $P_Lang = 2;
    $loadi = 'CARGAR M&Aacute;S PROPIEDADES'; //spanish
                //for sale
                $sig_fs_en = 'En venta';
                //short rent
                $sig_sr_en = 'Alquiler a corto plazo';
                //long rent
                $sig_lr_en = 'Alquiler a largo plazo';
    }
}else{
$P_Lang = 1;
$loadi = 'LOAD MORE PROPERTIES';
                //for sale
                $sig_fs_en = 'For Sale';
                //short rent
                $sig_sr_en = 'Holiday Rentals';
                //long rent
                $sig_lr_en = 'Long Term Rentals';
}
$cnt = 0;
$url = "https://webapi.resales-online.com/V6/SearchProperties";

if ($trig!=0) {
$data = array(
        "p1" => $roh_client_id,
        "p2" => $roh_api_key,
        "p_new_devs" => $p_new_devs,
        "P_Lang" => $P_Lang,
        "P_ApiId" => $P_ApiId,
        "P_QueryId" => $QueryId,
        "p_Min" => $p_Min,
        "p_Max" => $p_Max,
        "p_PropertyTypes" => $p_PropertyTypes,
        "p_Beds" => $p_Beds,
        "p_images" => "1",
        "p_SortType" => $p_SortType,
        "p_Location" => $p_Location,
        $p_MustHaveFeatures1 => "1",
        $p_MustHaveFeatures2 => "1",
        $p_MustHaveFeatures3 => "1",
        $p_MustHaveFeatures4 => "1",
        $p_MustHaveFeatures5 => "1",
        $p_MustHaveFeatures6 => "1",
        $p_MustHaveFeatures7 => "1",
        $p_MustHaveFeatures8 => "1",
        $p_MustHaveFeatures9 => "1",
        $p_MustHaveFeatures10 => "1",
        $p_MustHaveFeatures11 => "1",
        $p_MustHaveFeatures12 => "1",
        $p_MustHaveFeatures13 => "1",
        $p_MustHaveFeatures14 => "1",
        $p_MustHaveFeatures15 => "1",
        $p_MustHaveFeatures16 => "1",
        "p_MustHaveFeatures" => "2",
        "p_PageNo" => $p_PageNo,
        "p_PageSize" => $p_PageSize
        );    

}else{
$data = array(
        "p1" => $roh_client_id,
        "p2" => $roh_api_key,
        "p_new_devs" => $p_new_devs,
        "P_Lang" => $P_Lang,
        "P_ApiId" => $P_ApiId,
        "P_QueryId" => $QueryId,
        "p_Min" => $p_Min,
        "p_Max" => $p_Max,
        "p_PropertyTypes" => $p_PropertyTypes,
        "p_Beds" => $p_Beds,
        "p_images" => "1",
        "p_SortType" => $p_SortType,
        "p_Location" => $p_Location,
        "p_PageNo" => $p_PageNo,
        "p_PageSize" => $p_PageSize
        );    
}

 


$query_url = sprintf("%s?%s", $url, http_build_query($data));
header('Content-type: application/json');
$api = file_get_contents($query_url);
$api_resp = json_decode($api);
$PropertyCount = $api_resp->QueryInfo->PropertyCount;
$s_status = $api_resp->transaction->status;
$SearchType = $api_resp->QueryInfo->SearchType;
$P_QueryId = $api_resp->QueryInfo->QueryId;
foreach ($api_resp->Property as $match) {
    $Reference = $match->Reference;
    $AgencyRef = $match->AgencyRef;
    $Country = $match->Country;
    $Province = $match->Province;
    $Area = $match->Area;
    $Location = $match->Location;
    $TypeVal = $match->TypeVal;
    $Type = $match->PropertyType->NameType;
    $Type2 = $match->Type2;
    $Bedrooms = $match->Bedrooms;
    $Bathrooms = $match->Bathrooms;
    $Currency = $match->Currency;
         $Price = '';
        $Price = $match->Price;
        $Price = number_format($Price);
        $Price = '&euro;'.$Price;

   $OriginalPrice = $match->OriginalPrice;
    $MainImage = $match->Pictures->Picture[0]->PictureURL;
    if ($MainImage!='') {
      
    }else{
      $MainImage = $match->MainImage;
    }
    $Parking = $match->Parking;
    $Dimensions = $match->Dimensions;
    $Built = $match->Built;
    $Terrace = $match->Terrace;
    $GardenPlot = $match->GardenPlot;
    $Description = $match->Description;
    $tot_plot = $Built + $Terrace + $GardenPlot;
//if ($Built > $saved_built) {
    if ($SearchType!='Short Term Rental') {
        if ($SearchType!='Long Term Rental') {
        $Price = '';
        $Price = $match->Price;
        $Price = number_format($Price);
        $Price = '&euro;'.$Price;
      //  $jtit = esc_html__( $lang_fix, 'resales-marbella-wp-plugin' );
        }else{
        $RentalPeriod = $match->RentalPeriod;
        $RentalPrice1 = '';
        $RentalPrice2 = '';
        $RentalPrice1 = $match->RentalPrice1;
        $RentalPrice2 = $match->RentalPrice2;
        $RentalPrice1 = number_format($RentalPrice1);
        $RentalPrice2 = number_format($RentalPrice2);
        $RentalPrice1 = '&euro;'.$RentalPrice1;
        $RentalPrice2 = '&euro;'.$RentalPrice2;
        $Price = $RentalPrice1.' - '.$RentalPrice2.' <sup style="font-size:55%">per '.$RentalPeriod.'</sup>';
        }
    }else{
        $RentalPeriod = $match->RentalPeriod;
        $RentalPrice1 = '';
        $RentalPrice2 = '';
        $RentalPrice1 = $match->RentalPrice1;
        $RentalPrice2 = $match->RentalPrice2;
        $RentalPrice1 = number_format($RentalPrice1);
        $RentalPrice2 = number_format($RentalPrice2);
        $RentalPrice1 = '&euro;'.$RentalPrice1;
        $RentalPrice2 = '&euro;'.$RentalPrice2;
        $Price = $RentalPrice1.' - '.$RentalPrice2.' <sup style="font-size:55%">per '.$RentalPeriod.'</sup>';
    }
    


//$lang_fix = $SearchType.'<br>'.$Price;
$lang_fix = $SearchType.'<br>'.$Price;
if ($listview!=1) {
    //panel view
echo '
<div class="w3-row-padding w3-border w3-border-white w3-bottombar">
  <div class="w3-col s12 m5 l5 w3-center">
    <div class="w3-display-container">
    <div style="background-image:url(../wp-content/plugins/resales-marbella-wp-master/images/loading4.gif);background-position:center center;;background-repeat:no-repeat">
        <div style="background-image:url('.$MainImage.');background-size:cover;background-position:center center;height: 250px"></div>
    </div>    
        <div class="w3-display-bottomright w3-text-white"><p style="padding-right:13px;text-shadow: 1px 1px 1px #000;"><b>'.$Reference.'</b></p></div>
        <div class="w3-display-topright w3-card-4 w3-opacity-min" style="margin-top:13px;padding:8px;text-align:center;background-color:#e1e1e1">
        ';
        if ($SearchType!='Short Term Rental') {
        if ($SearchType!='Long Term Rental') {
            //for sale
        echo '<h5 style="margin:0px;color:black;"><b>'. $sig_fs_en . '<br>'.$Price.'</b></h5>';
        }else{
        //Long Term Rental
        echo '<h5 style="margin:0px;color:black;"><b>'. $sig_lr_en . '<br>'.$Price.'</b></h5>';
        }
        }else{
        //Short Term Rental
        echo '<h5 style="margin:0px;color:black;"><b>'. $sig_sr_en_ . '<br>'.$Price.'</b></h5>';
        }
    
   
        
        
        
       echo ' </div>
    </div>
  </div>
  <div class="w3-col s12 m7 l7 w3-left-align">
<div class="w3-display-container" style="height: 250px">
<div class="w3-display-topleft">
  <h4 style="margin:0px;">'.$Type.'</h4>
  <p>'. esc_html__( 'Location', 'resales-marbella-wp-plugin' ) . ': <b>'.$Location.'</b></p>
</div>  
<div class="w3-display-left w3-text-dark-grey">

    <div class="w3-row">
        <div class="w3-col s6 m4 l4"><img class="w3-image" src="'.$bed_img2.'" style="max-height:21px;vertical-align:text-top" title="'. esc_html__( 'Bedrooms Amount', 'resales-marbella-wp-plugin' ) . '" alt="'. esc_html__( 'Bedrooms Amount', 'resales-marbella-wp-plugin' ) . '"> '. esc_html__( 'Beds', 'resales-marbella-wp-plugin' ) . ':<b>'.$Bedrooms.'</b></div>
        <div class="w3-col s6 m4 l4"><img class="w3-image" src="'.$bath_img2.'" style="max-height:21px;vertical-align:text-top"> '. esc_html__( 'Baths', 'resales-marbella-wp-plugin' ) . ':<b>'.$Bathrooms.'</b></div>
        <div class="w3-col s6 m4 l4"><img class="w3-image" src="'.$home_img2.'" style="max-height:21px;vertical-align:text-top" title="'. esc_html__( 'Total Build Size', 'resales-marbella-wp-plugin' ) . '" alt="'. esc_html__( 'Total Build Size', 'resales-marbella-wp-plugin' ) . '"> '. esc_html__( 'Build', 'resales-marbella-wp-plugin' ) . ':<b>'.$Built.' m<sup>2</sup></b></div>
    </div>

    <p style="display:block;height:55px;overflow:hidden;margin-top:13px;">'.$Description.'</p>
</div>    

<div class="w3-block w3-display-bottommiddle w3-padding" style="background-color:#e1e1e1;">
<form id="prop_viewor_'.$cnt.'" action="/'.$sngl_pg_slug.'/" method="get">
        <button type="submit" class="w3-button w3-small w3-right w3-round-large w3-dark-grey">Read More <img class="w3-image" src="'.$chevight2.'" style="max-height:13px;margin-top:5px" title="'. esc_html__( 'Read More', 'resales-marbella-wp-plugin' ) . '" alt="'. esc_html__( 'Read More', 'resales-marbella-wp-plugin' ) . '"></button>
         <input type="hidden" id="P_RefId" name="P_RefId" value="'.$Reference.'">
         <input type="hidden" id="P_ApiId" name="P_ApiId" value="'.$P_ApiId.'">
         <input type="hidden" id="QueryId" name="QueryId" value="'.$P_QueryId.'">
         <input type="hidden" id="p_PageNo" name="p_PageNo" value="'.$p_PageNo.'">
         <input type="hidden" id="p_PageSize" name="p_PageSize" value="'.$p_PageSize.'">
         <input type="hidden" id="lang" name="lang" value="'.$saved_lang.'">
</form>
</div>
</div>
  </div>
</div>
';
}else{
    //grid view
echo '

<form id="prop_viewor_'.$cnt.'" action="/'.$sngl_pg_slug.'/" method="get">
  <div class="w3-third" style="min-width:233px;cursor:pointer;border-left:5px solid white;border-right:5px solid white;border-bottom:10px solid white;display:block;" onclick="prop_view('.$cnt.')">

    <div class="w3-display-container">
    <div style="background-image:url(../wp-content/plugins/resales-marbella-wp-master/images/loading4.gif);background-position:center center;background-repeat:no-repeat">
      <div style="background-image:url('.$MainImage.');background-size:cover;background-position:center center;height: 300px"></div>
      </div>
        <div class="w3-display-topleft w3-text-white"><p style="padding-left:13px;text-shadow: 1px 1px 1px #000;" title="'. esc_html__( 'Resales Reference', 'resales-marbella-wp-plugin' ) . '"><b>'.$Reference.'</b></p></div>
      <div class="w3-display-topright w3-card-4 w3-opacity-min" style="margin-top:13px;padding:8px;text-align:center;background-color:#e1e1e1">
        ';
        if ($SearchType!='Short Term Rental') {
        if ($SearchType!='Long Term Rental') {
            //for sale
        echo '<h5 style="margin:0px;color:black;"><b>'. $sig_fs_en . '<br>'.$Price.'</b></h5>';
        }else{
        //Long Term Rental
        echo '<h5 style="margin:0px;color:black;"><b>'. $sig_lr_en . '<br>'.$Price.'</b></h5>';
        }
        }else{
        //Short Term Rental
        echo '<h5 style="margin:0px;color:black;"><b>'. $sig_sr_en. '<br>'.$Price.'</b></h5>';
        }
    
   
        
        
        
       echo ' </div>

      <div class="w3-display-bottommiddle w3-black w3-opacity-min" style="width:100%;padding:5px;font-size:17px;font-weight:233;">
        <div class="w3-row">

            <div class="w3-col l4 m4 s4" style="display: flex;flex-wrap: wrap;align-items:center;justify-content: center;">
            
            <img src="'.$home_img.'" style="height:17px;padding-right:3px" title="'. esc_html__( 'Total Build Size', 'resales-marbella-wp-plugin' ) . '" alt="'. esc_html__( 'Total Build Size', 'resales-marbella-wp-plugin' ) . '"> '.$Built.' <span style="font-size:75%">m2</span>
            </div>
            <div class="w3-col l4 m4 s4" style="display: flex;align-items:center;align-content: center;justify-content: center;">
            <img src="'.$bed_img.'" style="height:17px;padding-right:3px" title="'. esc_html__( 'Bedrooms Amount', 'resales-marbella-wp-plugin' ) . '" alt="'. esc_html__( 'Bedrooms Amount', 'resales-marbella-wp-plugin' ) . '"> '.$Bedrooms.'
            </div>
            <div class="w3-col l4 m4 s4" style="display: flex;align-items:center;align-content: center;justify-content: center;">
            <img src="'.$bath_img.'" style="height:15px;padding-right:3px" title="'. esc_html__( 'Bathrooms Amount', 'resales-marbella-wp-plugin' ) . '" alt="'. esc_html__( 'Bathrooms Amount', 'resales-marbella-wp-plugin' ) . '"> '.$Bathrooms.'
            </div>
        </div>
      </div>  
      
     

         <input type="hidden" id="P_RefId" name="P_RefId" value="'.$Reference.'">
         <input type="hidden" id="lang" name="lang" value="'.$saved_lang.'">
         <input type="hidden" id="P_ApiId" name="P_ApiId" value="'.$P_ApiId.'">
         <input type="hidden" id="QueryId" name="QueryId" value="'.$P_QueryId.'">
         <input type="hidden" id="p_PageNo" name="p_PageNo" value="'.$p_PageNo.'">
         
         
    </div>
 <div class="" style="background-color:#e1e1e1;height:89px">      
       <h4 style="margin-top:0px;font-weight:bold;padding:13px;line-height:99%">'.$Type.' in '.$Location.'</h4>
 </div>  
  </div>
</form>

';
}
$cnt++;
//}//end built

}
echo '<input type="hidden" id="PropertyCountori" value="'.$cnt.'">';
echo '<input type="hidden" id="PropertyCount" value="'.$PropertyCount.'">';
echo '<input type="hidden" id="s_status" value="'.$s_status.'">';
echo '<input type="hidden" id="QueryId_shw2" value="'.$P_QueryId.'">';
echo '<input type="hidden" id="testme" value="'.$p_MustHaveFeatures15.'">';
if ($PropertyCount > $p_PageSize) {
//echo '<button id="load_more_bar_'.$cnt.'" class="w3-button w3-dark-grey" onclick="load_more_props();"><i class="fas fa-plus"></i> '. esc_html__( $loadi, 'resales-marbella-wp-plugin' ) . '</button>';
}
if ($PropertyCount !=0) {
}else{
    echo '
    <div class="w3-panel w3-pale-blue w3-border">
  <h3>'. esc_html__( 'No Results', 'resales-marbella-wp-plugin' ) . '!</h3>
  <p>'. esc_html__( 'Please adjust your filter settings', 'resales-marbella-wp-plugin' ) . '.</p>
</div>
    ';
}