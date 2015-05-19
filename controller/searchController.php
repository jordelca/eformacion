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

public function advancedSearch() 
{
    $this->registry->template->show('search_advancedSearch');

}

public function advancedUsersSearch() 
{
    $this->registry->template->show('search_advancedUsersSearch');

}


}
?>
