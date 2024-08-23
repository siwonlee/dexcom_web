


 <script src="https://cdn.tailwindcss.com"></script>

<div class="bg-gray-800 h-full">

<?php
// run_python.php

  //


// Command to run the Python script
$command = escapeshellcmd('python3 script.py');

// Execute the command and capture the output and return status
$output = shell_exec($command);
// $output = trim($output); // Remove any surrounding whitespace

// Check if the output is empty
if ($output === null) {
    echo "Error running Python script.";
} elseif (  $output >= 80 && $output <= 180) 

{
    echo " 
	
	
	<div class='  text-green-400 text-9xl h-screen flex items-center justify-center' style='font-size: 165px;'>
	$output
	
	</div>
	
 ";
	
	
	
	
} elseif (  $output <= 80 || $output >= 180) {
	
	    echo " 
	
	
	<div class='  text-red-400 text-9xl h-screen flex items-center justify-center' style='font-size: 165px;'>
	$output
	
	</div>
	
 ";
	
	
}
?>


 </div>
 
 
 <script>
 
 window.setTimeout( function() {
  window.location.reload();
}, 150000);
 </script>
 
 
