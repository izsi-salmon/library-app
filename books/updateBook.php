<?php

  $page = 'Edit Book';
  require("../templates/header.php");
?>
</head>
<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Library</h4>
            <p class="text-muted">Use this application to find your new favourite book or add one you think others should read.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">libraryapp@gmail.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container d-flex justify-content-between">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
          <i class="fas fa-book-open"></i>
          <strong>Library</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Library</h1>
        <p class="lead text-muted jumbotron-description">A worm farm for book lovers.</p>
      </div>
    </section>

      <div class="container">
        <div class="form-wrapper">
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <form class="form-add-book">
                 <h3 class="form-title">Edit book:</h3>
                  <div class="form-group">
                    <input name="bookname" type="text" class="form-control" value="Book title">
                  </div>
                  <div class="form-group">
                    <input name="author" type="text" class="form-control" value="Author name">
                  </div>
                  <div class="form-group">
                    <textarea name="description" class="form-control" rows="3">Book description</textarea>
                  </div>
                  <div class="form-group">
                    <label>Edit cover image:</label>
                    <input type="file" class="form-control-file">
                  </div>
                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
          </div>
        </div>
      </div>


  </main>

<?php require("../templates/footer.php"); ?>
