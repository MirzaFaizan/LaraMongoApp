@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              
                <div class="panel-body">
                	@if(count($errors)>0)
					  <div class="alert alert-danger" style="max-width: 500px;">
					     <strong>Error</strong> 
					     <ul>
					     	@foreach($errors->all() as $error)
					     	 <li>{{ $error }}</li>
					     	@endforeach
					     </ul>
					  </div>

					@endif
                    <form class="form-horizontal" method="POST" action="/updatingrecord">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Student Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $student->name }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id" class="col-md-4 control-label">Student ID</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id" value="{{ $student->id }}" required autofocus>
                           
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Student Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $student->email }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Student Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ $student->phone }}"  autofocus>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Student Gender</label>

                            <div class="col-md-6">
                                <div class="radio">
								    <label><input type="radio" @if($student->gender=='Male') checked @endif name="gender" value="Male">Male</label>
								    <label style="margin-left: 15px;"><input type="radio" @if($student->gender=='Female') checked @endif name="gender" value="Female">Female</label>
								</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    UPDATE
                                </button>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
