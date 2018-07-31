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
<h3 id="contacthead">Contact Fish Creek</h3><br>
<p>Required fields are marked with an asterisk(*).</p><br>
<?php echo "<div class='error'>".$outputMsg."</div>"; ?>
<div id="form_input">
<?php
$attribute=array('class'=> 'contact-form');
echo form_open('Home/contact',$attribute);
echo form_label('*Name' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
$namedata = array(
'name' => 'name',
'id' => 'name',
'class' => 'input_box',
'placeholder' => 'Please Enter Name'
);
echo form_input($namedata);
echo form_error('name');
echo "<br>";
echo form_label('*Email'.'&nbsp;');
$emaildata = array(
'type' => 'email',
'name' => 'email',
'id' => 'email',
'class' => 'input_box',
'placeholder' => 'Please Enter Email'
);
echo form_input($emaildata);
echo form_error('email');
echo "<br>";
echo form_label('*Comments'.'&nbsp;');
$commentsdata = array(
'type' => 'comments',
'name' => 'comments',
'id' => 'comments',
'class' => 'textarea',
'rows'=>'3',
'cols'=>'40',
'placeholder' => 'Please Enter Comments',
);
echo form_textarea($commentsdata);
echo form_error('comments');
?>
<br>
</div>
<div class ="submit" id="form_button">
<?php echo form_submit('submit', 'Submit', "class='submit'"); ?><br>
</div>
</div>
<?php echo form_close(); ?>
<br><br>