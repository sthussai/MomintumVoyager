@extends("programregister.layout")



@section('content1')



<div class="w3-content w3-center w3-panel w3-card">
  <h1>All Program Registrations</h1>

  @foreach ($programregisters as $programregister)

  <a href="/programregister/{{$programregister->id}}"
    class=" w3-row-padding w3-card  w3-block w3-hover-shadow w3-margin-bottom">
    <div class='w3-col m3 s12 w3-padding-16'>
      <br> {!! $programregister->status !!}
      <hr>
      <p class='w3-center'><img src='https://www.w3schools.com/w3images/avatar2.png' class='w3-image'
          style='max-height: 100px' alt='Avatar'></p>
    </div>
    <div class='w3-col m9 s12 w3-padding-16 w3-center'>

      <b>Program Registration ID: {{$programregister->id}}</b><br>
      Name: {{$programregister->name}}<br>
      User ID: {{$programregister->owner_id}}<br>
      Email: {{$programregister->email}}<br>
      Phone: {{$programregister->phone}}<br>
      Program ID: {{$programregister->program_id}}<br>
      Program Name: {{$programregister->program_name}}<br>
      Created: {{$programregister->created_at}}<br>


    </div>
  </a>


  @endforeach


</div>

@endsection