<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
	<table>
		<form action="/finish" method="post">
			{!! csrf_field() !!}
			@foreach($questions as $key=>$question)
			<tr>
				<td>
					<label>{{ ($loop->index+1). "、".$question["issue"] }}</label><br />
					@foreach($question["options"] as $option)
					<input type="{{$question['type']}}" name="{{ $key.'[]'}}"
						value="{{ $option }}">{{ $option }}</input>
					<br /> 
					@endforeach
				</td>
			</tr>
			@endforeach
			<tr>
				<td><input type="submit" value="提交" /></td>
			</tr>
		</form>
	</table>

</body>
</html>
