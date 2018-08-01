<html>

<head>
	<title>Scheduling</title>
</head>
<body>

<?php
	echo "Schedule in event/project\n"; ?>

	Project: <input type="text" name="Project" value="<?php echo $project; ?>">
	Date:
	Duration
	Category:
	<input type="radio" name="category"
	<?php if (isset($category) && $category=="uniwork") echo "checked";?>
	value="uniwork">Uniwork
	<input type="radio" name="category"
	<?php if (isset($category) && $category=="group") echo "checked";?>
	value="group">Group
	<input type="radio" name="category"
	<?php if (isset($category) && $category=="application") echo "checked";?>
	value="application">Application
	<input typr="radio" name="category"
	<?php if (isset($category) && $category=="job") echo "checked";?>
	 value="job">Job

	Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

	



</body>
</html>