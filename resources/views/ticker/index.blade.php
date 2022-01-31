@extends('layouts.main')

@section('title')
  Titckers (MOEX)
@endsection

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ticker</th>
      <th scope="col">figi</th>
      <th scope="col">minPriceIncrement</th>
      <th scope="col">lot</th>
      <th scope="col">name</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($rubStocks as $i => $stock)
      <tr>
        <td  scope="row">{{ $i + 1 }}</td>
        <td>{{ $stock->getFigi() }}</td>
        <td>{{ $stock->getTicker() }}</td>
        <td>{{ $stock->getMinPriceIncrement() }}</td>
        <td>{{ $stock->getLot() }}</td>
        <td>{{ $stock->getName() }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection