<h3>Fornecedores</h3>

{{-- comentario --}}

<?= 'teste <br>' ?>
{{ 'teste 2' }}
<br>
@php
echo 'teste 4';
@endphp
<br>
@isset($fornecedores)
    Nome: {{ $fornecedores[0]['nome'] }}
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            - Sem cnpj
        @endempty
    @endisset
@endisset
