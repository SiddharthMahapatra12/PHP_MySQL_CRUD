<?php include "template/header.php"; ?>

<h2>Update Project</h2>

<form method="POST" action="pform3.php">
	<label for="name">Name</label>
	<input type="text" id="name" name="name">
	<label for="description">Description</label>
	<input type="text" name="description" id="description">
	<label for="domain">Domain</label>
	<input type="text" name="domain" id="domain">

	<input type="submit" name="submit" value="Update">
</form>

<a href="index.php">Back to Home</a>

<?php include "template/footer.php"; ?>