
<?php
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case '':
            require __DIR__ . '/resources/views/landing.php';
            break;
        case '/':
            require __DIR__ . '/resources/views/landing.php';
            break;
        
        default:
            $filename = __DIR__ . "/resources/views/" . $request . ".php";
            if(file_exists($filename)){
                require $filename;
                break;
            }
            
            http_response_code(404);
            require __DIR__ . "/resources/views/404.php";

            break;
    }
?>