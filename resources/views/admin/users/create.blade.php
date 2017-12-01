@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>Novo Usuário</h3>
        <br/><br/>
        {!! form($form->add('Insert', 'submit', [
            'attr' => ['class' => 'btn btn-primary btn-block'],
            'label' =>'inserir'
            ]))
        !!}
    </div>
</div>

@endsection