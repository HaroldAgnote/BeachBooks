<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container"><!--- TODO: For Seebass - change margin for nav div.container -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand"
      href="home.html">BeachBooks</a>
    </div>
    <form class="navbar-form navbar-left">
      <div class="form-group">
          <input id="input-style" class="form-control" type="text" placeholder="Search Database" class="form-control circular">
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
        <button type="submit" class="btn btn-success">Sign in</button>

        <!-- TODO: Link to Sign Up Page -->
        <form class="navbar-form navbar-right">
          <button type="submit" class="btn btn-success">Sign up!</button>
        </form>
      </form>
    </div><!--/.nav-collapse -->
  </div>
</nav>
