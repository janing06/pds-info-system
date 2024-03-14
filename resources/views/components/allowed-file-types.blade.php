@php
	$array 			= collect( config('constants.mime_types') )->keys()->toArray();
	$mimeTypes 	= implode(', ' , $array);
@endphp

<div class="alert alert-info" role="alert">
	<i class="bi bi-info-circle-fill me-1 text-info"></i>Allowed file types: <code>{{ $mimeTypes }}</code><br>
</div>