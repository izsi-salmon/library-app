<?php

  $page = 'Edit Book';
  require("../templates/header.php");

  use Intervention\Image\ImageManager;

  $id = $_GET['id'];
  $sql = 'SELECT * FROM `books` WHERE id = '.$id;
  $result = mysqli_query($dbc, $sql);




  if($result && mysqli_affected_rows($dbc) > 0){
        $singleBook = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $originalName = $singleBook['image_name'];
    } else if($result && mysqli_affected_rows($dbc) == 0){
        die("ERROR 404");
    } else {
        die("ERROR: cannot get the data requested");
    }


  // FORM VALIDATION

  if($_POST){
    // var_dump($_POST);
    // var_dump($_FILES);

    extract($_POST);

    $validationErrors = array();
    $errors = array();

    // Validate firstName & lastName

    if(!$bookname){
      array_push($validationErrors, 'Please enter a book title.');
    }  else if(strlen($bookname) > 100){
      array_push($validationErrors, 'Book title cannot be more than 100 characters.');
    }

    if(!$author){
      array_push($validationErrors, 'Please enter the Author\'s name.');
    } else if(strlen($author) < 2){
      array_push($validationErrors, 'Please enter atleast two characters for the author\'s name.');
    } else if(strlen($author) > 100){
      array_push($validationErrors, 'Author name cannot be more than 100 characters.');
    }

    if(!$description){
      array_push($validationErrors, 'Please enter a description for the book.');
    } else if(strlen($description) < 20){
      array_push($validationErrors, 'Please enter a description of more than 20 characters.');
    }

    if(file_exists($_FILES['bookimg']['tmp_name'])){
      $fileSize = $_FILES['bookimg']['size'];
      $fileTmp = $_FILES['bookimg']['tmp_name'];
      $fileType = $_FILES['bookimg']['type'];

      //If the file is over 5mb
      if($fileSize > 5000000){
          array_push($validationErrors, "The file is to large, must be under 5MB");
      } else {
        $validExtensions = array("jpeg", "jpg", "png");
        $fileNameArray = explode(".", $_FILES["bookimg"]["name"]);
        $fileExt = strtolower(end($fileNameArray));
        if(in_array($fileExt, $validExtensions) === false){
            array_push($validationErrors, "File type not allowed, can only be a jpg or png");
        }
      }

    }



    // ERROR VALIDATION | SQL QUERY | IMAGE SAVING

      if(empty($errors) && empty($validationErrors)){

        $title = mysqli_real_escape_string($dbc, $bookname);
        $author = mysqli_real_escape_string($dbc, $author);
        $description = mysqli_real_escape_string($dbc, $description);

        $sql = "UPDATE `books` SET `book_name`='$title',`author`='$author',`description`='$description'";

        if(file_exists($_FILES['bookimg']['tmp_name'])){
          $newFileName = uniqid().'.'.$fileExt;
          $filename = mysqli_real_escape_string($dbc, $newFileName);
          $sql .= ", `image_name`='$filename'";
        }

        $sql .= ' WHERE id = '.$id;

        $result = mysqli_query($dbc, $sql);
        if($result && mysqli_affected_rows($dbc) > 0){

          if(file_exists($_FILES['bookimg']['tmp_name'])){
            unlink('../images/'.$originalName);

            $destination = '../images/';
            if(!is_dir($destination)){
              mkdir('../images/', 0777, true);
            }

            $manager = new ImageManager();
            $mainImage = $manager->make($fileTmp);
            $mainImage->save($destination."/".$newFileName, 100);
          }


        }

        header('location: viewBook.php?id='.$id);

      } else{
        var_dump($errors);
        var_dump($validationErrors);
        die('ERROR');
      }

  } 

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
              <form class="form-add-book" action="books/updateBook.php?id=<?= $singleBook['id']; ?>" method="post" enctype="multipart/form-data">
                <?php if($_POST && !empty($validationErrors)): ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach($validationErrors as $warning): ?>
                            <li><?= $warning; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
                 <h3 class="form-title">Edit book:</h3>
                  <div class="form-group">
                    <input name="bookname" type="text" class="form-control" value="<?php if($_POST){echo $_POST['bookname'];} else{echo $singleBook['book_name'];} ?>">
                  </div>
                  <div class="form-group">
                    <input name="author" type="text" class="form-control" value="<?php if($_POST){echo $_POST['author'];} else{echo $singleBook['author'];} ?>">
                  </div>
                  <div class="form-group">
                    <textarea name="description" class="form-control" rows="3"><?php if($_POST){echo $_POST['description'];} else{echo $singleBook['description'];} ?></textarea>
                  </div>
                  <!-- <div class="image-float">
                    <img src="./images/<?= $singleBook['image_name']; ?>">
                  </div> -->
                  <div class="form-group">
                    <label>Edit cover image:</label>
                    <input name="bookimg" type="file" class="form-control-file">
                  </div>
                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
          </div>
        </div>
      </div>


  </main>

<?php require("../templates/footer.php"); ?>
