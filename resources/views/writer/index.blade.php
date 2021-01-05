<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Writer</title>
</head>
<body>
It Works!
@foreach($lists as $list)
{{ $list->name }}
@endforeach
</body>
</html>