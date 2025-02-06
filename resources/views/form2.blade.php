@extends('layouts.main')

@section('content')

<div class="container" >

    {{ $id }}

    <h1>Cadastrar itens do RDV</h1>
    <form action="#" method="post">
         @csrf
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
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>


</body>
</html>
@endsection
