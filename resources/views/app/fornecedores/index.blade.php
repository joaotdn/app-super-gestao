<h3>Fornecedores</h3>

@isset($fornecedores)
    @forelse ($fornecedores as $i => $fornecedor)
        @if ($loop->first)
            <h4>Total: {{ $loop->count }}</h4>
            <br>
        @endif
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
        @if (!$loop->last)
            <hr>
        @endif
        @empty
            Não existem fornecedores
        @endforelse

    @endisset
