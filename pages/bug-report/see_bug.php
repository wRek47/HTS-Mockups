	<article class="block pb-0">
		<ul class="list-unstyled row mb-0 text-center">
			<li class="col-3"><h6>ID</h6></li>
			<li class="col-3"><h6>Category</h6></li>
			<li class="col-3"><h6>Date Submitted</h6></li>
			<li class="col-3"><h6>Last Update</h6></li>
		</ul>
		
		<ul class="list-unstyled row text-center">
			<li class="col-3"><?= $report['id']; ?></li>
			<li class="col-3"><?= $report['category']; ?></li>
			<li class="col-3"><?= $report['submitted']; ?></li>
			<li class="col-3"><?= $report['updated']; ?></li>
		</ul>
		
		<hr />
		
		<ul class="list-unstyled row mb-0 text-center">
			<li class="col-3"><h6>Reporter</h6></li>
			<li class="col-3"><div class="border-right"><a href="javascript:void();"><?= $report['author']; ?></a></div></li>
			<li class="col-3"><h6>View Status</h6></li>
			<li class="col-3"><span class="py-1 px-3" style="background-color: #<?= $report['status-color']; ?>;"><?= $report['status']; ?></span></li>
		</ul>
		
		<ul class="list-unstyled row text-center">
			<li class="col-3"><h6>Assigned To</h6></li>
			<li class="col-3"><div class="border-right"><?= $report['assigned']; ?></div></li>
			<li class="col-3"><h6>Public</h6></li>
			<li class="col-3"><?= $report['visibility']; ?></li>
		</ul>
		
		<ul class="list-unstyled row bg-light py-3 border-top">
			<li class="col-3"><h6>Title</h6></li>
			<li class="col-9"><?= $report['title']; ?></li>
		</ul>
		
		<ul class="list-unstyled row">
			<li class="col-3"><h6>Description</h6></li>
			<li class="col-9"><?= $report['description']; ?></li>
		</ul>
		
		<ul class="list-unstyled row bg-light py-3 mb-0">
			<li class="col-3"><h6>Steps to Reproduce</h6></li>
			<li class="col-9"><?= $report['steps']; ?></li>
		</ul>
	</article>