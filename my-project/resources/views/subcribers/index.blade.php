@extends('layouts.app')

@section('titulo')
    Subcritores
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center ">
        <div class="md:w-6/12 p-5">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                State
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcribers as $subcriber)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            
                            
                                <th  class="px-6 py-4">
                                    {{$subcriber["id"]}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$subcriber["email"]}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$subcriber["state_code"]}} - {{$subcriber["state_name"]}}
                                </td>
                            
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('subcribers') }}" method="POST" novalidate>
                @csrf

                @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }} </p>
                @endif
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input 
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Tu Email de Registro"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}"
                    />
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="state_id" class="mb-2 block uppercase text-gray-500 font-bold">
                        Estados
                    </label>

                    <select name="state_id" id="state_id" class="border p-3 w-full rounded-lg @error('state_id') border-red-500 @enderror">
                        
                        @foreach($states as $value => $label)
                    
                            <option value="{{ $label["id"] }}" >
                                {{ $label["name"] }} {{ $label["code"] }}
                            </option>
                        @endforeach
    
                    </select>
                    @error('state_id')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>

                <input
                    type="submit"
                    value="Ingresar datos"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />

            </form>
        </div>
    </div>

@endsection