<?php 
require_once '../core.php';

if(isset($_POST['sub'])){
    $mainmenu=  unhack($_POST['menu']);
    
    $makemenu=  new menumaker();
    
    $r= $makemenu::mainmenumaker($mainmenu);
   
    $sr=$makemenu->submenumaker(8, "hello home page");
    
    
    if($sr==TRUE):
        echo "subdone";
        else:
        echo "sub exits";
    endif;
    
    if($r==TRUE):
        
        echo "Done";
    else:
        echo "Already exits";
    endif;
        
}


$makemenu=  new menumaker();
$dta=$makemenu->getmainmenu();

foreach ($dta as $d):
    
    echo $d['menu_name'];
    
endforeach;



?>


<form method="post">
 Main Menu name: <input type="text" name="menu">
 <input type="submit" name="sub" value="Add menu">

</form>