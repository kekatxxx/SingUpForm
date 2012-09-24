<?
	switch($_REQUEST['act']){

		//EDITING EXISTING USER
		case'edit':
			
			//defining user values
			$query = "SELECT*FROM users WHERE id=".$_REQUEST['id'];
			$result = mysql_query($query);
			while($row = mysql_fetch_array($result)){
			
				$firstname 	=	$row['firstname'];
				$lastname	=	$row['lastname'];
				$username	=	$row['username'];
				$birth		=	$row['birth'];
				$password	=	$row['password'];
				$email		=	$row['email'];
				$newsletter	=	$row['newsletter'];
			
			}
			
			echo "<h2>User modification</h2>";
			echo "<p><a href='admin.php'>Back to users list</a></p>";
			
			//User setting editing form
			echo "<form id='signupForm' method='post' action='function.php'>";
				echo "<input type='hidden' name='section' value='user'>";
				echo "<input type='hidden' name='act' value='edit'>"; 
				echo "<input type='hidden' name='id' value='".$_REQUEST['id']."'>";
				
				?>
				<!--First name-->
				<p>
					<label for="firstname">First Name</label>
					<input id="firstname" name="firstname" type="text" value="<?=$firstname?>" />
				</p>
				
				<!--Last name-->
				<p>
					<label for="lastname">Last Name</label>
					<input id="lastname" name="lastname" type="text" value="<?=$lastname?>" />
				</p>
				
				<!--Username-->
				<p>
					<label for="username">Username</label>
					<input id="username" name="username" type="text" value="<?=$username?>" />
				</p>
				
				<!--Birth-->
				<p>
					<label for="birth">Date of Birth</label>
					<input id="birth" name="birth" type="text" value="<?=$birth?>" />
				</p>
				
				
				<!--Password-->
				<p>
					<label for="password">Password</label>
					<input id="password" name="password" type="text" value="<?=$password?>" />
				</p>
				
				<!--Email-->
				<p>
					<label for="email">Email</label>
					<input id="email" name="email" type="email" value="<?=$email?>" />
				</p>
				
				<!--Newsletter-->
				<p>
					<label for="newsletter"><input type="checkbox" class="checkbox" id="newsletter" value="1" name="newsletter" <?if ($newsletter=='1') echo "checked='checked'";?> /> I'd like to receive the newsletter</label>
				</p>
				<?
				
				echo "<br/><input type='submit' />";
			echo "</form>";
			
		break;

		//LISTING ALL THE REGISTERED USERS
		default:

			echo "<h2>Users list</h2>";
			
			//User modification/removal notice
			if ($_REQUEST['mes']=='ed') echo "<p style='color:#006633'>User values changed.</p>";
			if ($_REQUEST['mes']=='del') echo "<p style='color:#006633'>User deleted.</p>";
			
			//User list table
			echo "<table cellpadding='3'>";
			
				echo "<tr><th>First Name</th><th>Last Name</th><th>Username</th><th>Password</th><th>Email</th><th></th></tr>";
				
				$query="SELECT*FROM users ORDER by ID DESC";
				$result=mysql_query($query);
				while($row = mysql_fetch_array($result)){
				
					echo "<tr>";
						echo "<td>".$row['firstname']."</td>";
						echo "<td>".$row['lastname']."</td>";
						echo "<td>".$row['username']."</td>";
						echo "<td>".$row['password']."</td>";
						echo "<td>".$row['email']."</td>";
						echo "<td>";
							echo "<a href='admin.php?act=edit&id=".$row['id']."'><img src='img/edit.gif' border='0' style='float:left;width:20px;'></a> ";
							echo "<a href='function.php?section=user&act=canc&id=".$row['id']."' onclick='return confirm(\"Are you sure you want to delete ".$row['username']." ?\")'><img src='img/delete.gif' style='float:right' border='0'></a>";
						echo "</td>";
					echo "</tr>";	
				}
				
			echo "</table>";
			
		break;
	
	}
	
?>