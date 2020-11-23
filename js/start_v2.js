$( function() {
        

                

});

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
        xmlhttp.open("GET", "/wp-content/plugins/resales-marbella-wp-master/scripts/ref_chk.php" + big_url, true);
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
function adv_shw() {
    document.getElementById("adv_searcher").style = "display:block;margin-top:13px;";
    document.getElementById("adv_btn").style = "display:none";
    document.getElementById("rst_btn").style = "display:none";
    document.getElementById("advx_btn").style = "display:block;margin-top:13px;margin-bottom:13px;";
}
function adv_hde() {
    document.getElementById("adv_searcher").style = "display:none";
    document.getElementById("adv_btn").style = "display:block;margin-bottom:13px;margin-top:10px;";
    document.getElementById("rst_btn").style = "margin-bottom:0px;margin-top:10px;background-color:#ebebeb;color:#b2b4b4;";
    document.getElementById("advx_btn").style = "display:none";
}
function infopop_loc() {
    document.getElementById("infopop_loc").style = "display:block;position:absolute;left:0px;bottom:-55px";
}
function infopop_out() {
    document.getElementById("infopop_loc").style = "display:none;";
}

function LocFunc() {
    var x = document.getElementById("LocAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}

function SizeFunc() {
    var x = document.getElementById("SizeAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}

function FeatFunc() {
    var x = document.getElementById("FeatAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}
function PriceFunc() {
    var x = document.getElementById("PriceAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}
function PTypeFunc() {
    var x = document.getElementById("PTypeAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
function show_prop_desc() {
    document.getElementById("propViewDesc1").style = "display:block;";
    document.getElementById("propViewImages1").style = "display:none;";
    document.getElementById("propViewDetail1").style = "display:none;";
}
function show_prop_detail() {
    document.getElementById("propViewDesc1").style = "display:none;";
    document.getElementById("propViewImages1").style = "display:none;";
    document.getElementById("propViewDetail1").style = "display:block;";
}
function show_prop_images() {
    var P_RefId = document.getElementById("present_P_RefId").value;
    document.getElementById("propViewDesc1").style = "display:none;";
    document.getElementById("propViewImages1").style = "display:block;";
    document.getElementById("propViewDetail1").style = "display:none;";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

        document.getElementById("propViewImages1").innerHTML = this.responseText;
    }
    };
    xmlhttp.open("GET", "/wp-content/plugins/resales-marbella-wp-master/scripts/roh_eng_images.php?P_RefId=" + P_RefId, true);
    xmlhttp.send();


}
function prop_view(cnt) {
var P_form = "prop_viewor_" + cnt;
document.getElementById(P_form).submit();
}
function prop_close() {
    document.getElementById("propview_win1").style.display = "none";
}
function w3_open() {

    document.getElementById("mySidebar").style = "position:absolute;top:0px;padding-top:169px;;overflow:auto;left:0px;width:233px;z-index:99;display:block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
function show_list() {		
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {

    document.getElementById("roh_main_1").innerHTML = this.responseText;
  }
};
xmlhttp.open("GET", "/wp-content/plugins/resales-marbella-wp-master/scripts/roh_eng_01.php", true);
xmlhttp.send();
}
function show_list2(str) {
document.getElementById("QueryId_shw").value = "";

document.getElementById("roh_main_1").innerHTML = "<p>Loading properties...</p>";
document.getElementById("saved_p_SortType_cmd").value = str;
fileter_list();
}
function show_locs() {
document.getElementById("QueryId_shw").value = "";

var P_ApiId = document.getElementById("P_ApiId").value;
var roh_api_key = document.getElementById("roh_api_key").value;
var roh_client_id = document.getElementById("roh_client_id").value;

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {

        document.getElementById("LocTable").innerHTML = this.responseText;
        document.getElementById("LocTable").style.display = "none";

  }
};
big_url = "?";
big_url = big_url + "P_ApiId=" + P_ApiId;
big_url = big_url + "&roh_api_key=" + roh_api_key;
big_url = big_url + "&roh_client_id=" + roh_client_id;

xmlhttp.open("GET", "/wp-content/plugins/resales-marbella-wp-master/scripts/roh_eng_locs.php" + big_url, true);
xmlhttp.send();
}
function show_ptypes() {
document.getElementById("QueryId_shw").value = "";

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

xmlhttp.open("GET", "/wp-content/plugins/resales-marbella-wp-master/scripts/roh_eng_types.php" + big_url, true);
xmlhttp.send();
}


function select_area(cnti) {
var cnt = document.getElementById("saved_loc_cnt").value;

var p_Location = document.getElementById("area_but_" + cnti).value;
document.getElementById("Loc_input").value = p_Location;
var p_saved = document.getElementById("saved_loc").innerHTML;
var saved_loc_cmd = document.getElementById("saved_loc_cmd").value;

var loc_but = document.createElement("BUTTON");
loc_but.setAttribute("id", p_Location);
loc_but.setAttribute("onclick", "del_loc_but(this)");
loc_but.setAttribute("class", "w3-btn w3-border w3-round w3-small");
loc_but.setAttribute("style", "margin:3px;margin-top:5px;padding-right:34px;background-image:url(/wp-content/plugins/resales-marbella-wp-master/images/exit.png);background-position:right center;background-repeat:no-repeat;");

var t = document.createTextNode(p_Location); 
loc_but.appendChild(t);
document.getElementById("saved_loc").appendChild(loc_but); 
if (cnt!=0) {
        document.getElementById("saved_loc_cmd").value = saved_loc_cmd + "," + p_Location;

} else {
        document.getElementById("saved_loc_cmd").value = p_Location;
}

    cnt++;
    document.getElementById("saved_loc_cnt").value = cnt;
    if (p_Location === "all") {
        document.getElementById("saved_loc").innerHTML = "";
        document.getElementById("saved_loc_cmd").value = "";
    }
cleartbl();    
fileter_list();    
}
function del_loc_but(e) {
var plc = e.id;
var prval = document.getElementById("saved_loc_cmd").value;
var cnt = document.getElementById("saved_loc_cnt").value;
cnt--;
document.getElementById("saved_loc_cnt").value = cnt;
      var resl = prval.replace(plc, "");  




document.getElementById("saved_loc_cmd").value = resl;
 if (cnt === 0) {
 document.getElementById("saved_loc_cmd").value = "";
 }
document.getElementById(plc).style.display = "none";

fileter_list();  

}
function p_PropertyListing() {
document.getElementById("QueryId_shw").value = "";

document.getElementById("P_ApiId").value = document.getElementById("p_PropertyListing").value;
fileter_list();  

}
function p_Beds() {
document.getElementById("saved_beds_cmd").value = document.getElementById("p_Beds").value;
fileter_list();  
}

function p_Min() {
document.getElementById("saved_p_Min_cmd").value = document.getElementById("p_Min").value;
fileter_list();  
}
function p_Max() {
document.getElementById("saved_p_Max_cmd").value = document.getElementById("p_Max").value;
fileter_list();  
}
function load_more() {
var pgsz = document.getElementById("p_PageSize").value;
var pg_amount = 12;
pgsz = Number(pgsz) + Number(pg_amount);
if (pgsz === 12) {
    pgsz = 24;
}

document.getElementById("p_PageSize").value = pgsz;

document.getElementById("PropertyCountori_view").innerHTML = pgsz;
console.log(document.getElementById("PropertyCountori_view").innerHTML);

fileter_list();  
}
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
fileter_list();  
}
function p_PropertyTypes() {


var cnt = document.getElementById("saved_type_cnt").value;
var p_PropertyTypes = document.getElementById("p_PropertyTypes").value;
var p_PropertyTypes_nme = document.getElementById("p_PropertyTypes").options[document.getElementById("p_PropertyTypes").selectedIndex].text;


var res = p_PropertyTypes.split("-");
var typi = res[0] + res[1];
var p_saved = document.getElementById("saved_p_PropertyTypes").innerHTML;
var saved_types_cmd = document.getElementById("saved_p_PropertyTypes_cmd").value;
var type_but = document.createElement("BUTTON");
type_but.setAttribute("id", "typi_but" + typi);
type_but.setAttribute("class", "w3-btn w3-border w3-round w3-small w3-display-topleft");
type_but.setAttribute("style", "margin-top:28px;margin-left:13px;background:#ebebeb;background-image:url(/wp-content/plugins/resales-marbella-wp-master/images/exit.png);background-position:right center;background-repeat:no-repeat;padding-right:34px;padding-bottom:5px");
type_but.setAttribute("onclick", "remove_type("+typi+")");
type_but.setAttribute("value", p_PropertyTypes);


var t = document.createTextNode(p_PropertyTypes_nme); 
type_but.appendChild(t);
document.getElementById("saved_p_PropertyTypes").appendChild(type_but); 
if (cnt!=0) {
        document.getElementById("saved_p_PropertyTypes_cmd").value = saved_types_cmd + "," + document.getElementById("p_PropertyTypes").value;

} else {
        document.getElementById("saved_p_PropertyTypes_cmd").value = document.getElementById("p_PropertyTypes").value;
}

    cnt++;
    document.getElementById("saved_type_cnt").value = cnt;
    if (p_PropertyTypes === "all") {
        document.getElementById("saved_p_PropertyTypes").innerHTML = "";
        document.getElementById("saved_p_PropertyTypes_cmd").value = "";
    }

fileter_list();
}
function remove_type(typi) {
var but_remover = document.getElementById("typi_but" + typi);
but_remover.style.display = "none";
var type_val = but_remover.value;
var p_PropertyTypes_am = document.getElementById("saved_p_PropertyTypes_cmd").value
var reso = p_PropertyTypes_am.split(",");
var reso1 = reso.length;
if (reso1 > 1) {
    nprop = p_PropertyTypes_am + ",";
}else{
    nprop = p_PropertyTypes_am;
}
var remo = p_PropertyTypes_am.replace(nprop, "");
document.getElementById("saved_p_PropertyTypes_cmd").value = remo;
fileter_list();
}
function fileter_list() {
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
var p_MustHaveFeatures = document.getElementById("saved_p_MustHaveFeatures_cmd").value;
var QueryId = document.getElementById("QueryId_shw").value;
var p_new_devs = document.getElementById("p_new_devs").value;
document.getElementById("roh_main_1").innerHTML = "Loading Properties...";
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {

    document.getElementById("roh_main_1").innerHTML = this.responseText;
    document.getElementById("PropertyCount_view").innerHTML = document.getElementById("PropertyCount").value;
    document.getElementById("PropertyCountori_view").innerHTML = document.getElementById("PropertyCountori").value;
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
big_url = big_url + "&p_MustHaveFeatures=" + p_MustHaveFeatures;
xmlhttp.open("GET", "/wp-content/plugins/resales-marbella-wp-master/scripts/roh_eng_01.php" + big_url, true);
xmlhttp.send();


}
function contact_win() {
    document.getElementById("contact_win").style.display = "block";
}
function contact_win_close() {
    document.getElementById("contact_win").style.display = "none";
}
function load_more_props() {
var loadbarcnt = document.getElementById("PropertyCountori").value;
document.getElementById("load_more_bar_" + loadbarcnt).style.display = "none";
var p_PageNo = document.getElementById("saved_p_PageNo_cmd").value;
p_PageNo++;
var pgsz = document.getElementById("p_PageSize").value;
var pg_amount = 12;
pgsz = Number(pgsz) + Number(pg_amount);
document.getElementById("p_PageSize").value = pgsz;
document.getElementById("PropertyCountori_view").innerHTML = pgsz;
document.getElementById("QueryId_shw").value = document.getElementById("QueryId_shw2").value;
document.getElementById("saved_p_PageNo_cmd").value = p_PageNo;
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
var prev_stuff = document.getElementById("roh_main_1").innerHTML;
var p_MustHaveFeatures = document.getElementById("saved_p_MustHaveFeatures_cmd").value;
var QueryId = document.getElementById("QueryId_shw").value;
var p_new_devs = document.getElementById("p_new_devs").value;
document.getElementById("roh_main_1").innerHTML = "Loading Properties...";
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {

    document.getElementById("roh_main_1").innerHTML = prev_stuff + this.responseText;
    document.getElementById("PropertyCount_view").innerHTML = document.getElementById("PropertyCount").value;
    document.getElementById("s_status_view").innerHTML = document.getElementById("saved_p_PageNo_cmd").value;
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
big_url = big_url + "&listview=" + listview;
big_url = big_url + "&saved_lang=" + saved_lang;
big_url = big_url + "&QueryId=" + QueryId;
big_url = big_url + "&p_new_devs=" + p_new_devs;
big_url = big_url + "&saved_plots=" + saved_plots;
big_url = big_url + "&saved_terra=" + saved_terra;
big_url = big_url + "&saved_built=" + saved_built;
big_url = big_url + "&roh_api_key=" + roh_api_key;
big_url = big_url + "&roh_client_id=" + roh_client_id;
big_url = big_url + "&p_MustHaveFeatures=" + p_MustHaveFeatures;

xmlhttp.open("GET", "/wp-content/plugins/resales-marbella-wp-master/scripts/roh_eng_01.php" + big_url, true);
xmlhttp.send();
}
function view_chngor() {
    document.getElementById("saved_p_MustHaveFeatures_cmd").value = document.getElementById("view_selector").value;
    fileter_list(); 
}
function orient_chngor() {
    document.getElementById("saved_p_MustHaveFeatures_cmd").value = document.getElementById("orient_selector").value;
    fileter_list(); 
}
function settin_chngor() {
    document.getElementById("saved_p_MustHaveFeatures_cmd").value = document.getElementById("settin_selector").value;
    fileter_list(); 
}
function feat_chngor() {
    document.getElementById("saved_p_MustHaveFeatures_cmd").value = document.getElementById("feat_selector").value;
    fileter_list(); 
}
function cond_chngor() {
    document.getElementById("saved_p_MustHaveFeatures_cmd").value = document.getElementById("cond_selector").value;
    fileter_list(); 
}
function LocFinder() {
        document.getElementById("LocTable").style = "display:block;";
        document.getElementById("livesearch").style = "position:absolute;float:left;width:100%;background:#fff;z-index:99;max-height:377px;overflow: auto;";
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("Loc_input");
  filter = input.value.toUpperCase();
  table = document.getElementById("LocTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function cleartbl() {
    document.getElementById("livesearch").style = "display:none;";
    document.getElementById("LocTable").style = "display:none;";
    document.getElementById("Loc_input").value = "";
}
function st_quryid() {
    document.getElementById("QueryId_shw").value = document.getElementById("QueryId_shw2").value;
}
function adv_rst() {
location.reload(); 
}

fileter_list();