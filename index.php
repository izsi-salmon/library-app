<?php

  $page = 'Books';
  // $css = '<link rel="stylesheet" href="css/style.css">';
  require("templates/header.php");

?>
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
        <p>
          <a href="books/addBook.php" class="btn btn-primary my-2">Add new book</a>
          <!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
        </p>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">A little description about the book.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="books/viewBook.php" class="view-btn"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    <a href="books/updateBook.php" class="edit-btn"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                  <!-- <small class="text-muted">9 mins</small> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">A little description about the book.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="books/viewBook.php" class="view-btn"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    <a href="books/updateBook.php" class="edit-btn"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                  <!-- <small class="text-muted">9 mins</small> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">A little description about the book.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="books/viewBook.php" class="view-btn"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    <a href="books/updateBook.php" class="edit-btn"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                  <!-- <small class="text-muted">9 mins</small> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">A little description about the book.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="books/viewBook.php" class="view-btn"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    <a href="books/updateBook.php" class="edit-btn"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                  <!-- <small class="text-muted">9 mins</small> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">A little description about the book.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="books/viewBook.php" class="view-btn"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    <a href="books/updateBook.php" class="edit-btn"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                  <!-- <small class="text-muted">9 mins</small> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">A little description about the book.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="books/viewBook.php" class="view-btn"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    <a href="books/updateBook.php" class="edit-btn"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                  <!-- <small class="text-muted">9 mins</small> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">A little description about the book.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="books/viewBook.php" class="view-btn"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    <a href="books/updateBook.php" class="edit-btn"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                  <!-- <small class="text-muted">9 mins</small> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">A little description about the book.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="books/viewBook.php" class="view-btn"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    <a href="books/updateBook.php" class="edit-btn"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                  <!-- <small class="text-muted">9 mins</small> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">A little description about the book.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="books/viewBook.php" class="view-btn"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    <a href="books/updateBook.php" class="edit-btn"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                  <!-- <small class="text-muted">9 mins</small> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <?php require("templates/footer.php"); ?>
