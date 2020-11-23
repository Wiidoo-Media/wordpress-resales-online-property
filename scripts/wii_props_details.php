<?php
error_reporting(0);
add_shortcode('wii_props_details','wii_props_details');
function wii_props_details(){
    
    
if(isset($_GET['P_RefId'])) {
$P_RefId = $_GET['P_RefId'];
$P_ApiId = $_GET['P_ApiId'];
$P_QueryId = $_GET['QueryId'];
$p_PageNo = $_GET['p_PageNo'];         
$p_PageSize = $_GET['p_PageSize']; 
$roh_api_key = esc_attr( get_option( 'roh-api-key' ) );
$roh_client_id = esc_attr( get_option( 'roh-client-id' ) );
//$P_QueryId = htmlentities($P_QueryId);
//$P_ApiId = 778;
//$output = '<i class="fa fa-sync fas fa-3x fa-spin"></i>';

    wp_enqueue_script( 'porpdetails2', plugin_dir_url( __FILE__ ) . '../js/porpdetails.js');
$send_email = plugins_url('../images/email.png', __FILE__);
$chevight = plugins_url('../images/chevight2.png', __FILE__);
$chevleft = plugins_url('../images/chevleft2.png', __FILE__);
$xit = plugins_url('../images/xit.png', __FILE__);
$spineer = plugins_url('../images/spineer.png', __FILE__);
$tick = plugins_url('../images/tick.png', __FILE__);
$expand_img2 = plugins_url('../images/expand.png', __FILE__);
$edit_this = plugins_url('../images/edit.png', __FILE__);


$url = "https://webapi.resales-online.com/V6/PropertyDetails";
if ($_GET["lang"]!="") {
    $saved_lang = $_GET["lang"];
}else{
    $saved_lang = "en";
}
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
$data = array(
        "p1" => $roh_client_id,
        "p2" => $roh_api_key,
        "P_ApiId" => $P_ApiId,
        "P_Lang" => $P_Lang,
        "P_RefId" => $P_RefId,
        "P_ShowGPSCoords" => true,
        "P_showdecree218" => "yes"
        );
$query_url = sprintf("%s?%s", $url, http_build_query($data));
//header('Content-type: application/json');
$api = file_get_contents($query_url);
$api_resp = json_decode($api);
    $AgencyRef = $api_resp->Property->AgencyRef;
    $Country = $api_resp->Property->Country;
    $Province = $api_resp->Property->Province;
    $Area = $api_resp->Property->Area;
    $Location = $api_resp->Property->Location;

    $Type = $api_resp->Property->PropertyType->Type;
    $NameType = $api_resp->Property->PropertyType->NameType;
    $Bedrooms = $api_resp->Property->Bedrooms;
    $Bathrooms = $api_resp->Property->Bathrooms;
    $Currency = $api_resp->Property->Currency;
    $Price = $api_resp->Property->Price;
    if ($Price!=null) {
        $Price = $api_resp->Property->Price;
        $Price = number_format($Price);
        $Price = '&euro;'.$Price;
        $SearchType = $sig_fs_en;   
    }else{
        $RentalPeriod = $api_resp->Property->RentalPeriod;
        $RentalPrice1 = '';
        $RentalPrice2 = '';
        $RentalPrice1 = $api_resp->Property->RentalPrice1;
        $RentalPrice2 = $api_resp->Property->RentalPrice2;
        $RentalPrice1 = number_format($RentalPrice1);
        $RentalPrice2 = number_format($RentalPrice2);
        $RentalPrice1 = '&euro;'.$RentalPrice1;
        $RentalPrice2 = '&euro;'.$RentalPrice2;
        $Price = $RentalPrice1.' - '.$RentalPrice2;
        $SearchType = $sig_sr_en;   
    }
    $OriginalPrice = $api_resp->Property->OriginalPrice;
    $Dimensions = $api_resp->Property->Dimensions;
    $Built = $api_resp->Property->Built;
    $Terrace = $api_resp->Property->Terrace;
    $GardenPlot = $api_resp->Property->GardenPlot;
    $IBI_Fees_Year = $api_resp->Property->IBI_Fees_Year;
    $Basura_Tax_Year = $api_resp->Property->Basura_Tax_Year;
    $Community_Fees_Year = $api_resp->Property->Community_Fees_Year;
    $Pool = $api_resp->Property->Pool;
    $Parking = $api_resp->Property->Parking;
    $Garden = $api_resp->Property->Garden;
    $Description = $api_resp->Property->Description;
    $MainImage = $api_resp->Property->Pictures->Picture[0]->PictureURL;
    $EnergyRating = $api_resp->Property->EnergyRating->EnergyRated;
    $EnergyRatingImg = $api_resp->Property->EnergyRating->Image;
    $BuiltYear = $api_resp->Property->BuiltYear;
    $Decree218 = $api_resp->Property->Decree218;
    $feats = $api_resp->Property->PropertyFeatures->Category;
    $Settings = $api_resp->Property->PropertyFeatures->Category[0]->Value;
    $Settings2 = $api_resp->Property->PropertyFeatures->Category[1]->Value;
    //$Orientation = $api_resp->Property->PropertyFeatures->Category[1]->Value;
    //$Features = $api_resp->Property->PropertyFeatures->Category[5]->Value;
    $PropImages = $api_resp->Property->Pictures->Picture;

    if ($EnergyRating!='') {
        
    }else{
        $EnergyRating = "NA";
    }
    
    $tot_plot = $Built + $Terrace + $GardenPlot;

$output = '';
$output .= '<div class="w3-row">';
    $output .= '<div class="w3-col m9">';
        $output .= '<h2>'.$Type.' in '.$Location.', '.$Area.'</h2>';
    $output .= '</div>';
    $output .= '<div class="w3-col m3 w3-center">';
        $baocko = $_SERVER['HTTP_REFERER'];
        $output .= '
        <form id="backform2" action="'.$baocko.'" method="get">
        <button type="submit" class="w3-button w3-block w3-blue"><img src="'.$chevleft.'" style="height:17px;margin-top:3px"> ' . esc_html__( 'Back to list', 'resales-marbella-wp-plugin' ) . '</button>
        <input type="hidden" id="P_ApiId" name="P_ApiId" value="'.$P_ApiId.'">
        <input type="hidden" id="QueryId" name="QueryId" value="'.$P_QueryId.'">
        <input type="hidden" id="p_PageNo" name="p_PageNo" value="'.$p_PageNo.'">
        </form>
        
        ';    $output .= '</div>';
    $output .= '</div>';
    
    
    
$output .= '<div class="w3-row">';
    $output .= '<div class="w3-col m9">';
    
$output .= '<div id="slidor" class="w3-content" style="max-width:1200px;">';
$cnt1 = 0;
    foreach ($PropImages as $match) {
    $PictureURL = $match->PictureURL;
        if ($cnt1!=0) {
            $output .= '
    <div class="w3-display-container mySlides" style="display:none">

      <div id="pici_'.$cnt1.'" class="sli_win" style="background-image:url('.$PictureURL.');background-size:cover;background-position:center center"></div>
        <div class="w3-display-topright w3-black w3-card-4 w3-opacity w3-padding" onclick="openSploder('.$cnt1.');" style="cursor:pointer">
       <img src="'.$expand_img2.'" style="height:34px;">
       </div>
      <div class="w3-display-topleft w3-card-4 w3-opacity-min" style="margin-top:13px;padding:8px;text-align:center;background:#b8a98e">
      <h5 style="margin:0px;color:black;text-transform:uppercase;"><b>'.$SearchType.'<br>'.$Price.'</b></h5>
      </div>
      
      <div class="w3-display-left w3-card-4 w3-button w3-text-white" onclick="plusDivs(-1)"><img src="'.$chevleft.'" style="height:34px;"></div>
      <div class="w3-display-right w3-card-4 w3-button w3-text-white" onclick="plusDivs(1)"><img src="'.$chevight.'" style="height:34px;"></div>
      

    </div>
            ';
        }else{
            $output .= '
    <div class="w3-display-container mySlides">

      <div id="pici_'.$cnt1.'" class="sli_win" style="background-image:url('.$PictureURL.');background-size:cover;background-position:center center"></div>
        <div class="w3-display-topright w3-black w3-card-4 w3-opacity w3-padding" onclick="openSploder('.$cnt1.');" style="cursor:pointer">
       <img src="'.$expand_img2.'" style="height:34px;">
       </div>
      <div class="w3-display-topleft w3-card-4 w3-opacity-min" style="margin-top:13px;padding:8px;text-align:center;background:#b8a98e">
      <h5 style="margin:0px;color:black;text-transform:uppercase;"><b>'.$SearchType.'<br>'.$Price.'</b></h5>
      </div>
      <div class="w3-display-left w3-card-4 w3-button w3-text-white" onclick="plusDivs(-1)"><img src="'.$chevleft.'" style="height:34px;"></div>
      <div class="w3-display-right w3-card-4 w3-button w3-text-white" onclick="plusDivs(1)"><img src="'.$chevight.'" style="height:34px;"></div>
      
      
      

      
    </div>
            ';
        }
        $cnt1++;
    }
    $output .= '<div class="w3-row-padding w3-section" style="height:55px;overflow-x:hidden;">';
    
    $cnt2 = 1;
    foreach ($PropImages as $match) {
    $PictureURL2 = $match->PictureURL;
    $output .= '<div class="w3-col s3 m2 l1">';
    $output .= '<img class="slidator w3-opacity w3-hover-opacity-off" src="'.$PictureURL2.'" style="width:100%;height:55px;cursor:pointer;margin-bottom:5px;" onclick="currentDiv('.$cnt2.')">';
    $output .= '</div>';
    $cnt2++;
    }
    
    $output .= '</div>';

    $output .= '</div>';
    
    if ($Decree218!=0) {
        $Decree218 = 'Yes';
    }else{
        $Decree218 = 'No';
    }
//end slide    
    $output .= '</div>';
    //info win
                $output .= '<div class="w3-col m3 w3-padding" style="padding-top:0px">';
                $output .= '<h2 style="margin-top:0px;padding-top:0px">' . esc_html__( 'Property highlights', 'resales-marbella-wp-plugin' ) . '</h2>';               
                $output .= '<table class="w3-table w3-striped">';
                $output .= '<tr><td style="width:50%">' . esc_html__( 'Reference', 'resales-marbella-wp-plugin' ) . '</td><td id="roh_da_no">'.$P_RefId.'</td></tr>';
                $output .= '<tr><td style="width:50%">' . esc_html__( 'Price', 'resales-marbella-wp-plugin' ) . '</td><td>'.$Price.'</td></tr>';
                if ($RentalPrice1!='') {
                $output .= '<tr><td style="width:50%">' . esc_html__( 'Rental Period', 'resales-marbella-wp-plugin' ) . '</td><td>'.$RentalPeriod.'</td></tr>';
                }
                $output .= '<tr><td style="width:50%">' . esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' ) . '</td><td>'.$Bedrooms.'</td></tr>';
                $output .= '<tr><td style="width:50%">' . esc_html__( 'Bathrooms', 'resales-marbella-wp-plugin' ) . '</td><td>'.$Bathrooms.'</td></tr>';
                $output .= '<tr><td style="width:50%">' . esc_html__( 'Terrace size', 'resales-marbella-wp-plugin' ) . '</td><td>'.$Terrace.' <span style="font-size:75%">m2</span></td></tr>';
                $output .= '<tr><td style="width:50%">' . esc_html__( 'Garden plot', 'resales-marbella-wp-plugin' ) . '</td><td>'.$GardenPlot.' <span style="font-size:75%">m2</span></td></tr>';
                $output .= '<tr><td style="width:50%">' . esc_html__( 'Build size', 'resales-marbella-wp-plugin' ) . '</td><td>'.$Built.' <span style="font-size:75%">m2</span></td></tr>';
                $output .= '<tr><td style="width:50%">' . esc_html__( 'Energy rating', 'resales-marbella-wp-plugin' ) . '</td><td>'.$EnergyRating.'</td></tr>';
                $output .= '<tr><td style="width:50%">' . esc_html__( 'Location', 'resales-marbella-wp-plugin' ) . '</td><td>'.$Location.'</td></tr>';
                $output .= '<tr><td style="width:50%">' . esc_html__( 'Year built', 'resales-marbella-wp-plugin' ) . '</td><td>'.$BuiltYear.'</td></tr>';
                if ($RentalPrice1!='') {
               $output .= '<tr><td style="width:50%">' . esc_html__( 'Decree 218 compliant', 'resales-marbella-wp-plugin' ) . '</td><td>'.$Decree218.'</td></tr>';
                }
                $output .= '</table>';
          
                
                
                $output .= '</div>';
$output .= '</div>';
//$output .= '**slideshow***';

$output .= '<div class="w3-row">';
    $output .= '<div class="w3-col m9">';

$output .= '<div class="w3-cell-row">';
    $output .= '<div id="tablink_1" class="tablink w3-container w3-bottombar w3-cell w3-mobile w3-cell-middle w3-border-blue">';
//    $tb1 = "openCity(event, 'p_desc');";
        $output .= '<button class="w3-button w3-block w3-hover-white" onclick="wii_show_tab(1);">' . esc_html__( 'Description', 'resales-marbella-wp-plugin' ) . '</button>';
    $output .= '</div>';
    $output .= '<div id="tablink_2" class="tablink w3-container w3-bottombar w3-cell w3-mobile w3-cell-middle">';
//        $tb2 = "openCity(event, 'p_loc');";
        $output .= '<button class="w3-button w3-block w3-hover-white" onclick="wii_show_tab(2);">' . esc_html__( 'Location', 'resales-marbella-wp-plugin' ) . '</button>';
    $output .= '</div>';
    $output .= '<div id="tablink_3" class="tablink w3-container w3-bottombar w3-cell w3-mobile w3-cell-middle">';
        $output .= '<button class="w3-button w3-block w3-hover-white" onclick="wii_show_tab(3);">' . esc_html__( 'Features', 'resales-marbella-wp-plugin' ) . '</button>';
    $output .= '</div>';
    $output .= '<div id="tablink_4" class="tablink w3-container w3-bottombar w3-cell w3-mobile w3-cell-middle">';
        $output .= '<button class="w3-button w3-block w3-hover-white" onclick="wii_show_tab(4);">' . esc_html__( 'Taxes & Fees', 'resales-marbella-wp-plugin' ) . '</button>';
    $output .= '</div>';
    $output .= '<div id="tablink_5" class="tablink w3-container w3-bottombar w3-cell w3-mobile w3-cell-middle">';
        $output .= '<button class="w3-button w3-block w3-hover-white" onclick="wii_show_tab(5);">' . esc_html__( 'Energy Certificate', 'resales-marbella-wp-plugin' ) . '</button>';
    $output .= '</div>';
$output .= '</div>';

//tab wins
$output .= '<div id="tabwin_1" class="w3-row-padding tabwin">';
$output .= '<p class="w3-padding-32">'.nl2br($Description).'</p>';
$output .= '</div>';
$output .= '<div id="tabwin_2"  class="w3-row-padding tabwin" style="display:none">';
$output .= '

				<input type="hidden" value="'.$Area.', '.$Location.', Spain" id="wiidoo_map_query">
				<input type="hidden" value="'.$Type.' in '.$Location.', '.$Area.'" id="wiidoo_map_title">

<div class="mapouter">
<div class="gmap_canvas">
<iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q='.$Location.'+'.$Area.'&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>
<style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
';
$output .= '</div>';
$output .= '<div id="tabwin_3" class="w3-row-padding tabwin" style="display:none">';
    $output .= '<div class="w3-container w3-padding-32">';
    foreach ($feats as $match) {
        foreach ($match->Value as $matcho) {
            $output .= '<div class="w3-half"><img src="'.$tick.'" style="height:17px;margin-top:3px"> '.$matcho.'</div>';
        }
    }
    $output .= '</div>';
$output .= '</div>';
$output .= '<div id="tabwin_4" class="w3-row-padding tabwin" style="display:none">';
$output .= '<div class="w3-padding-32">';

                $output .= '<table class="w3-table w3-striped">';
                $output .= '<tr><td style="width:50%">' . esc_html__( 'IBI Fees', 'resales-marbella-wp-plugin' ) . '</td><td>&euro; '.$IBI_Fees_Year.' ' . esc_html__( 'per year', 'resales-marbella-wp-plugin' ) . '</td></tr>';
                $output .= '<tr><td style="width:50%">' . esc_html__( 'Basura Tax Fees', 'resales-marbella-wp-plugin' ) . '</td><td>&euro; '.$Basura_Tax_Year.' ' . esc_html__( 'per year', 'resales-marbella-wp-plugin' ) . '</td></tr>';
                $output .= '<tr><td style="width:50%">' . esc_html__( 'Community Fees', 'resales-marbella-wp-plugin' ) . '</td><td>&euro; '.$Community_Fees_Year.' ' . esc_html__( 'per year', 'resales-marbella-wp-plugin' ) . '</td></tr>';
                $output .= '</table>';
$output .= '</div>';

$output .= '</div>';
$output .= '<div id="tabwin_5" class="w3-row-padding tabwin" style="display:none">';
    $output .= '<div class="w3-container w3-padding-32 w3-center">';
if ($EnergyRatingImg!='') {
$output .= '<img class="w3-image" src="'.$EnergyRatingImg.'">';
}else{
$output .= '<p class="w3-padding-32">' . esc_html__( 'No Certificate available', 'resales-marbella-wp-plugin' ) . '</p>';
}
$output .= '</div>';
$output .= '</div>';
    
    
    
    $output .= '</div>';//main
    
    
    
        $output .= '<div class="w3-col m3">';
        
$output .= '<h3 id="tit_resp" class="w3-center" style="margin-top:0px;padding-top:0px">' . esc_html__( 'Ask about this Property', 'resales-marbella-wp-plugin' ) . '</h3>';

$output .= '<div id="roh_contact">';
$output .= '<form class="w3-container w3-row">';
$output .= '<div class="w3-col">';
$output .= '<label id="fname_resp">' . esc_html__( 'First Name', 'resales-marbella-wp-plugin' ) . '</label><i id="fname_success" class="fas fa-check" style="display: none"></i>';

$output .= '<input id="M1" class="w3-input w3-border w3-round" type="text" placeholder="' . esc_html__( 'First Name', 'resales-marbella-wp-plugin' ) . '" required>';
$output .= '</div>';
$output .= '<div class="w3-col">';

$output .= '<label id="lname_resp">' . esc_html__( 'Last Name', 'resales-marbella-wp-plugin' ) . '</label><i id="lname_success" class="fas fa-check" style="display: none"></i>';
$output .= '<input id="M2" class="w3-input w3-border w3-round" type="text" placeholder="' . esc_html__( 'Last Name', 'resales-marbella-wp-plugin' ) . '" required>';
$output .= '</div>';
$output .= '<div class="w3-col">';
$output .= '<label id="cemail_resp">' . esc_html__( 'Email address', 'resales-marbella-wp-plugin' ) . '</label><i id="cemail_success" class="fas fa-check" style="display: none"></i>';
$output .= '<input id="M5" class="w3-input w3-border w3-block" type="email" placeholder="' . esc_html__( 'Email address', 'resales-marbella-wp-plugin' ) . '" required>';
$output .= '</div>';

$output .= '<div class="w3-col">';
$output .= '<label id="tphone_resp">' . esc_html__( 'Telephone', 'resales-marbella-wp-plugin' ) . '</label><i id="tphone_success" class="fas fa-check" style="display: none"></i>';
$output .= '<input id="M3" class="w3-input w3-border w3-round" type="text" placeholder="' . esc_html__( 'Telephone', 'resales-marbella-wp-plugin' ) . '" required>';
$output .= '</div>';

$output .= '</form>';
$output .= '<div class="w3-container w3-row">';
$output .= '<label>&nbsp;</label>';

$output .= '<button class="w3-button w3-dark-grey w3-block" onclick="prop_ask();">' . esc_html__( 'CLICK TO INQUIRE', 'resales-marbella-wp-plugin' ) . ' <img src="'.$send_email.'" style="height:21px;"></button>';
$output .= '</div>';
$output .= '</div>';

$output .= '<div id="roh_contact_chk" style="display:none">';
$output .= '<button class="w3-button w3-right" onclick="edit_contact()"><img src="'.$edit_this.'" style="height:21px;"> Edit</button>';
$output .= '<p><span id="M1_2"></span> <span id="M2_2"></span></p>';
$output .= '<p id="M5_2"></p>';
$output .= '<p id="M3_2"></p>';
$output .= '<p>You are interested in the property reference ID '.$P_RefId.' <img src="'.$tck.'" style="height:21px;"></p>';
$output .= '<p>And you agree to be contacted about this property by the agent.<img src="'.$tck.'" style="height:21px;"></p>';
$output .= '<button onclick="roh_contact_confirm_but();" class="w3-button w3-green">PLEASE CLICK TO CONFIRM <img src="'.$chevight.'" style="height:21px;"></button>';
$output .= '</div>';

$output .= '<div class="w3-center" id="roh_contact_confirm" style="display:none">';
$output .= '<img src="'.$spineer.'" class="w3-spin" style="height:21px;"> ';
$output .= '<p class="w3-tiny">Awaiting a response, please wait.</p>';
$output .= '</div>';
//end col
        $output .= '</div>';


$output .= '</div>';


//$output .= '<h3>' . esc_html__( 'Additional information', 'resales-marbella-wp-plugin' ) . '</h3>';
$output .= '<div class="w3-row">';
$output .= '<div class="w3-col w3-half">';


//$output .= count($feats);
$output .= '<div style="overflow: auto;">';



//$testor = var_dump($PropLoc);
$output .= '</div>';

$output .= '</div>';
//end colum

$output .= '<div class="w3-col w3-half">';


$output .= '</div>';
//end colum
$output .= '</div>';

$output .= '<hr>';
$output .= '<div class="w3-row w3-block w3-center">';
//$output .= '<div class="w3-col w3-half w3-left"><a class="w3-button w3-text-blue" href="https://www.rohsigma.com/ReSales-Online-Plugin/" target="_blank" title="Wordpress Plugin developer rohsigma.com"><img style="height:34px" src="https://www.rohsigma.com/cfg/images/logo.svg" alt="Wordpress Plugin developer rohsigma.com" data-retina_logo_url="https://www.rohsigma.com/cfg/images/logo.svg" class="w3-image"></a></div>';
$output .= '<div class="w3-col"><a style="color:#ccc;text-decoration:none;" href="https://wiidoomedia.com/resales-online-wordpress-plugin-for-resales-properties/" target="_blank">Wordpress plugin + Property Search engine created by wiidoomedia.com</a></div>';
$output .= '</div>';
$output .= '<hr>';

//$baocko = $_SERVER['HTTP_REFERER'];
$output .= '
<form id="backform" action="'.$baocko.'" method="get">
<button type="submit" class="w3-button w3-dark-grey"><img src="'.$chevleft.'" style="height:17px;margin-top:3px"> ' . esc_html__( 'Back to list', 'resales-marbella-wp-plugin' ) . '</button>
<input type="hidden" id="P_ApiId" name="P_ApiId" value="'.$P_ApiId.'">
<input type="hidden" id="QueryId" name="QueryId" value="'.$P_QueryId.'">
<input type="hidden" id="p_PageNo" name="p_PageNo" value="'.$p_PageNo.'">
</form>

';
$output .= '
<div id="mySploder" class="w3-modal w3-black">
 
 <div class="w3-modal-content" style="margin-top:89px;">
<span class="w3-text-white w3-xxlarge w3-hover-text-grey w3-container w3-display-topright" onclick="closeSploder();" style="cursor:pointer;margin-top:13px;"><img class="w3-image" src="'.$xit.'" style="max-height:34px"></span>
  <div id="imgbank" class="w3-content" style="width:100%">';
  

$output .= '  </div> <!-- End w3-content -->
  
 </div> <!-- End modal content -->
</div> <!-- End modal -->
';
$output .= '<input type="hidden" id="P_ApiId" value="'.$P_ApiId.'">';
$output .= '<input type="hidden" id="roh_api_key" value="'.$roh_api_key.'">';
$output .= '<input type="hidden" id="roh_client_id" value="'.$roh_client_id.'">';

}else{
$output .= '<h1>Error</h1>';
}

return $output;
}
function roh_enqueue_scripts99() {

    wp_register_script( 'porpdetails2', plugin_dir_url( __FILE__ ) . '../js/porpdetails.js' );
}
// Enqueue Stylesheet Action
add_action( 'wp_enqueue_scripts', 'roh_enqueue_scripts99' );
