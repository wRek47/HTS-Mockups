<article class="block rankings">
	<h3>Explanation of Points &amp; Rankings</h3>
	<p>
		Ranks are a way of showing your position on the 'quest' to complete every level.
		Ranks are calculated from the points you have gained.
		The only way to gain points is by successfully completing missions, each mission is worth a set number of points.
	</p>
	
	<p>There are currently eight ranks of user on HackThisSite.</p>

	<hr class="half-rule" />
	
	<div class="row">
	
		<div class="col-12">
			<table class="table border text-center mb-3">
			<thead class="bg-light text-dark">
				<th>#</th>
				<th>Picture</th>
				<th>Rank</th>
				<th>Min. Points</th>
			</thead>
			
			<tbody>
<?php foreach ($hts->ranks as $id => $rank): ?>
			<tr>
				<td><?= ($id + 1); ?></td>
				<td><img src="<?= $rank->image; ?>" alt="<?= $rank->title; ?>" /></td>
				<td><?= $rank->title; ?></td>
				<td class="text-center"><?= $rank->points; ?></td>
			</tr>
<?php endforeach; ?>
			</tbody>
			</table>
		</div>
		
		<div class="col-12">

<?php foreach ($hts->points as $category => $data): ?>
<section class="card small mb-3">
	<div class="card-header">
		<h6 class="card-title mb-0"><?= $category; ?> (<?= (is_int(@$data->points)) ? $data->points . " x lvl" : "custom"; ?>)</h6>
	</div>
	
	<div class="card-body">
		<ul class="list-unstyled mb-0 d-flex text-center" style="overflow: auto;">
<?php if (is_array(@$data->points)): ?>
<?php foreach ($data->points as $level => $points): ?>
			<li class="px-2 pb-3"><span class="badge badge-mission-points">Mission <?= ($level + 1); ?></span><br /><strong><?= $points; ?></strong><br />Points</li>
<?php endforeach; else: for ($level = 1; $level <= @$data->missions; $level++): ?>
			<li class="px-2 pb-3"><span class="badge badge-mission-points">Mission <?= $level; ?></span><br /><strong><?= ($level * $data->points); ?></strong><br />Points</li>
<?php endfor; endif; ?>
		</ul>
	</div>
</section>
<?php endforeach; ?>
	</div>
</article>