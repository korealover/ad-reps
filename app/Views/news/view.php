<div class="col-md-6">
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title"><?= esc($news['title']); ?></div>
		  
			<div class="panel-options">
			  <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
			  <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
			</div>
		</div>
		<div class="panel-body">
			<fieldset>
				<div class="form-group">
					<label>title</label>
					<?= esc($news['title']); ?>
				</div>
				<div class="form-group">
					<label>Text</label>
					<?= esc($news['body']); ?>
				</div>
			</fieldset>
			<div style="text-align:right">
				<button class="btn btn-primary" onclick="location.href='/news'"><i class="glyphicon glyphicon-th-list"></i> List</button>
			</div>
		</div>
	</div>
</div>