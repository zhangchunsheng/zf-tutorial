<?php echo $this -> render("header.phtml"); ?>
<h1><?php echo $this -> escape($this -> title);?></h1>
<?php if($this -> album) : ?>
<form action="<?php echo $this -> baseUrl?>/index/delete" method="post">
	<p>Are you sure that you want to delete
		'<?php echo $this -> escape($this -> album -> title);?>' by
		'<?php echo $this -> escape($this -> album -> artist);?>' ?
	</p>
	<div>
		<input type="hidden" name="id" value="<?php echo $this -> abume -> id;?>" />
		<input type="submit" name="del" value="Yes" />
		<input type="submit" name="del" value="No" />
	</div>
</form>
<?php else : ?>
<p>Cannot find album.</p>
<?php endif;?>
<?php echo $this -> render("footer.phtml"); ?>