<div class="row" id="flash_message">

    <div class="col-md-5 ">
        @if (session('success'))
        <div class="container">
        	<div class= "alert alert-success">{{ session('success')}}
        	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        	</div>
        	</div>
        @endif
    </div>
</div>
