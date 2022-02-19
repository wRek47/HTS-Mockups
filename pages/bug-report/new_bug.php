	<article class="block pb-2">
		<form method="post">
			<div class="form-group">
				<label for="category"><h6>Category</h6></label>
				
				<select class="form-control" name="category" id="category">
<?php foreach ($report_categories as $category): ?>
					<option><?= $category; ?></option>
<?php endforeach; ?>
				</select>
			</div>
			
			<div class="form-group">
				<label for="title"><h6>Title</h6></label>
				
				<input type="text" id="title" name="title" class="form-control" />
			</div>
			
			<div class="form-group">
				<label for="description"><h6>Description</h6></label>
				
				<textarea id="description" name="description" class="form-control" placeholder="[This is where you type your description.  The description of the bug should tell us exactly what you expected to happen, what actually happened, and why you think this indicates a bug.]" rows="4"></textarea>
			</div>
			
			<div class="form-group">
				<label for="steps"><h6>Steps to Reproduce</h6></label>
				
				<textarea id="steps" name="steps" class="form-control" placeholder="[This is where your steps to reproduce go.  This may not be necessary for some bugs, but for the vast majority it will be necessary.  Step by step, enumerate what exactly you did that caused a bug to display.]" rows="4"></textarea>
			</div>
			
			<div class="form-group">
				<label for="status"><h6>View Status</h6></label>
				
				<input type="radio" name="status" id="status" value="Public" CHECKED /> Public
				<input type="radio" name="status" id="status" value="Private" /> Private
			</div>
			
			<div class="form-group">
				<button class="btn btn-custom" type="submit" name="commit">Submit Report</button>
			</div>
		</form>
	</article>