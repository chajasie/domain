<html>
    <head>
        <link href="/stylesheets/styles.css" rel="stylesheet" type="text/css" />
        <link href="/stylesheets/customized.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <!-- Navigation -->
            <nav class="navbar navbar-default">
             <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Navigation zusammenklappen</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Domain Management</a>
                </div>
               <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="about">About</a></li>
                        <li><a href="contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
              </div>
            </nav>
            <!-- Navigation END -->
            <!-- content -->
            <div class="col-lg-8">
                @yield("content")
                @yield("form")
            </div>
            <div class="col-lg-4">
                This is just some randome Text. That shows just, how important it is to have propper content.
            </div>
            <!-- content END ->
        </div>
        <!-- Footer -->
        <script type="text/javascript" src="javascripts/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="javascripts/bootstrap.min.js"></script>
        <script type="text/javascript" src="javascripts/customized.js"></script>
    </body>
</html>