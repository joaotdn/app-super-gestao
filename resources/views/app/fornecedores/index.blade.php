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
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}     
    <br>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'Não preenchido' }}
@endisset
