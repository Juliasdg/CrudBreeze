<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('cadastrar-cliente') }}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <x-input-label for="nome" :value="__('Nome')" />
                        <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="endereco" :value="__('Endereço')" />
                        <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required autofocus/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="bairro" :value="__('Bairro')" />
                        <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required autofocus/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="cep" :value="__('CEP')" />
                        <x-text-input id="cep" class="block mt-1 w-full" type="number" name="cep" :value="old('cep')" required autofocus/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="cidade" :value="__('Cidade')" />
                        <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required autofocus/>
                    </div>
                            <div class="mt-4">
                                <x-input-label for="estado" :value="__('Estado')" />
                                <select id="estado" class="block mt-1 w-full" name="estado" required autocomplete="off">
                                        <option value="" {{ old('estado') == "" ? 'selected' : '' }}>Selecione um estado</option>
                                        <option value="AC" {{ old('estado') == "AC" ? 'selected' : '' }}>AC</option>
                                        <option value="AL" {{ old('estado') == "AL" ? 'selected' : '' }}>AL</option>
                                        <option value="AP" {{ old('estado') == "AP" ? 'selected' : '' }}>AP</option>
                                        <option value="AM" {{ old('estado') == "AM" ? 'selected' : '' }}>AM</option>
                                        <option value="BA" {{ old('estado') == "BA" ? 'selected' : '' }}>BA</option>
                                        <option value="CE" {{ old('estado') == "CE" ? 'selected' : '' }}>CE</option>
                                        <option value="DF" {{ old('estado') == "DF" ? 'selected' : '' }}>DF</option>
                                        <option value="ES" {{ old('estado') == "ES" ? 'selected' : '' }}>ES</option>
                                        <option value="GO" {{ old('estado') == "GO" ? 'selected' : '' }}>GO</option>
                                        <option value="MA" {{ old('estado') == "MA" ? 'selected' : '' }}>MA</option>
                                        <option value="MT" {{ old('estado') == "MT" ? 'selected' : '' }}>MT</option>
                                        <option value="MS" {{ old('estado') == "MS" ? 'selected' : '' }}>MS</option>
                                        <option value="MG" {{ old('estado') == "MG" ? 'selected' : '' }}>MG</option>
                                        <option value="PA" {{ old('estado') == "PA" ? 'selected' : '' }}>PA</option>
                                        <option value="PB" {{ old('estado') == "PB" ? 'selected' : '' }}>PB</option>
                                        <option value="PR" {{ old('estado') == "PR" ? 'selected' : '' }}>PR</option>
                                        <option value="PE" {{ old('estado') == "PE" ? 'selected' : '' }}>PE</option>
                                        <option value="PI" {{ old('estado') == "PI" ? 'selected' : '' }}>PI</option>
                                        <option value="RJ" {{ old('estado') == "RJ" ? 'selected' : '' }}>RJ</option>
                                        <option value="RN" {{ old('estado') == "RN" ? 'selected' : '' }}>RN</option>
                                        <option value="RS" {{ old('estado') == "RS" ? 'selected' : '' }}>RS</option>
                                        <option value="RO" {{ old('estado') == "RO" ? 'selected' : '' }}>RO</option>
                                        <option value="RR" {{ old('estado') == "RR" ? 'selected' : '' }}>RR</option>
                                        <option value="SC" {{ old('estado') == "SC" ? 'selected' : '' }}>SC</option>
                                        <option value="SP" {{ old('estado') == "SP" ? 'selected' : '' }}>SP</option>
                                        <option value="SE" {{ old('estado') == "SE" ? 'selected' : '' }}>SE</option>
                                        <option value="TO" {{ old('estado') == "TO" ? 'selected' : '' }}>TO</option>
                                </select>
                                <x-input-error :messages="$errors->get('estado')" class="mt-2" />
                            </div>
                    <br>
                    <x-primary-button class="ml-3">
                         {{ __('Cadastrar') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>