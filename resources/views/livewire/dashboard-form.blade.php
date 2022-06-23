<form action="#" x-data="{ showEdit: false }">
    @csrf

    <x-dashboard.components.success-notification></x-dashboard.components.success-notification>

    <x-dashboard.components.edit :item="$item">
        <div class="mt-5">
            <div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                <label for="updateTitle" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Title</label>
                <input wire:model="updateTitle" type="text" name="updateTitle" id="updateTitle" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
            </div>
            @error('updateTitle') <span class="text-danger error">{{ $message }}</span>@enderror
        </div>

        <div class="mt-5">
            <div class="relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Photo</label>
                <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 sm:hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Upload a file</span>
                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="relative mt-1">
                <label for="updateDescription" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Description</label>
                <textarea wire:model="updateDescription" id="updateDescription" name="updateDescription" rows="3" class="shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required></textarea>
            </div>
            @error('updateDescription') <span class="text-danger error">{{ $message }}</span>@enderror
        </div>

        <div class="grid grid-cols-4 gap-6 mt-5">
            <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                <label for="updateCode" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Project</label>
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm"> https:// </span>
                    </div>
                    <input wire:model="updateCode" type="text" name="updateCode" id="updateCode" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                </div>
                @error('updateCode') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>

            <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                <label for="updateGithub" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">GitHub</label>
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm"> https:// </span>
                    </div>
                    <input wire:model="updateGithub" type="text" name="updateGithub" id="updateGithub" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                </div>
                @error('updateGithub') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
    </x-dashboard.components.edit>

    @if(count($currentUser->projects) >= 1)
{{--        <div>--}}
{{--            <h2 class="mx-auto mt-8 pb-5 text-lg leading-6 font-medium text-gray-900">--}}
{{--                All Projects--}}
{{--            </h2>--}}
            <div class="mx-auto mt-6">
                <div class="flex flex-col mt-2">
                    <div class="relative align-middle min-w-full overflow-x-auto overflow-hidden sm:rounded-lg shadow-md sm:hover:shadow-sm sm:transition-all duration-300 ease-linear">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Title</th>
                                <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Likes</th>
                                <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Status</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Created</th>
                                <th scope="col" class="pl-3 pr-4 sm:pr-6 py-3.5 text-left text-sm font-semibold text-gray-900">Edit</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach($currentUser->projects as $project)
                                <tr class="hover:bg-gray-50 transition-colors group">
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6 border-l-2 border-transparent group-hover:border-[#6B158C7F] transition-colors">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 flex-shrink-0">
                                                <img class="h-10 w-10 rounded-full" src="https://nickjanetakis.com/assets/blog/cards/how-to-start-and-finish-any-web-app-project-678900795cfd6d4fa60e3655dd62ae9f61ef5e14b62ca62050e817e43e861f11.jpg" alt="">
                                            </div>
                                            <div class="hidden sm:block ml-4">
                                                <div class="font-medium text-gray-900">{{ $project->title }}</div>
                                                <a href="{{ $project->links['code'] }}" class="text-gray-500 hover:text-indigo-500">View Project</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell">
                                        {{ number_format($project->total_likes) ?: 0 }}
                                    </td>
                                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                        <div class="rounded-full w-2 h-2 border-2 {{ $project->public ? 'bg-green-400 border-green-500' : 'bg-red-400 border-red-500' }}"></div>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $project->created_at->format('F d, Y') }}
                                    </td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <button wire:click.prevent="edit({{ $project->id }})" @click="showEdit = !showEdit"  type="button" class="flex text-[#6B158C7F] sm:hover:text-indigo-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                            </svg>
                                            <span class="sr-only">, Lindsay Walton</span>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <nav
                            class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6"
                            aria-label="Pagination">
                            <div class="hidden sm:block">
                                <p class="text-sm text-gray-700">
                                    Showing
                                    <span class="font-medium">
                                            1
                                        </span>
                                    to
                                    <span class="font-medium">
                                            10
                                        </span>
                                    of
                                    <span class="font-medium">
                                            20
                                        </span>
                                    results
                                </p>
                            </div>
                            <div class="flex-1 flex justify-between sm:justify-end">
                                <a
                                    href="#"
                                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white sm:hover:bg-gray-50">
                                    Previous
                                </a>
                                <a
                                    href="#"
                                    class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white sm:hover:bg-gray-50">
                                    Next
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
{{--        </div>--}}
    @endif
</form>
