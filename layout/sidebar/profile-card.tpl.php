<!-- HTS profile card -->
<article class="sidebar-panel sidebar-profile">
	<!-- view profile link -->
	<p class="sidebar-profile-link">Hello, <a href="?page=profile">{profile.nickname} <i class="fa fa-check"></i></a></p>
	
	<!-- control buttons -->
	<nav class="sidebar-profile-control">
		<a class="badge badge-settings" href="?page=settings">Settings <i class="fa fa-check"></i></a>
		<a class="badge badge-logout" href="?page=logout">Logout</a>
	</nav>
	
	<!-- skin chooser : link -->
	<nav class="sidebar-profile-skin">
		<!-- a href="?page={page.index}&skin=default">Skin Chooser</a -->
		<a href="#skinChooser">Skin Chooser <i class="fa fa-check"></i></a>
	</nav>
	
	<!-- message center -->
	<section class="sidebar-profile-messages">
		<nav class="sidebar-profile-message-links">
			<a href="?page=pm">Private Messages</a><br />
			<a href="?page=htsmc">HTS Messages Center <i class="fa fa-check"></i></a>
		</nav>
		
		<p class="sidebar-profile-message-alert">You have 0 new messages.</p>
	</section>
</article>