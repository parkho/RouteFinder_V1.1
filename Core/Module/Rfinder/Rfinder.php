<?php
class Rfinder extends CodonModule
{
	public $title = 'Route Finder';

	public function index() 
	   {
            $revision = trim(file_get_contents(CORE_PATH.'/version'));
			if($revision != 'simpilot 5.5.2')
				{
					echo '<center>phpVMS Version Installed Is Not Compatible With This Module!</center><br />';
					echo '<center>phpVMS Version Installed: '.$revision.'</center>';
				}
			else
			{
            $this->show('/rfind/Rfinder.php');
			}
            
        }
}
?>
