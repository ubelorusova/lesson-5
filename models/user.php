<?php

function foo(array $user =[]) {
    foreach($user as $key => $_REQUEST) {
        echo "[$key] => $request <br>;
    }

    

    $name = "не определено";
    $age = "не определен";
    if(isset($_POST["name"])){
        $name = $_POST["name"];
    }
    if(isset($_POST["age"])){
      
        $age = $_POST["age"];
    }
    echo "Имя: $name <br> Возраст: $age";
}

?>