<article class="block p-0 border">
	<div class="d-none d-lg-block">
		<table class="table">
			<thead>
				<th>Sender</th>
				<th class="text-center">Priority</th>
				<th>Date Sent</th>
				<th>Subject</th>
				<th class="text-center">Flagged</th>
				<th class="text-center">Select</th>
			</thead>
			
			<tbody>
				<tr>
					<td colspan="6" class="text-success">No Messages</td>
				</tr>
				
				<tr>
					<td><a href="/hts/index.php?page=profile">wRek47</a></td>
					<td class="text-center"><figure class="mb-0"><img src="//www.hackthissite.org/pages/messages/msys/images/normal.png" alt="[norm-dot]" /></figure></td>
					<td>09/04/20 03:23PM</td>
					<td>RE: Message</td>
					<td class="text-center"><figure class="mb-0"><img src="https://www.hackthissite.org/pages/messages/msys/images/flag-up.png" alt="[flag-up]" /></figure></td>
					<td class="text-center"><input type="checkbox" value="{message.identity}" /></td>
				</tr>
				
				<tr class="tfoot">
					<td colspan="6">0 total messages.</td>
				</tr>
				
				<tr class="tfoot">
					<td colspan="6">
						<form method="POST">
						<div class="form-group row mb-0">
							<div class="col-4">
								<select class="form-control" name="action" id="action">
									<option class="delete">Delete</option>
									<option class="delete">Mark as Read</option>
									<option class="delete">Mark as Unread</option>
									<option class="delete">Flag</option>
									<option class="delete">Unflag</option>
								</select>
							</div>
							
							<label class="col-2 form-label py-2" for="action">selected items</label>
							
							<div class="col-6">
								<button class="btn btn-custom-dark" type="submit">Perform action</button>
							</div>
							</form>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<div class="d-lg-none">
		<table class="table mb-0">
		<tbody>
			<tr>
				<td>wRek47</td>
				<td>09/04/20 03:23PM</td>
				<td>[norm-dot]</td>
			</tr>
			<tr>
				<td colspan="2">[flag-up] RE: Message</td>
			</tr>
		</tbody>
		</table>
	</div>
	
	<hr class="half-rule mt-0" />
	
	<div class="d-flex text-center justify-content-center small" style="overflow:auto;">
		<figure class="mr-3">
			<img src="//www.hackthissite.org/pages/messages/msys/images/announce.png" alt="[announce-dot]" />
			<figcaption>announcement</figcaption>
		</figure>
		
		<figure class="mx-3">
			<img src="//www.hackthissite.org/pages/messages/msys/images/high.png" alt="[high-dot]" />
			<figcaption>high priority</figcaption>
		</figure>
		
		<figure class="mx-3">
			<img src="//www.hackthissite.org/pages/messages/msys/images/medium.png" alt="[medium-dot]" />
			<figcaption>medium priority</figcaption>
		</figure>
		
		<figure class="mx-3">
			<img src="//www.hackthissite.org/pages/messages/msys/images/mission.png" alt="[mission-dot]" />
			<figcaption>mission-related message</figcaption>
		</figure>
		
		<figure class="mx-3">
			<img src="//www.hackthissite.org/pages/messages/msys/images/normal.png" alt="[norm-dot]" />
			<figcaption>normal</figcaption>
		</figure>
		
		<figure class="ml-3">
			<img src="//www.hackthissite.org/pages/messages/msys/images/flag-up.png" alt="[flag-up]" />
			<figcaption>message flagged</figcaption>
		</figure>
	</div>
</article>

<article class="block htsmc-pm-block">
	<form action="POST">
		<div class="form-group row">
			<label class="col-12 col-lg-3 form-label" for="recipient">Send a message to</label>
			<div class="col-12 col-lg-9">
				<input class="form-control" id="recipient" name="recipient" type="text" placeholder="" />
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-12 col-lg-3 form-label" for="priority">Priority</label>
			<div class="col-12 col-lg-9">
				<select class="form-control" id="priority" name="priority">
					<option value="normal">Normal</option>
					<option value="low">Low Priority</option>
					<option value="medium">Medium Priority</option>
					<option value="high">High Priority</option>
				</select>
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-12 col-lg-3 form-label" for="subject">Subject</label>
			<div class="col-12 col-lg-9">
				<input class="form-control" id="subject" name="subject" type="text" placeholder="" />
			</div>
		</div>
		
		<div class="form-group">
			<label class="form-label" for="Message">Message</label>
			<textarea class="form-control" rows="4"></textarea>
		</div>
		
		<button class="btn btn-custom" type="submit">Send</button>
	</form>

</article>