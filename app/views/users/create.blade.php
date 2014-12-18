@extends('layouts.default')

@section('content')
<div class="col-md-8 column">

    <div class="row clearfix" style="margin-top: 15px;">
        <div class="col-md-12">
            
            {{ Form::open( ['route'=>'users.store', 'class'=>'form-horizontal'] ) }}
            
                <div class="form-group">
                    {{ Form::label('username','Username',['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-10">
                        {{ Form::text('username', $value = null, 
                                    ['placeholder' => 'Username', 'class'=> 'form-control', 'required' => 'required', 
                                    'autofocus' => 'autofocus' ]) }}
                    </div>
                </div>
                
                <div class="form-group">
                    {{ Form::label('email','Email',['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-10">
                        {{ Form::email('email', $value = null,['placeholder' => 'Email', 'class'=> 'form-control', 'required' => 'required']) }}
                    </div>
                </div>
                
                <div class="form-group">
                    {{ Form::label('password','Password',['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-10">
                        {{ Form::password('password',['placeholder' => 'Password', 'class'=> 'form-control', 'required' => 'required']) }}
                    </div>
                </div>
            
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                        {{ Form::reset('Reset', ['class'=>'btn btn-danger']) }}
                    </div>
                </div>
            
            {{ Form::close() }}
            
        </div>
    </div>
</div>
@stop