<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('coba'); ?>

<input type="text" name="username" placeholder="username" value="" size="50" />

<input type="text" name="password" placeholder="password" value="" size="50" />

<input type="text" name="passconf" placeholder="password confirmation" value="" size="50" />

<input type="text" name="email" placeholder="email" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>