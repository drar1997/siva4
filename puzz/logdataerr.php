<div class="alert alert-danger alert-dismissible fade show" style="margin-left: 8%; margin-right: 8%;">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Error!</strong> <?php echo $_SESSION['failure']; ?>
</div>
<script>
	$('<?php echo $_SESSION['failureshow']; ?>').show();
</script>