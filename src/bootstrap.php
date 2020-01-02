<?php
use nqs\App;
use nqs\pluginManager;


try {


App::makeApp();
App::Run();
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}