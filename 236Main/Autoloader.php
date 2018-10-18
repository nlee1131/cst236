<?php
spl_autoload_register(function($class){
    
    
    // get the difference in folders between the location of autoloader and the file that called autoloader.
    $lastdirectories = substr(getcwd(), strlen(__DIR__));
    
//         echo "getcwd = : " . getcwd() . "<br>";
//         echo "__DIR__ = : " . __DIR__ . "<br>";
//         echo "last directories = : " .$lastdirectories . "<br>";
    
    
    
    
    // count the number of slashes (folder depth)
    $numberoflastdirectories = substr_count($lastdirectories, '/');
    
//     echo "number of directories different : " . $numberoflastdirectories . "<br>";
    
    // this is the list of possible locations that classes are found in this app.
    $directories = ['Controller', 'Database', 'Model', 'Service/Business', 'Service/Data', 'View'];
    
    // look inside each directory for the desired class.
    foreach($directories as $d) {
        $currentdirectory =  $d;
        for ($x = 0; $x < $numberoflastdirectories; $x++) {
            $currentdirectory = "../" . $currentdirectory;
//             echo $currentdirectory . "<br>";
        }
        $classfile = $currentdirectory . '/' . $class . '.php';
//         echo $classfile . "<br>";
        
        if (is_readable($classfile)) {
            if (require $d . '/'. $class . ".php") {
                break;
            }
        }
        else 
        {
//             echo "Tried " . $classfile . " and failed<br>";
        }
    }
    
});