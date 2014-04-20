<div id="registration">
<fieldset>
<legend>Registration</legend>
<form id="RegForm" action="user/registration" method="post" enctype="multipart/form-data">
<input type="text" name="firstname" placeholder="First Name" />
<input type="text" name="lastname" placeholder="Last Name" />
<input type="text" name="mobile"  placeholder="Mobile" minlength="11" />
<input type="text" name="email"  placeholder="Mobile" minlength="11" />
<input type="text" name="address"  placeholder="Address"  />
<select name="city">
<option value="">City</option>
<option value="delhi">Delhi</option>
<option value="Noida">Noida</option>
<option value="Kanpur">Kanpur</option>
<option value="Lucknow">Lucknow</option>
</select>
<input type="submit" name="submit" value="SUBMIT"/>
</form>
</fieldset>
</div>