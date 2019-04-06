@extends('adm.layouts.app')

@section('content')
    <table class="highlight bordered">
        <thead>
        <td>Titulo</td>
        <td class="text-right">Acciones</td>
        </thead>
        <tbody>
        @forelse($contenido as $c)
            <tr>
                <td><span>{!! $c->title !!}</span></td>

                <td class="text-right">
                    <a href="{{ route('contenido.edit', [$section, $c->id]) }}" class="btn"><i class="material-icons">edit</i></a>
                    @if($c->eliminable)
                        <a href="" class="btn "><i class="material-icons">delete</i></a>
                    @endif
                </td>
            </tr>
        @empty
            <td colspan="2">No hay registro</td>
        @endforelse
        </tbody>
    </table>
@endsection

