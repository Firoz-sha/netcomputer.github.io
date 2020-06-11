<table border=1>
				
						<tr class="bg-danger text-white text-center">
							<td>Id</td>
							<td>Name</td>
							<td>Number</td>
							<td>Email</td>
							<td>Address</td>
							<td>Message</td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>
						
						

					<?php

						$con = mysqli_connect("localhost","root","","net");
						
						$sql = "select * from Message";
						
						$rs = mysqli_query($con,$sql);
						
						while($rec = mysqli_fetch_array($rs))
						{
							
							echo "<tr>";
							echo "<td>".$rec['id']."</td>";
							echo "<td>".$rec['name']."</td>";
							echo "<td>".$rec['mobile']."</td>";
							echo "<td>".$rec['email']."</td>";
							echo "<td>".$rec['address']."</td>";
							echo "<td>".$rec['message']."</td>";
							echo "<td><a href='record_edit.php?id=".$rec['id']."'>Edit</a></td>";
							echo "<td><a href='record_delete.php?id=".$rec['id']."'>Delete</a></td>";
							echo "</tr>";
						}
																		
					?>
				</table>