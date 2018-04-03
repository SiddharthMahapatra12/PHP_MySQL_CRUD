<?php include "template/header.php"; ?>

<h2>Update Member</h2>

<form method="post" action="form3.php">
	<label for="name">Name</label>
	<input type="text" id="name" name="name">
	<label for="email">Email Address</label>
	<input type="text" name="email" id="email">
	<input type="submit" name="submit" value="Update">
</form>

<a href="index.php">Back to Home</a>

<?php include "template/footer.php"; ?>