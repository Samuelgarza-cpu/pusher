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
                    <div class="text-center display-1">
                        @isset($turno)
                        <h1>Turno:{{$turno}} </h1>
                        @endisset

                    </div>
                    <div class="container">

                        <form method="post" action="{{route('turnos')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">USUARIO</label>
                                <input type="text" name="user" class="form-control" id="name" value="{{Auth::user()->name}} " readonly>
                            </div>
                            <div class="d-flex align-item-center justify-content-center">
                                <button id="submitBtn" type="submit">
                                    <img src="{{asset('/img/btn-rojo.png')}}" width="320" height="320" alt="Imagen del botón">
                                    <b>TOMAR TURNO</b>
                                </button>

                                <!-- <button type="submit" class="btn btn-dark text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">TOMAR TURNO</button> -->
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>