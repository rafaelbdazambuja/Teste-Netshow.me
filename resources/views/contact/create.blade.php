
@extends('main')
@section('content')
    @component('components.header',[
            'title'=>'Criar contato',
            'right_button'=>[
                    [
                    'title'=>'Voltar para lista',
                    'route'=>route('contact.index')
                    ]
            ]
    ])
    @endcomponent
    {!! Form::open(['route' => 'contact.store', 'id' => 'CusForm','enctype'=>'multipart/form-data']) !!}
    <div class="row" >
        <div class="col-md-10 offset-md-1" >
            <div class="card mb-5" >
                <div class="card-body">
                    {{ Form::label('name', 'Nome') }}
                    <span class="text-danger" >*</span>
                    {!! ($errors->first('name')?'<span class="error-input">'. str_replace('name','nome',$errors->first('name')) .'</span>':'')!!}
                    {{ Form::text('name', null, ['class' => 'form-control mb-1']) }} 
                    
                    {{ Form::label('email', 'E-mail') }}
                    <span class="text-danger" >*</span>
                    {!! ($errors->first('email')?'<span class="error-input">'. str_replace('email','e-mail',$errors->first('email')) .'</span>':'')!!}
                    {{ Form::text('email', null, ['class' => 'form-control mb-1']) }}

                    {{ Form::label('phone', 'Telefone') }}                    
                    <span class="text-danger" >*</span>
                    {!! ($errors->first('phone')?'<span class="error-input">'. str_replace('phone','telefone',$errors->first('phone')) .'</span>':'')!!}
                    <the-mask value="{{ old('phone') }}" name="phone" class="form-control mb-1" :mask="['(##) ####-####', '(##) #####-####']" ></the-mask>
 
                    {{ Form::label('message', 'Mensagem') }}
                    <span class="text-danger" >*</span>
                    {!! ($errors->first('message')?'<span class="error-input">'. str_replace('message','mensagem',$errors->first('message')) .'</span>':'')!!}
                    {{ Form::textarea('message', null, ['class' => 'form-control mb-1']) }} 

                    {{ Form::label('file', 'Arquivo Anexo') }}
                    <span class="text-danger" >*</span>
                    {!! ($errors->first('file')?'<span class="error-input">'. str_replace('file','arquivo anexo',$errors->first('file')) .'</span>':'')!!}
                    {{ Form::file('file', ['class' => 'form-control mb-1']) }} 
                    
                    <p class="text-muted mt-3 mb-0" ><span class="text-danger" >*</span> Campos obrigatórios</p>
                    {{ Form::submit('Salvar', ['class' => 'btn btn-success mt-2 mb-0 px-5']) }}
                </div>
            </div>            
        </div>    
    </div>
    {!! Form::close() !!}
@endsection