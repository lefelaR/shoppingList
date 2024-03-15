<?php

function buildurl($string)
{
    global $context;
    return $context->siteroot . $string;
}

function redirect($url)
{
    if (isset($url)) {
        ob_clean();
        Header('Location: ' . buildurl($url));
        die();
    }
}
