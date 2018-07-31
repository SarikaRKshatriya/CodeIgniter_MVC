<!--This is subscribe php -->
<style>
.error {
    color: red;
}
.submit {
  margin-left: 270px;
  font-weight: bold;
}
</style>
<?php	
if(empty($outputMsg))
$outputMsg = "";
?>
<div id="rightside">
<h3 id="subhead">Subscribe Fish Creek</h3><br>
<p>Required fields are marked with an asterisk(*).</p>
<br>
<?php echo "<div class='error'>".$outputMsg."</div>"; ?>
<?php
$attributes = array('class' => 'subscribe_form');
echo form_open('Home/subscribe', $attributes);
echo form_label('*Clients Full Name:' . '&nbsp;');
$namedata = array('name' => 'name','id' => 'name','class' => 'input_box','placeholder' => 'Please Enter Name');
echo form_input($namedata);
echo form_error('name');
echo "<br>";
echo form_label('*Address:' . '&nbsp;');
$addressdata = array('name' => 'address','id' => 'address','class' => 'input_box','placeholder' => 'Please Enter Address');
echo form_input($addressdata);
echo form_error('address');
echo "<br>";
echo form_label('*Email:'.'&nbsp;');
$emaildata = array('name' => 'email','id' => 'email','class' => 'input_box','placeholder' => 'Please Enter Email');
echo form_input($emaildata);
echo form_error('email');
echo "<br>";
echo form_label('*Phone:'.'&nbsp;');
$phonedata = array('name' => 'phone','id' => 'phone','class' => 'input_box','placeholder' => 'XXX-XXX-XXXX format');
echo form_input($phonedata);
echo form_error('phone');
echo "<br>";
echo form_label('*Password:'.'&nbsp;');
$passworddata = array('type' => 'password','name' => 'password','id' => 'password','class' => 'input_box','placeholder' => 'Please Enter Password');
echo form_password($passworddata);
echo form_error('password');
echo "<br>";
echo form_label('*Type of Service:'.'&nbsp;');
$optionsservice = array();
if ($setService->num_rows() > 0)  
{
foreach ($setService->result() as $row)  
{
	$optionsservice[$row->serviceid] = $row->servicename;
}
}
echo form_dropdown('service_id', $optionsservice);
echo "<br>";
echo "<br>";
echo form_label('*Pet:'.'&nbsp;');
$optionsPet = array();
if ($setPet->num_rows() > 0)  
{
foreach ($setPet->result() as $row)  
{
	$optionsPet[$row->petid] = $row->petname;
}
}
echo form_dropdown('pet_id', $optionsPet);
echo "<br>";
echo "<br>";
?>
<br>
<div class ="submit" id="form_button">
<?php
$attributes = array('class' => 'makeBold');
 echo form_submit('submit', 'Submit', "class='submit'"); ?><br>
</div>
<?php echo form_close(); ?>
<br><br>
