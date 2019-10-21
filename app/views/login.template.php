<div class="container">
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand">fotiface</a>
		</nav>
	</div>

	<div class="container">
            <h3>{{title}}</h3>
            <form method="POST" ng-submit="submitLogin()">
				<div class="form-group">
					<label>Username:</label>
					<input type ="text" name="username" ng-model="loginData.username" class="form-control" required/>
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="password" ng-model="loginData.password" class="form-control" required/>
				</div>
				<div class="form-group" align="center">
					<input type="submit" name="login" class="btn btn-primary" value="Login"/>
				</div>
            </form>
		</div>
		{{error}}
</div>