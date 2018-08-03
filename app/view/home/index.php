<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	
	<body>
		
		<h1>Home page minimal exmaple</h1>
		
		<h2>No fussing</h2>
		
		
		<ul>
			
			<?php 

				foreach ($list as $key => $value) {
					
					?>
					
					<li>
						
						<b><?php echo $key; ?></b> <?php echo $value; ?>
						
					</li>
					
					<?php

					}
			 ?>
			
		</ul>
		
	</body>
</html>