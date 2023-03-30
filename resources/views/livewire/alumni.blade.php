<div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <div class="inline-flex col-span-7 p-3 w-full">
            @if ($is_edit)
                @include('admin.alumnis.edit')
            @endif

            @if ($is_detail)
                @include('livewire.alumnis.detail')
            @endif

        </div>

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                       No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Alumni
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jabatan
                    </th>
                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($alumnis as $alumni)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $alumni->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $alumni->role->name }}
                        </td>
                        <td class="px-6 py-4">
                           <button  wire:click="editAlumni( {{ $alumni->id }} )"
                                    class="bg-gray-500 hover:bg-gray-700 font-semibold border-lg rounded-lg border-gray-900 py-2 px-4">
                                Edit
                           </button>

                           <button  wire:click.prevent="detailAlumni( {{ $alumni->id }} )"
                                    class="bg-blue-500 hover:bg-blue-700 font-semibold border-lg rounded-lg border-gray-500 px-4 py-2">
                                Detail
                           </button>
                        </td>
                    </tr>

                @empty

                @endforelse
            </tbody>
        </table>
    </div>

</div>
