<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center items-center h-screen gap-12">
        <div class="table1 flex flex-col items-center">
            <h1 class="text-2xl font-bold">Barang</h1>
            <div class="overflow-x-auto">
                <table class="table table-zebra">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Harga Satuan</th>
                            <th class="flex items-center gap-4">Action
                                <div>
                                    <button class="btn btn-success" onclick="my_modal_barang_100.showModal()">Tambah
                                        +</button>
                                    <dialog id="my_modal_barang_100" class="modal">
                                        <div class="modal-box">
                                            <form method="dialog">
                                                <button
                                                    class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                            </form>
                                            <h1>Tambah barang</h1>
                                            <form action="/barang" method="POST">
                                                @csrf
                                                <label class="form-control w-full max-w-xs">
                                                    <div class="label">
                                                        <span class="label-text">Nama Barang</span>
                                                    </div>
                                                    <input type="text" placeholder="Type here"
                                                        class="input input-bordered w-full max-w-xs" name="nama_barang"
                                                        required />
                                                </label>

                                                <label class="form-control w-full max-w-xs">
                                                    <div class="label">
                                                        <span class="label-text">Harga Satuan Barang</span>
                                                    </div>
                                                    <input type="number" placeholder="Type here"
                                                        class="input input-bordered w-full max-w-xs" name="harga_barang"
                                                        required />
                                                </label>
                                                <button class="btn btn-success mt-4">Tambah +</button>
                                            </form>
                                        </div>
                                    </dialog>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataBarang as $barang)
                            <tr>
                                <th>{{ $barang->id }}</th>
                                <td>{{ $barang->nama }}</td>
                                <td>{{ $barang->harga_satuan }}</td>
                                <td class="flex gap-4">
                                    <div>
                                        <button class="btn btn-warning"
                                            onclick="my_modal_barang_{{ $barang->id }}.showModal()">Edit
                                        </button>
                                        <dialog id="my_modal_barang_{{ $barang->id }}" class="modal">
                                            <div class="modal-box">
                                                <form method="dialog">
                                                    <button
                                                        class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                                </form>
                                                <h1>Tambah barang</h1>
                                                <form action="/barang/{{ $barang->id }}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <label class="form-control w-full max-w-xs">
                                                        <div class="label">
                                                            <span class="label-text">Nama Barang</span>
                                                        </div>
                                                        <input type="text" placeholder="Type here"
                                                            class="input input-bordered w-full max-w-xs"
                                                            name="nama_barang" value="{{ $barang->nama }}" required />
                                                    </label>

                                                    <label class="form-control w-full max-w-xs">
                                                        <div class="label">
                                                            <span class="label-text">Harga Satuan Barang</span>
                                                        </div>
                                                        <input type="number" placeholder="Type here"
                                                            class="input input-bordered w-full max-w-xs"
                                                            name="harga_barang" value="{{ $barang->harga_satuan }}"
                                                            required />
                                                    </label>
                                                    <button class="btn btn-success mt-4">Edit</button>
                                                </form>
                                            </div>
                                        </dialog>
                                    </div>

                                    <div>
                                        <form action="/barang/{{ $barang->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-error">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="table2 flex flex-col items-center">
            <h1 class="text-2xl font-bold">Transaksi</h1>
            <div class="overflow-x-auto">
                <table class="table table-zebra">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tanggal</th>
                            <th>Id-Barang</th>
                            <th>Jumlah</th>
                            <th class="flex items-center gap-4">Action
                                <div>
                                    <button class="btn btn-success" onclick="my_modal_trs_100.showModal()">Tambah
                                        +</button>
                                    <dialog id="my_modal_trs_100" class="modal">
                                        <div class="modal-box">
                                            <form method="dialog">
                                                <button
                                                    class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                            </form>
                                            <h1>Tambah Transaksi</h1>
                                            <form action="/transaksi" method="POST">
                                                @csrf
                                                <label class="form-control w-full max-w-xs">
                                                    <div class="label">
                                                        <span class="label-text">Tanggal</span>
                                                    </div>
                                                    <input type="date" placeholder="Type here"
                                                        class="input input-bordered w-full max-w-xs" name="tanggal"
                                                        required />
                                                </label>

                                                <label class="form-control w-full max-w-xs">
                                                    <div class="label">
                                                        <span class="label-text">Barang</span>
                                                    </div>
                                                    <select name="id_barang"
                                                        class="select select-bordered w-full max-w-xs " required>
                                                        @foreach ($dataBarang as $item)
                                                            <option value="{{ $item->id }}">
                                                                {{ $item->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </label>
                                                <label class="form-control w-full max-w-xs">
                                                    <div class="label">
                                                        <span class="label-text">Jumlah Barang</span>
                                                    </div>
                                                    <input type="number" placeholder="Type here"
                                                        class="input input-bordered w-full max-w-xs" name="jumlah"
                                                        required />
                                                </label>
                                                <button class="btn btn-success mt-4">Tambah +</button>
                                            </form>
                                        </div>
                                    </dialog>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataTransaksi as $trs)
                            <tr>
                                <th>{{ $trs->id }}</th>
                                <td>{{ $trs->tanggal }}</td>
                                <td>{{ $trs->id_barang }}</td>
                                <td>{{ $trs->jumlah }}</td>
                                <td class="flex gap-4">
                                    <div>
                                        <button class="btn btn-warning"
                                            onclick="my_modal_trs_{{ $trs->id }}.showModal()">Edit</button>
                                        <dialog id="my_modal_trs_{{ $trs->id }}" class="modal">
                                            <div class="modal-box">
                                                <form method="dialog">
                                                    <button
                                                        class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                                </form>
                                                <h1>Tambah Transaksi</h1>
                                                <form action="/transaksi/{{ $trs->id }}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <label class="form-control w-full max-w-xs">
                                                        <div class="label">
                                                            <span class="label-text">Tanggal</span>
                                                        </div>
                                                        <input type="date" placeholder="Type here"
                                                            class="input input-bordered w-full max-w-xs"
                                                            name="tanggal" value="{{ $trs->tanggal }}" />
                                                    </label>

                                                    <label class="form-control w-full max-w-xs">
                                                        <div class="label">
                                                            <span class="label-text">Barang</span>
                                                        </div>
                                                        <select name="id_barang"
                                                            class="select select-bordered w-full max-w-xs">
                                                            @foreach ($dataBarang as $item)
                                                                <option value="{{ $item->id }}">
                                                                    {{ $item->nama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </label>
                                                    <label class="form-control w-full max-w-xs">
                                                        <div class="label">
                                                            <span class="label-text">Jumlah Barang</span>
                                                        </div>
                                                        <input type="number" placeholder="Type here"
                                                            class="input input-bordered w-full max-w-xs"
                                                            name="jumlah" value="{{ $trs->jumlah }}" />
                                                    </label>
                                                    <button class="btn btn-success mt-4">Edit</button>
                                                </form>
                                            </div>
                                        </dialog>
                                    </div>

                                    <div>
                                        <form action="/transaksi/{{ $trs->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-error">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
