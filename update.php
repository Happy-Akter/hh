
<?php include'inc/header.php' ?>

<div class="panel-heading">
			<h2>Customer add <a class="pull-right" href="addcust.php">back</a> </h2>
		</div>
		<div class="panel-body">
			
			<form action="lib/action.php" method="post">
				<div class="form-group">
					<lebel for="name">Customer Name</lebel>
					<input type="text" name="name" id="name" class="form-control" required="">
				</div>
				<div class="form-group">
					<lebel for="email">Email</lebel>
					<input type="email" name="email" id="email" class="form-control" required="">
				</div>
				<div class="form-group">
					<lebel for="phone_num">Phone Number</lebel>
					<input type="text" name="phone_num" id="phone_num" class="form-control" required="">
				</div>
				<div class="form-group">
					<input type="hidden" name="action" value="edit">
					<input type="hidden" name="id" value="1">
					
					<input type="submit" name="submit" value="update customer" class="btn btn-primary">
				</div>
			</form>
		</div>