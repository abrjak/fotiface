<div class="container">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"><b>fotiface</b></a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#!gallery">Gallery</a>
                    </li>
                </ul>
                <form method="POST" ng-submit="submitLogout()" class="form-inline my-2 my-lg-0">
                    <div class="form-group">
                        <input ng-model="$ctrl.query" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" name= "logout" type="submit">Logout</button>
                    </div> 
                </form>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
    <div class="row">
    <div class="col">
      <h1>{{title}}</h1>
    </div>
    <div class="col">
      <input type="sumbit" class="btn btn-primary float-right float-down" value="Upload More">
    </div>
    </div>

        <hr />

        <div class="container">
            <div class="images row text-center text-lg-left">
                <div ng-repeat="image in images | filter:$ctrl.query" class="col-lg-3 col-md-4 col-6">
                    <figure>
                    <a href="app/api/{{image.image_path}}" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="app/api/{{image.image_path}}" alt="">
                    </a>
                    </figure>
                </div>
            </div>
        </div>

<hr /> 

        <form method="POST" action="../fotiface/app/api/dbUploadImage.php" enctype="multipart/form-data">
            <input type="file" class="form-control-file" accept=".jpg, .jpeg, .png" name="uploadImage[]" multiple>
            <input type="submit" class="btn btn-primary" name="submit_image" value="Upload">
        </form>
    </div>
</div>