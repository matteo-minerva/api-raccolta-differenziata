<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Raccolta per materiale</title>

    <!-- Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	@if ($errore)
			<h1>{{$errore}}</h1>
	@else
		{{-- JSON to OBJECT --}}
		<?php $objRaccolta = json_decode($raccolta, true);?>
		
		<div class="scroll-orizzontale">
			<table style="border: 1px solid black;">
				<thead style="border: 1px solid black">
					<tr>
						@foreach ($objRaccolta as $obj)
							@foreach ($obj as $col=>$val)
								<th>{{$col}}</th>
							@endforeach
							@break
						@endforeach
					</tr>
				</thead>

				<tbody>
					@foreach ($objRaccolta as $obj)
						<tr>		
							@foreach ($obj as $col=>$val)
								<td>{{$obj[$col]}}</td>
							@endforeach			
						</tr>
					@endforeach
				</tbody>
			</table>
		@endif
	</div>	
</body>
</html>