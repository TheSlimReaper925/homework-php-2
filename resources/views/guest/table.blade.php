<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<<style type="text/css">
		table,td,td,th{
			border: solid 2px red;
			padding: 3px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<<table>
		<<tr>
			<th>N</th>
			<th>name</th>
			<th>lastname</th>
			<th>address</th>
			<th>biography</th>
			<th>birth date</th>
		</tr>
			@foreach ($newdata as $data)
		<tr>
				<td>{{ ++$loop->index }}</td>
				<td>{{ $data["name"] }}</td>
				<td>{{ $data["lastname"] }}</td>
				<td>{{ $data["address"] }}</td>
				<td>{{ $data["biography"] }}</td>
				<td>{{ $data["birthdate"] }}</td>
		</tr>
			@endforeach
	</table>

</body>
</html>