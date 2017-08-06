<?php

use AXP\FileParser\FileParser;

include_once '../../vendor/autoload.php';

$file = file_get_contents('./file.ini', FILE_USE_INCLUDE_PATH);
$data = FileParser::ini($file);

print_r($data);

?>


<?php if ( $value = get_field('название поля') ): ?>
    <?php echo $value; ?>
<?php endif; ?>

