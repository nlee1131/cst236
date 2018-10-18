<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="../assets/css/Header-Dark.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" id="title" href="http://localhost:8888/236Main/View/index.php">Company Name</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">First Item</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Second Item</a></li>
                    </ul>
                    <form target="_self" class="form-inline mr-auto" action="../Controller/SearchController.php" method="post">
    					<div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input type="search" name="search" class="form-control search-field" id="search-field" /></div>
					</form>
                    <span class="navbar-text actions"> <a href="http://localhost:8888/236Main/View/login.php" class="login">Log In</a><a class="btn btn-light action-button" role="button" href="http://localhost:8888/236Main/View/register.php">Sign Up</a></span></div>
            </div>
        </nav>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>