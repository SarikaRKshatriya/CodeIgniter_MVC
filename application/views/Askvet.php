<!--This is Askvet view php -->	
<div id="rightside">
<ul class="list">
<?php
if ($questionsData->num_rows() > 0)
{
foreach ($questionsData->result() as $row) 
{?>
<li><b id="heading2"><?php echo $row->question;?></b></li>
<p><?php echo $row->answer; ?> </p>
<?php } 
    ?>
 </ul>
 <?php } 
 ?>
<br>