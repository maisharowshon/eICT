<?php include('header.php'); ?>

				<div class="mainbar">
					<div class="mainbar_up">
						<p id="current_page">
							<?php if($_SESSION['page']) echo $_SESSION['page']; ?>
						</p>
					</div>
					<div class="mainbar_down">
						<h4>Which class are you in ?</h4><hr>
						<a href="1.php" class="c-btn">Class 1</a>
						<a href="2.php" class="c-btn">Class 2</a>
						<a href="3.php" class="c-btn">Class 3</a>
						<a href="4.php" class="c-btn">Class 4</a>
						<a href="5.php" class="c-btn">Class 5</a>
						<a href="6.php" class="c-btn">Class 6</a>
					</div>
				</div>

<?php include('footer.php'); ?>