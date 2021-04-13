@extends("../layouts/main")
@section("title", "Tutte le raccolte rifiuti")

@section("content")
	<body>
		{{-- JSON to OBJECT --}}
		<?php $objRaccolta = json_decode($raccolta, true);?>
		
		<div class="scroll-orizzontale">
			<table>
				<thead>
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
		</div>	
	</body>
@endsection