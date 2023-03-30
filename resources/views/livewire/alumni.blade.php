{{-- <div>

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

</div> --}}


<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        {{-- validation for natification --}}
        @if (session()->has('success'))
            <div class="bg-green-500 text-white p-3 rounded shadow-sm mb-3">
                {{ session()->get('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                {{ session()->get('error') }}
            </div>
        @endif
        {{-- end validation --}}

        <div class=" inline-flex col-span-7 p-3 w-full">
            {{-- button --}}
            <button wire:click.prevent="createUser()"
                class="bg-blue-500 hover:bg-blue-700 w-40
                text-white font-bold rounded-md my-3 inline-flex py-2 px-5">
                <svg class="w-5 h-6 -ml-1 inline-flex"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                    clip-rule="evenodd" />
                </svg>
            <span class="m-auto">
                Add data
            </span>
            </button>
            {{-- end button --}}
                {{-- @if ($is_create)
                    @include('livewire.alumnis.create')
                @endif --}}

                @if ($is_detail)
                    @include('livewire.alumnis.detail')
                @endif
            {{-- search --}}
                {{-- @if (!$is_search)
                    @include('livewire.alumnis.search-user')
                @endif --}}

                {{-- @if ($is_edit)
                    @include('livewire.alumnis.edit')
                @endif --}}
            {{-- end search --}}
        </div>
    </div>

    {{-- table --}}
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
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
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$loop->iteration}}
                    </th>
                    <td class="px-6 py-4">
                        {{ $alumni['name'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $alumni->role->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{-- add button for edit and delete data classroom --}}
                        <button  wire:click="editAlumni( {{ $alumni->id }} )" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit
                        </button>

                        <button  wire:click="detailAlumni( {{ $alumni->id }} )" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Detail
                        </button>

                        <button wire:click.prevent="deleteConfirmation( {{ $alumni->id }} )" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </td>
                </tr>
            @empty
                <div class="bg-yellow-500 text-white p-3 rounded shadow-sm mb-3">
                    Data Belum Tersedia.
                </div>
            @endforelse
        </tbody>
    </table>
    {{-- end table --}}
</div>
