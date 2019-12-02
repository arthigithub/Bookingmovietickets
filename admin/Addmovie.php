<?php

	require"../db/connect.php";

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$movietitle = $_REQUEST['movietitle'];
		$year = $_REQUEST['year'];
		$duration = $_REQUEST['duration'];
		$language = $_POST['language'];
		$rating = $_REQUEST['rating'];
		$casting = $_REQUEST['casting'];
		$image = $_FILES['image']['name'];
		$trailer = $_REQUEST['trailer'];

		$query = "INSERT INTO `movdetail`(`movietitle`,`year`,`duration`,`language`,`rating`,`casting`,`image`,`trailer`)VALUES('$movietitle','$year','$duration','$language','$rating','$casting','$image','$trailer')";

		$result = mysqli_query($connect,$query);

		if($result == 1){
			$destDirectory = "../uploads/";
    		$uploadedFile = $destDirectory . basename($_FILES["image"]["name"]);

		    if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadedFile)) {
		        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
		          header('Location: index.php?message=Your MOVIE Added Successfully');
		      } else {
		          echo "Sorry, there was an error uploading your file.";
		      }
		      
	    // echo "MOVIE ADDED SUCCESSFULLY..";
	    //header("Location: index.php");

			}else{
				echo "try again";
			}
		
	}


?>

<!--Addmovie page starts-->
<?php require"header.php" ?>

<div class="container padding-5">
	<h1 align="center">Latest Movie Updates</h1>
</div>

<div class="row padding-2">
	<div class="col-md-8 offset-2" >
		<a href="index.php" class="padding-2 pull-right"><button class="btn btn-primary">back</button></a>
		<div class="card ">
			<div class="card-body offse-3">
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="movietitle">Movie Title</label>
					<input type="text" class="form-control" id="inputAddress" placeholder="Movie Title" name="movietitle">
				</div>
  				<div class="form-row">
				    <div class="form-group col-md-3">
				      <label for="year">Year</label>
				      <input type="date" class="form-control" id="inputEmail4" placeholder="Year" name="year">
				    </div>
				    <div class="form-group col-md-3">
				      <label for="duration">Duration</label>
				      <input type="text" class="form-control" id="inputPassword4" placeholder="Duration" name="duration">
				    </div>
				    <div class="form-group col-md-3">
					    <label for="language">Language</label>
					     <select id="inputState" class="form-control" name="language">
					        <option selected>Choose...</option>
					        <option>Tamil</option>
					        <option>Kannada</option>
					        <option>English</option>
					        <option>Hindi</option>
					        <option>Telugu</option>
					        <option>Gujarati</option>
					        <option>Punjabhi</option>
					     </select>
					</div>
					<div class="form-group col-md-3">
				      <label for="rating">Rating</label>
				      <input type="text" class="form-control" id="inputPassword4" placeholder="Rating" name="rating">
				    </div>
  				</div>
  				<div class="form-row">
    				<div class="form-group col-md-6">
				      <label for="casting">Casting</label>
				      <input type="text" class="form-control" id="inputCity" placeholder="Casting" name="casting">
				    </div>	    
				    <div class="form-group col-md-6">
				      <label for="image">Movie Image</label>
				      <input type="file" class="form-control" id="inputZip" placeholder="Choose" name="image">
				    </div>
  				</div>
			  <div class="form-group">
			    <label for="trailer">Trailer</label>
			    <input type="text" class="form-control" id="inputAddress2" placeholder="Trailer video" name="trailer">
			  </div>
  		<button type="submit" class="btn btn-primary btn-block">Submit</button>
	</form>
			</div>
		</div>
	</div>
</div>

<?php require"footer.php"?>