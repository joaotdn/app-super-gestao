<h3>Fornecedores</h3>

@isset($fornecedores)
    @for ($i = 0; isset($fornecedores[$i]); $i++)
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
    @endfor
@endisset
