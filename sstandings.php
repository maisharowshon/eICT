<?php include('header.php'); ?>

				<div class="mainbar">
					<div class="mainbar_up">
						<p id="current_page"></p>
					</div>
					<div class="mainbar_down" style="color:#808080;">
						<table border="1" style="width:100%;">
						<tr bgcolor="#eee">
							<td width="40%">Examinee</td>
							<td width="40%">Title</td>
							<td width="30%">Total Questions</td>
							<td width="30%">Correct Ans</td>
						</tr>
						<?php
							$query = "SELECT * FROM `results` ";
							$result=mysqli_query($conn, $query);
							$rows=mysqli_affected_rows($conn);
								if($rows>0)
								{
									while($a=mysqli_fetch_array($result, MYSQLI_ASSOC))
									{
										echo "<tr>
												
													<td>".$a['username']."</td>
													<td>".$a['title']."</td>
													<td>".$a['no']."</td>
													<td>".$a['result']."</td>
													
											  </tr>";
									}
									
								}
						?>
					</table>
					</div>
				</div>

<?php include('footer.php'); ?>