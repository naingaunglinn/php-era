<?php

if(file_exists('about.php')){
    echo filesize('about.php');

    file_put_contents('about.php', 'hello world');
    clearstatcache();
    echo filesize('about.php');
} else {
    echo 'File not found';
}