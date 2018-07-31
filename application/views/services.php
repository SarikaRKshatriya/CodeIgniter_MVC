<!--This is service view php -->	
<div id="rightside">
<ul class="list">
<?php
if ($serviceData->num_rows() > 0)
{
foreach ($serviceData->result() as $row) 
{?>
<li><b id="heading2"><?php echo $row->servicename;?></b></li>
<p><?php echo $row->description; ?> </p>
<?php } ?>
</ul><?php 
 }
    ?>
<br>