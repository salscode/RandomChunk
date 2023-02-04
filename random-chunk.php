<?php
    // Salvatore Sodano
    // https://salscode.com
    // [!RandomChunk? &chunks=`chunk1, chunk2`!]
    // Randomly generates a chunk from a comma delineated list of chunks.
    $chunks = str_ireplace(" ","",$chunks);
    $charray = explode(",",$chunks);
    $count = count($charray) - 1;
    $rand = rand(0,$count);
    $result = $charray[$rand];
    echo "{{".$result."}}";
?>
