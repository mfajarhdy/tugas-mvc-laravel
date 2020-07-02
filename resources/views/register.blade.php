<!DOCTYPE html>
<html>
<head>
	<title>Form Html</title>
	<style type="text/css">
		label {
			display:block; 
			margin-bottom: 15px;"
		}
	</style>
</head>
<body>

	<header>
		<h1>Sign Up Form</h1>
	</header>

	<main>
		<!-- konten -->
		<div class="container">
            <form action="/welcome" method="post">
            @csrf
				<fieldset>
					<!-- Field Input Nama -->
					<p>
						<label>First Name:</label>
						<input type="text" name="Firstname" placeholder="First Name">
					</p>
					<p>
						<label>Last Name:</label>
						<input type="text" name="Lastname" placeholder="Last Name">
					</p>    
					<!-- Field Radio Gender -->    
					<p>
				        <label>Gender:</label>
				        <label><input type="radio" name="gender" value="male" /> Male</label>
				        <label><input type="radio" name="gender" value="female" /> Female</label>
				        <label><input type="radio" name="gender" value="other" /> Other</label>
				    </p>
				    <!-- Fied Select Kebangsaan -->
				    <p>
				    	<label>Nationality:</label>
			            <select name="nationality">
			                <option value="indonesian">Indonesian</option>
			                <option value="singapore">Singapore</option>
			                <option value="malaysian">Malaysian</option>
			                <option value="australian">Australian</option>
			            </select>
				    </p>
				    <!-- Field CheckBox Bahasa -->
				    <p>
			            <label>Language Spoken</label>			         
			            <p><input type="checkbox" name="bahasa" value="bahasa">Bahasa Indonesia</p>			         
			            <p><input type="checkbox" name="english" value="english">English</p>			         
			            <p><input type="checkbox" name="other" value="other">Other</p>
				    </p>
				    <!-- Field Text Area -->
			        <p>
			            <label>Bio:</label>
			            <textarea name="bio" cols="30" rows="10"></textarea>
			        </p>
			        <button type="submit" name="signup">SignUp</button>
				</fieldset>
			</form>
		</div>
	</main>

</body>
</html>