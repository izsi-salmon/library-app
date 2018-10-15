<?php

  $page = 'View Book';
  require("../templates/header.php");

  $id = $_GET['id'];
  $sql = 'SELECT * FROM `books` WHERE id = '.$id;
  $result = mysqli_query($dbc, $sql);

  if($result && mysqli_affected_rows($dbc) > 0){
    $singleBook = mysqli_fetch_array($result, MYSQLI_ASSOC);
  } else{
    die('ERROR 404');
    // header('location: ../errors/404.php');
  }

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
      </div>
    </section>

      <div class="container">
        <div class="form-wrapper">
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" src="./images/<?= $singleBook['image_name']; ?>" alt="Card image cap">
              <div class="card-body">
               <h4 class="form-title"><?= $singleBook['book_name']; ?></h4>
               <small class="text-muted"><?= $singleBook['author']; ?></small>
                <p class="card-text"><?= $singleBook['description']; ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="books/updateBook.php?id=<?= $singleBook['id']; ?>"><button class="btn btn-primary">Edit</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


  </main>

<?php require("../templates/footer.php"); ?>
