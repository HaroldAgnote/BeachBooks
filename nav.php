<script src="js/user.js"></script>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container"><!--- TODO: For Seebass - change margin for nav div.container -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php" style="color:#001d3a">BeachBooks</a>
        </div>
        <form action="home.php" method="GET" class="navbar-form navbar-left">
            <div class="form-group">
                <input name="search_query" id="input-style" class="form-control" type="text" placeholder="Search Database" class="form-control circular">
                <input type="Submit" class="form-control" value="Search">
            </div>
        </form>
        <div id="navbar" class="navbar-collapse collapse">
        <!-- TODO: Refresh page whilst signed in -->
            <div class="navbar-collapse navbar-right">
                <h3 id="greeting" class="navbar-collapse"></h3>
                <a id="signin_button" class="btn btn-success" role="button" href="signup.php">Sign In</a>
          <!-- TODO: Link to Sign Up Page -->
                <a id="Signup_button" href="signup.php" class="btn btn-success" role="button">Sign Up</a>
                <a id="Logout_button" href="signup.php" onclick="logout()" class="btn btn-success" role="button">Log Out</a/>
                <div id="message_button" onclick="loadRequests()" class="btn btn-warning" role="button"><!--Seller Modal - figure out how to implement it-->
                    <span class="glyphicon glyphicon-envelope"></span>
                    <span class="badge" id="badge-spacing">0</span>
                </div>
            </div>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<script>
    function loadRequests() {
        $.ajax({
            url: 'request.php',
            data: {
                    user_id: localStorage["user_id"],
            },
            type: 'post',
            success: function(data) {
                location.href = 'request.php';
            },
        });
        return true;
    }
</script>
