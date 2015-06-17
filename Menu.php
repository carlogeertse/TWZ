<html>
    <head>
        <title>

        </title>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <style type = "text/css">
            .container {
                background-color: #00344c;
                width: 100%;
            }

            a {
                font-family: "Arial Black", Gadget, sans-serif;
            }

        </style>
    </head>

    <body>
    <!-- Navigation -->
    <nav style = "position: relative;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <a href = "index.php">
            <img style = "z-index: -1; top: 10px; float: left;" src="logo.png">
            </a>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav nav-tabs">
                    <li class = "active">
                        <a href = "index.php">
                            <span class = "glyphicon glyphicon-home">

                            </span>
                            Home
                        </a>
                    </li>
                    <li class = "dropdown">
                        <a href = "#" data-toggle = "dropdown" class = "dropdown-toggle">
                            Surveillanten
                            <b class = "caret">

                            </b>
                        </a>
                        <ul class = "dropdown-menu">
                            <li>
                                <a href = "survInvoeren.php">
                                    Toevoegen surveillant
                                </a>
                            </li>
                            <li>
                                <a href = "survVerwijderen.php">
                                    Verwijderen surveillant
                                </a>
                            </li>
                            <li>
                                <a href = "survRooster.php">
                                    Rooster surveillanten
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    </body>
</html>