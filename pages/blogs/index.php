<section class="block blogs">
<h3>Blogs</h3>
<?php foreach ($hts->blogs as $entry):

	$entry->preview = nl2br($entry->preview);

?>
<article class="card mb-3">
<div class="card-header">
	<div class="pull-right">
		<a class="badge badge-blog-author" href="javascript:void();"><?= $entry->author; ?></a>
		<span class="badge badge-dark"><?= $entry->date; ?></span>
	</div>
	<h3 class="card-title mb-0"><?= $entry->title; ?></h3>
</div>

<div class="card-body">
	<p class="mb-0"><?= $entry->preview; ?></p>
</div>

<div class="card-footer p-0">
	<nav class="nav">
		<a class="nav-link" href="javascript:void();">read more...</a>
		<a class="nav-link" href="javascript:void();">comments (<?= $entry->comments; ?>)</a>
	</nav>
</div>
</article>
<?php endforeach; ?>
</section>