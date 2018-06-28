<div class="container">
	<?php foreach ($variables['articles'] as $item) { ?>
		<div class="row"> 
		  	<div class="col-2-md"><h2> <?php echo $item['Title']; ?></h2> </div> 

		</div>
		<div class="row"> 
			<div class="col-2-md"> <?php echo $item['Changed']; ?> </div>
		</div>
		<div class="row"> 
			<div class="col-2-md"> <?php echo $item['Summary']; ?></div>
		</div>
	<?php } ?>
</div>
