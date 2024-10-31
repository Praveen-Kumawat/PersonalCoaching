<?php
function redirect($location)
{
    header('location:'.ROOT.$location);
}
?>