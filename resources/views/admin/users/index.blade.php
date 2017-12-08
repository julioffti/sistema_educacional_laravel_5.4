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
            {!!
            Table::withContents($users->items())
            -> striped()
            -> callback('Ações', function($field, $model){
                $linkEdit = route('admin.users.edit', ['user' => $model->id]);
                $linkShow = route('admin.users.show', ['user' => $model->id]);
                return Button::link(Icon::pencil().'&nbsp Editar')->asLinkTo($linkEdit).'|'
                       .Button::link(Icon::create('folder-open').'&nbsp;&nbsp; Ver')->asLinkTo($linkShow);
            })
            !!}
        </div>
            {!! $users->links() !!}
</div>
@endsection