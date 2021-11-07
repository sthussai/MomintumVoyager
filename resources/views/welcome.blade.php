@extends('layouts.app')

@section('content')
<div id="vue" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>



                <div class="card-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <auto-logout></auto-logout>
    <button-counter></button-counter>
    
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Reacts Example Component</div>

					<div class="card-body">I'm an example component!</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection

