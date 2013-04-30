<?php require 'application/view/template/header.php';?>
<table align="center" width="900px">
	<tr>
		<td align="center"><?php //echo $this->log;?> <!-- messages --></td>
	</tr>
	<tr valign="top">
		<td>
		<?php foreach ($this->data as $value):?>
		<div class="well">
		<h3><?php echo $value['Title']?></h3>
		<hr>
		<p><?php echo $value['Body']?></p>
		</div>
		<?php endforeach;?>
		</td>
	</tr>
</table>
<?php require 'application/view/template/footer.php';?>
