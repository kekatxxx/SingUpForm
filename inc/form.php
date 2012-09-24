	<form class="cmxform" id="signupForm" method="post" action="function.php">
		
		<!--VALUES for the function.php page-->
		<input type="hidden" name="section" value="user" />
		<input type="hidden" name="act" value="add" />
		
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
			
			<!--Day-->
			<select name="birthd" style="margin-left:0px">
				<option value="">Day</option>
				<?
				$i=1;
				while ($i <= 31) {
					echo "<option>".$i."</option>";
					$i++;
				}
				?>
			</select>
			
			<!--Month-->
			<select name="birthm">
				<option value="">Month</option>
				<?
				$i=1;
				while ($i <= 12) {
					echo "<option value='".$i."'>".date("F",mktime(0, 0, 0, $i, 1, 2000))."</option>";
					$i++;
				}
				?>
			</select>
			
			<!--Year-->
			<select name="birthy">
				<option value="">Year</option>
				<?
				$i=2000;
				while ($i >= 1950) {
					echo "<option>".$i."</option>";
					$i--;
				}
				?>
			</select>
		</p>
		
		<!--Password-->
		<p>
			<label for="password">Password</label>
			<input id="password" name="password" type="password" />
		</p>
		
		<!--Confirm Password-->
		<p>
			<label for="confirm_password">Confirm Password</label>
			<input id="confirm_password" name="confirm_password" type="password" />
		</p>
		
		<!--Email-->
		<p>
			<label for="email">Email</label>
			<input id="email" name="email" type="email" value="<?=$email?>" />
		</p>
		
		<!--Agreement-->
		<p>
			<label for="agree"><input type="checkbox" class="checkbox" id="agree" name="agree" <?if ($agree=='on') echo "checked='checked'";?>/> I agree with M2Mobi policy</label>
		</p>
		
		<!--Newsletter-->
		<p>
			<label for="newsletter"><input type="checkbox" class="checkbox" id="newsletter" name="newsletter" <?if ($newsletter=='on') echo "checked='checked'";?> /> I'd like to receive the newsletter</label>
		</p>
		
		<!--Submit-->
		<p>
			<input class="submit" type="submit" value="Submit" />
		</p>
	
	</form>