<?php
error_reporting(0);
if(isset($_GET['RsId'])) {
$roh_api_key = $_GET["roh_api_key"];
$roh_client_id = $_GET["roh_client_id"];
$RsId = $_GET['RsId'];
$M1 = $_GET['M1'];
$M2 = $_GET['M2'];
$M3 = $_GET['M3'];
$M5 = $_GET['M5'];
$M6 = 'Inquiry about '.$RsId;
$M7 = 'I am interested in property ref: '.$RsId;	
$P_ApiId = $_GET['P_ApiId'];
$languager = 1;
//echo 'p1='.$roh_client_id.'&p2='.$roh_api_key.'&P_ApiId='.$P_ApiId.'&RsId='.$RsId.'&P_Lang=1&M1='.$M1.'&M2='.$M2.'&M3='.$M3.'&M5='.$M5.'&M6='.$M6.'&M7='.$M7;

//to owne email add
//wpload 
require('../../../../wp-load.php');
$email_to = 'info@yourmarbellaproperty.com';
$email_subject = 'Resales Online inquiry Ref:'.$RsId;
$email_txt = '';
$email_txt .= 'First Name: '.$M1;
$email_txt .= '<br>';
$email_txt .= 'Last Name: '.$M2;
$email_txt .= '<br>';
$email_txt .= 'Inquiry email address: '.$M5;
$email_txt .= '<br>';
$email_txt .= $M7;
$email_txt .= '<br>';
$email_txt .= 'Telephone: '.$M3;

$headers = array('Content-Type: text/html; charset=UTF-8');
 
wp_mail( $email_to, $email_subject, $email_txt, $headers );   
  echo 'ok'; 
//$P_ApiId = 778;
//$output = '<i class="fa fa-sync fas fa-3x fa-spin"></i>';
$url = 'https://webapi.resales-online.com/V6/RegisterLead?p1='.$roh_client_id.'&p2='.$roh_api_key.'&P_ApiId='.$P_ApiId.'&RsId='.$RsId.'&P_Lang=1&M1='.$M1.'&M2='.$M2.'&M3='.$M3.'&M5='.$M5.'&M6='.$M6.'&M7='.$M7;

//$query_url = sprintf("%s?%s", $url, http_build_query($data));
//header('Content-type: application/json');
//$api = file_get_contents($query_url);
//    echo $api;
}




