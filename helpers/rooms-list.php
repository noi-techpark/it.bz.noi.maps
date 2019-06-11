<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style type="text/css">
			svg {
				max-width: 150px;
				height: auto;
			}
			.single-cat {
				border: 1px solid black;
				margin-bottom: 30px;
			}
		</style>
	</head>
	<body>
		<?php include('../config/categories_array.php');
		if(isset($categories_array) && is_array($categories_array) && !empty($categories_array)) : ?>
			<ul>
				<?php foreach ($categories_array as $index => $cat) : ?>
					<li class="single-cat">
						<strong><?php echo $index; ?></strong>
						<?php if(isset($cat) && is_array($cat) && !empty($cat)) : ?>
							<ul>
								<?php foreach ($cat as $key => $value) : ?>
									<li>
										<?php echo $key.': ';
										if(is_array($value)) :
											echo implode(', ', $value);
										else:
											echo $value;
										endif; ?>									
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</body>
</html>