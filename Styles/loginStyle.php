<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="Webpage.css" rel="stylesheet" type="text/css"/>
    <body>  <nav class="navbar navbar-default ">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" aria-expanded="false"></button>
                    <a class="navbar-brand">TheLibrary <span class="caret"></span></a>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="AllBooks.php">All Books</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>


        </nav>
        <a class="navbar-brand" href="MainPage.php">        
            <img src="images/Lib.png" width="170" height="170"/>
        </a>



        <div class= "jumbotron text-center">
            <h1>The Library</h1>
        </div>


        <div class="container" style="width: 500px">
            <form method="POST">
                <div class="form-group row">
                    <label for="Username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="Username" name="Username"class="form-control" id="Username" placeholder="Username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="Password" class="form-control" name="Password"id="Password" placeholder="Password">
                    </div>
                </div>

                <div class="form-group row" >
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" name="submit"class="btn btn-primary">Sign in</button>
                        <a href="#" style="margin-left: 30px">Register here </a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>