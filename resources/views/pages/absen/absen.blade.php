@extends('layouts.main')

@section('body')
<div class="w-full h-screen flex justify-center items-center">
    <div class="w-3/4 flex justify-center items-center">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
              <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                      <tr class="odd:bg-gray-700 even:bg-gray-800">
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase">Code</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase">User</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase">Date</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase">Time</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($absen as $item)     
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"> {{$item->uuid}} </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $item->user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"> {{$item->record}} </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"> {{$item->time}} WIB </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="w-full flex justify-center">
                  {{$absen->links()}}
                </div>
            </div>
            </div>
          </div>
    </div>
</div>
@endsection