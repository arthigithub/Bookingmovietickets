<?php 
  
  require"../db/connect.php" ;

  $query = "SELECT * FROM `movdetail`";
  $movielist = mysqli_query($connect,$query);

?>
<!--Admin page starts here-->
<?php require"header.php"?>

<div class="container-fluid padding-5">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <i class="fa fa-user"></i>
              <?php echo $_SESSION['userName'];  ?>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <i class="fa fa-video-camera"></i>
              Movies <span class="sr-only">(current)</span>
            </a>
          </li>
         </ul> 
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Movies</h1>
        <div class="btn-toolbar mb-1 mb-md-0">
          <div class="btn-group mr-1">
            <a href="Addmovie.php"><button type="button" class="btn btn-primary">Add New Movie</button></a>
          </div>
        </div>
      </div>
      <h2>Movies Lists</h2>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Movietitle</th>
              <th>Year</th>
              <th>Duration</th>
              <th>Language</th>
              <th>Casting</th>
            </tr>
          </thead>
          <tbody>
            <?php
              
              foreach ($movielist as $moviekey => $movieval) {
                echo "<tr><td>".$movieval['id']."</td>
                          <td>".$movieval['movietitle']."</td>
                          <td>".$movieval['year']."</td>
                          <td>".$movieval['duration']."</td>
                          <td>".$movieval['language']."</td>
                          <td>".$movieval['casting']."</td><td></button>
              <a class='btn btn-primary' href='editmovie.php?id=".$movieval['id']."'><i class='fa fa-pencil'></i></a>
              <a class='btn btn-danger' href='deletemovie.php?id=".$movieval['id']."'><i class='fa fa-trash'></i></a>
            </td>
            </tr>";
              }
        
            ?>
            
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<?php require"footer.php"?>