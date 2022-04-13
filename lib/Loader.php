<?php
class Loader
{
    private $directories=array();

    public function registerDirectory($directory)
    {
        $this->directories[]=$directory;
        return;
    }
    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }
    public function loadClass($className)
    {
        foreach($this->directories as $directory){
            $filePath=$directory.'/'.$className.'.php';
            if(is_readable($filePath)){
                require $filePath;
                return;
            }
        }

    }
}