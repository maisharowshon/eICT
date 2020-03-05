<?php include('header.php'); ?>
				<div class="mainbar">
					<div class="mainbar_up">
						<p id="current_page"></p>
					</div>
					<div class="mainbar_down" style="color:#808080;">
						<table border="1" style="width:100%;">
						<tr bgcolor="#eee">
							<td width="40%">Title</td>
							<td width="10%">Questions</td>
							<td width="15%">Mark per Question</td>
							<td width="10%">Duration (mints)</td>
							<td width="20%">Take</td>
						</tr>
						<?php
							$query = "SELECT * FROM `exams`";
							$result=mysqli_query($conn, $query);
							$rows=mysqli_affected_rows($conn);
								if($rows>0)
								{
									while($a=mysqli_fetch_array($result, MYSQLI_ASSOC))
									{
										echo "<tr>
												<form action='exams_running.php' method='post'>
												<input type='hidden' name='qid' value='".$a['qid']."'>
												<input type='hidden' name='no' value='".$a['no']."'>
												<input type='hidden' name='title' value='".$a['title']."'>
													<td>".$a['title']."</td>
													<td>".$a['no']."</td>
													<td>1</td>
													<td>".$a['duration']."</td>
													<td>";
													
													$today = date("Y-m-d");
													$expire = $a['date']; //from database

													$today_time = new DateTime($today);
													$expire_time = new DateTime($expire);

													
													if($expire_time < $today_time||$expire_time == $today_time)
														echo "<input type='submit' name='ex_submit' value='start' style='width:100%;'>";
													else
														echo "Exam will start on ".$a['date']." ".$a['time'];
													
												echo "	</td>
												</form>
											  </tr>";
									}
									
								}
						?>
					</table>
					</div>
				</div>
<?php include('footer.php'); ?>