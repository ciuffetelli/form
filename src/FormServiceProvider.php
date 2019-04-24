<?php
namespace seufetelli\form;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider {
    
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
    
    public function register(){
    }
}
?>
