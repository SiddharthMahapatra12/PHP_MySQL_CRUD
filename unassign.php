<?php include "template/header.php"; ?>

<h2>Remove a member from the project</h2>

<form method="post" action="aform4.php">
	<label for="id">Member ID</label>
	<input type="text" name="id" id="id">
	<label for="pid">Project ID</label>
	<input type="text" name="pid" id="pid">
	
	<input type="submit" name="submit" value="Delete">
</form>

<a href="index.php">Back to Home</a>

<?php include "template/footer.php"; ?>