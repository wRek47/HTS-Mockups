<main>
	<section>
		<form method="POST">
			<div class="row no-gutters">
				<div class="col-md-6">
					<div class="block mr-md-1 mb-1">
						<div class="form-group">
							<label for="title"><h4>Article Title</h4></label>
							
							<input type="text" class="form-control" name="title" id="title" />
						</div>
						
						<hr />
						
						<div class="form-group">
							<label for="category"><h4>Article Category</h4></label>
							
							<select id="category" name="category" class="form-control">
								<option disabled>Select Category</option>
							</select>
						</div>
						
						<hr />
						
						<div class="form-group">
							<label for="description"><h4>Article Description</h4></label>
							
							<textarea class="form-control" id="description" name="description" rows="7"></textarea>
						</div>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="block mb-1">
						<div class="form-group mb-0">
							<label for="article"><h4 class="mb-0">Article Content</h4></label>
							
							<hr class="mt-0" />
							
							<div class="button-toolbar text-center">
								<div class="btn-group mb-1">
									<button type="button" class="btn btn-custom">b</button>
									<button type="button" class="btn btn-custom">u</button>
									<button type="button" class="btn btn-custom">i</button>
								</div>
								
								<div class="btn-group mb-1">
									<button type="button" class="btn btn-custom">Sys</button>
									<button type="button" class="btn btn-custom">Code</button>
								</div>
								
								<div class="btn-group mb-1">
									<button type="button" class="btn btn-custom">URL</button>
									<button type="button" class="btn btn-custom">Index</button>
									<button type="button" class="btn btn-custom">Index Link</button>
								</div>
								
								<div class="btn-group mb-1">
									<button type="button" class="btn btn-custom">Image</button>
								</div>
								
								<div class="btn-group mb-1">
									<button type="button" class="btn btn-custom">Center</button>
									<button type="button" class="btn btn-custom">Left</button>
									<button type="button" class="btn btn-custom">Right</button>
								</div>
								
								<div class="btn-group mb-1">
									<button type="button" class="btn btn-custom">Title</button>
									<button type="button" class="btn btn-custom">Subtitle</button>
								</div>
							</div>
							
							<hr class="mt-3" />
							
							<textarea class="form-control mt-3" id="article" name="article" rows="12"></textarea>
						</div>
					</div>
				</div>
			</div>
			
			<div class="anarchy-quote mb-1">
				<p class="mb-0 text-center">
					Please be aware of our short session timeout for inactivity. You may want to paste externally before submitting.
				</p>
			</div>
			
			<div class="form-group block text-center">
				<button class="btn btn-custom">Preview Article</button>
				<button class="btn btn-custom">Submit Article</button>
				
				<p class="mt-3 mb-0">
					<strong>DO NOT COPY AND PASTE ARTICLES</strong>
				</p>
			</div>
		</form>
	</section>
</main>