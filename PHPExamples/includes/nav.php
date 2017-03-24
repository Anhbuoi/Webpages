<ul>
	<?php
		foreach ($navItems as $item){
			echo "<li><a href=\"$item[page]\">$item[title]</a></li>";
		}
	?>
</ul>