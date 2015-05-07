<?php

Class statsController Extends baseController {

public function index() 
{
    $this->registry->template->show('stats_orgStats');

}

public function showOrgStats() 
{
    $this->registry->template->show('stats_courseStats');

}

public function showCourseStats() 
{
    $this->registry->template->show('stats_orgStats');

}




}
?>
