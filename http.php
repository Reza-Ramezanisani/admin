<?php
$dir = "upload";
chdir("PHP");

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
        if($file==="user.png"){
          echo "yes";
        }
    }
    closedir($dh);
  }
}



echo getcwd();
print_r(scandir('upload'));
echo strlen('8a2b734847b7544fd7af15c9dbb012e3');
?>
