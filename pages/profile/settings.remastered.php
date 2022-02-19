<?php

// sub-out vars instead
$aim = $hts->profile->im->aim;
$msn = $hts->profile->im->msn;
$icq = $hts->profile->im->icq;
$yahoo = $hts->profile->im->yahoo;
$website = $hts->profile->website;
$email = $hts->profile->email;

?>
<article class="alert alert-info rounded-0">
	Return to the classic mock-up of this page via: <a href="?page=settings" class="badge badge-primary">?page=settings</a>
</article>

<article class="block">
	<form class="container small" method="POST">
		<div class="row">
			<div class="col-12 col-lg-6">
			
				<div class="row">
					<div class="col-7">
						<p class="mb-4"><strong>HTS.org</strong> Account Name</p>
						<p class="mb-2">Member Group</p>
					</div>
					
					<div class="col-5"><div class="px-2">
						<p class="mb-4"><?= $hts->profile->nickname; ?></p>
						<p class="mb-4"><?= $hts->profile->member_group; ?></p>
					</div></div>
				</div>
				
				<div class="form-group row">
					<label class="col-form-label col-7" for="change_pw">
						Change Password<br />
						<small>(Your password will expire in <u><?= $hts->profile->pw_expire; ?></u> days.)</small>
					</label>
					
					<div class="col-5"><input class="form-check-input ml-2" type="checkbox" name="change_pw" id="change_pw" /></div>
				</div>
				
				<div class="form-group row">
					<label class="col-form-label col-7" for="change_secret">
						Change Security Question / Answer<br />
						(<a href="javascript:void();">What's This?</a>)
					</label>
					
					<div class="col-5"><input class="form-check-input ml-2" type="checkbox" name="change_secret" id="change_secret" /></div>
				</div>
			
			</div>
			
			<div class="col-12 col-lg-6">
			
				<div class="form-group row">
					<label class="col-form-label col-3" for="hide_email">Hide Email?</label>
					
					<div class="col-9"><input class="form-check-input ml-2" type="checkbox" name="hide_email" id="hide_email" CHECKED /></div>
				</div>
				
				<div class="form-group row">
					<label class="col-form-label col-12 col-lg-3" for="website">Home Page URL</label>
					
					<div class="col-12 col-lg-9"><input class="form-control" type="text" id="website" name="website" placeholder="<?= $website; ?>" /></div>
				</div>
				
				<div class="form-group row">
					<label class="col-form-label col-12 col-lg-3" for="time_offset">Time Offset</label>
					
					<div class="col-12 col-lg-9">
						<select class="form-control" id="time_offset" name="time_offset">
							<option value="<?= $hts->profile->time_offset; ?>"><?= date("T (" . $hts->profile->time_offset . ")", $hts->profile->time_offset); ?></option>
						</select>
					</div>
				</div>
			
			</div>
		
		</div>
				
		<div class="form-group text-center"><button class="btn btn-success" type="submit">Update</button></div>
		
		<hr class="half-rule" />
		
		<h5 class="mb-3">Social Media &amp; Instant Messenger</h5>
		
		<section>
			<h6 class="mb-3 mx-lg-4">Registered Services</h6>
			
			<div class="row">
				<div class="col-4 col-lg-2 text-center">
					<i class="fa fa-facebook"></i>
					<p class="mb-0">Facebook</p>
				</div>
				
				<div class="col-4 col-lg-2 text-center">
					<i class="fa fa-twitter"></i>
					<p class="mb-0">Twitter</p>
				</div>
			</div>
		</section>
		
		<hr class="half-rule" />
		
		<div>
		
			<div class="form-group form-row">
				<label class="col-form-label col-12 col-lg-3" for="rs">Relay Services</label>
				
				<div class="col-12 col-lg-3">
					<select class="form-control" name="rs-apps">
						<option value="email">Email</option>
						<option value="irc">IRC</option>
						<option value="discord">Discord</option>
					</select>
				</div>
				
				<div class="col-8 col-lg-5 mt-3 mt-lg-0">
					<input class="form-control" type="text" name="rs" id="rs" placeholder="{tpl.placeholder}" />
				</div>
				
				<div class="col-1 mt-3 mt-lg-0">
					<button class="btn btn-success" type="submit">Save</button>
				</div>
			</div>
			
			<div class="form-group form-row">
				<label class="col-form-label col-12 col-lg-3" for="im">Instant Messager</label>
				
				<div class="col-12 col-lg-3">
					<select class="form-control" name="im-apps">
						<option value="aim">AOL Instant Messenger (AIM)</option>
						<option value="msn">MSN Messenger (MSN)</option>
						<option value="icq">ICQ Chat (ICQ)</option>
					</select>
				</div>
				
				<div class="col-8 col-lg-5 mt-3 mt-lg-0">	
					<input class="form-control" type="text" name="im" id="im" placeholder="{tpl.placeholder}" />
				</div>
				
				<div class="col-1 mt-3 mt-lg-0">
					<button class="btn btn-success" type="submit">Save</button>
				</div>
			</div>
			
			<div class="form-group form-row">
				<label class="col-form-label col-12 col-lg-3" for="sn-apps">Social Networks</label>
				
				<div class="col-8">
					<select class="form-control" name="sn-apps">
						<option value="facebook">Facebook</option>
						<option value="twitter">Twitter</option>
						<option value="linkedin">LinkedIn</option>
					</select>
				</div>
				
				<div class="col-4 col-lg-1">	
					<button class="btn btn-success" type="submit">Connect</button>
				</div>
			</div>
		
		</div>
	
	</form>

</article>