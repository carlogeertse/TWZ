<html>
    <head>
        <title>

        </title>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style type = "text/css">

            #Home {
                font-size: 15px;
                width: 100px;
                background: #FF9000;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }

            #Home a:hover {
                background: #FFFFFF;
            }

            .container {
                background-color: #00344c;
                width: 100%;
            }

            ul {
                padding: 0;
                list-style: none;
            }

            ul li{
                width: 150px;
                display: inline-block;
                position: relative;
                text-align: center;
                line-height: 21px;
            }

            ul li a{
                display: block;
                padding: 5px 10px;
                color: #000000;
                background: #FF9000;
                text-decoration: none;
                font-family: "Arial Black", Gadget, sans-serif;
            }

            ul li ul{
                display: none;
                position: absolute;
                z-index: 999;
                left: 0;
                background: #FF9000;
            }

            ul li a:hover{
                color: #000000;
                background: #FF9000;
            }

            ul li:hover ul{
                display: block; /* display the dropdown */
                background: #FF9000;
            }

            ul li ul li {
                width: 250px;
                color: #000000;
            }

            #header {
                background-color: #00344C;
                -webkit-box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.49);
                -moz-box-shadow:    0px 3px 5px rgba(0, 0, 0, 0.49);
                box-shadow:         0px 3px 5px rgba(0, 0, 0, 0.49);
            }


        </style>
    </head>

    <body>
    <div id = "header">
        <!-- Navigation -->
        <nav style = "position: relative;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
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
                    <a href = "index.php">
                        <img src = "src/logo2.png" style = "z-index: 1; border-color: #00344C; background-color: #00344C; display: block; margin-left: auto; margin-right: auto; height: 100px;">
                    </a>
                    <ul class="nav nav-tabs">
                        <li id = "Home">
                            <a href = "index.php">
                                Home
                            </a>
                        </li>
                        <li class = "dropdown">
                            <a href = "#" style = "left: 2px;" data-toggle = "dropdown" class = "dropdown-toggle">
                                Surveillanten
                                <b class = "caret">

                                </b>
                            </a>
                            <ul class = "dropdown-menu">
                                <li>
                                    <a href = "survInvoeren.php">
                                        Surveillant toevoegen
                                    </a>
                                </li>
                                <li>
                                    <a href = "survVerwijderen.php">
                                        Surveillant verwijderen
                                    </a>
                                </li>
                                <li>
                                    <a href = "survBewerken.php">
                                        Surveillant bewerken
                                    </a>
                                </li>
                                <li>

                                        Surveillanten rooster

                                </li>
                                <li>
                                    <a href = "beschikInvoeren.php">
                                        Beschikbaarheid surveillant
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class = "dropdown">
                            <a href = "#" style = "left: 2px;" data-toggle = "dropdown" class = "dropdown-toggle">
                               Academie
                               <b class = "caret">

                               </b>
                            </a>
                            <ul class = "dropdown-menu">
                                <li>
                                    <a href = "academieToevoegen.php">
                                        Academie toevoegen
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class = "dropdown">
                            <a href = "#" style = "left: 2px;" data-toggle = "dropdown" class = "dropdown-toggle">
                                Tentamen
                                <b class = "caret">

                                </b>
                            </a>
                            <ul class = "dropdown-menu">
                                <li>
                                    <a href = "tentInvoeren.php">
                                        Tentamen toevoegen
                                    </a>
                                </li>
                                <li>
                                    <a href = "tentRooster.php">
                                        Tentamen rooster
                                    </a>
                                </li>
                                <li>

                                        Tentamen bewerken

                                </li>
                                <li>

                                        Tentamen verwijderen

                                </li>
                            </ul>
                        </li>
                        <li class = "dropdown">
                            <a href = "#" style = "left: 2px;" data-toggle = "dropdown" class = "dropdown-toggle">
                                Rooster
                                <b class = "caret">

                                </b>
                            </a>
                            <ul class = "dropdown-menu">
                                <li>

                                        Rooster opstellen

                                </li>
                            </ul>
                        </li>
                        <li class = "dropdown">
                            <a style = "left: 2px; width: 210px;" href = "#" data-toggle = "dropdown" class = dropdown-toggle"">
                                Financi&eumlle gegevens
                                <b class = "caret">

                                </b>
                            </a>
                            <ul class = "dropdown-menu">
                                <li>
                                    <a href = "academieFinan.php">
                                        Per academie
                                    </a>
                                </li>
                                <li>
                                    <a href = "survFinan.php">
                                        Per surveillant
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
    </div>

    </body>
</html>