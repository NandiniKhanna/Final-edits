<?php
    function upload(){
    $name=$_FILES['file']['name'] ;
    $size=$_FILES['file']['size'] ."<br>";
    $type=$_FILES['file']['type'] ."<br>";
    $extension=strtolower(substr($name, strpos($name, '.')+'1'));
     $type=substr($type,0,-4);
     
     // echo strlen('application/pdf');
    $tmp_name=$_FILES['file']['tmp_name'] ;
    $max_size=2097192;
    // echo $error=$_FILES['file']['error'];
    if(isset($name)){
        if(!empty($name))
        {
            if(($extension=='doc'||$extension=='docx'|| $extension=='pdf') && $size<$max_size && ($type=='application/pdf' || $type=='application/msword' || $type=='application/vnd.openxmlformats-officedocument.wordprocessingml.document'))
            {
                $location="uploads/";
                if(move_uploaded_file($tmp_name, $location.$name))
                    echo "Uploaded";
                else
                    echo "There was an error";
            }
            elseif($extension=='pdf')
                echo "Type works";
            else
                echo "Must be of doc type or pdf type or size too large";
        }
        else
            echo "Select a file";
    }
}
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
       <title>APPLY</title>
    <link rel="stylesheet" type="text/css" href="about.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Zilla+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBg8xB6uUWpAxRzJWB4AIfz0mUJQ8g4_7o"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.1/css/mdb.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    <body style="text-align: center;">
    <button type="button" class="btn btn-success" style="border-radius: 50px;margin-top: -40px"><a href="nk.html" style="color: white;">Back</a></button>
        <div class="container single">
            <h1><img src="logo.png" class="heading"></img> APPLY</h1>
            <hr>
            <h3>In search of excellence "Our aim is to assist our client to build a team with leaders and team players having an edge   over others"
            </h3>
            <hr>
            <br>
            <h2><b>We Specialize In</b></h2>
            <h3><p>We have acquired database of experienced, energetic & highly professional candidates, in various positions, at all levels in the garment / textile industry.</p>
            <p>We have successfully placed candidates at following levels just to name a few:</p>
            <ul class="center1">
                <li><p><img src="bullet.jpg" style="width: 1.5%">CEO/COO/CFO</p></li>
                <li><p><img src="bullet.jpg" style="width: 1.5%">Quality Heads</p></li>
                <li><p><img src="bullet.jpg" style="width: 1.5%">Merchandisers, Designers, Product Development Managers & Executives,</p></li>
                <li><p><img src="bullet.jpg" style="width: 1.5%">Industrial Engineers, Production Planning executives/PPC Managers</p></li>
                <li><p><img src="bullet.jpg" style="width: 1.5%">Production Managers, Genral Managers Operations</p></li>
                <li><p><img src="bullet.jpg" style="width: 1.5%">QA Technicians , Pattern Masters, Garment technicians/Fit technicians</p></li> 
                <li><p><img src="bullet.jpg" style="width: 1.5%">Fabric Sourcing Managers/Executives, Lab technicians</p></li>
                <li><p><img src="bullet.jpg" style="width: 1.5%">Logistics Managers/ executives</p></li>
                <li><p><img src="bullet.jpg" style="width: 1.5%">Sales & Marketing Head/Managers</p></li>
                <li><p><img src="bullet.jpg" style="width: 1.5%">Accounts & Finance Executives</p></li> 
                <li><p><img src="bullet.jpg" style="width: 1.5%">HR ; Admin Heads & Managers</p></li>
                <li><img src="bullet.jpg" style="width: 1.5%">Compliance Manager</li>
            </ul></h3>
            <hr>
            <h3><b>UPLOAD CV</b> 
                        <h1> <?php upload() ?> </h1>
            </h3>
            <br><br>
        </div>
        <br>
        <div style="color:#777;background-color:black;text-align:center;padding:50px 80px;text-align:justify;" class="container-fluid">
            <h3 style="text-align: center;" class="contact"><b>Contact Us</b></h3>
            <section id="contact">
                 <div class="row">
                    <div class="col-md-4">
                         <div id="map-container"></div>
                    </div>
                    <div style="text-align:center" class="col-md-4">
                        <h4 style="margin-top: 50px">How can we help you?</h4>
                        <br><br>
                        <p>To upload your resume <a href="#">Click Here</a>
                        <br>
                        <p>To get in touch with the team <a href="">Click Here</a></p>
                        <br><br>
                        <button type="button" class="btn btn-fb"><i class="fa fa-facebook left"></i> FACEBOOK</button>
                        <button type="button" class="btn btn-li"><i class="fa fa-linkedin   left"></i> Linkedin</button>
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
    </body>
    </html>
