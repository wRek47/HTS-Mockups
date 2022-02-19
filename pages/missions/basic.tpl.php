<section class="block missions">
<div class="row">
	<div class="col-12 col-lg-8">
		<h5><a href="javascript:void();">{title}</a></h5>
		
		<div class="row">
			<div class="col-12 col-lg-2">
				<div class="row d-lg-none text-center">
					<div class="col-6">
						<figure class="mission-img"><img src="{img}" alt="[{title}]" /></figure>
					</div>
					
					<div class="col-6">
						<div class="mission-points">
							<p class="small"><strong>Points</strong></p>
							<h1 class="text-{complete.class}">{points}</h1>
						</div>
					</div>
				</div>
				
				<figure class="mission-img d-none d-lg-block"><img src="{img}" alt="[{title}]" /></figure>
			</div>
			
			<div class="col-12 col-lg-8">
				<div class="mission-description"><p class="mb-0">{description}</p></div>
			</div>
		</div>
		
		<blockquote class="mt-lg-3">
			<p class="mb-0"><strong>Requirements:</strong> {requirements}</p>
		</blockquote>
	</div>
	
	<div class="col-12 col-lg-4">
		<div class="mission-points d-none d-lg-block">
			<p><strong>Points</strong></p>
			<h1 class="text-{complete.class}">{points}</h1>
		</div>
		
		<hr class="half-rule" />
		
		<div class="row mission-play">
			<div class="col-6 col-lg-7">
				<div class="text-{complete.class}"><i class="fa fa-{complete.icon} mr-2"></i> {complete.text}</div>
			</div>
			
			<div class="col-6 col-lg-5">
				<div class="d-lg-none text-center"><a class="btn btn-custom-dark" href="javascript:void();"><i class="fa fa-play mr-2"></i> Play</a></div>
				<div class="d-none d-lg-block"><a class="btn btn-custom" href="javascript:void();"><i class="fa fa-play mr-2"></i> Play</a></div>
			</div>
		</div>
	</div>
</div>
</section>