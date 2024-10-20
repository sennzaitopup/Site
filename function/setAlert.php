<?php

function setAlert($Text, $showIcon)
{
    switch ($showIcon) {
        case 0:
            $getIcon = 'success';
            break;
        case 1:
            $getIcon = 'error';
            break;
        case 2:
            $getIcon = 'warning';
            break;
    }

    echo "<script>Swal.fire('$Text', '', '$getIcon')</script>";
    //echo '<div class="alert alert-'.$getIcon.'">'.$Text.'</div>';

}
