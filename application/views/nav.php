<?php
if ($this->ion_auth->logged_in())
		{
			$logged_in = true;
		} else {
    		$logged_in = false;
		}
if ($this->uri->segment_array()){		
$url_segment = $this->uri->segment_array(); //get array of url segment strings
}
?>


<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
 
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand" href="#"><img src="/img/logo.svg" /></a>
 
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
        <ul class="nav">
            <li class="<?php if($url_segment[1] == 'your_reviews'){echo "active";} ?>"><a href="/your_reviews">Your Reviews</a></li>
            <li class="<?php if($url_segment[1] == 'star'){echo "active";} ?>"><a href="/star">Give Star</a></li>
            <?php
            $group = array('reviewer', 'admin');
			if ($this->ion_auth->in_group($group)):
            ?>
            <li class="<?php if($url_segment[1] == 'admin'){echo "active";} ?>"><a href="/admin">Admin</a></li>
            <?php endif; ?>
            <?php if($logged_in): ?><li><a href="/logout">Logout</a></li><?php endif; ?>
            
        </ul>
      </div>
 
    </div>
  </div>
</div>