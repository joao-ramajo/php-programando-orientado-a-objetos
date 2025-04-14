<?php 

foreach(new DirectoryIterator('./exceptions') as $file){
    print (string) $file .  PHP_EOL;
    // print $file;
}