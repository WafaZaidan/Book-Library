
<!DOCTYPE html>
<!--
Filter by : dropdown
link webpage with book class
-->
<html lang="en">
    <head>
        <title>Our Library</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Webpage.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>

        <nav class="navbar navbar-default ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" aria-expanded="false">

                    </button>
                    <a class="navbar-brand">TheLibrary</a>
                </div>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
    </nav>



    <a class="navbar-brand" href="#">        
        <img src="images/TheLib.png" width="140" height="130"/>
    </a>


    <div class= "jumbotron text-center">
        <h1>Welcome to The Library</h1>
    </div>

    <div class= "container" style="margin-top: 2%;">
        <div class="col-md-6 col-md-offset-3">  

            <div class="row">
                <div id="logo" class="text-center">
                    <h2>Start your search here</h2><p></p>
                </div>
                <form role="form" id="form-buscar">
                    <div class="form-group">
                        <div class="input-group">
                            <input id="1" class="form-control" type="text" name="search" placeholder="Search..." required/>
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="submit">
                                    <i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search
                                </button>

                            </span>

                        </div>
                    </div>
                </form>
            </div>            
        </div>
    </div>
        
    <div class="container">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle text-center" type="button" data-toggle="dropdown">Filter By
                <span class="caret "></span></button>
            <ul class="dropdown-menu text-center">
                <li><a href="#">Author</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Language</a></li>
                <li class="divider"></li>
            </ul>
        </div>
    </div>



    <div class="container">
        <div  class="img-center">
            <div class="row">
                <div class="col-sm-4">

                    <h3>Book of the month </h3>    
                    <img src="images/9781408855898_309038.jpeg" alt="" width="200" height="300"/>   
                </div>

            </div>
        </div>
    </div>
</body>
</html>


