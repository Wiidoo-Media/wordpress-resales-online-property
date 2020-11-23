<?php
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
    $p_Beds = $_GET["p_Beds"];
    $p_SortType = "";
}else{
    $p_Beds = "";
}
if ($_GET["p_Baths"]!="") {
    $p_Baths = $_GET["p_Baths"];
   $p_SortType = "1";
}else{
    $p_Baths = "";
}
if ($_GET["p_Min"]!="") {
    $p_Min = $_GET["p_Min"];
    $p_SortType = "";
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
    $p_SortType = "";

    
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
$roh_api_key = $_GET["roh_api_key"];
$roh_client_id = $_GET["roh_client_id"];

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
        "P_Lang" => $P_Lang,
        "P_ApiId" => $P_ApiId,
        "P_QueryId" => $QueryId,
        "p_Min" => $p_Min,
        "p_Max" => $p_Max,
        "p_PropertyTypes" => $p_PropertyTypes,
        "p_Beds" => $p_Beds,
        "p_Baths" => $p_Baths,
        "p_SortType" => $p_SortType,
        "p_Location" => $p_Location,
        "p_PageNo" => $p_PageNo,
        "p_PageSize" => $p_PageSize,
        "p_new_devs" => $p_new_devs
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
echo $PropertyCount;