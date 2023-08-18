<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Atualizar Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('editar-cliente') }}" method="POST">
                    @csrf
                    {{-- ID DO USUARIO --}}
                    <x-text-input id="id" class="block mt-1 w-full" type="text" name="id" :value="$cliente->id" required autocomplete="off" style="display: none"/>

                    <div class="mt-4">
                        <x-input-label for="nome" :value="__('Nome')" />
                        <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="$cliente->nome" required autofocus/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="endereco" :value="__('Endereço')" />
                        <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="$cliente->endereco" required autofocus/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="bairro" :value="__('Bairro')" />
                        <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="$cliente->bairro" required autofocus/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="cep" :value="__('CEP')" />
                        <x-text-input id="cep" class="block mt-1 w-full" type="number" name="cep" :value="$cliente->cep" required autofocus/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="cidade" :value="__('Cidade')" />
                        <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="$cliente->cidade" required autofocus/>
                    </div>

                    <div class="mt-4">
                                <x-input-label for="state" :value="__('Estado')" />
                                <select id="estado" class="block mt-1 w-full" name="estado" required autocomplete="off">
                                        <option value="" {{ old('estado') == "" ? 'selected' : '' }}>Selecione um estado</option>
                                        <option value="AC" {{ $cliente->estado == "AC" ? 'selected' : '' }}>AC</option>
                                        <option value="AL" {{ $cliente->estado == "AL" ? 'selected' : '' }}>AL</option>
                                        <option value="AP" {{ $cliente->estado == "AP" ? 'selected' : '' }}>AP</option>
                                        <option value="AM" {{ $cliente->estado == "AM" ? 'selected' : '' }}>AM</option>
                                        <option value="BA" {{ $cliente->estado == "BA" ? 'selected' : '' }}>BA</option>
                                        <option value="CE" {{ $cliente->estado == "CE" ? 'selected' : '' }}>CE</option>
                                        <option value="DF" {{ $cliente->estado == "DF" ? 'selected' : '' }}>DF</option>
                                        <option value="ES" {{ $cliente->estado == "ES" ? 'selected' : '' }}>ES</option>
                                        <option value="GO" {{ $cliente->estado == "GO" ? 'selected' : '' }}>GO</option>
                                        <option value="MA" {{ $cliente->estado == "MA" ? 'selected' : '' }}>MA</option>
                                        <option value="MT" {{ $cliente->estado == "MT" ? 'selected' : '' }}>MT</option>
                                        <option value="MS" {{ $cliente->estado == "MS" ? 'selected' : '' }}>MS</option>
                                        <option value="MG" {{ $cliente->estado == "MG" ? 'selected' : '' }}>MG</option>
                                        <option value="PA" {{ $cliente->estado == "PA" ? 'selected' : '' }}>PA</option>
                                        <option value="PB" {{ $cliente->estado == "PB" ? 'selected' : '' }}>PB</option>
                                        <option value="PR" {{ $cliente->estado == "PR" ? 'selected' : '' }}>PR</option>
                                        <option value="PE" {{ $cliente->estado == "PE" ? 'selected' : '' }}>PE</option>
                                        <option value="PI" {{ $cliente->estado == "PI" ? 'selected' : '' }}>PI</option>
                                        <option value="RJ" {{ $cliente->estado == "RJ" ? 'selected' : '' }}>RJ</option>
                                        <option value="RN" {{ $cliente->estado == "RN" ? 'selected' : '' }}>RN</option>
                                        <option value="RS" {{ $cliente->estado == "RS" ? 'selected' : '' }}>RS</option>
                                        <option value="RO" {{ $cliente->estado == "RO" ? 'selected' : '' }}>RO</option>
                                        <option value="RR" {{ $cliente->estado == "RR" ? 'selected' : '' }}>RR</option>
                                        <option value="SC" {{ $cliente->estado == "SC" ? 'selected' : '' }}>SC</option>
                                        <option value="SP" {{ $cliente->estado == "SP" ? 'selected' : '' }}>SP</option>
                                        <option value="SE" {{ $cliente->estado == "SE" ? 'selected' : '' }}>SE</option>
                                        <option value="TO" {{ $cliente->estado == "TO" ? 'selected' : '' }}>TO</option>
                                </select>
                                <x-input-error :messages="$errors->get('estado')" class="mt-2" />
                            </div>
                            <br>
                    <x-primary-button class="ml-3" >
                         {{ __('Atualizar') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>