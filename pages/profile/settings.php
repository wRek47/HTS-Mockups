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
	View the remastered version of this page via: <a href="?page=settings_r" class="badge badge-dark">?page=settings_r</a>
</article>

<article class="block settings">
<form method="POST">
	<div class="row">
		<div class="col-auto col-lg-4">
			<p><strong>HTS.org</strong> Account Name</p>
		</div>
		
		<div class="col"><p><?= $hts->profile->nickname; ?></p></div>
	</div>
	
	<div class="row">
		<div class="col-auto col-lg-4">
			<p>Member Group</p>
		</div>
		
		<div class="col">
			<p><?= $hts->profile->member_group; ?></p>
		</div>
	</div>
	
	<div class="form-group row">
		<label class="col-form-label col-auto col-lg-4" for="change_pw">
			Change Password<br />
			<small>(Your password will expire in <u><?= $hts->profile->pw_expire; ?></u> days.)</small>
		</label>
		
		<div class="col-12 col-lg-auto text-center"><input class="form-check-input ml-lg-2" type="checkbox" name="change_pw" id="change_pw" /></div>
	</div>
	
	<div class="form-group row pb-3">
		<label class="col-form-label col-auto col-lg-4" for="change_secret">
			Change Security Question / Answer<br />
			<small>(<a href="javascript:void();">What's This?</a>)</small>
		</label>
		
		<div class="col-12 col-lg-auto text-center"><input class="form-check-input ml-lg-2" type="checkbox" name="change_secret" id="change_secret" /></div>
	</div>
	
	<hr class="half-rule" />
	
	<h5 class="mb-3">Social Media &amp; Instant Messenger</h5>
	<div class="row">
	
	<div class="col-12 col-lg-6">
	<div class="form-group row">
		<label class="col-form-label col-12 col-lg-3" for="icq">ICQ Number</label>
		<div class="col-lg-9"><input class="form-control" type="text" id="icq" name="icq" placeholder="<?= $icq; ?>" /></div>
	</div>
	
	<div class="form-group row">
		<label class="col-form-label col-12 col-lg-3" for="aim">AIM Account</label>
		<div class="col-12 col-lg-9"><input class="form-control" type="text" id="aim" name="aim" placeholder="<?= $aim; ?>" /></div>
	</div>
	
	<div class="form-group row">
		<label class="col-form-label col-12 col-lg-3" for="msn">MSN Messenger Account</label>
		<div class="col-12 col-lg-9"><input class="form-control" type="text" id="msn" name="msn" placeholder="<?= $msn; ?>" /></div>
	</div>
	
	<div class="form-group row">
		<label class="col-form-label col-12 col-lg-3" for="yahoo">Yahoo</label>
		<div class="col-12 col-lg-9"><input class="form-control" type="text" id="yahoo" name="yahoo" placeholder="<?= $yahoo; ?>" /></div>
	</div>
	</div>
	
	<div class="col-12 col-lg-6">
	<div class="form-group row">
		<label class="col-form-label col-12 col-lg-3" for="email">Email</label>
		<div class="col-12 col-lg-9"><input class="form-control" type="text" id="email" name="email" placeholder="<?= $email; ?>" /></div>
	</div>
	
	<div class="form-group row">
		<label class="col-form-label col-12 col-lg-3" for="hide_email">Hide Email?</label>
		<div class="col-12 col-lg-9 text-left"><input class="form-check-input ml-2" type="checkbox" name="hide_email" id="hide_email" CHECKED /></div>
	</div>
	
	<div class="form-group row">
		<label class="col-form-label col-12 col-lg-3" for="website">Home Page URL</label>
		<div class="col-12 col-lg-9"><input class="form-control" type="text" id="website" name="website" placeholder="<?= $website; ?>" /></div>
	</div>
	
	<div class="form-group row">
		<label class="col-form-label col-12 col-lg-3" for="time_offset">Time Offset</label>
		<div class="col-lg-9">
			<select class="form-control" id="time_offset" name="time_offset">
				<option value="<?= $hts->profile->time_offset; ?>"><?= date("T (" . $hts->profile->time_offset . ")", $hts->profile->time_offset); ?></option>
			</select>
		</div>
	</div>
	</div>
	
	</div>
	
	<hr class="half-rule" />
	
	<div class="form-group buttons">
		<button type="reset" class="btn btn-custom-dark mr-2">Reset</button>
		<button type="submit" class="btn btn-custom">Submit</button>
	</div>
	
	</form>

</article>