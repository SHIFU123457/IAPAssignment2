<?php
    require_once "db/dbConnect.php";
    require_once "ClassAutoLoad.php";
    
        $OBJ_Layout->headers();
        $OBJ_Layout->logo();
        $OBJ_Layout->navigation();
        $OBJ_Layout->banner();
        $OBJ_Forms->seeUsers($conn);
        $OBJ_Layout->footer();