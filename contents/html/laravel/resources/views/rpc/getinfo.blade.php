<?php

use App\Libs\rpc;

function main()
{
    $rpc = new RPC();
    $getinfo = $rpc->send("getinfo");
    echo $getinfo;

}

main();