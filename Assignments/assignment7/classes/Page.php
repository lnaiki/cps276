<?php

class Page {
	public function nav(){
		$nav = <<<NAV
      <nav>
        <ul>
          <li><a href="http://russet.wccnet.edu/~lnaiki/assignments/assignment7/form.php">Add File</a></li>
          <li><a href="http://russet.wccnet.edu/~lnaiki/assignments/assignment7/displayLinks.php">Show File list</a></li>
        </ul>
      </nav>
NAV;
		return $nav;
	}
}