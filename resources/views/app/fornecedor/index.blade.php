<h3>Fornecedor</h3>



@php

    /*
    if(empty($variavel)) {} //Retornar true se a variavel estiver vazia
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var = ''
    */

@endphp

@isset($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor)

        
        iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome']}}
        <br>
        Status: {{ $fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }} 
        <br>

        @if($loop->first)
            Primeira iteração do loop
        @endif

        @if($loop->last)
            Ultima iteração do loop

            <br>

            Totaal de registros: {{ $loop->count}}
        @endif

        <hr>
    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset
    