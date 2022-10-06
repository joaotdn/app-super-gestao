<h3>Fornecedores</h3>

{{-- comentario --}}

<?= 'teste <br>' ?>
{{ 'teste 2' }}
<br>
@php
echo 'teste 4';
@endphp

{{-- @dd($fornecedores) --}}

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem vários</h3>
@else
    <h3>Vazio<h3>
@endif
