<!-- STEP 3: Paste the NAV element code here -->
<!-- Global site navigation (included from global-nav.php) -->

<?php
	$urlPath = $_SERVER['DOCUMENT_ROOT'];
?>

<nav>
	<ul>
		<li><a href="<?php $urlPath ?>/index.php" title="Go to the Home page">Home</a></li>
		<li><a href="<?php $urlPath ?>/red.php" title="Learn about red blocks">Red Blocks</a></li>
		<li><a href="<?php $urlPath ?>/blue.php" title="Learn about blue blocks">Blue Blocks</a></li>
		<li><a href="<?php $urlPath ?>/yellow.php" title="Learn about yellow blocks">Yellow Blocks</a></li>
		<li><a href="<?php $urlPath ?>/green.php" title="Learn about green blocks">Green Blocks</a></li>
		<li><a href="<?php $urlPath ?>/purple.php" title="Learn about purple blocks">Purple Blocks</a></li>
		<li><a href="<?php $urlPath ?>/about.php" title="Learn more about us">About</a></li>
	</ul>
</nav>

<!-- STEP 4: Modify all of the above href relative paths so that they start with '/' - this means that they all point to the host name, and that the files reside in the site's public directory -->
<!-- STEP 5: Save this modified global-nav.php file and upload it to the server, then proceed back to index.php for STEP 6 -->
<!-- STEP 10: Add a new link to the new green.php page inside the above list of links, save this file, upload it to the server - see how in the browser ALL site pages now feature the new link -->
