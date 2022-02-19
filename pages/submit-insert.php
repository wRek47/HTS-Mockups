<main>
	<section class="block">
		<h3 class="text-center">Useful Stuff</h3>
		
		<article class="bg-light border mt-3 p-3 text-center">
			<p class="mb-0">
				Need a program? A website? A tool? Have one for someone else?<br />
				Look here!
			</p>
		</article>
		
		<hr />
		
		<article>
			<p>
				Add something you find useful!<br />
			</p>
			
			<ul class="mb-0">
				<li>Users can submit stuff if they are not muted.</li>
				<li>Mods must approve all submissions.</li>
				<li>Abusing this system will result in an instant mute and possible ban</li>
			</ul>
		</article>
	</section>
	
	<section class="block">
		<form method="POST">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="object_type"><h6>Type of Object</h6></label>
						
						<select class="form-control" name="object_type" id="object_type">
							<option>*** none assigned ***</option>
						</select>
					</div>
					
					<div class="form-group">
						<label for="os"><h6>OS</h6></label>
						
						<select class="form-control" name="os" id="os">
							<option>Any</option>
						</select>
					</div>
					
					<div class="form-group">
						<label for="name"><h6>Name</h6></label>
						
						<input class="form-control" type="text" name="name" id="name" />
					</div>
					
					<div class="form-group">
						<label for="link"><h6>Link</h6></label>
						
						<input class="form-control" type="text" name="link" id="link" />
					</div>
					
					<hr />
					
					<div class="form-group">
						<label class="pic"><h6>Pic <small>(not required)</small></h6></label>
						
						<input class="form-control" type="text" name="pic" id="pic" />
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<label class="category"><h6>Category</h6></label>
						
						<select class="form-control" id="category" name="category">
							<option>General</option>
						</select>
					</div>
					
					<div class="form-group">
						<label class="description"><h6>Description</h6></label>
						
						<textarea class="form-control" rows="6"></textarea>
					</div>
				</div>
			</div>
			
			<div class="anarchy-quote text-center">
				<div class="form-group mb-0">
					<button class="btn btn-custom" type="submit" name="insert">Submit</button>
					<button class="btn btn-danger" type="reset">Reset</button>
				</div>
			</div>
		</form>
	</section>
</main>