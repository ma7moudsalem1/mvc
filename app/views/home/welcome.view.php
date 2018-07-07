
<form action="<? print_val(url('home/uploade')) ?>" method="post" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" name="submit" value="Uploade">
</form>
<?php
if(isset($image)){
?>
<img src="<? print_val(url('public/uploads'. $image)) ?>">
<?php } ?>
