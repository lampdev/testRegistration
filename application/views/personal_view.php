<div class="modal-header" align="center"> <h2>Parsonal datas</h2> </div>
       	<div class="col-md-3"></div>
		<div class="col-md-6" align="left">
        <form method="POST" action="personal/save" accept-charset="utf-8" autocomplete='off'>
	  		Name
	  			<input type="text" class="form-control input-lg" value="<?php echo $data['fname'];?>" id="name" name="fname">
				<br>
	 		Surname
	 			<input type="text" class="form-control input-lg" value="<?php echo $data['lname'];?>" id="surname"  name="lname">
				<br>
			School 
	  			<input type="text" class="form-control input-lg" value="<?php echo str_replace('"', '&#34;', $data['school']);?>" id="school" name="school">
				<span id="validschool"></span><br>
	 		Form
	 			<select class="form-control" value="" name="klass">
				  <option value=7 <?php if($data['klass']==7) echo "selected";?>>7</option>
				  <option value=8 <?php if($data['klass']==8) echo "selected";?>>8</option>
				  <option value=9 <?php if($data['klass']==9) echo "selected";?>>9</option>
				  <option value=10 <?php if($data['klass']==10) echo "selected";?>>10</option>
				</select><br>
			Email
				<input type="text" class="form-control input-lg" value="<?php echo $data['email'];?>" name="email"> 
				<span id="validemail"></span><br>
	 		Password
				<input type="password" class="form-control input-lg"  value="" name="password" >
	 		
				<input value="<?php echo $data['user_id'];?>" name="id" style="visibility: hidden; height : 2pt">
	 			
			<br>
			
        <div> <br />
		<button type="submit" class="btn btn-primary">Save</button>
		</div>
		</form>
    </div>
</body>
