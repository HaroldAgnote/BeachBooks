<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container"><!--- TODO: For Seebass - change margin for nav div.container -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">BeachBooks</a>
        </div>
        <form action="home.php" method="GET" class="navbar-form navbar-left">
            <div class="form-group">
                <input id="input-style" class="form-control" type="text" placeholder="Search Database" class="form-control circular">
                <input type="Submit" class="form-control" value="Search">
            </div>
        </form>
        <div id="navbar" class="navbar-collapse collapse">
        <!-- TODO: Refresh page whilst signed in -->
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input id="input-style" class="form-control" type="text" placeholder="E-mail" class="form-control circular">
                </div>
                <div class="form-group">
                    <input id="input-style" class="form-control" type="password" placeholder="Password" class="form-control circular">
                </div>
                <a class="btn btn-success" role="button">Sign In</a>
          <!-- TODO: Link to Sign Up Page -->
                <a href="signup.php" class="btn btn-success" role="button">Sign Up</a>
                <a href="request.php" class="btn btn-warning" role="button"><!--Seller Modal - figure out how to implement it-->
                    <span class="glyphicon glyphicon-envelope"></span>
                    <span class="badge" id="badge-spacing">0</span></a>
            </form>
        </div><!--/.nav-collapse -->
    </div>
</nav>
