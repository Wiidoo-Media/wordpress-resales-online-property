function wii_show_tab(wid) {
 var i, tabwins;

    tabwins = document.getElementsByClassName("tabwin");
  for (i = 0; i < tabwins.length; i++) {
    tabwins[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-blue", "");
  }  
  document.getElementById("tabwin_" + wid).style.display = "block";
  
  document.getElementById("tablink_" + wid).className = "tablink w3-container w3-bottombar w3-cell w3-mobile w3-cell-middle w3-border-blue";
  //tablink_2
  
  
}
function roh_contact_confirm_but() {
    var M1 = document.getElementById("M1").value;
    var M2 = document.getElementById("M2").value;
    var M5 = document.getElementById("M5").value;
    var M3 = document.getElementById("M3").value;
    var RsId = document.getElementById("roh_da_no").innerHTML;
    var P_ApiId = document.getElementById("P_ApiId").value;
    var roh_api_key = document.getElementById("roh_api_key").value;
    var roh_client_id = document.getElementById("roh_client_id").value;
    var bigUrlEnd = "";
    M1 = M1.trim();
    M2 = M2.trim();
    M5 = M5.trim();
    M3 = M3.trim();
    
        document.getElementById("roh_contact_chk").style = "display:none";
        document.getElementById("roh_contact_confirm").style = "display:block";
        document.getElementById("tit_resp").innerHTML = "SENDING YOUR REQUEST";
        
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

        document.getElementById("roh_contact_confirm").innerHTML = this.responseText;
    }
    };
    bigUrlEnd = "?";
    bigUrlEnd = bigUrlEnd + "M1=" + M1;
    bigUrlEnd = bigUrlEnd + "&M2=" + M2;
    bigUrlEnd = bigUrlEnd + "&M3=" + M3;
    bigUrlEnd = bigUrlEnd + "&M5=" + M5;
    bigUrlEnd = bigUrlEnd + "&RsId=" + RsId;
    bigUrlEnd = bigUrlEnd + "&P_ApiId=" + P_ApiId;
    bigUrlEnd = bigUrlEnd + "&roh_api_key=" + roh_api_key;
    bigUrlEnd = bigUrlEnd + "&roh_client_id=" + roh_client_id;
    xmlhttp.open("GET", "../wp-content/plugins/resales-marbella-wp-master/scripts/roh_contact_eng.php" + bigUrlEnd, true);
    xmlhttp.send();
}
function prop_ask() {
    var M1 = document.getElementById("M1").value;
    var M2 = document.getElementById("M2").value;
    var M3 = document.getElementById("M3").value;
    var M5 = document.getElementById("M5").value;
    var fname_resp = document.getElementById("fname_resp");
    var lname_resp = document.getElementById("lname_resp");
    var cemail_resp = document.getElementById("cemail_resp");
    var tphone_resp = document.getElementById("tphone_resp");

    M1 = M1.trim();
    M2 = M2.trim();
    M5 = M5.trim();
    M3 = M3.trim();
    var letters = /^[A-Za-z]+$/;
    var numbers = /^[A-Za-z]+$/;
    var emails_addr = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var trig = 0;
    if (M1 === "") {
        fname_resp.innerHTML = "Please fill in";
        fname_resp.style.color = "red";
        document.getElementById("fname_success").style = "display:none";
    }else{
            if (M1.match(letters)) {
                trig++;
                fname_resp.innerHTML = "First Name";
                fname_resp.style.color = "grey";
                document.getElementById("fname_success").style = "display:inline;color:green";
            }else{
                fname_resp.innerHTML = "Please type your first name";
                fname_resp.style.color = "red";
                document.getElementById("fname_success").style = "display:none";
            }
    }
    if (M3 === "") {
        document.getElementById("tphone_resp").innerHTML = "Please fill in";
        document.getElementById("tphone_resp").style.color = "red";
        document.getElementById("tphone_success").style = "display:none";
    }else{

                trig++;
                tphone_resp.innerHTML = "Phone Number";
                tphone_resp.style.color = "grey";
                document.getElementById("tphone_success").style = "display:inline;color:green";

    }
    if (M2 === "") {
        document.getElementById("lname_resp").innerHTML = "Please fill in";
        document.getElementById("lname_resp").style.color = "red";
                document.getElementById("lname_success").style = "display:none";
    }else{
            if (M2.match(letters)) {
                trig++;
                lname_resp.innerHTML = "Last Name";
                lname_resp.style.color = "grey";
                document.getElementById("lname_success").style = "display:inline;color:green";
            }else{
                lname_resp.innerHTML = "Please type your last name";
                lname_resp.style.color = "red";
                document.getElementById("lname_success").style = "display:none";
            }
    }
    
    if (M5 === "") {
        document.getElementById("cemail_resp").innerHTML = "Please fill in";
        document.getElementById("cemail_resp").style.color = "red";
    }else{
            if (M5.match(emails_addr)) {
                trig++;
                cemail_resp.innerHTML = "Email address";
                cemail_resp.style.color = "grey";
                document.getElementById("cemail_success").style = "display:inline;color:green";
            }else{
                cemail_resp.innerHTML = "Please type your email";
                cemail_resp.style.color = "red";
                document.getElementById("cemail_success").style = "display:none";
            }
    }

    if (trig===4) {
                document.getElementById("roh_contact").style = "display:none";
                document.getElementById("roh_contact_chk").style = "display:block";
                document.getElementById("M1_2").innerHTML = M1;
                document.getElementById("M2_2").innerHTML = M2;
                document.getElementById("M5_2").innerHTML = M5;
                document.getElementById("M3_2").innerHTML = M3;
                document.getElementById("tit_resp").innerHTML = "PLEASE CHECK YOUR DETAILS";
        }
}
function edit_contact() {
                document.getElementById("roh_contact").style = "display:block";
                document.getElementById("roh_contact_chk").style = "display:none";
}
function openSploder(pici) {
var pici_img = document.getElementById("pici_" + pici).style.backgroundImage;
document.getElementById("mySploder").style.display = "block";
var reso = pici_img.split("(");
var reso1 = reso[1].split(")");
var picino = "imigi_" + pici;
var imgo = "<img src=" + reso1[0] + ">";
document.getElementById("imgbank").innerHTML = imgo;

}
function closeSploder() {
  document.getElementById("mySploder").style.display = "none";
}
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("slidator");
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
console.log("*********************************");
console.log("*** Developed by rohsigma.com ***");
console.log("*********************************");
console.log("** Designed by wiidoomedia.com **");
console.log("*********************************");