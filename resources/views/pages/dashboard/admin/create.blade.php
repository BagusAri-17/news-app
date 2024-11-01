<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Create News') }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __("Just create your news") }}
                        </p>
                    </header>
                    <form id="news-form" action="{{ route('admin.dashboard.store') }}" method="POST" class="max-w-xl mt-6 space-y-4" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <x-input-label for="title" :value="__('Title News')" />
                            <x-text-input id="title" name="title" type="text" class="block w-full mt-1" autocomplete="title" />
                        </div>
                        <div>
                            <x-input-label for="category_id" :value="__('Category News')" />
                            <x-select-input id="category_id" name="category_id" class="block w-full mt-1">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </x-select-input>
                        </div>
                        <div>
                            <x-input-label for="location_id" :value="__('Location')" />
                            <x-select-input id="location_id" name="location_id" class="block w-full mt-1">
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                @endforeach
                            </x-select-input>
                        </div>
                        <div>
                            <x-input-label for="content" :value="__('Description')" />
                            <input type="hidden" name="content" id="content">
                            <div id="editorjs" class="px-4 mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"></div>
                        </div>
                        <div>
                            <x-input-label for="thumbnail" :value="__('Thumbnail News')" />
                            <x-text-input id="thumbnail" name="thumbnail" type="file" class="block w-full mt-1 " />
                        </div>
                        <div>
                            <x-input-label for="image" :value="__('Image News')" />
                            <x-text-input id="image" name="image" type="file" class="block w-full mt-1 " />
                        </div>
                        <x-primary-button>{{ __('Submit') }}</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('after-script')
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const editor = new EditorJS({
                    /**
                     * Id of Element that should contain the Editor
                     */
                    holder: 'editorjs',
                });



                // Saat form disubmit
                document.getElementById('news-form').addEventListener('submit', function (e) {
                    e.preventDefault(); // Cegah submit form langsung

                    // Simpan data dari Editor.js
                    editor.save().then((outputData) => {
                        // Masukkan konten Editor.js ke dalam hidden input
                        document.getElementById('content').value = JSON.stringify(outputData);

                        // Submit form setelah konten Editor.js diisi
                        this.submit();
                    }).catch((error) => {
                        console.error('Saving failed: ', error);
                    });
                });
            });
        </script>
    @endpush
</x-app-layout>

