<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/album.css" rel="stylesheet">
  </head>

  <body>
    <div id="app">
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
             <div class="input-group pt-4">
               <input type="text" class="form-control" placeholder="person@email.id" aria-label="person@email.id">
               <span class="input-group-btn">
                <button class="btn btn-info" type="button">Share</button>
               </span>
              </div>
            </div>
            <!-- <div class="col-sm-8 py-4"> -->
              <!-- <div class="input-group input-group-lg" v-show="doc || hos || pat"> -->
              <!-- <input type="text" class="form-control" placeholder="your@email.id" aria-label="Your email id">
              <span class="input-group-btn">
                <button class="btn btn-dark" type="button">Login</button>
              </span>
            </div> -->
             <!--  <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p> -->
            </div>
              <div class="row">
          <div class="col-xs-3 pt-3 pl-4">
            <img class="rounded-circle" src="http://via.placeholder.com/60x60?text=S" alt="Generic placeholder image" width="45" height="45">
            <!-- <h2>Heading</h2> -->
            <!-- <a class="btn btn-secondary" href="#" role="button">View details &raquo;</a> -->
          </div><!-- /.col-lg-4 -->
          <div class="col-xs-3 pt-3 ml-2">
            <img class="rounded-circle" src="http://via.placeholder.com/60x60?text=P" alt="Generic placeholder image" width="45" height="45">
            <!-- <h2>Heading</h2> -->
            <!-- <a class="btn btn-secondary" href="#" role="button">View details &raquo;</a> -->
          </div><!-- /.col-lg-4 -->
          <div class="col-xs-3 pt-3 ml-2">
            <img class="rounded-circle" src="http://via.placeholder.com/60x60?text=V" alt="Generic placeholder image" width="45" height="45">
            <!-- <h2>Heading</h2> -->
            <!-- <a class="btn btn-secondary" href="#" role="button">View details &raquo;</a> -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

            <!-- <div class="col-sm-2 py-4">
              <h4 class="text-white">Shared with</h4> -->

              <!-- <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul> -->
            <!-- </div> -->
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand">Smart Doc</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-user-plus" aria-hidden="true"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Welcome, {user}</h1>
          <p class="lead text-muted"> Select files to upload.</p>
          <div>
            <label class="custom-file">
              <input type="file" multiple id="file" @change="processFile($event)" class="custom-file-input">
              <span class="custom-file-control">{uploadFieldName.name}</span>
            </label>
            <a href="#" id="uploadit" class="btn btn-primary " v-bind:class="{'disabled': uploadFieldName==''}">Upload</a>
          </div>
        </div>
      </section>

      <div class="album text-muted">
        <div class="container">
          <div class="row">
            <div class="card" v-for="file in files">
              <img src="http://via.placeholder.com/300x150?text=today">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="w-100"></div>
            <div class="mx-auto">
              <button class="btn btn-primary" v-bind:class="{'disabled': busy}">Load Next</button>
            </div>
          </div>

        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
      </div>
    </footer>
  </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap/popper.min.js"></script>
    <script src="./js/bootstrap/bootstrap.min.js"></script>
    <script src="./js/bootstrap/holder.min.js"></script>
    <script src="./js/vue.min.js"></script>
    <script src="./js/a1.js"></script>
    <script src="https://use.fontawesome.com/9f0b2b725d.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
