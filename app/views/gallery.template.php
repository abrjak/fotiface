<div class="container">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">fotiface</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#!home">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!user">User</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <h1>{{title}}</h1>

        <hr />
        <div class="container">
            <div class="images row text-center text-lg-left">
                <div ng-repeat="image in images" class="col-lg-3 col-md-4 col-6">
                    <figure>
                    <a href="app/api/{{image.image_path}}" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="app/api/{{image.image_path}}" width="400" height="300" alt="">
                    </a>
                    </figure>
                </div>
            </div>
        </div>

<hr />

        <form method="POST" action="../fotiface/app/api/dbUploadImage.php" enctype="multipart/form-data">
            <input type="file" name="uploadImage">
            <input type="submit" name="submit_image" value="Upload">
        </form>
    </div>
</div>