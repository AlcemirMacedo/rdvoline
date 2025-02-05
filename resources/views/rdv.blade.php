@extends('layouts.main')

@section('content')
<h1>RDV's</h1>

    <div class="content">
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data da Viagem</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($sql as $item)
              <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->nome_funcionario }}</td>
                <td>{{ $item->justificativa }}</td>
                <td>{{ $item->data_viagem }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>

<a href="/formRdv">Novo Rdv</a>

</body>
</html>
@endsection
