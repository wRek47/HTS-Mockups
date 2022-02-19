<?php

if ($hts->skins->active == "dark"):

	$training_img = "//data.htscdn.org/themes/Dark/images/training.jpg";

elseif ($hts->skins->active == "bootstrap"):

	$training_img = "//data.htscdn.org/themes/Default/images/training.jpg";

endif;

?><section class="block home">
	<div class="row">
		<div class="col-12 col-lg-8">
			<section class="home-intro">
				<figure class="d-inline">
					<div class="d-lg-none"><img class="w-100" src="<?= $training_img; ?>" alt="training" /></div>
					<div class="d-none d-lg-block pull-left mr-lg-3"><img src="<?= $training_img; ?>" alt="training" /></div>
				</figure>
				
				<hr class="half-rule d-lg-none" />
				
				<section>
					<p>
						Hack This Site is a free, safe and legal training ground for hackers to test and expand their hacking skills.<br />
						More than just another hacker wargames site, we are a living, breathing community with many active projects in development, with a vast selection of hacking articles and a huge forum where users can discuss hacking, network security, and just about everything.<br />
					</p>
					
					<p>
						Tune in to the hacker underground and get involved with the project.
					</p>
					
					<hr class="half-rule" />
					
					<p>
						First timers should read the <a href="?page=about_hts">HTS Project Guide</a> and <a href="?page=register">create an account</a> to get started.<br />
						<small class="ml-3">All users are also required to read and adhere to our <a href="?page=terms_and_conditions">Terms and Conditions</a>.</small>
					</p>
						
					<p><strong>
						Get involved on our <a href="javascript:void();">IRC server</a> (irc.hackthissite.org SSL port 7000), <a href="javascript:void();">Discord</a>, and our <a href="javascript:void();">web forums</a>.
					</strong></p>
				</section>
			</section>
			
			<hr class="half-rule" />
			
			<section>
				<article class="alert alert-block alert-block-highlight">
					<h6><img class="mr-2" src="//data.htscdn.org/images/tick.gif" alt="" />Last Challenge Completed</h6>
				</article>
				
				<div class="row">
					<div class="col-12 col-lg-6">
						<article class="alert alert-block alert-block-highlight">
							<h6><img class="mr-2" src="//data.htscdn.org/images/tick.gif" alt="" />Latest Forum Posts</h6>
						</article>
					</div>
				
					<div class="col-12 col-lg-6">
						<article class="alert alert-block alert-block-highlight">
								<h6><img class="mr-2" src="//data.htscdn.org/images/tick.gif" alt="" />Latest IRC Lines:</h6>
						</article>
					</div>
				</div>
			</section>
		</div>
		
		<div class="col-12 col-lg-4">
			<!-- live-tile panels -->
			<section class="alert alert-block">
				<!-- blog & news panel -->
				<article>
					<h6><img class="mr-2" src="//data.htscdn.org/images/tick.gif" alt="" /> Staff Blogs / Short News</h6>
					
					<nav>
						<em class="text-muted"><strong>news</strong></em> <a href="javascript:void();">Applicaton 2</a><br />
						<em class="text-muted"><strong>news</strong></em> <a href="javascript:void();">Application 7 &amp; ...</a><br />
						<em class="text-success"><strong>blog</strong></em> <a href="javascript:void();">Github for Status Pa...</a><br />
						<em class="text-success"><strong>blog</strong></em> <a href="javascript:void();">Internetwatche CTF 20...</a><br />
						<em class="text-muted"><strong>news</strong></em> <a href="javascript:void();">Hacker News: Hacking...</a>
					</nav>
				</article>
				
				<!-- articles panel -->
				<article>
					<h6><img class="mr-2" src="//data.htscdn.org/images/tick.gif" alt="" /> Latest Articles</h6>
					
					<nav>
						<a href="javascript:void();">Forensics Mission 1 - Basics...</a><br />
						<a href="javascript:void();">Become Anonymous online usin...</a><br />
						<a href="javascript:void();">Power of Open Source Intelli...</a><br />
						<a href="javascript:void();">vmware-ssh-how-to</a><br />
						<a href="javascript:void();">How to Become Cyber Security...</a>
					</nav>
				</article>
				
				<!-- cve panel -->
				<article>
					<h6><img class="mr-2" src="//data.htscdn.org/images/tick.gif" alt="" /> Recent Critical CVEs</h6>
					
					<nav>
						[SEV: <span class="text-danger">10</span> | EXP: <span class="text-success">0</span>] <a href="javascript:void();">CVE-2019-17600</a><br />
						[SEV: <span class="text-danger">10</span> | EXP: <span class="text-success">0</span>] <a href="javascript:void();">CVE-2019-17509</a><br />
						[SEV: <span class="text-danger">10</span> | EXP: <span class="text-success">0</span>] <a href="javascript:void();">CVE-2019-17510</a><br />
						[SEV: <span class="text-danger">10</span> | EXP: <span class="text-success">0</span>] <a href="javascript:void();">CVE-2019-11526</a><br />
						[SEV: <span class="text-danger">9.3</span> | EXP: <span class="text-success">0</span>] <a href="javascript:void();">CVE-2019-1358</a>
					</nav>
				</article>
			</section>
			
			<!-- github panel -->
			<section class="alert alert-block">
				<h6><img class="mr-2" src="//data.htscdn.org/images/tick.gif" alt="" /> HackThisSite on <a href="javascript:void();">GitHub</a></h6>
				
				<ul class="list-unstyled">
					<li class="row">
						<span class="col-9">Repositories</span>
						<span class="col-3 text-right">18</span>
					</li>
					
					<li class="row">
						<span class="col-9">Forks</span>
						<span class="col-3 text-right">78</span>
					</li>
					
					<li class="row">
						<span class="col-9">Watchers</span>
						<span class="col-3 text-right">220</span>
					</li>
					
					<li class="row">
						<span class="col-9">Stargazers</span>
						<span class="col-3 text-right">220</span>
					</li>
					
					<li class="row">
						<span class="col-9">Contributors</span>
						<span class="col-3 text-right">13</span>
					</li>
					
					<li class="row">
						<span class="col-9">Commits This Week</span>
						<span class="col-3 text-right">0</span>
					</li>
				</ul>
			</section>
			
			<!-- contributions panel -->
			<section class="alert alert-block mb-0">
				<h6><img class="mr-2" src="//data.htscdn.org/images/tick.gif" alt="" />Contribute</h6>
			</section>
		</div>
	</div>
</section>

<section class="block">
	<div class="card-header border">
		<div class="pull-right">
			<a class="badge badge-success" href="javascript:void();">HackThisSite Staff</a>
			<span class="badge badge-dark">Sep 8 2020</span>
		</div>
		
		<h4 class="mb-0">GO VOTE!</h4>
	</div>
	
	<figure class="mt-3 text-center">
		<img src="//data.htscdn.org/images/vote.jpg" alt="News-Image" />
		<figcaption class="mt-2 small">"Vote as if your life depends on it - because it does!"</figcaption>
	</figure>
	
	<hr />
	
	<article>
		<p>Those are the famous words of the late and venerable Justin Dart Jr., co-founder of the American Association of People with Disabilities (AAPD) and 'Godfather of the Americans with Disabilities Act (ADA)'. He said this long ago to underscore the importance of electing politicians, at all levels, that will be an ally to those less fortunate. Especially those whose lives literally depend on the outcome of an election.</p>
		<p>All of our lives hinge on the result of this election in November. The current administration and those that side with it seek to inflict as much pain, suffering, and even death on people they disagree with. That is not hyperbole, that is literally their political ideology. From destroying decades of work building civil rights for Black people and LGBTQ+, to empowering and encouraging Nazis and white nationalists, to countless impeachable acts of outright fascism -- and lately the criminal and malicious negligence with the COVID-19 pandemic -- it is indisputable that we absolutely cannot allow these monsters to stay in power any longer, at any level of government. To allow them to stay in power is to invite fascism, suffering, and death at unimaginable levels, both domestically and abroad.</p>
		<p>There are previously unthinkable efforts taking place every day to undermine this election. This may very indeed well be the last chance we ever have to elect politicians that do not seek to harm a huge portion of the population for simply existing. If you do not vote this time, and for the right people, you might never have a real chance to again. Listed below are some resources to ensure your ballot gets counted.</p>
	</article>
	
	<article>
		<u>Resources</u>
		
		<ul>
			<li><a href="javascript:void();">5 mistakes that can disqualify your November mail ballot and how to avoid them</a></li>
			<li><a href="javascript:void();">Check your voter registration status</a></li>
			<li><a href="javascript:void();">Register to vote</a></li>
			<li><a href="javascript:void();">Request an absentee/mail-in ballot</a></li>
			<li><a href="javascript:void();">Rules</a> and <a href="javascript:void();">deadlines</a> for absentee/mail-in voting</li>
			<li><a href="javascript:void();">COVID-19 voting guidelines</a></li>
			<li><a href="javascript:void();">Your voting rights & election protection hotline</a></li>
		</ul>
		
		<p>
			<strong>Vote as if your life depends on it - because this time, it actually does.</strong>
		</p>
	</article>
	
	<div class="card-footer border p-0">
		<nav class="nav">
			<a class="nav-link" href="javascript:void();">read more...</a>
			<span class="nav-link">Comments disabled</span>
		</nav>
	</div>
</section>