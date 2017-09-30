<?php 
function contact(){
    if($_SERVER['REQUEST_METHOD'] == "POST"){ 
    $to='1997nanddinikhanna@gmail.com';
    $subject='Recruit Email From Website';
    $message='Name: '.$_POST['name'] ."\n" .$_POST['subject'];
    $header = "From: " .$_POST['email'];
    if(mail($to,$subject,$message,$header))
        echo "Sent";
    else 
        echo "Not sent";
}
else
{
    echo "Not Sent";
}}
?>
<!DOCTYPE html>
<html>
<head>
	<title>RECRUIT</title>
	<link rel="stylesheet" type="text/css" href="about.css">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Zilla+Slab" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBg8xB6uUWpAxRzJWB4AIfz0mUJQ8g4_7o"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.1/css/mdb.min.css">
    
	<script type="text/javascript">
     	 function init_map() {
            var var_location = new google.maps.LatLng(12.968410, 77.648297);
            var var_mapoptions = {
                center: var_location,
                zoom: 14
            };
            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "NKC"
            });
            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);
            var_marker.setMap(var_map);
         }
         google.maps.event.addDomListener(window, 'load', init_map);
         var modal = document.getElementById('id01');
    </script>
</head>
<body>
		 <a href="nk.html" style="color: white;"><button type="button" class="btn btn-success" style="border-radius: 50px;margin-top: -40px">Back</button></a>
		<div class="container single">
			<h1><img src="logo.png" class="heading" ></img>RECRUIT</h1>
			<hr>
			<h3>In search of excellence "Our aim is to assist our client to build a team with leaders and team players having an edge 	over others"
			</h3>
			<hr>
			<br>
			<h2><b>Our Clients</b></h2>
			<h3><p> N.K. Consultants has an extremely wide client base covering the entire gamut of Garment Industries.</p>
			<p>Few of our clients in India and overseas are listed below:-</p>
			<ul class="center">
				<li><p><img src="bullet.jpg" style="width: 4%">Arvind Ltd</p></li>
				<li><p><img src="bullet.jpg" style="width: 4%">K Mohan Exports</p></li>
				<li><p><img src="bullet.jpg" style="width: 4%">Matrix Clothing</p></li>
				<li><p><img src="bullet.jpg" style="width: 4%">CIEL group</p></li>
				<li><p><img src="bullet.jpg" style="width: 4%">Adidas</p></li>
				<li><p><img src="bullet.jpg" style="width: 4%">Columbia Sportswear</p></li> 
				<li><p><img src="bullet.jpg" style="width: 4%">Marks & Spencer's</p></li>
				<li><p><img src="bullet.jpg" style="width: 4%">Madura Fashion & Lifestyle</p></li>
				<li><p><img src="bullet.jpg" style="width: 4%">Ralph Lauren</p></li>
				<li><p><img src="bullet.jpg" style="width: 4%">ITC Limited</p></li> 
				<li><p><img src="bullet.jpg" style="width: 4%">Walmart</p></li>
				<li><p><img src="bullet.jpg" style="width: 4%">Puma</p></li>
                <li><p><img src="bullet.jpg" style="width: 4%">Tesco</p></li>
                <li><p><img src="bullet.jpg" style="width: 4%">Triburg</p></li>
                <li><p><img src="bullet.jpg" style="width: 4%">PVH</p></li>
                <li><p><img src="bullet.jpg" style="width: 4%">Pantaloon</p></li>
			</ul>
            <hr>
                <div class="row">
                <div class="col-xs-9"
                <p> Send us an email mentioning your requirements </p>
                <p>PLease specify company name along with a point of contact</p>
                <p>We will contact you with probable offers!</p> 
                <br><br>
                </div>
                <div class="col-xs-3">
				<?php contact(); ?>
                </div>
                </div>
                
		</div>
		<br>
		<div style="color:#777;background-color:black;text-align:center;padding:50px 80px;text-align:justify;" class="container-fluid">
			<h3 style="text-align: center;" class="contact"><b>Contact Us</b></h3>
        	<section id="contact">
	 		    <div class="row">
                 	<div class="col-md-4">
                         <div id="map-container" ></div>
                 	</div>
                 	<div style="text-align:center" class="col-md-4">
                   	    <h4 style="margin-top: 50px">How can we help you?</h4>
                   	    <br><br>
                   	    <p>To upload your resume <a href="#">Click Here</a>
                   	    <br>
                   	    <p>To get in touch with the team <a href="">Click Here</a></p>
                   	    <br><br>
                   	    <button  type="button" class="btn btn-fb"><i class="fa fa-facebook left"></i> FACEBOOK</button>
                   	    <button  type="button" class="btn btn-li"><i class="fa fa-linkedin 	left"></i> Linkedin</button>
                 	</div>
                 	<div class="col-md-4" style="margin:3% 0 0 0">
                         	<ul class="text-center" style="list-style-type: none">
                             	<li class="wow fadeInUp" data-wow-delay="0.2s"><i class="fa fa-map-marker"></i>
                                 	<p>1550, 10th Main, HAL 3rd Stage</p>
                                 	<p>Bangalore, Karnataka, India</p>
                             	</li>
                             	<br>
                             	<li class="wow fadeInUp" data-wow-delay="0.3s"><i class="fa fa-phone"></i>
                                 	<p>+ 918025205089,+ 919342435346</p>
                             	</li>
                             	<br>
                             	<li class="wow fadeInUp" data-wow-delay="0.4s"><i class="fa fa-envelope"></i>
                                 	<p>nkc@nkconsultants.co.in</p>
                             	</li>
                         	</ul>
                	</div>
            	</div>
        	</section>
		</div>
<body>
</html>