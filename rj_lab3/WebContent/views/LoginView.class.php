<?php  
class LoginView {
	public static function show() {
		$_SESSION['headertitle'] = "UniReview Login";
		MasterView::showHeader();
		LoginView::showDetails();
		$_SESSION['footertitle'] = "";
		MasterView::showFooter();
	}
	
	public static function showDetails() {
	 // Show the details of the form
	   $user = (array_key_exists('user', $_SESSION))?$_SESSION['user']:null;
	   $base = (array_key_exists('base', $_SESSION))?$_SESSION['base']:"";
	   echo '<h1>UniReview Login</h1>';
	   echo '<form action ="/'.$base.'/login" method="Post">';
	   echo '<p>User name: <input type="text" name ="userName"';
	   if (!is_null($user)) 
	   	  echo 'value = "'. $user->getUserName() .'"';
	   echo '><span class="error">';
	   if (!is_null($user))
	      echo $user->getError('userName');
	   echo '</span></p>';
	
	  echo '<p>Password: <input type="text" name ="password"><span class="error">';
	  if (!is_null($user)) 
	  	  echo $user->getError('password');
	  echo '</span></p>';
	  echo '<p><input type = "submit" name = "submit" value="Submit"></p></form>';
	
	  echo '<p>New user?  <a href="/'.$base.'/user/new">Sign up here</a></p>';
  }
}
?>