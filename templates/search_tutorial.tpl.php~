<div id="search_tutorial">
	<form name="input" action="<?php echo $GLOBALS['base_path']; ?>list_videos" method="post" id='search-home-tutorials'>
		<input type="hidden" name="foss" id='search-home-tutorials-foss' value=''>
		<input type="hidden" name="language" id='search-home-tutorials-language' value=''>
		<input type="submit" value="Go" class="search-tutorial-submit" >
	</form>
		<div class='carousel'>
			<ul id='jcarousel' class="jcarousel search-foss">
				<?php
					$query="SELECT distinct foss_category FROM tutorial_details td, tutorial_resources tr where tr.tutorial_detail_id=td.id and tr.tutorial_status='accepted' order by td.foss_category ASC";
					$result = db_query($query);
					while($row = db_fetch_object($result)){
						echo "<li>";
							echo "<img src='".base_path()."sites/default/files/foss/".$row->foss_category.".gif'>";
							echo "<span class='element-invisible'>".$row->foss_category."</span>";
							echo "<div class='selected'></div>";
						echo "</li>";
					}
				?>
			</ul>
		</div>
		<div class='carousel-2'>
			<ul id='jcarousel' class="jcarousel search-lang">
				<?php
					$query="select distinct language from tutorial_resources where tutorial_status='accepted' order by language ASC";
					$result = db_query($query);
					while($row = db_fetch_object($result)){
						echo "<li>";
							echo "<img src='".base_path()."sites/default/files/lang/".$row->language.".png'>";
							echo "<span class='element-invisible'>".$row->language."</span>";
							echo "<div class='selected'></div>";
						echo "</li>";
					}
				?>
			</ul>
		</div>
	</form>
</div>
