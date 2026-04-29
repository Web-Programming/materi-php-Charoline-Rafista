@extends('app.master')
@section('title', $title)
@section('sidebar')
    @parent
@section('submenu-produk')
@endsection
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mb-4">{($title)}</h1>

        <div class="table-responsive">
            <table class="table table-bordered table-striped tabole-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @for ($i = 0; $i < count($products); $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $products[$i]['name'] }}</td>
                            <td> Rp {{ number_format($products[$i]['price'], 0, ',', '.') }}</td>
                            <td>
                                <a href="{{url('/produk/' . $products[$i]['id'])}}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{url('/produk/' . $products[$i]['id'] . '/edit')}}" class="btn btn-sm btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endfor --}}

                    @foreach ($products as $index => $product)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $item['name'] }}</td>
                            <td> Rp {{ number_format($product['price'], 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ url('/produk/' . $item['id']) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ url('/produk/' . $item['id'] . '/edit') }}"
                                    class="btn btn-sm btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
