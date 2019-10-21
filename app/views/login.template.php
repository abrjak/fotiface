<div class="container">
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand"><b>fotiface</b></a>
		</nav>
	</div>

	<div class="container">
		<br />
			<h1>{{title}}</h1>
			<hr />

			<div class="alert alert-danger alert-dismissible" ng-show="alertMsg">
    			<a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
    			{{alertMessage}}
   			</div>

            <form method="POST" ng-submit="submitLogin()">
				<div class="form-group">
					<label>Benutzername:</label>
					<input type ="text" name="username" ng-model="loginData.username" class="form-control" required/>
				</div>
				<div class="form-group">
					<label>Passwort:</label>
					<input type="password" name="password" ng-model="loginData.password" class="form-control" required/>
				</div>
				<div class="form-group text-center">
					<input type="submit" name="login" class="btn btn-primary" value="Einloggen"/>
				</div>
            </form>
		</div>
</div>