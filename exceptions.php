<?php
/**
 * Created by PhpStorm.
 * User: baraka62
 * Date: 6/9/2017
 * Time: 8:55 AM
 *
 */
$file="myfile.txt";
fopen("myfile.txt","r" );
function checkfile($file)
{
    if (file_exists($file) == false) {
        throw new Exception("File does not exist");
    }
    else if(is_readable($file)== false){
        throw new Exception("Access denied: You do not have read permissions");
    }
}
    try{
        checkfile($file);
}
catch(Exception $e){
    echo $e->getMessage();

}
?>