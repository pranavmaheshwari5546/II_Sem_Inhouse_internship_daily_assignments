<?php
    
    date_default_timezone_set('Asia/Kolkata');  
    $currentDate = date('d F Y');        
    $currentTime = date('h:i:s A');        
    $timezone    = date_default_timezone_get();

    
    echo "<strong>Date:</strong> $currentDate<br>";
    echo "<strong>Time:</strong> $currentTime<br>";
    echo "<strong>Timezone:</strong> $timezone (IST)";
?>