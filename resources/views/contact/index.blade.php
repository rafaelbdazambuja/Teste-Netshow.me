@extends('main')
@section('content')
    @component('components.header',[
        'title'=>'Lista de contatos',
        'right_button'=>[
            [
                'title'=>'Criar novo contato',
                'route'=>route('contact.create')
            ]
        ]
    ])
    @endcomponent
    <div class="table-responsive-sm">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th width="50px" >ID</th>
                    <th>Nome</th>
                    <th class="border-right-0" >E-mail</th>
                    <th class="border-right-0" >Telefone</th>
                    <th class="border-left-0" width="190px" ></th>
                </tr>
            </thead>
            <tbody>
                @if(count($itens) > 0)
                    @foreach ($itens as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td class="border-right-0" >{{ $row->name }}</td>
                            <td class="border-right-0" >{{ $row->email }}</td>
                            <td class="border-right-0" >{{ $row->phone }}</td>
                            <td class="border-left-0" >
                                <div class="w-100 text-right">
                                    <a href="{{ route('contact.show', $row->id) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach 
                @else
                    <tr>
                        <td colspan="5" >
                            <p class="my-3 text-center text-muted" >Ainda não há contatos para listar, <a href="{{route('contact.create')}}" >clique aqui</a> para criar.</p>
                        </td>
                    </tr>                    
                @endif
            </tbody>
        </table>
    </div>
@endsection