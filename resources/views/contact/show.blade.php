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
    <div class="row" >
        <div class="col-md-10 offset-md-1" >
            <div class="card mb-2" >
                <div class="card-body">
                    {{ Form::label('name', 'Nome') }}
                    <p>{{ $row->name }} </p>
                    
                    {{ Form::label('email', 'E-mail') }}
                    <p>{{ $row->email }} </p>

                    {{ Form::label('phone', 'Telefone') }}                    
                    <p>{{ $row->phone }} </p>

                    {{ Form::label('ip', 'IP') }}                    
                    <p>{{ $row->ip }} </p>
                    
                    {{ Form::label('created_at', 'Data/hora') }}                    
                    <p>{{ $row->created_at->format('d/m/Y H:i:s') }} </p>
 
                    {{ Form::label('message', 'Mensagem') }}
                    <p>{{ $row->message }} </p>

                    {{ Form::label('file', 'Arquivo Anexo') }}
                    <p><a class="btn btn-primary" target="_blank" href="{{Storage::disk('public')->url($row->file)}}" >Acessar anexo</a></p>
                </div>
            </div>            
        </div>    
    </div>
    {!! Form::close() !!}
@endsection