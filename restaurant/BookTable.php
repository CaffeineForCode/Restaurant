<?php
include('import.php');
?>
<html>
<div id="content">
					
						<div class="blogpost">
						<form name="booktable" method="post" action="status.php">
							<table>
								<tr><td>First Name</td><td><input type="text" name="fname"></td></tr>
								<tr><td>Last Name</td><td><input type="text" name="lname"></td></tr>
								<tr><td>Occasion</td><td><input type="text" name="oname"></td></tr>
								<tr><td>Party Size</td><td><input type="number" name="size"></td></tr>
								<tr><td>Date</td><td><input type="date" name="date"></td></tr>
								<tr><td>Time</td><td><input type="time" name="time"></td></tr>
								<tr><td>Email Id</td><td><input type="" name="email"></td></tr>
								<tr><td colspan="2" align="center"><input type="submit" name="submit"></td></tr>
								
							</table>
						</form>
						
					</div>
				</div>
</html>