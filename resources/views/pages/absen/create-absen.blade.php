@extends('layouts.main')

@section('body')
    <div class="w-full flex flex-col gap-7 py-5 px-7">
        <h1 class="text-5xl text-gray-600 font-bold">
            Absen
        </h1>
        <div class="w-full flex flex-col gap-10 items-center">
            <div class="w-3/4">
                <input type="text" class="py-3 px-5 block w-full border-2 border-gray-500 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Masukkan NIK" id="nik" autocomplete="off">
            </div>
            <div class="w-1/2" id="alert"></div>
            <div class="w-3/4 flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                  <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-700">
                            <thead class="bg-gray-700">
                            <tr class="text-gray-200">
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase">Kode Absen</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase">Date</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase">Jam Masuk</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase">status</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-700" id="table">

                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/createAbsen.js') }}"></script>
@endsection