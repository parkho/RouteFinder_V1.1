<?php
class Rfinder extends CodonModule
{
	public $title = 'Route Finder';
	
	public function index() 
	   {
            
            $this->show('/rfind/Rfinder.tpl');
			
            
        }
}
?>