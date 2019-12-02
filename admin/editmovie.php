<?php
	require "../db/connect.php";

	$id = $_REQUEST['id'];

	$movietitle = "";
	$year = "";
	$duration = "";
	$language = "";
	$rating = "";
	$casting = "";
	$image = "";
	$trailer = "";

	$query = "SELECT * FROM `movdetail` WHERE id=".$id;
	$result = mysqli_query($connect, $query);

	foreach ($result as $key => $value) {
	  $movietitle = $value['movietitle'];
	  $year = $value['year'];
	  $duration = $value['duration'];
	  $language = $value['language'];
	  $rating = $value['rating'];
	  $casting = $value['casting'];
	  $image = $value['image'];
	  $trailer = $value['trailer'];

	}

if($_SERVER['REQUEST_METHOD'] == "POST"){
  
  $movietitle = $_REQUEST['movietitle'];
  $year = $_REQUEST['year'];
  $duration = $_REQUEST['duration'];
  $language = $_REQUEST['language'];
  $rating = $_REQUEST['rating'];
  $casting = $_REQUEST['casting'];
  $image = $_FILES['image']['name'];
  $trailer = $_REQUEST['trailer'];

  $query = "UPDATE `movdetail` SET `movietitle`='".$movietitle."', `year`='".$year."', `duration`='".$duration."', `language`='".$language."', `rating`='".$rating."',`casting`='".$casting."',  `image`='".$image."', `trailer`='".$trailer."' WHERE `id`=".$id ;

  

$result = mysqli_query($connect, $query);

  if($result == 1){
    // echo "MOVIE ADDED SUCCESSFULLY..";
    header("Location: index.php");
  }else{
    echo "ERROR IN ADDING MOVIE.";
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
					<input type="text" class="form-control" id="inputAddress" placeholder="Movie Title" name="movietitle" value="<?php echo $movietitle; ?>">
				</div>
  				<div class="form-row">
				    <div class="form-group col-md-3">
				      <label for="year">Year</label>
				      <input type="date" class="form-control" id="inputEmail4" placeholder="Year" name="year" value="<?php echo $year; ?>">
				    </div>
				    <div class="form-group col-md-3">
				      <label for="duration">Duration</label>
				      <input type="text" class="form-control" id="inputPassword4" placeholder="Duration" name="duration" value="<?php echo $duration; ?>">
				    </div>
				    <div class="form-group col-md-3">
					    <label for="language">Language</label>
					     <select id="inputState" class="form-control" name="language" value="<?php echo $language; ?>">
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
				      <input type="text" class="form-control" id="inputPassword4" placeholder="Rating" name="rating" value="<?php echo $rating; ?>">
				    </div>
  				</div>
  				<div class="form-row">
    				<div class="form-group col-md-6">
				      <label for="casting">Casting</label>
				      <input type="text" class="form-control" id="inputCity" placeholder="Casting" name="casting" value="<?php echo $casting; ?>">
				    </div>	    
				    <div class="form-group col-md-6">
				      <label for="image">Movie Image</label>
				      <input type="file" class="form-control" id="inputZip" placeholder="Choose" name="image"  value="<?php echo $image; ?>">
				    </div>
  				</div>
			  <div class="form-group">
			    <label for="trailer">Trailer</label>
			    <input type="text" class="form-control" id="inputAddress2" placeholder="Trailer video" name="trailer" value="<?php echo $trailer; ?>">
			  </div>
  		<button type="submit" class="btn btn-primary btn-block">Submit</button>
	</form>
			</div>
		</div>
	</div>
</div>

<?php require"footer.php"?>