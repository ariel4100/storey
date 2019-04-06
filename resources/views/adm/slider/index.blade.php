@extends('adm.layouts.app')

@section('content')
    <div class="right-align">
        <a class="waves-effect waves-light btn" href="{{ route('slider.create', ['seccion' => $section]) }}"><i class="material-icons left">add</i> Añadir</a>
    </div>
    <table>
        <thead>
        <tr>
            <th>Imagen</th>
            <th>Titulo</th>
            <th>Orden</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($slider as $item)
            <tr>
                <td><img src="{{  $item->image
                 }}" style="width: 150px"></td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->order }}</td>
                <td>
                    <a class="waves-effect waves-light blue lighten-2 btn btn-action" href="{{ route('slider.edit', ['slider' => $item->id]) }}"><i class="material-icons left">edit</i></a>
                    <a class="waves-effect waves-light red lighten-2 btn btn-action btn-delete" href="{{ route('slider.destroy', ['slider' => $item->id]) }}"><i class="material-icons left">delete</i></a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
