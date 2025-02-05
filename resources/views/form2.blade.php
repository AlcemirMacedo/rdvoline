@extends('layouts.main')

@section('content')
<h1>Cadastrar itens do RDV</h1>
<form action="#" method="post">
    @csrf
    <div class="form-row">

    {{-- @foreach ($sql as $item)
        <option>{{ $item->nome_funcionario }}</option>
    @endforeach --}}


    <div class="form-row">
        <div class="form-group">
            <label>Via:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Terrestre</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Fluvial</label>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label>Justificativa</label>
            <input class="form-control" type="text">
        </div>
        <div class="form-group col-md-12">
            <label>Equipe</label>
            <input class="form-control" type="text">
        </div>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
</form>


</body>
</html>
@endsection
