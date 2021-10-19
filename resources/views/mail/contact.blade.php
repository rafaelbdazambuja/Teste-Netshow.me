@component('mail::message')
<h1>Novo contato!</h1>

<table class="contact" >
    <tr>
        <td><b>Nome:</b></td>
        <td>{{$contact->name}}</td>
    </tr>
    <tr>
        <td><b>E-mail:</b></td>
        <td>{{$contact->email}}</td>
    </tr>
    <tr>
        <td><b>Telefone:</b></td>
        <td>{{$contact->phone}}</td>
    </tr>
    <tr>
        <td><b>Data/hora:</b></td>
        <td>{{ $contact->created_at->format('d/m/Y H:i:s')}}</td>
    </tr>
    <tr>
        <td><b>IP:</b></td>
        <td>{{$contact->ip}}</td>
    </tr>
    <tr>
        <td><b>Mensagem:</b></td>
        <td>{{$contact->message}}</td>
    </tr>
</table>
@endcomponent