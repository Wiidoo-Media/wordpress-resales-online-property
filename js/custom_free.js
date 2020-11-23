
//document.getElementById("wii_fix13").style.marginTop = "-33px";

// autocomplete="off"
//menu_fix
//document.getElementById("p_PropertyListing").placeholder = "Type name here..";
//document.getElementById('p_PropertyListing').style.placeholderColor = "red";
function listacti(lview) {
var lview;
var gridbut = document.getElementById("listviewgrid");
var panelbut = document.getElementById("listviewpanel");
if (lview===2) {
    gridbut.disabled = false;
    gridbut.setAttribute("style", "border:none;background-color:#ebebeb;cursor:pointer;");
    panelbut.disabled = true;
    panelbut.setAttribute("style", "border:none;background-color:#ebebeb;cursor:not-allowed;");
}else{
    gridbut.disabled = true;
    gridbut.setAttribute("style", "border:none;background-color:#ebebeb;cursor:not-allowed;");
    panelbut.disabled = false;
    panelbut.setAttribute("style", "border:none;background-color:#ebebeb;cursor:pointer;");
}
document.getElementById("saved_listview_cmd").value = lview;
show__rohresults2();
}	
	
	
function show_list2(str) {
//document.getElementById("QueryId_shw").value = "";

document.getElementById("saved_p_SortType_cmd").value = str;
show__rohresults2();
document.getElementById("sorta_div").style.display = "none";
}	
	
	
	function ref_viewor() {
var P_form = "prop_viewo";
document.getElementById(P_form).submit();
}
function Seekor_ref() {
    if (document.getElementById("Sa_ref").value !== "") {
    var patt1 = /[^a-z\d]+/i;
    var str = document.getElementById("Sa_ref").value;
    if (str.match(patt1)) {
        document.getElementById("sa_ref_mess").innerHTML = "No special characters please";
    }else{
        //fun begins
        document.getElementById("ref_spin").style = "display:block;";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
       
            document.getElementById("sa_ref_mess").innerHTML = this.responseText;
           
   
            
              document.getElementById("ref_spin").style = "display:none;";
          }
        };
        var roh_api_key = document.getElementById("roh_api_key").value;
        var roh_client_id = document.getElementById("roh_client_id").value;
        var P_ApiId = document.getElementById("P_ApiId").value;
        var saved_lang = document.getElementById("saved_lang").value;
        var P_RefId = document.getElementById("Sa_ref").value;
        var big_url;
        big_url = "?";
        big_url = big_url + "P_ApiId=" + P_ApiId;
        big_url = big_url + "&roh_api_key=" + roh_api_key;
        big_url = big_url + "&roh_client_id=" + roh_client_id;
        big_url = big_url + "&saved_lang=" + saved_lang;
        big_url = big_url + "&P_RefId=" + P_RefId;
        xmlhttp.open("GET", "/wp-content/plugins/resales-marbella-wp-master/scripts/ref_chk_007.php" + big_url, true);
        xmlhttp.send();
        //document.getElementById("sa_ref_mess").innerHTML = str;
        
    }
        
        
        
    }else{
        document.getElementById("sa_ref_mess").innerHTML = "You entered blank, please try again";
    }
    

}
function refsearchor() {
    document.getElementById("ref_chkor").style = "display:block;";
}
function Sa_ref_off() {
    document.getElementById("ref_chkor").style = "display:none;";
}
	
function wii_send_link() {
	var wii_link = document.getElementById("wii_link2").value;
	var wii_emailor = document.getElementById("wii_emailor").value;
	var wii_email_win = document.getElementById("wii_email_win").innerHTML;
	var cemail_resp = document.getElementById("cemail_resp").innerHTML;
    var letters = /^[A-Za-z]+$/;
    var numbers = /^[A-Za-z]+$/;
    var emails_addr = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var trig = 0;
	
            if (wii_emailor.match(emails_addr)) {
                trig++;
                document.getElementById("cemail_resp").innerHTML = "Link sent Email address";
				
				//send email
				
				document.getElementById("cemail_resp").className = "w3-text-green";
             //   cemail_resp.style.color = "grey";
            }else{
                document.getElementById("cemail_resp").innerHTML = "Please type a valid email address";
				document.getElementById("cemail_resp").className = "w3-text-red";
            }	
	
	
}
		
function filter0() {
	document.getElementById("filter01").style.display="block";
	var wii_url = window.location.href;
	var res = wii_url.split("?");
	var wii_linko = res[0] + "?P_ApiId=" + document.getElementById("P_ApiId").value + "&QueryId=" + document.getElementById("QueryId").value + "&p_PageNo=" + document.getElementById("saved_p_PageNo_cmd").value;
//	document.getElementById("wii_link").innerHTML = wii_linko;
	document.getElementById("wii_link2").value = wii_linko;
//	document.getElementById("QueryId").value = "";
}
function wii_clipcopy() {
  /* Get the text field */
  var copyText = document.getElementById("wii_link2");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("You have copied the link for this property search \n " + copyText.value);
}
//locations
function show_locs2() {

var P_ApiId = document.getElementById("P_ApiId").value;
var roh_api_key = document.getElementById("roh_api_key").value;
var roh_client_id = document.getElementById("roh_client_id").value;

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {

        document.getElementById("plocs").innerHTML = this.responseText;
        

  }
};
big_url = "?";
big_url = big_url + "P_ApiId=" + P_ApiId;
big_url = big_url + "&roh_api_key=" + roh_api_key;
big_url = big_url + "&roh_client_id=" + roh_client_id;

xmlhttp.open("GET", "/wp-content/plugins/resales-marbella-wp-master/scripts/roh_eng_locs_007.php" + big_url, true);
xmlhttp.send();
}
function show_ptypes2() {

var P_ApiId = document.getElementById("P_ApiId").value;
var roh_api_key = document.getElementById("roh_api_key").value;
var roh_client_id = document.getElementById("roh_client_id").value;
var saved_lang = document.getElementById("saved_lang").value;

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {

    document.getElementById("p_PropertyTypes").innerHTML = this.responseText;
  }
};
var big_url;
big_url = "?";
big_url = big_url + "P_ApiId=" + P_ApiId;
big_url = big_url + "&roh_api_key=" + roh_api_key;
big_url = big_url + "&roh_client_id=" + roh_client_id;
big_url = big_url + "&saved_lang=" + saved_lang;

xmlhttp.open("GET", "/wp-content/plugins/resales-marbella-wp-master/scripts/roh_eng_types_007.php" + big_url, true);
xmlhttp.send();
}
function show__rohresults() {
var p_Location = document.getElementById("saved_loc_cmd").value;
var p_PropertyTypes = document.getElementById("saved_p_PropertyTypes_cmd").value;
var p_Beds = document.getElementById("saved_beds_cmd").value;
var p_Baths = document.getElementById("saved_baths_cmd").value;
var p_Min = document.getElementById("saved_p_Min_cmd").value;
var p_Max = document.getElementById("saved_p_Max_cmd").value;
var listview = document.getElementById("saved_listview_cmd").value;
var p_SortType = document.getElementById("saved_p_SortType_cmd").value;
var p_PageNo = document.getElementById("saved_p_PageNo_cmd").value;
var p_PageSize = document.getElementById("p_PageSize").value;
var P_ApiId = document.getElementById("P_ApiId").value;
var saved_plots = document.getElementById("saved_plots_cmd").value;
var saved_terra = document.getElementById("saved_terra_cmd").value;
var saved_built = document.getElementById("saved_built_cmd").value;
var saved_lang = document.getElementById("saved_lang").value;
var roh_api_key = document.getElementById("roh_api_key").value;
var roh_client_id = document.getElementById("roh_client_id").value;
var p_MustHaveFeatures1 = document.getElementById("saved_p_MustHaveFeatures_cmd1").value;
var p_MustHaveFeatures2 = document.getElementById("saved_p_MustHaveFeatures_cmd2").value;
var p_MustHaveFeatures3 = document.getElementById("saved_p_MustHaveFeatures_cmd3").value;
var p_MustHaveFeatures4 = document.getElementById("saved_p_MustHaveFeatures_cmd4").value;
var p_MustHaveFeatures5 = document.getElementById("saved_p_MustHaveFeatures_cmd5").value;
var p_MustHaveFeatures6 = document.getElementById("saved_p_MustHaveFeatures_cmd6").value;
var p_MustHaveFeatures7 = document.getElementById("saved_p_MustHaveFeatures_cmd7").value;
var p_MustHaveFeatures8 = document.getElementById("saved_p_MustHaveFeatures_cmd8").value;
var p_MustHaveFeatures9 = document.getElementById("saved_p_MustHaveFeatures_cmd9").value;
var p_MustHaveFeatures10 = document.getElementById("saved_p_MustHaveFeatures_cmd10").value;
var p_MustHaveFeatures11 = document.getElementById("saved_p_MustHaveFeatures_cmd11").value;
var p_MustHaveFeatures12 = document.getElementById("saved_p_MustHaveFeatures_cmd12").value;
var p_MustHaveFeatures13 = document.getElementById("saved_p_MustHaveFeatures_cmd13").value;
var p_MustHaveFeatures14 = document.getElementById("saved_p_MustHaveFeatures_cmd14").value;
var p_MustHaveFeatures15 = document.getElementById("saved_p_MustHaveFeatures_cmd15").value;
var p_MustHaveFeatures16 = document.getElementById("saved_p_MustHaveFeatures_cmd16").value;
var QueryId = document.getElementById("QueryId_shw").value;
var p_new_devs = document.getElementById("p_new_devs").value;
   //     document.getElementById("roh_spinner").style.display = "block"; <i class='fa fa-sync fas fa-spin'></i>
   var spinor = "<i class='fa fa-sync fas fa-spin'></i>";
   document.getElementById("PropertyCount_view").innerHTML = spinor;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    //    document.getElementById("roh_results").innerHTML = this.responseText;
      //  document.getElementById("roh_spinner").style.display = "none";

    document.getElementById("PropertyCount_view").innerHTML = this.responseText;
  }
};
var big_url;
big_url = "?";
big_url = big_url + "P_ApiId=" + P_ApiId;
big_url = big_url + "&p_SortType=" + p_SortType;
big_url = big_url + "&p_Location=" + p_Location;
big_url = big_url + "&p_PropertyTypes=" + p_PropertyTypes;
big_url = big_url + "&p_PageNo=" + p_PageNo;
big_url = big_url + "&p_PageSize=" + p_PageSize;
big_url = big_url + "&p_Beds=" + p_Beds;
big_url = big_url + "&p_Baths=" + p_Baths;
big_url = big_url + "&p_Min=" + p_Min;
big_url = big_url + "&p_Max=" + p_Max;
big_url = big_url + "&saved_plots=" + saved_plots;
big_url = big_url + "&saved_terra=" + saved_terra;
big_url = big_url + "&saved_built=" + saved_built;
big_url = big_url + "&saved_lang=" + saved_lang;
big_url = big_url + "&listview=" + listview;
big_url = big_url + "&QueryId=" + QueryId;
big_url = big_url + "&p_new_devs=" + p_new_devs;
big_url = big_url + "&roh_api_key=" + roh_api_key;
big_url = big_url + "&roh_client_id=" + roh_client_id;
big_url = big_url + "&p_MustHaveFeatures1=" + p_MustHaveFeatures1;
big_url = big_url + "&p_MustHaveFeatures2=" + p_MustHaveFeatures2;
big_url = big_url + "&p_MustHaveFeatures3=" + p_MustHaveFeatures3;
big_url = big_url + "&p_MustHaveFeatures4=" + p_MustHaveFeatures4;
big_url = big_url + "&p_MustHaveFeatures5=" + p_MustHaveFeatures5;
big_url = big_url + "&p_MustHaveFeatures6=" + p_MustHaveFeatures6;
big_url = big_url + "&p_MustHaveFeatures7=" + p_MustHaveFeatures7;
big_url = big_url + "&p_MustHaveFeatures8=" + p_MustHaveFeatures8;
big_url = big_url + "&p_MustHaveFeatures9=" + p_MustHaveFeatures9;
big_url = big_url + "&p_MustHaveFeatures10=" + p_MustHaveFeatures10;
big_url = big_url + "&p_MustHaveFeatures11=" + p_MustHaveFeatures11;
big_url = big_url + "&p_MustHaveFeatures12=" + p_MustHaveFeatures12;
big_url = big_url + "&p_MustHaveFeatures13=" + p_MustHaveFeatures13;
big_url = big_url + "&p_MustHaveFeatures14=" + p_MustHaveFeatures14;
big_url = big_url + "&p_MustHaveFeatures15=" + p_MustHaveFeatures15;
big_url = big_url + "&p_MustHaveFeatures16=" + p_MustHaveFeatures16;
xmlhttp.open("GET", "/wp-content/plugins/resales-marbella-wp-master/scripts/roh_eng_chk.php" + big_url, true);
xmlhttp.send();
}
function show__rohresults2() {
var p_Location = document.getElementById("saved_loc_cmd").value;
var p_PropertyTypes = document.getElementById("saved_p_PropertyTypes_cmd").value;
var p_Beds = document.getElementById("saved_beds_cmd").value;
var p_Baths = document.getElementById("saved_baths_cmd").value;
var p_Min = document.getElementById("saved_p_Min_cmd").value;
var p_Max = document.getElementById("saved_p_Max_cmd").value;
var listview = document.getElementById("saved_listview_cmd").value;
var p_SortType = document.getElementById("saved_p_SortType_cmd").value;
var p_PageNo = document.getElementById("saved_p_PageNo_cmd").value;
var p_PageSize = document.getElementById("p_PageSize").value;
var P_ApiId = document.getElementById("P_ApiId").value;
var saved_plots = document.getElementById("saved_plots_cmd").value;
var saved_terra = document.getElementById("saved_terra_cmd").value;
var saved_built = document.getElementById("saved_built_cmd").value;
var saved_lang = document.getElementById("saved_lang").value;
var roh_api_key = document.getElementById("roh_api_key").value;
var roh_client_id = document.getElementById("roh_client_id").value;
var p_MustHaveFeatures1 = document.getElementById("saved_p_MustHaveFeatures_cmd1").value;
var p_MustHaveFeatures2 = document.getElementById("saved_p_MustHaveFeatures_cmd2").value;
var p_MustHaveFeatures3 = document.getElementById("saved_p_MustHaveFeatures_cmd3").value;
var p_MustHaveFeatures4 = document.getElementById("saved_p_MustHaveFeatures_cmd4").value;
var p_MustHaveFeatures5 = document.getElementById("saved_p_MustHaveFeatures_cmd5").value;
var p_MustHaveFeatures6 = document.getElementById("saved_p_MustHaveFeatures_cmd6").value;
var p_MustHaveFeatures7 = document.getElementById("saved_p_MustHaveFeatures_cmd7").value;
var p_MustHaveFeatures8 = document.getElementById("saved_p_MustHaveFeatures_cmd8").value;
var p_MustHaveFeatures9 = document.getElementById("saved_p_MustHaveFeatures_cmd9").value;
var p_MustHaveFeatures10 = document.getElementById("saved_p_MustHaveFeatures_cmd10").value;
var p_MustHaveFeatures11 = document.getElementById("saved_p_MustHaveFeatures_cmd11").value;
var p_MustHaveFeatures12 = document.getElementById("saved_p_MustHaveFeatures_cmd12").value;
var p_MustHaveFeatures13 = document.getElementById("saved_p_MustHaveFeatures_cmd13").value;
var p_MustHaveFeatures14 = document.getElementById("saved_p_MustHaveFeatures_cmd14").value;
var p_MustHaveFeatures15 = document.getElementById("saved_p_MustHaveFeatures_cmd15").value;
var p_MustHaveFeatures16 = document.getElementById("saved_p_MustHaveFeatures_cmd16").value;
var QueryId = document.getElementById("QueryId_shw").value;
var p_new_devs = document.getElementById("p_new_devs").value;
var sngl_pg_slug = document.getElementById("sngl_pg_slug").value;
document.getElementById("roh_spinner").style.display = "block";
document.getElementById("roh_results").innerHTML = "";
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
        document.getElementById("roh_results").innerHTML = this.responseText;
        document.getElementById("roh_spinner").style.display = "none";

    document.getElementById("PropertyCount_view").innerHTML = document.getElementById("PropertyCount").value;
   // document.getElementById("PropertyCountori_view").innerHTML = document.getElementById("PropertyCountori").value;
   //page counter
   var tot_res = document.getElementById("PropertyCount").value;
   tot_res = tot_res/12;
   tot_res = Math.round(tot_res);
   tot_res = tot_res + 1;
   console.log(p_PageNo);
   var page_opts = "";
   var i;
	for (i = 1; i < tot_res; i++) {
	  page_opts += "<option value=" + [i] + ">Page " + [i] + "</option>";
	}

		if (p_PageNo>1) {
		document.getElementById("p_PageNo").innerHTML = "<option>Page " + p_PageNo + "</option>" + page_opts;
		document.getElementById("p_PageNo2").innerHTML = "<option>Page " + p_PageNo + "</option>" + page_opts;
	}else{
	document.getElementById("p_PageNo").innerHTML = page_opts;
	document.getElementById("p_PageNo2").innerHTML = page_opts;
	}
  }
};
var big_url;
big_url = "?";
big_url = big_url + "P_ApiId=" + P_ApiId;
big_url = big_url + "&p_SortType=" + p_SortType;
big_url = big_url + "&p_Location=" + p_Location;
big_url = big_url + "&p_PropertyTypes=" + p_PropertyTypes;
big_url = big_url + "&p_PageNo=" + p_PageNo;
big_url = big_url + "&p_PageSize=" + p_PageSize;
big_url = big_url + "&p_Beds=" + p_Beds;
big_url = big_url + "&p_Baths=" + p_Baths;
big_url = big_url + "&p_Min=" + p_Min;
big_url = big_url + "&p_Max=" + p_Max;
big_url = big_url + "&saved_plots=" + saved_plots;
big_url = big_url + "&saved_terra=" + saved_terra;
big_url = big_url + "&saved_built=" + saved_built;
big_url = big_url + "&saved_lang=" + saved_lang;
big_url = big_url + "&listview=" + listview;
big_url = big_url + "&QueryId=" + QueryId;
big_url = big_url + "&p_new_devs=" + p_new_devs;
big_url = big_url + "&roh_api_key=" + roh_api_key;
big_url = big_url + "&roh_client_id=" + roh_client_id;
big_url = big_url + "&p_MustHaveFeatures1=" + p_MustHaveFeatures1;
big_url = big_url + "&p_MustHaveFeatures2=" + p_MustHaveFeatures2;
big_url = big_url + "&p_MustHaveFeatures3=" + p_MustHaveFeatures3;
big_url = big_url + "&p_MustHaveFeatures4=" + p_MustHaveFeatures4;
big_url = big_url + "&p_MustHaveFeatures5=" + p_MustHaveFeatures5;
big_url = big_url + "&p_MustHaveFeatures6=" + p_MustHaveFeatures6;
big_url = big_url + "&p_MustHaveFeatures7=" + p_MustHaveFeatures7;
big_url = big_url + "&p_MustHaveFeatures8=" + p_MustHaveFeatures8;
big_url = big_url + "&p_MustHaveFeatures9=" + p_MustHaveFeatures9;
big_url = big_url + "&p_MustHaveFeatures10=" + p_MustHaveFeatures10;
big_url = big_url + "&p_MustHaveFeatures11=" + p_MustHaveFeatures11;
big_url = big_url + "&p_MustHaveFeatures12=" + p_MustHaveFeatures12;
big_url = big_url + "&p_MustHaveFeatures13=" + p_MustHaveFeatures13;
big_url = big_url + "&p_MustHaveFeatures14=" + p_MustHaveFeatures14;
big_url = big_url + "&p_MustHaveFeatures15=" + p_MustHaveFeatures15;
big_url = big_url + "&p_MustHaveFeatures16=" + p_MustHaveFeatures16;
big_url = big_url + "&sngl_pg_slug=" + sngl_pg_slug;

xmlhttp.open("GET", "/wp-content/plugins/resales-marbella-wp-master/scripts/roh_eng_007.php" + big_url, true);
xmlhttp.send();
}

//features
//function fill_those_bxs(feat_id) {
	
//}
function fill_those_bxs() {

var P_ApiId = document.getElementById("P_ApiId").value;
var roh_api_key = document.getElementById("roh_api_key").value;
var roh_client_id = document.getElementById("roh_client_id").value;
var saved_lang = document.getElementById("saved_lang").value;

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {

    document.getElementById("p_Setting").innerHTML = this.responseText;
  }
};
var big_url;
big_url = "?";
big_url = big_url + "P_ApiId=" + P_ApiId;
big_url = big_url + "&roh_api_key=" + roh_api_key;
big_url = big_url + "&roh_client_id=" + roh_client_id;
big_url = big_url + "&saved_lang=" + saved_lang;

xmlhttp.open("GET", "/wp-content/plugins/resales-marbella-wp-master/scripts/roh_eng_feats_007.php" + big_url, true);
xmlhttp.send();
}
function prop_view(frid) {
	document.getElementById("prop_viewor_" + frid).submit();
}

function WiiRest() {
	var w_url = window.location.href;
	var res = w_url.split("?");
  window.location.assign(res[0]);
}
//fill_those_bxs();
show_ptypes2();
show_locs2();
show__rohresults2();
//document.getElementById("wii_footer").innerHTML = document.getElementById("wii_search_head").innerHTML;
	//	document.getElementById("slider_price").addEventListener("click", function(){
	//		show__rohresults();
	//	});

//jqury

jQuery(document).ready(function( $ ){
//var collection 
				var $roh_api_key = $( "#roh_api_key" ).val();
				var $roh_client_id = $( "#roh_client_id" ).val();
				var $P_ApiId = $( "#P_ApiId" ).val();
				var $saved_lang = $( "#saved_lang" ).val();
				var $p_Min = $( "#price_min" ).val();
				var $p_Max = $( "#price_max" ).val();
				var $p_new_devs = $( "#p_new_devs" ).val();
				var $p_PropertyTypes = $( "#saved_p_PropertyTypes_cmd" ).val();
				var $p_Location = $( "#saved_loc_cmd" ).val();
				var $saved_beds_cmd = $( "#saved_beds_cmd" ).val();
				var $saved_p_SortType_cmd = $( "#saved_p_SortType_cmd" ).val();
				var $p_PageSize = $( "#p_PageSize" ).val();
				var $QueryId_shw = $( "#QueryId_shw" ).val();
//start
$( ".tooly" ).tooltip();
//featuers 
//$( ".chk_bxor" ).checkboxradio();
//		$.get("/wp-content/plugins/resales-marbella-wp-master/scripts/roh_eng_03.php?roh_api_key=" + $roh_api_key + "&roh_client_id=" + $roh_client_id + "&P_ApiId=" + $P_ApiId, function(data, status){
//			if(status==="success") {
				
//				$( ".roh_spinner" ).hide();
///				$(".roh_results").html(data);
//			}
//		});
 //sliders


 

$("#beds2").on("change", function () {		
				var selection_beds = $( "#beds2" ).val();
				$("#Bedoty").html( selection_beds);
				$( "#saved_beds_cmd" ).val(selection_beds);
			show__rohresults();
});
$("#price2_min").on("change", function () {
				var selection = $( "#price2_min" ).val();
				var selection2 = $( "#price2_max" ).val();
				$("#Priceoty").html("&euro; " + selection + " - &euro; " + selection2);
				$( "#saved_p_Min_cmd" ).val(selection);
			show__rohresults();
});
$("#price2_min").select2({
  templateResult: function (data) {    
    // We only really care if there is an element to pull classes from
    if (!data.element) {
      return data.text;
    }

    var $element = $(data.element);

    var $wrapper = $('<span></span>');
    $wrapper.addClass($element[0].className);

    $wrapper.text(data.text);

    return $wrapper;
  }
});
$("#price2_max").on("change", function () {
				var selection = $( "#price2_min" ).val();
				var selection2 = $( "#price2_max" ).val();
				$("#Priceoty").html("&euro; " + selection + " - &euro; " + selection2);
				$( "#saved_p_Max_cmd" ).val(selection2);
			show__rohresults();
});
//dropdwons	 
var $plocs = $(".plocs").select2();
var $ptypi = $(".ptypi").select2();

//$("#p_PropertyListing").select2();
	$('.p_PropertyListing').select2({
		maximumSelectionLength: 1,
		placeholder: "Listing",
		width: "resolve",
		allowClear: true
	});

	$('.plocs').select2({
		placeholder: "Location",
		width: "resolve",
		allowClear: true
	});
	$(".plocs").on("change", function () {
		//saved_loc_cmd
		$( "#saved_loc_cmd" ).val( $( ".plocs" ).val() );
		show__rohresults();
	});
	$(".p_PropertyListing").on("change", function () {
		//saved_loc_cmd
		$( "#P_ApiId" ).val( $( ".p_PropertyListing" ).val() );
		show__rohresults();
	});
	$('.ptypi').select2({
		placeholder: "Property type",
		width: "resolve",
		allowClear: true
	});
	$(".ptypi").on("change", function () {
		//saved_loc_cmd 
		$( "#saved_p_PropertyTypes_cmd" ).val( $( ".ptypi" ).val() );
		show__rohresults();
	});
	
	
//features	

	
$("#p_Setting").on("change", function () {
				var selection = $( "#p_Setting" ).val();
				$( "#saved_p_MustHaveFeatures_cmd1" ).val(selection);
			show__rohresults();
});	
$("#p_Orientation").on("change", function () {
				var selection = $( "#p_Orientation" ).val();
				$( "#saved_p_MustHaveFeatures_cmd2" ).val(selection);
			show__rohresults();
});	
$("#p_Condition").on("change", function () {
				var selection = $( "#p_Condition" ).val();
				$( "#saved_p_MustHaveFeatures_cmd3" ).val(selection);
			show__rohresults();
});
$("#p_Pool").on("change", function () {
				var selection = $( "#p_Pool" ).val();
				$( "#saved_p_MustHaveFeatures_cmd4" ).val(selection);
			show__rohresults();
});	
$("#p_Climate").on("change", function () {
				var selection = $( "#p_Climate" ).val();
				$( "#saved_p_MustHaveFeatures_cmd5" ).val(selection);
			show__rohresults();
});	
$("#p_Views").on("change", function () {
				var selection = $( "#p_Views" ).val();
				$( "#saved_p_MustHaveFeatures_cmd6" ).val(selection);
			show__rohresults();
});	
$("#p_Features").on("change", function () {
				var selection = $( "#p_Features" ).val();
				$( "#saved_p_MustHaveFeatures_cmd7" ).val(selection);
			show__rohresults();
});	
$("#p_Furniture").on("change", function () {
				var selection = $( "#p_Furniture" ).val();
				$( "#saved_p_MustHaveFeatures_cmd8" ).val(selection);
			show__rohresults();
});	
$("#p_Kitchen").on("change", function () {
				var selection = $( "#p_Kitchen" ).val();
				$( "#saved_p_MustHaveFeatures_cmd9" ).val(selection);
			show__rohresults();
});	
$("#p_Garden").on("change", function () {
				var selection = $( "#p_Garden" ).val();
				$( "#saved_p_MustHaveFeatures_cmd10" ).val(selection);
			show__rohresults();
});	
$("#p_Security").on("change", function () {
				var selection = $( "#p_Security" ).val();
				$( "#saved_p_MustHaveFeatures_cmd11" ).val(selection);
			show__rohresults();
});	
$("#p_Parking").on("change", function () {
				var selection = $( "#p_Parking" ).val();
				$( "#saved_p_MustHaveFeatures_cmd12" ).val(selection);
			show__rohresults();
});	
$("#p_Utilities").on("change", function () {
				var selection = $( "#p_Utilities" ).val();
				$( "#saved_p_MustHaveFeatures_cmd13" ).val(selection);
			show__rohresults();
});	
$("#p_Category").on("change", function () {
				var selection = $( "#p_Category" ).val();
				$( "#saved_p_MustHaveFeatures_cmd14" ).val(selection);
			show__rohresults();
});	
$("#p_PV").on("change", function () {
				var selection = $( "#p_PV" ).val();
				$( "#saved_p_MustHaveFeatures_cmd15" ).val(selection);
			show__rohresults();
});	
$("#p_Rentals").on("change", function () {
				var selection = $( "#p_Rentals" ).val();
				$( "#saved_p_MustHaveFeatures_cmd16" ).val(selection);
			show__rohresults();
});	
	
		$("#p_PageNo").on("change", function () {
		//saved_loc_cmd p_PageNo 
		
		$( "#saved_p_PageNo_cmd" ).val( $( "#p_PageNo" ).val() );
		show__rohresults2();
		//$("#p_PageNo option[value="+ $( "#p_PageNo" ).val() + "]").attr('selected', 'selected');
	});
		$("#p_PageNo2").on("change", function () {
		//saved_loc_cmd p_PageNo 
		
		$( "#saved_p_PageNo_cmd" ).val( $( "#p_PageNo2" ).val() );
		show__rohresults2();
		//$("#p_PageNo option[value="+ $( "#p_PageNo" ).val() + "]").attr('selected', 'selected');
	});
$("#refreshor").on("click", function () {
    $plocs.val(null).trigger("change");
    $ptypi.val(null).trigger("change");
});
$(".wii-1-next").on("click", function () {
//$("#saved_p_PageNo_cmd").val() = $("#saved_p_PageNo_cmd").val()+1;
var Np_PageNo = $( "#saved_p_PageNo_cmd" ).val();
var offset = $('#wiidoo_searcher').offset();
console.log(Np_PageNo++);
$( "#saved_p_PageNo_cmd" ).val( Np_PageNo++ );
show__rohresults2();
$(window).scrollTop(offset.top);
});
$(".wii-1-prev").on("click", function () {
//$("#saved_p_PageNo_cmd").val() = $("#saved_p_PageNo_cmd").val()+1;
var Np_PageNo = $( "#saved_p_PageNo_cmd" ).val();
var offset = $('#wiidoo_searcher').offset();

if (Np_PageNo>=1) {
	$("#saved_p_PageNo_cmd").get(0).value--;
show__rohresults2();
$(window).scrollTop(offset.top);

}
});

$(".wii-1-first").on("click", function () {
//$("#saved_p_PageNo_cmd").val() = $("#saved_p_PageNo_cmd").val()+1;
$( "#saved_p_PageNo_cmd" ).val("1");
show__rohresults2();
var offset = $('#wiidoo_searcher').offset();
$(window).scrollTop(offset.top);
});
$(".wii-1-last").on("click", function () {
//$("#saved_p_PageNo_cmd").val() = $("#saved_p_PageNo_cmd").val()+1;
   var tot_res = document.getElementById("PropertyCount").value;
   tot_res = tot_res/12;
   tot_res = Math.round(tot_res);
   //tot_res = tot_res - 2;
$( "#saved_p_PageNo_cmd" ).val(tot_res);
show__rohresults2();
//var pos = $('#wiidoo_searcher').scrollTop();
var offset = $('#wiidoo_searcher').offset();
$(window).scrollTop(offset.top);
});
$('.plocs').on('select2:select', function (e) {
    var data = e.params.data;
});

$(".alt_select").select2();


//$('.select2-selection').css("background-color", "white");
//$('.select2-selection__rendered').css("border", "border: 1px solid #939393");
$('.select2-selection--multiple').css("border", "border: 1px solid #939393");
$('.select2-selection--multiple').css("background-color", "white");
//$('.select2-selection--multiple').css("opacity", "1");
$('.select2-selection--single').css("opacity", "1");
//$("#p_PageNo").css("border", "0px");
$('.select2-selection--single').css("padding", "0px");
//$('.select2-selection--single').addClass('wii-doo-placeholder');
$('.select2-selection--single').css("height", "39px");
$('.select2-selection--multiple').css("height", "39px");
$('.select2-selection--multiple').css("line-height", "30px"); 
$('.select2-selection--multiple').css("padding-left", "7px");
//$('.select2-selection--single').css("padding-left", "3px");
//$('.select2-selection__rendered').css("height", "50px");
$('.select2-selection--multiple').css("border-radius", "0px");
//$('.select2-selection__rendered').addClass('wii-doo-placeholder'); select2-container--default

$('#select2-price2_min-container').css("line-height", "39px");
$('#select2-price2_min-container').css("border-right", "0px");
$('#select2-price2_max-container').css("line-height", "39px");
$('#select2-p_PageNo-container').css("line-height", "39px");
$('#select2-p_PageNo2-container').css("line-height", "39px");
$('#select2-beds2-container').css("line-height", "39px");
$('.select2-selection__rendered').css("opacity", "1");
$('.select2-selection__arrow').css("height", "39px");
$('.select2-selection__arrow').css("border-top", "1px solid #939393");
$('.select2-selection__arrow').css("border-bottom", "1px solid #939393");
$('.select2-selection--multiple').css("border-radius", "0px");

  $('.select2-selection--single').css("border", "1px solid #939393");
	$('.select2-selection--single').css("background-color", "white");
  $('.select2-selection--single').css("color", "#707070");
  $('.select2-selection__rendered').css("color", "#707070");
  $('.select2-selection--multiple').css("color", "#707070");
  
var imageURL = "/wp-content/plugins/resales-marbella-wp-master/images/chevdown.png";
$('.select2-selection--multiple').css("background-image", "url('"+imageURL+"')");
$('.select2-selection--multiple').css("background-repeat", "no-repeat");
$('.select2-selection--multiple').css("background-position", "95% 50%");
$('.select2-selection--multiple').css("background-size", "8px 21px");

$('.select2-selection--single').css("background-image", "url('"+imageURL+"')");
$('.select2-selection--single').css("background-repeat", "no-repeat");
$('.select2-selection--single').css("background-position", "95% 50%");
$('.select2-selection--single').css("background-size", "8px 21px");

//$('.select2-selection--single').css("background", "url('"+imageURL+"') 21px 8px no-repeat right center");
$(".sorta").click(function(){
  $("#sorta_div").toggle();
});


$(".Sa_ref_off").click(function(){
  $("#ref_chkor").toggle();

});

$(".wii-ref").click(function(){
  $("#ref_chkor").toggle();

});
  $("#Seekor2").click(function(){
    $(".wii-adv").toggle();
	 $("#wii-chev-up").toggle();
	 $("#wii-chev-down").toggle();
  });
$(".select2-search__field").attr("autocomplete","new-password");
//$('.dropdown-wrapper').css("font-size", "50%");
//$('.entry-header').css("display", "none");
//end jquery wii-sharor   wii_link select2-selection__arrow

	function mediaSize() { 
		/* Set the matchMedia */
		if (window.matchMedia('(max-width: 987px)').matches) {
		/* Changes when we reach the min-width  */
			$('.w3-cell-row').css('display', 'block');
			$('.w3-cell').css('width', '100%');
      $('.w3-cell').css('padding', '8px');
			$('.w3-cell').css('display', 'block'); //
      $('#Seekor2').css('width', '100%');
      $('#search_but').css('width', '100%');
      $('.wii-ref').css('width', '100%');
     // $('.sorta').css('width', '100%');
console.log("test");
		} else {
		//	$('.w3-cell').removeAttr('style');
    $('#Seekor2').css('width', '');
		}
	}

	/* Call the function */
  mediaSize();
  /* Attach the function to the resize event listener */
	window.addEventListener('load', mediaSize, false);  
window.addEventListener('resize', mediaSize, false);  
//$('input').addClass('wii-doo-placeholder');
$('[placeholder]').focus(function() {
  var input = $(this);
  if (input.val() == input.attr('placeholder')) {
    input.val('');
    input.removeClass('placeholder');
  }
}).blur(function() {
  var input = $(this);
  if (input.val() == '' || input.val() == input.attr('placeholder')) {
    input.addClass('placeholder');
    input.val(input.attr('placeholder'));
  }
}).blur();
});

