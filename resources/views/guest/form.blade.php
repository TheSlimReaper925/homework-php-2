<!DOCTYPE html>
<html>
<head>
	<title>Tell us</title>
</head>
<body>
	<form action="{{ route("posttest") }}" method="POST">
		@csrf
		<input type="text" name="name" placeholder="your name"><br>
		<input type="text" name="lastname" placeholder="last name"><br>
		<input type="text" name="address" placeholder="your address"><br>
		<input type="text" name="biography" placeholder="your bio"><br>
		<input type="date" name="birthdate" placeholder="your birth date"><br>

		<button>Add</button>
	</form>

</body>
</html>