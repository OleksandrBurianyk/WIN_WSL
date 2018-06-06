$enFiles = glob('./app/code/Magento/*/i18n/fr_FR.csv');
print_r($enFiles);
foreach ($enFiles as $file) {
    $contents = file_get_contents($file);
    $contents = str_replace(",", ",---", $contents);
    $contents = str_replace(",---\"", ",\"---", $contents);
    file_put_contents($file, $contents);
}