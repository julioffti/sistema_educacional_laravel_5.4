@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar Usuário</h3>
            <br/><br/>
            {!! form($form->add('edit', 'submit', [
                'attr' => ['class' => 'btn btn-primary btn-block'],
                 'label' => Icon::create('floppy-disk').'&nbsp;&nbsp;Editar'
                ]));
            !!}
        </div>
    </div>

@endsection