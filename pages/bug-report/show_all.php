	<article class="block py-0">
		<ul class="list-unstyled row bg-light mb-0 py-3 border-bottom">
			<li class="col-1 text-center"><strong>Flag?</strong></li>
			<li class="col-1 text-center"><strong>ID</strong></li>
			<li class="col-1 text-center"><strong>Category</strong></li>
			<li class="col-2 text-center"><strong>Updated</strong></li>
			<li class="col-2 text-center"><strong>Assigned</strong></li>
			<li class="col-1 text-center"><strong>Status</strong></li>
			<li class="col-4"><strong>Title</strong></li>
		</ul>
<?php foreach ($bug_reports as $report): ?>		
		<ul class="list-unstyled row mb-0 py-2" style="background-color: #ffa0a0;">
			<li class="col-1 text-center"><img src="//hackthissite.org/pages/messages/msys/images/flag.png" alt="[Flag]" /></li>
			<li class="col-1 text-center"><a class="text-danger" href="?page=bug_report&view=<?= $report['id']; ?>"><?= $report['id']; ?></a></li>
			<li class="col-1 text-center"><?= $report['category']; ?></li>
			<li class="col-2 text-center"><?= $report['updated']; ?></li>
			<li class="col-2 text-center"><?= $report['assigned']; ?></li>
			<li class="col-1 text-center"><?= $report['status']; ?></li>
			<li class="col-4"><?= $report['title']; ?></li>
		</ul>
<?php endforeach; ?>
	</article>