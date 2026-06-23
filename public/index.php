<?php

declare(strict_types=1);

require dirname(__DIR__) . '/app/helpers/functions.php';

$page = current_page();

require dirname(__DIR__) . '/app/templates/header.php';
render_page($page);
require dirname(__DIR__) . '/app/templates/footer.php';

