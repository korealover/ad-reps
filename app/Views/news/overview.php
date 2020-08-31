<div class="col-md-10">
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title">Basic Table</div>
			
			<div class="panel-options">
				<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
				<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
			</div>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>title</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
				<?php if (! empty($news) && is_array($news)) : ?>
				<?php 
					$index = 1;
					foreach ($news as $news_item): ?>
					<tr>
						<td><?=$index?></td>
						<td><?= esc($news_item['title']); ?></td>
						<td><?= esc($news_item['body']); ?></td>
						<td><a href="/news/<?= esc($news_item['slug'], 'url'); ?>">View article</a></td>
					</tr>
				<?php 
						$index++;
					endforeach; ?>
				<?php else : ?>
					<tr>
						<td colspan="4">Unable to find any news for you.</td>
					</tr>
				<?php endif ?>
			  </tbody>
			</table>
		</div>
		<div class="action" style="text-align:right">
			<button class="btn btn-primary" onclick="location.href='/news/create';"><i class="glyphicon glyphicon-pencil"></i> Create</button>
		</div>
	</div>
</div>