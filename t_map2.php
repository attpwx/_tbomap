<!DOCTYPE HTML>
  <html>
    <head>
        <meta charset="UTF-8">
        <title>Routing Map Sample | Longdo Map</title>
        <style type="text/css">
          html{
            height:100%; 
          }
          body{ 
            margin:0px;
            height:100%; 
          }
          #map {
            height: 100%;
          }
          #result {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            width: 1px;
            height: 80%;
            margin: auto;
            border: 4px solid #dddddd;
            background: #ffffff;
            overflow: auto;
            z-index: 2;
        }
        </style>

    </head>
        
    <body onload="init();">
<?php
$str = "Hello world!";
//$lon1 = "101.2510574";
//$lat1 = "12.6832535";
echo $str;
 ?>
<?php
//$servername = "thebestone.thaiddns.com:3306";
$servername = "thebestone.thaiddns.com:3306";
$username = "it";
$password = "tbo039301442";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfull#y#";
?>

<?php
$con = mysqli_connect('thebestone.thaiddns.com:3306', 'it', 'tbo039301442', 'tbo_db');
$perpage = 12;
if (isset($_GET['page'])) {
$page = $_GET['page'];
} else {
$page = 1;
}
$start = ($page - 1) * $perpage;
//$sql = " SELECT distinct datediff(now(),punch_time) as date1,emp.emp_lastname ,emp.emp_firstname ,ap.employee_id,ap.punch_time,ap.verifycode,ap.terminal_id,t.terminal_name FROM att_punches as ap LEFT join hr_employee emp on ap.employee_id=emp.id  LEFT JOIN att_terminal t ON t.id=ap.terminal_id  WHERE datediff(now(),punch_time) ='0' and employee_id not in ('258') ORDER by punch_time DESC limit {$start} , {$perpage} ";
$sql = " SELECT * FROM users WHERE id ='9' ";
$query = mysqli_query($con, $sql);
?>
<?php while ($result = mysqli_fetch_assoc($query)) { ?>
<?php echo $result['useremail']; ?> <?php echo $result['userphone']; ?> 

    <script type="text/javascript" src="https://api.longdo.com/map/?key=cd925698116ee0fbdf5f46ee2468067d"></script>
        <script>
          function init() {
            map = new longdo.Map({
              placeholder: document.getElementById('map')
            });
            map.Route.placeholder(document.getElementById('result'));
            map.Route.add(new longdo.Marker({ lon: 102.098502, lat: 12.617407 },
                { 
                    title: 'THE BEST ONE', 
                    detail: 'I\'m here' 
                }
            ));
            map.Route.add({ lon: <?php echo $result['useremail']; ?>, lat: <?php echo $result['userphone']; ?> });
            map.Route.search();
          }
        </script>
        <div id="map"></div>
        <div id="result"></div>
        <?php echo $lon1; echo $lat1 ?>
        <?php } ?>
    </body>
  </html>