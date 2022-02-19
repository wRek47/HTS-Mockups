<section class="block profile">
	<div class="profile-head px-3 px-lg-none">
		<div class="profile-nickname">
			<h5><?= $hts->profile->nickname; ?></h5>
		</div>
		
		<div class="row text-center">
			<div class="col-3 col-lg-2">
				<figure class="profile-avatar">
					<img class="border" src="<?= $hts->profile->avatar; ?>" alt="User Avatar" /><br />
					<img class="border d-lg-none mt-3 mr-3 mr-lg-none" src="https://www.hackthissite.org/user/img/rank006.gif" alt="Hacker" />
				</figure>
			</div>
			
			<div class="col-9 col-lg-8">
				<article>
					<p class="mb-0"><strong>Rank:</strong> <?= $hts->profile->rank; ?> (<?= number_format($hts->profile->points); ?> Points)</p>
					<p><strong>Status:</strong> <span class="badge badge-success">Online!</span></p>
					<!-- p><a class="active" href="#profile-details">View more <span class="d-none d-lg-inline">about <?= $hts->profile->nickname; ?></span></a></p -->
				</article>
			</div>
			
			<div class="col col-lg-2 d-none d-lg-block">
				<figure class="profile-rank">
					<img src="https://www.hackthissite.org/user/img/rank006.gif" alt="Hacker" />
				</figure>
			</div>
		</div>
	
	</div>
	
	<hr class="half-rule" />
	
	<div class="profile-details px-3 px-lg-none">
	<div class="row justify-content-around">
		<div class="col-12 col-lg-auto">
			<article>
				<p><i class="fa fa-key mr-2"></i> <strong>User ID:</strong> <?= $hts->profile->id; ?></p>
				<p><i class="fa fa-calendar mr-2"></i> <strong>Joined:</strong> 21/01/2019 6:38:24</p>
				<p><strong>Last Login:</strong> 22/08/2020 4:42:54</p>
				<p><strong>Last Active:</strong> 22/08/2020 7:39:38</p>
				<p><strong>Hobbies:</strong> <?= implode(", ", $hts->profile->hobbies); ?></p>
				<p><i class="fa fa-globe mr-2"></i><strong>Location:</strong> <?= $hts->profile->location; ?></p>
				<p><i class="fa fa-globe mr-2"></i><strong>Website:</strong> <?= $hts->profile->website; ?></p>
				<p><i class="fa fa-analog-clock mr-2"></i><strong>Time Zone:</strong> GMT <?= $hts->profile->timezone; ?></p>
			</article>
		</div>
		
		<div class="col-12 col-lg-auto">
			<article>
				<p><i class="fa fa-envelope mr-2"></i><strong>E-mail:</strong> <?= $hts->profile->email; ?></p>
				<p><i class="fa fa-user mr-2"></i><strong>MSN:</strong> <?= $hts->profile->im->msn; ?></p>
				<p><i class="fa fa-aim mr-2"></i><strong>AIM:</strong> <?= $hts->profile->im->aim; ?></p>
				<p><i class="fa fa-icq mr-2"></i><strong>ICQ:</strong> <?= $hts->profile->im->icq; ?></p>
				<p><i class="fa fa-yahoo mr-2"></i><strong>Yahoo:</strong> <?= $hts->profile->im->yahoo; ?></p>
				<p><i class="fa fa-discord mr-2"></i><strong>IRC:</strong> <?= $hts->profile->im->irc; ?></p>
				
				<p><i class="fa fa-warning mr-2"></i><strong>Warn Level:</strong> <img src="<?= $hts->profile->warn_level; ?>" alt="Warnings" /></p>
				<p><i class="fa fa-headset mr-2"></i><strong>Voice:</strong> wRek47 is <span class="text-info"><?= $hts->profile->voice_muted; ?></span></p>
			</article>
		</div>
	</div>
	</div>
	
	<hr class="half-rule" />
	
	<section class="profile-stats">
	<div class="row justify-content-center">
	<div class="col-12 col-lg-auto">
		<article class="profile-mission-progress"><?php foreach ($hts->profile->missions as $category => $data): $color = (in_array(false, $data)) ? "text-muted" : "text-info"; ?>
			<strong class="<?= $color; ?>"><?= ucfirst($category); ?>:</strong><br class="d-lg-none" /><?php foreach ($data as $id => $completed): if ($completed == true): ?>
			(<a href="javascript:void();"><?= ($id + 1); ?></a>)
			<?php endif; endforeach; ?><br />
		<?php endforeach; ?></article>
	</div>
	
	<div class="col-12 col-lg-4">
		<article class="profile-contributions">
			<h5>Contribution Points</h5>
			
			<img class="rounded pull-left mr-3" src="//placehold.it/100x100?text=O" alt="Total points" />
			
			<p class="mb-0"><strong>Articles:</strong> <?= count($hts->profile->articles); ?> points</p>
			<p class="mb-0"><strong>Lectures:</strong> <?= count($hts->profile->lectures); ?> points</p>
			<p><strong>HoF:</strong> <?= count($hts->profile->hof); ?> points</p>
			
			<p class="mb-0"><strong>Donations:</strong> <?= count($hts->profile->donations); ?> points</p>
			
		</article>
	</div>
	</div>
	</section>
	
	<hr class="half-rule" />
	
	<article class="profile-comments">
		<div class="d-none d-lg-block"><p class="badge badge-comment-author pull-right">Posting as: <a href="javascript:void();">wRek47</a></p></div>
		<h3>Comments:</h3>
		<p class="mb-1 mb-lg-4"><small>Published: 0 comments.</small></p>
		<div class="d-lg-none"><p class="badge badge-comment-author">Posted as: <a href="javascript:void();">wRek47</a></p></div>
		
		<div>
			<form method="POST">
				<textarea class="form-control" rows="3"></textarea>
				<div class="text-center"><button class="btn btn-custom">Post Comment</button></div>
			</form>
		</div>
	</article>
</section>