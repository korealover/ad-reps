<?= \Config\Services::validation()->listErrors(); ?>

<script>
function cancle() {
	location.href='/news';
}
</script>
<?= csrf_field() ?>
<div class="col-md-6">
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title"><?= esc($title); ?></div>
		  
			<div class="panel-options">
			  <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
			  <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
			</div>
		</div>
		<div class="panel-body">
			<form action="/news/create" method="post">
				<fieldset>
					<div class="form-group">
						<label>title</label>
						<input class="form-control" placeholder="Text field" type="text" name="title">
					</div>
					<div class="form-group">
						<label>Text</label>
						<textarea class="form-control" placeholder="Textarea" rows="3" name="body"></textarea>
					</div>
				</fieldset>
				<div style="text-align:center;">
					<button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Create news item</button>
					<button class="btn btn-default" onclick="cancle();"><i class="glyphicon glyphicon-eye-open"></i> List</button>
				</div>
			</form>
		</div>
	</div>
</div>
