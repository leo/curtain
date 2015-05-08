<!doctype html>
<html>

	<?php echo "<!-- Curtain {$version} -->\n"; ?>

	<head>

		<title><?php bloginfo( 'name' ) ?></title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

		<?php

			$this->head();

			$heading = $this->options( 'heading' );
			$description = $this->options( 'description' );

		?>

	</head>

	<body>

		<main>

			<section>

				<?php

					if( $heading ) {
						echo "<h1>" . $heading . "</h1>\n";
					}

					if( $description ) {
						echo "<p>" . $description . "</p>";
					}

				?>

			</section>

			<a href="<?php echo wp_login_url(); ?>"></a>

		</main>

		<?php $this->footer(); ?>

	</body>

</html>