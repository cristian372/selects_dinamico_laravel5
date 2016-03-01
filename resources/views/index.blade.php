@extends('layouts.master')
	@section('content')
	        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           BASIC  FORM ELEMENTS
                        </div>
                        <div class="panel-body">
                        {!!Form::open()!!}
                        	<div class="form-group">
        						{!!Form::label('State','State: ')!!}
        						{!!Form::select('state', $states, null,['id'=>'state'])!!}
							</div>
							<div class="form-group">
        						{!!Form::label('Twon','Twon: ')!!}
        						{!!Form::select('twon', ['placeholder'=>'selecciona'], null, ['id'=>'town'])!!}
							</div>
                            {!!Form::submit('Registrar')!!}
                        {!!Form::close()!!}       
						</div>
						</div>
					</div>
        		</div>
        	</div>
        </div>

	@endsection