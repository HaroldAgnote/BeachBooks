<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/starter-template.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>BeachBooks - Post</title>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    </head>
    <body>
        <!-- Fixed navbar -->
        <?php include('nav.php'); ?>

        <div class="container center-block row">

            <div class="col-md-12">
                <h1 class="form-signin-heading" style="text-align:center;">POST YOUR BOOK</h1>
            </div>
            <br>

            <div class="col-md-6">
                <!-- Find a way to post an image of the book -->
            </div>

            <div class="col-md-6">
                <div class="row">
                        <div>
                            <form><label>Book Title</label>
                              <input type="text" name="title" class="form-control" placeholder="Book Title" required autofocus
                              oninvalid="this.setCustomValidity('You must fill out all fields to sign in to your account')" onchange="this.setCustomValidity('')">
                            </form>
                        </div>
                        <div>
                            <form><label>Book Author</label>
                              <input type="text" name="author" class="form-control" placeholder="Book Author" required autofocus
                              oninvalid="this.setCustomValidity('You must fill out all fields to sign in to your account')" onchange="this.setCustomValidity('')">
                            </form>
                        </div>
                        <div>
                            <form><label>ISBN</label>
                              <input type="text" name="ISBN" class="form-control" placeholder="ISBN" required autofocus
                              oninvalid="this.setCustomValidity('You must fill out all fields to sign in to your account')" onchange="this.setCustomValidity('')">
                            </form>
                        </div>
                        <div>
                            <form><label>Edition Number</label>
                              <input type="text" name="edition" class="form-control" placeholder="Edition Number" required autofocus
                              oninvalid="this.setCustomValidity('You must fill out all fields to sign in to your account')" onchange="this.setCustomValidity('')">
                            </form>
                        </div>
                        <div>
                            <form><label>Condition</label>
                              <select class="form-control" name="appoint-month" required autofocus
                              oninvalid="this.setCustomValidity('You must fill out all fields to sign in to your account')" onchange="this.setCustomValidity('')">
                                  <option value="exel">Excellent</option>
                                  <option value="good">Good</option>
                                  <option value="aver">Average</option>
                                  <option value="bad">Bad</option>
                              </select></form>
                            </form>
                        </div>
                        <div>
                            <form><label>Your Price</label>
                              <input type="text" name="price" class="form-control" placeholder="Price" required autofocus
                              oninvalid="this.setCustomValidity('You must fill out all fields to sign in to your account')" onchange="this.setCustomValidity('')">
                            </form>
                        </div>
                </div><br>
                <form>
                    <input type="checkbox" name="terms" value="agree">By clicking this you agree to BeachBooks's
                    <a data-toggle="modal" data-target="#termsModal"><strong>Terms and Condition</strong></a>
                </form>
                <br>
                <button class="btn btn-lg btn-success btn-block" type="submit">Post it!</button>
                <button class="btn btn-lg btn-danger btn-block" type="submit">On Second Thought...</button>
            </div>

        </div>
    </body>
</html>
