<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (Auth::user())
                    <a href="{{route('todo.create')}}" >Ajouter</a>
                    
                    @endif
                    <table >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom </th>
                                <th>Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todo as $item)


                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                @if (Auth::user())
                                <td>

                                    {{-- <form action="{{route('tache.delete',$item->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                    <button  class="btn btn-danger">Suprimer</button>
                                </form> --}}
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
