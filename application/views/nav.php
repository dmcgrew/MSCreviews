<?php
if ($this->ion_auth->logged_in())
		{
			$logged_in = true;
		} else {
    		$logged_in = false;
		}
?>


<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
 
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand" href="#">MSC Employee Reviews</a>
 
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
        <ul class="nav">
            <li><a href="/review/your_reviews">Your Reviews</a></li>
            <li><a href="/star">Give Star</a></li>
            <?php
            $group = array('reviewer', 'admin');
			if ($this->ion_auth->in_group($group)):
            ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Admin
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="/review/create">Create a Review</a></li>
                  <li><a href="#">Edit Reviews</a></li>
                </ul>
            </li>
            <?php endif; ?>
            <?php if($logged_in): ?><li><a href="/logout">Logout</a></li><?php endif; ?>
            <?php if(!$logged_in): ?><li><a href="/login">Login</a></li><?php endif; ?>
        </ul>
      </div>
 
    </div>
  </div>
</div>