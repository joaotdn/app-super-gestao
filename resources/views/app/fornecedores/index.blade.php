<h3>Fornecedores</h3>

@isset($fornecedores)
    @forelse ($fornecedores as $i => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não preenchido' }}
        <br>
        Estado:
        @switch($fornecedor['ddd'])
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
        @empty
            Não existem fornecedores
    @endforelse

@endisset
