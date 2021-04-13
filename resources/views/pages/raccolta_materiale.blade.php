@extends("../layouts/main")
@section("title", "Raccolta per materiale")

@section("content")
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
@endsection
