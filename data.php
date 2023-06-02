<?php

$array=[
    [   
        "id"=>1,
        "name"=>"User 1",
        "email"=>"a@a.com",        
    ],
    [
        "id"=>2,
        "name"=>"User 2",
        "email"=>"b@a.com",       
    ],
    [   
        "id"=>3,
        "name"=>"User 3",
        "email"=>"c@a.com",        
    ],
    [   
        "id"=>4,
        "name"=>"User 4",
        "email"=>"d@a.com",        
    ],
];
echo json_encode($array);
?>