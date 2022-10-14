<?php
	$url = "https://api.openweathermap.org/data/2.5/weather?q=guwahati&appid=896a8cbed5c40502dcb134637c775148";
	$json = file_get_contents($url);
	$json_data = json_decode($json);

    echo "Date: " . date("d/m/Y") . "<br>";
    echo "Location(lat, lon): $json_data->name (".$json_data->coord->lat."&#176;N, ".$json_data->coord->lon."&#176;E)";
    $cels=$json_data->main->temp- 273.15;
    echo "<br>Temperature: ".$json_data->main->temp."K/".round($cels,2)."&#8451;";
    echo "<br>Sky: ";
    foreach($json_data->weather as $value)
        echo $value->description;
    $cels=$json_data->main->feels_like- 273.15;
    echo "<br>Feels like: ".$json_data->main->feels_like."K/".round($cels,2)."&#8451;<br>";
    $cels=$json_data->main->temp_min- 273.15;
    echo "Minimum Temperature: ".$json_data->main->temp_min."K/".round($cels,2)."&#8451;<br>";
    $cels=$json_data->main->temp_max- 273.15;
    echo "Maximum Temperature: ".$json_data->main->temp_max."K/".round($cels,2)."&#8451;";
    echo "<br>Visibility: ".$json_data->visibility."m";
    echo "<br>Pressure: ".$json_data->main->pressure."mbar";
    echo "<br>Humidity: ".$json_data->main->humidity."%";
    echo "<br>Wind speed: ".$json_data->wind->speed."kmph";
    
?>