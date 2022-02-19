<main>
	<section class="block mb-1">
		<h3>Submit Lecture</h3>
		
		<hr />
		
		<h6>Guidelines</h6>
		
		<p>
			Once decided on the lecture title decide on the topics you will cover within it:
		</p>
		
		<ul class="mb-0 small">
			<li class="mb-1">Decide on a suitable date and time (your local time) to conduct the lecture, CHECK that there is not already a lecture on that date.</li>
			<li class="mb-1">Plan the lecture format and how you will conduct it prior to the lecture date set.</li>
			<li class="mb-1">Decide on any requirements you need to conduct the lecture; both server-side and client-side requirements.</li>
			<li class="mb-1">If you are unsure about anything contact a member of the staff in the #team channel on the IRC Server, please DO NOT try to submit lecture via this method, they will be ignored.</li>
			<li class="mb-1">The lecture could last for as long as you want to although you should include time for people to ask questions, and for you to answer them. Though there is no set duration for a lecture anything substantially shorter or longer than 45 minutes may gain you negative comments by the people attending.</li>
			<li class="mb-1">If you wish to use a bot to handle aspects of your lecture, and wish to use the name LectureBot please contact a member of the staff as soon as possible.</li>
			<li class="mb-1">Lectures should be interesting and informative, though they are meant for educational purposes you should try and make them as fun as possible.</li>
			<li>Once you are happy that you have a title for the lecture, topics to be covered, date and time, and any other requirements please fill in the below form.</li>
		</ul>
	</section>
	
	<section>
		<form method="POST">
			<div class="block mb-1">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="topic"><h4>Lecture Topic</h4></label>
							<input class="form-control" type="text" name="topic" id="topic" />
						</div>
						
						<hr />
						
						<div class="form-group">
							<label for="requirements"><h4>Requirements</h4></label>
							<textarea class="form-control" type="text" name="requirements" id="requirements" rows="1"></textarea>
						</div>
						
						<hr />
						
						<div class="row">
							<div class="col">
								<div class="form-group mb-0">
									<label for="time"><h6>Time</h6></label>
									<input class="form-control" type="text" name="time" id="time" />
								</div>
							</div>
							
							<div class="col">
								<div class="form-group mb-0">
									<label for="date"><h6>Date</h6></label>
									<input class="form-control" type="text" name="date" id="date" />
								</div>
							</div>
							
							<div class="col">
								<div class="form-group mb-0">
									<label for="timestamp"><h6>Timestamp</h6></label>
									<input class="form-control" type="text" name="timestamp" id="timestamp" />
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group mb-0">
							<label for="description"><h4>Lecture Description</h4></label>
							
							<textarea class="form-control" id="description" name="description" rows="8"></textarea>
						</div>
					</div>
				</div>
			</div>
			
			<section class="anarchy-quote text-center">
				<div class="form-group mb-0 pt-3">
					<button class="btn btn-custom" type="submit" name="lecture">Submit Lecture</button>
					
					<p class="mt-3 mb-0">
						If you clicked the submit button and you have come back to here, you did not fill in all the required fields.
					</p>
				</div>
			</section>
		</form>
	</section>
</main>