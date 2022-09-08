<?php

$data = ['name' => 'Daniel', 'age' => 21];

ob_start(); // Todo o conteúdo dentro de ob_start(), será armazenado na variável $content.

extract($data);

require 'home.php';

$content = ob_get_contents();

ob_end_clean();

var_dump($content);