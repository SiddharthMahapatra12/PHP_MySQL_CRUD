<?php include "template/header.php"; ?>

<h2>Delete Project</h2>

<form method="post" action="pform4.php">
	<label for="name">Name</label>
	<input type="text" id="name" name="name">
	<input type="submit" name="submit" value="Delete">
</form>

<a href="index.php">Back to Home</a>

<?php include "template/footer.php"; ?>