<h3>Fornecedores</h3>

@isset($fornecedores)
    @php
        $i = 0;
    @endphp
    @while (isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}     
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Não preenchido' }}
        <br>
        Estado: 
        @switch($fornecedores[$i]['ddd'])
            @case('83')
                Paraíba 
                @break
            @case('81')
                Pernambuco
                @break
            @default
                Estado não encontrado
        @endswitch
        <hr>
        @php
            $i++;
        @endphp
    @endwhile
@endisset
