@extends('layouts.app')

@section('content')


<div class="p-6 bg-green-50 min-h-screen">
    <h2 class="text-3xl font-bold mb-4 text-green-800">Data Pengelolaan</h2>

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-green-200">
            <thead class="bg-green-100">
                <tr>
                    <th class="px-6 py-3 text-left font-bold text-green-700">Nama</th>
                    <th class="px-6 py-3 text-left font-bold text-green-700">Jumlah</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-green-100">
                @foreach($data as $item)
                    <tr>
                        <td class="px-6 py-4">{{ $item['nama'] }}</td>
                        <td class="px-6 py-4">{{ $item['jumlah'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
