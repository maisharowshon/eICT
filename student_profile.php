<?php include('header.php'); ?>
<?php
	
							if(isset($_POST['submit'])&&!empty($_POST['submit']))
							{
								$id=$_SESSION['username'];
								$upload_image=$_FILES["photo"]["name"];
								$folder="images/";
								if($upload_image!=""){
								move_uploaded_file($_FILES["photo"]["tmp_name"], "$folder".$_FILES["photo"]["name"]);
								
								$insert_path="UPDATE `student` SET `photo`='$upload_image' WHERE `username`='".$_SESSION['username']."'";

								$var=mysqli_query($conn,$insert_path);
								}
								else
									echo "<script>alert('Please select a photo');</script>";
							}
							
	$query1 = "SELECT * FROM `student` WHERE `username`='".$_SESSION['username']."'";
	$result1 = mysqli_query($conn, $query1);
	$rows1=mysqli_affected_rows($conn);
		
		if($rows1>0)
		{
			$a1=mysqli_fetch_array($result1, MYSQLI_ASSOC);
		}
		
	$query2 = "SELECT * FROM `student` WHERE `username`='".$_SESSION['username']."'";
	$result2 = mysqli_query($conn, $query2);
	$rows2 =mysqli_affected_rows($conn);
		
		if($rows2>0)
		{
			$a2=mysqli_fetch_array($result2, MYSQLI_ASSOC);
		}
	
		
?>
				<div class="mainbar">
					<div class="mainbar_up">
						<p id="current_page"></p>
					</div>
					<div class="mainbar_down">
						<div class="row">
							<div class="col-md-8 col-lg-8">
								<h3><?php if(isset($a1['username']))echo $a1['username']; ?></h3>
								<h5>Name: <?php if(isset($a1['username']))echo $a1['username']; ?></h5>
								<h5>Email: <?php if(isset($a1['email']))echo $a1['email']; ?></h5>
								<h5>Mobile: <?php if(isset($a1['mobile']))echo $a1['mobile']; ?></h5>
								<h5>Institute: <?php if(isset($a1['institute']))echo $a1['institute']; ?></h5>
							</div>
							<div class="col-md-4 col-lg-4">
								<img class="photo" src="images/<?php if(isset($a1['photo']))echo $a1['photo']; ?>" alt="No image uploaded" height="180px" width="150px">
								<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" >
								<input type="file" name="photo" style="color:white;"><input type="submit" name="submit" value="upload" style="padding:1% 5%;display:block;margin:5% auto;border-radius:5px; background:#0e2849; color:white;">
								</form>
							</div>
								
						
						</div>
					</div>
				</div>
<?php include('footer.php'); ?>