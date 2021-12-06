<?php
class Page {
	private $base = "http://russet.wccnet.edu/~lnaiki/unit11_phpMVC/";

  public function nav(){
		$nav = <<<NAV
      <nav>
        <ul>
          <li><a href="{$this->base}homePage">Names List</a></li>
          <li><a href="{$this->base}addNamePage">Add Name and Info</a></li>
          <li><a href="{$this->base}updateDeleteNamePage">Update/Delete Names</a></li>
        </ul>
      </nav>
NAV;
		return $nav;
  }
 

}