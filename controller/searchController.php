<?php

Class searchController Extends baseController {

public function index() 
{
    $this->registry->template->show('search_advanced');

}

public function advanced() 
{
    $this->registry->template->show('search_advanced');

}


}
?>
