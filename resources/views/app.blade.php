<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>InterU</title>
	<?php
		$user = \Session::get('user');
		if(!$user)
			$user = 'undefined';
		else{
			unset($user->password);
			$user = $user->toJson();
		}
	?>
	<script>
		window.iu = {};
		window.iu['token'] = '{{{csrf_token()}}}';
		window.iu['user'] = <?php echo $user ?>;
	</script>
</head>
<body>
  <div id="J_header"></div>
	@yield('content')

  <script src="/UI/common.bundle.js"></script>
	@yield('scripts')
</body>
</html>