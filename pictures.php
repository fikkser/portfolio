<?php
    $userid = 'j.wande@gmail.com';
    $feedURL = "http://picasaweb.google.com/data/feed/api/user/$userid/albumid/5575740507858219249?imgmax=600&max-results=4";
    $sxml = simplexml_load_file($feedURL);
    $objData = json_encode($sxml);

echo $objData;