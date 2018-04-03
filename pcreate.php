<?php include "template/header.php"; ?>

<h2>Add a Project</h2>

<form method="POST" action="pform1.php">
	<label for="pid">Project ID</label>
	<input type="text" name="pid" id="pid">
	<label for="name">Name</label>
	<input type="text" name="name" id="name">
	<label for="description">Description</label>
	<input type="text" name="description" id="description">
	<label for="domain">Domain</label>
	<input type="text" name="domain" id="domain">
	<input type="submit" name="submit" value="Submit">
</form>

<br>

<a href="index.php">Back to Home</a>

<?php include "template/footer.php"; ?>
