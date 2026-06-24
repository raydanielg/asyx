<?php
$files = array_merge(
    glob(__DIR__ . '/../resources/views/partials/*.blade.php'),
    glob(__DIR__ . '/../resources/views/layouts/*.blade.php')
);
foreach ($files as $f) {
    $content = file_get_contents($f);
    $new = str_replace('landing::landing.', 'landing.', $content);
    if ($new !== $content) {
        file_put_contents($f, $new);
        echo "Fixed: " . basename($f) . "\n";
    }
}
echo "Done.\n";
