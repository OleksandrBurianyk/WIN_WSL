<?php

$enFiles = glob('/Users/mtanniru/Code/mls12/vendor/magento/*/i18n/nl_NL.csv');
foreach ($enFiles as $file) {
    $contents = file_get_contents($file);
    $contents = str_replace(",", ",---", $contents);
    $contents = str_replace(",---\"", ",\"---", $contents);
    file_put_contents($file, $contents);
}
