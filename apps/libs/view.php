<?php
class view{
     public function view($filename,$data=[],$s=true,$hf=true)
     {
        $filename = str_replace('.', '/', $filename);
        $path = "apps/views/$filename.php";
        if(file_exists($path)){
            include "apps/views/layout/top.php";
            if($hf)
                 include "apps/views/layout/header.php";
            if($s)
                include "apps/views/layout/slider.php";
            if($hf)
                include "apps/views/layout/footer.php";
            include "apps/views/layout/bottom.php";
            include $path;
        }
     }
} 
?>