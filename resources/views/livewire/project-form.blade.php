<form action="#" enctype="multipart/form-data" x-data="{ edit: false, notify: @entangle($toggleWarning) }">
    @csrf

    <x-dashboard.components.notification :message="$message"></x-dashboard.components.notification>

    <x-dashboard.components.edit-form :item="$item" content="Project">
        <div class="mt-10">
            <x-dashboard.components.form-fields.input-field type="text" model="updateTitle" title="Title"></x-dashboard.components.form-fields.input-field>
        </div>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }}">
            <x-dashboard.components.form-fields.image-field model="newProjectPicture"></x-dashboard.components.form-fields.image-field>
        </div>
        <x-dashboard.components.form-fields.textarea-field model="updateDescription" title="Description" styles="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }}"></x-dashboard.components.form-fields.textarea-field>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }} grid grid-cols-4 gap-6">
            <x-dashboard.components.form-fields.url-field type="text" model="updateCode" title="Project" grid="col-span-4 sm:col-span-2"></x-dashboard.components.form-fields.url-field>
            <x-dashboard.components.form-fields.url-field type="text" model="updateGithub" title="GitHub" grid="col-span-4 sm:col-span-2"></x-dashboard.components.form-fields.url-field>
        </div>
        <div class="pb-4 pt-8 flex items-center justify-between">
            <x-dashboard.components.toggle-switch>
                <p class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-sm font-medium" id="privacy-option-1-label">
                    Make project public
                </p>
                <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-sm" id="privacy-option-1-description">
                    Allow this project to be seen by the public.
                </p>
            </x-dashboard.components.toggle-switch>
        </div>
    </x-dashboard.components.edit-form>

    <section class="grid grid-cols-1 gap-10 md:grid-cols-2 2xl:grid-cols-3 mt-8">
        <div class="col-span-2 {{ (!count($projects) >= 1) ?: 'space-y-10' }}">
            <div aria-labelledby="profile with live preview" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                @if (count($projects) >= 1)
                    <ul role="list" class="grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3 p-4">
                        @foreach ($projects as $key => $project)
                            @if ($key >= 6)
                                @break
                            @endif
                            <x-dashboard.components.live-preview-panel :data="$project" :image="$project->profile_photo_path"></x-dashboard.components.live-preview-panel>
                        @endforeach
                    </ul>
                    <div>
                        {!! $projects->links('custom-pagination-links-view') !!}
                    </div>
                @endif
            </div>
            <div aria-labelledby="profile form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <div class="flex justify-between items-center">
                    <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                        My Project
                    </h2>
                    <button wire:click.prevent="store()" @click="notify = true" type="submit" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#407780]' : 'bg-[#993BCE] sm:hover:bg-[#57168C]' }} inline-flex justify-center items-center text-white h-10 px-4 border border-transparent text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md sm:transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
                <div class="flex-grow space-y-6">
                    <div class="mt-10">
                        <x-dashboard.components.form-fields.input-field type="text" model="title" title="Title"></x-dashboard.components.form-fields.input-field>
                    </div>
                    <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }}">
                        <x-dashboard.components.form-fields.image-field model="project_picture"></x-dashboard.components.form-fields.image-field>
                    </div>
                    <x-dashboard.components.form-fields.textarea-field model="description" title="Description" styles="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }}"></x-dashboard.components.form-fields.textarea-field>
                    <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }} grid grid-cols-4 gap-6">
                        <x-dashboard.components.form-fields.url-field type="text" model="code" title="Project" grid="col-span-4 sm:col-span-2"></x-dashboard.components.form-fields.url-field>
                        <x-dashboard.components.form-fields.url-field type="text" model="github" title="GitHub" grid="col-span-4 sm:col-span-2"></x-dashboard.components.form-fields.url-field>
                    </div>
                </div>
            </div>
        </div>
        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>
    </section>
</form>

