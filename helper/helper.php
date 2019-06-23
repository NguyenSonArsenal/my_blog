<?php
function getMenuActive($item)
{
    echo basename($_SERVER['SCRIPT_NAME']) == $item || basename($_SERVER['SCRIPT_NAME']) == '' ? 'active' : '';
}