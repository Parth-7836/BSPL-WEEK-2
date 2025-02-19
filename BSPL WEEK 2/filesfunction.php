<?php

$fptr = fopen("myfile.txt", "r");
//echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file.Please enter a valid filename");
}
$content = fread($fptr, filesize("myfile.txt"));
fclose($fptr);
echo $content;
/*
-->>The fclose() function closes an open file. 
It has a huge impact on resource management in PHP websites. 
If we have opened any file, we can close it by just using fclose(), so it does not eat resources when it is not needed.
-->>fread() is a PHP function that will read the content of an open file. 
This function will stop at the end of the file or when it reaches the specified length, whichever comes first. 
To use this function, we need to type $fcontent=fread($ptr, value); where $ptr is the file pointer and value is the length of the content to be read.
-->>fopen() is a PHP function that will open and read lines until the end of the file is reached. 
To use this function, we need to type $fptr= fopen("myfile.txt", "r");. 
Now, if we run the file, it will not display anything until we print it. 
If we print the file pointer, it will show us something like "Resource id is #3". 
If we use var_dump on echo, It will give us bool(true) if the file we have provided exists and bool(false) if it does not exist.
*/
?>
