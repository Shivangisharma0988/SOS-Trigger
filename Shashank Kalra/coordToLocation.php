<!DOCTYPE html>

<?PHP 
$lng=$_POST['source_lng'];
$lat=$_POST['source_lat'];
$destination=$_POST['Destination'];
$phone=$_POST['phone_no'];
?>
<html>
<head>
<title>Geolocation Api</title>
</head>
<body>
<button onclick="showPosition()">Get Location</button>

<div id="output"></div>

 <script src="http://code.jquery.com/jquery-2.2.4.min.js">
</script>
<script>
var x = document.getElementById('output');

function showPosition(position)
{

var locAPI ="http://www.mapquestapi.com/geocoding/v1/reverse?key=AnBXm5iXXJZwaIbILESeoYr8OeRHyRbp&location=<?php echo $lat ?>,<?php echo $lng ?>&includeRoadMetadata=true&includeNearestIntersection=true"  ;

$.get({
           url:locAPI,
           success: function(data){     
	       console.log(data);
		   
		     x.innerHTML=data.results[0].locations[0].street+" , ";
		     x.innerHTML+=data.results[0].locations[0].adminArea5+" , ";
			 x.innerHTML+=data.results[0].locations[0].adminArea3+",";
			 x.innerHTML+=data.results[0].locations[0].adminArea1;
		    
             var loc1=data.results[0].locations[0].street;
             var loc2= data.results[0].locations[0].adminArea5;
             var loc3= data.results[0].locations[0].adminArea3;
             var loc4= data.results[0].locations[0].adminArea1;
        
             var loc_name=loc1.concat(loc2,loc3,loc4);		
		   
} 
});

}
</script>


</body>
</html>