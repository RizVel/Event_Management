<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Occassion</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body>
  <nav class="transparent z-depth-0">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo ml-3">
        <img src="{{asset('images/LOGO.png')}}" alt="Logo" id="addEventLogo">
      </a>
    </div>
  </nav>
  <div class="container">
    @include('includes.messages')
  </div>
  <div class="row mt-1">
    <div class="col s3 container">
      <img src="http://absfreepic.com/absolutely_free_photos/small_photos/silver-laptop-on-a-black-background-3888x2592_20486.jpg" class="responsive-img materialbox">
      <div class="btn-group flex flex-column">
        <button class="btn center waves-effect mx-auto mt-1 w-100 pink">Edit Display Image</button>
        <button class="btn center waves-effect mx-auto mt-1 w-100 pink">Cancel</button>
        {{Form::submit('Save Changes', ['form'=> 'eventform', 'class' => 'btn center waves-effect mx-auto mt-1 w-100 pink'])}}
        <button class="btn center waves-effect mx-auto mt-1 w-100 pink">Delete Event</button>
      </div>
    </div>
    {!! Form::open(['action'=> ['PostsController@update', $events->idevents], 'method'=>'post', 'id' => 'eventform', 'class' => 'col s9']) !!}
      <div class="row">
        <div class="col s6">
          <div class="input-field">
            {{Form::label('eventname', 'Event Name', ['class' => 'pink-text'])}}
            {{Form::text('eventname', $events->eventname)}}
          </div>
        </div>
        <div class="col s6">
            <div class="chips" id="org">
            </div>
            {{Form::text('organizer', $events->managedBy, ['style'=> 'border:none;margin:0;padding:0', 
            'class'=>'hide','id'=>'organizerInput'])}}
        </div>
      </div>
      <div class="row">
        <div class="col s6">
            <div class="chips" id="venue">
            </div>
            {{Form::text('venue', $events->venue, ['style'=> 'border:none;margin:0;padding:0', 
            'class'=>'hide','id'=>'venueInput'])}}
        </div>
        <div class="col s6">
          <div class="input-field">
            {{Form::label('sDate', 'Start Date', ['class' => 'pink-text'])}}
            {{Form::text('sDate', $events->startdate, ['class' => 'datepicker'])}}
          </div> 
        </div>  
        <div class="col s6">
            <div class="input-field">
                {{Form::label('tag', 'Tag', ['class' => 'pink-text'])}}
                {{Form::text('tag', '')}}
              </div>
        </div>
        <div class="col s6">
          <div class="input-field">
            {{Form::label('eDate', 'End Date', ['class' => 'pink-text'])}}
            {{Form::text('eDate', $events->enddate, ['class' => 'datepicker'])}}
          </div>
        </div>
      </div>
      <div class="pink lighten-5 p-1">
        <div class="row">
          <div class="col s9">
            <div class="input-field">
              <label for="fieldTitle" class="pink-text">Field Title</label>
              <input type="text" id="fieldTitle">
            </div>
            <div class="input-field">
              <label for="text" class="pink-text">Text</label>
              <textarea id="text" class="materialize-textarea"></textarea>
            </div>
            <div>
              <div class="left">
                <div class="pink-text">Document</div>
                <img src="https://cdn.onlinewebfonts.com/svg/img_77564.png" class="file-img">
                <div>Attendance-ling name.xlsx</div>
              </div>
              <div class="left">
                <button class="btn add mt-1 pink"><i class="material-icons">add</i></button>
              </div>
            </div>
          </div>
          <div class="col s3">
            <div class="btn-group flex flex-column">
              <button class="btn center waves-effect mx-auto mt-1 w-100 pink">Text</button>
              <button class="btn center waves-effect mx-auto mt-1 w-100 pink">Document</button>
              <button class="btn center waves-effect mx-auto mt-1 w-100 pink">Media</button>
              <button class="btn center waves-effect mx-auto mt-1 w-100 pink">Remove</button>
              <button class="btn center waves-effect mx-auto mt-1 w-100 pink">Cancel</button>
              <button class="btn center waves-effect mx-auto mt-1 w-100 pink">Done</button>
            </div>
          </div>
        </div>
      </div>
      <button class="btn pink right">Add Field</button>
      {{Form::hidden('_method', 'PUT')}}
    {!! Form::close() !!}
  </div>
  @include('includes.scripts')
</body>

</html>