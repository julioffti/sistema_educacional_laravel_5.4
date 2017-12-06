@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
        <h3>Listagem de usuários</h3>
            <br/>
        {!! Button::primary('Novo usuário')->asLinkTo(route('admin.users.create')) !!}
        </div>
        <br/>
        <div class="row">
            {!! Table::withContents($users->items())!!}
        </div>
            {!! $users->links() !!}
</div>
@endsection