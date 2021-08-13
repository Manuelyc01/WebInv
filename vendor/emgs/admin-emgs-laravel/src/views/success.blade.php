@if ($message = session('success'))
	<script>
		setTimeout(function() {
	        toastr.options = {
	            closeButton: true,
	            progressBar: false,
	            showMethod: 'fadeIn',
	            hideMethod: 'fadeOut',
	            timeOut: 4000
	        };
	        toastr.success("{{ $message }}", 'Success!');
	    }, 0);
	</script>

@endif

