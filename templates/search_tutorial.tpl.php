
<form name="input" action="test" method="get" id='search-home-tutorials'>
	<input type="hidden" name="foss" id='search-home-tutorials-foss' value=''>
	<input type="hidden" name="language" id='search-home-tutorials-language' value=''>
	<input type="submit" value="Go">
</form>
	<div class='carousel'>
		<ul id='jcarousel' class="jcarousel search-foss">
			<?php
				$query='select * from foss_categories';
				$result = db_query($query);
				while($row = db_fetch_object($result)){
					echo "<li>";
						echo $row->name;
					echo "</li>";
				}
			?>
		</ul>
	</div>
</form>
