<?php
    require_once "ClassAutoLoad.php";

        $OBJ_Layout->headers();
        $OBJ_Layout->logo();
        $OBJ_Layout->navigation();
        $OBJ_Layout->banner();
        $OBJ_Forms->sign_in_form();
        $OBJ_Layout->footer();