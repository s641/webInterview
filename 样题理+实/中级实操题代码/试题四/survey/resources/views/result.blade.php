<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
	<section>
		@foreach($result as $q)
		<label>{{ ($loop->index+1). "、".$q["issue"] }}</label><br />
		<label>{{ $q["answer"] }}</label><br />
		@endforeach
	</section>
</body>
</html>
