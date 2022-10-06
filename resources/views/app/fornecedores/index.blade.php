<h3>Fornecedores</h3>

{{-- comentario --}}

<?= 'teste <br>' ?>
{{ 'teste 2' }}
<br>
@php
echo 'teste 4';
@endphp
<br>
{{-- @dd($fornecedores) --}}
Fornecedor: {{ $fornecedores[0]['nome'] }}
@unless ($fornecedores[0]['status'] == 'S')
    <br>Fornecedor inativo
@endunless
<br>
