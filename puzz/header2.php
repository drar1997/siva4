<header>
	<div class="row" style="margin-left: 0px;">
		<div class="col-2" style="height: 50px;">
			<div class="hdr-containerflex">
					<i class="fa fa-navicon hdr-flexitem"></i>
			</div>
		</div>
		<div class="col-7" style="height: 50px;">
			<a href="index.php" style="text-decoration: none;"><h1>COOPTMOTILON</h1></a>
			
		</div>
		<div class="col-3" style="height: 50px;">
			<div class="hdr-containerflex">
					<div class="hdr-flexitem hdr-bigscr" style="font-size: 14px; margin-right: 10px;">
						<?php 
							if (!empty($_SESSION['name'])) {
								require_once('puzz/log1true.php');
							}else{
								require_once('puzz/log1false.php');
							}

						 ?>
					</div>
					<div class="hdr-flexitem hdr-bigscr" style="font-size: 14px; margin-right: 10px;">
						<?php 
							if (!empty($_SESSION['name'])) {
								require_once('puzz/log2true.php');
							}else{
								require_once('puzz/log2false.php');
							}

						 ?>
					</div>
					<i class="fa fa-user-circle hdr-flexitem"></i>
			</div>
		</div>
	</div>
	</header>