@extends('admin.layouts.modal') @section('content')
<form id="deleteForm" class="form-horizontal" method="post"
	action="@if (isset($video)){{ URL::to('admin/video/' . $video->id . '/delete') }}@endif"
	autocomplete="off">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> <input
		type="hidden" name="id" value="{{ $video->id }}" />
	<div class="form-group">
		<div class="controls">
			<p>{{ trans("admin/modal.delete_message") }}</p>
			<element class="btn btn-warning btn-sm close_popup">
			<span class="glyphicon glyphicon-ban-circle"></span> {{
			trans("admin/modal.cancel") }}</element>
			<button type="submit" class="btn btn-sm btn-danger">
				<span class="glyphicon glyphicon-trash"></span> {{
				trans("admin/modal.delete") }}
			</button>
		</div>
	</div>
</form>
@stop
