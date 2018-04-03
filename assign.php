<?php include "template/header.php"; ?>

<h2>Add a member to the project</h2>

<form method="POST" action="aform1.php">

	<label for="id">ID</label>
	<input type="text" name="id" id="id">
	<label for="mid">Member ID</label>
	<input type="text" name="mid" id="mid">
	<label for="pid">Project ID</label>
	<input type="text" name="pid" id="pid">


	<input type="submit" name="submit" value="Submit">
</form>

<br>

<a href="index.php">Back to Home</a>

<?php include "template/footer.php"; ?>
