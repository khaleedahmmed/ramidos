
@if(Session::has('success'))
<script type="text/javascript">
	$('.widget-content .mixin').on('click', function () {
    const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    padding: '2em'
  });

  toast({
    type: 'success',
    title: 'Signed in successfully',
    padding: '2em',
  })

})
	</script>
@endif

@if(Session::has('error'))
<script type="text/javascript">
	$('.widget-content .mixin').on('click', function () {
  const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    padding: '2em'
  });

  toast({
    type: 'error',
    title: 'error',
    padding: '2em',
  })

})
	</script>
@endif
