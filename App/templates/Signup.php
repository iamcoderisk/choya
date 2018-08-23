<style type="text/css">
	body {
		background: #f0f3f9;
	}
	@media screen and (max-width: 900px) {

		}

	@media screen and (max-width: 600px) {

		}
</style>

<center>
	<div class="container-fluid login-cover">
		<h1 data-aos="fade-right" data-aos-duration="2000">Sign up</h1>
	</div>
</center>

<center>
	<div class="auth-form" align="left" data-aos="fade-in" data-aos-duration="2000">
		<div class="inner">
			<form>
				<p class="flex">
					<input type="text" name="first_name" placeholder="First Name*" required> <input type="text" name="last_name" placeholder="Last Name*" required>
					<br>
					<p><span class="error" id="name_ERROR"><br></span> </p>
				</p>
				<p>
					Email:
					<br>
					<input type="text" name="email" placeholder="email@example.com" required>
					<br>
					<span class="error" id="email_ERROR"><br></span>
				</p>

				<p>	
					Item Model
					<input type="text" name="item_model" placeholder="Lorem Ipsum Model" required>
					<br>
					<span class="error" id="item_model_ERROR"><br></span>				
				</p>
				<p>	
					Item Identification
					<input type="text" name="item_id" placeholder="[Lorem Ipsum Id]" required>
					<br>	
					<span class="error" id="item_id_ERROR"><br></span>			
				</p>

				<p>
					Password:
					<br>
					<input type="password" name="password" placeholder="********" required>
					<br>
					<span class="error" id="password_ERROR"><br></span>
				</p>
				<input type="submit" name="signup-submit" value="Sign up">
			</form>
			<div class="links">Aleady have an account? <a href="login">Sign in</a></div>
		</div>
	</div>
</center>