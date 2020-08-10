<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Task</title>
	</head>

<body>
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h2>Register</h2>
    <form method="POST" action="register">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="fname">First Name:</label>
            <input type="text" class="form-control" id="fname" name="fname">
        </div>
         <div class="form-group">
            <label for="lname">Last Name:</label>
            <input type="text" class="form-control" id="lname" name="lname">
        </div>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="number">Contact:</label>
            <input type="tel" class="form-control" id="number" name="number">
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" value="reg" class="btn btn-primary">Submit</button>
        </div>
    </form>

</body>
</html>