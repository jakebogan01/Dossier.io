<form action="#" enctype="multipart/form-data" x-data="{ edit: false, notify: @entangle('toggleWarning') }">
    @csrf

    <x-dashboard.components.notification :message="$message"></x-dashboard.components.notification>

    <x-dashboard.components.edit-form :item="$item" content="Project">
        <div class="mt-14">
            <x-dashboard.components.form-fields.input-field type="text" model="updateTitle" title="Project Title" required="required"></x-dashboard.components.form-fields.input-field>
        </div>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-10' : 'mt-5' }}">
            <x-dashboard.components.form-fields.image-field title="Project Image" model="newProjectPicture"></x-dashboard.components.form-fields.image-field>
        </div>
        <x-dashboard.components.form-fields.textarea-field model="updateDescription" title="Description" title="Brief Description" required="required" styles="{{ (auth()->user()->dark_mode) ? 'mt-10' : 'mt-5' }}"></x-dashboard.components.form-fields.textarea-field>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-10' : 'mt-5' }} grid grid-cols-4 gap-6">
            <x-dashboard.components.form-fields.url-field type="text" model="updateCode" title="Project Link" grid="col-span-4 sm:col-span-2"></x-dashboard.components.form-fields.url-field>
            <x-dashboard.components.form-fields.url-field type="text" model="updateGithub" title="GitHub Link" grid="col-span-4 sm:col-span-2"></x-dashboard.components.form-fields.url-field>
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
            @if(auth()->user()->projects->count() < 6)
                <div aria-labelledby="profile form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                    <div class="flex justify-between items-center">
                    <div>
                        <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                            My Project
                        </h2>
                        <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} mt-1 max-w-2xl text-sm">
                            Post up to 6 projects to be viewed by your viewers.
                        </p>
                    </div>
                        <button wire:click.prevent="store()" type="submit" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#407780]' : 'bg-[#993BCE] sm:hover:bg-[#57168C]' }} inline-flex justify-center items-center font-bold text-white h-10 px-4 border border-transparent text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md sm:transition-colors">
                            Post
                        </button>
                    </div>
                    <div class="{{ (auth()->user()->dark_mode) ? 'space-y-10' : 'space-y-6' }} flex-grow">
                        <div class="mt-14">
                            <x-dashboard.components.form-fields.input-field type="text" model="title" title="Project Title" required="required"></x-dashboard.components.form-fields.input-field>
                        </div>
                        <div class="{{ (auth()->user()->dark_mode) ? 'mt-10' : 'mt-5' }}">
                            <x-dashboard.components.form-fields.image-field title="Project Image" model="project_picture" required="required"></x-dashboard.components.form-fields.image-field>
                        </div>
                        <x-dashboard.components.form-fields.textarea-field model="description" title="Brief Description" required="required"></x-dashboard.components.form-fields.textarea-field>
                        <div class="{{ (auth()->user()->dark_mode) ? 'mt-10' : 'mt-5' }} grid grid-cols-4 gap-6">
                            <x-dashboard.components.form-fields.url-field type="text" model="code" title="Project Link" grid="col-span-4 sm:col-span-2"></x-dashboard.components.form-fields.url-field>
                            <x-dashboard.components.form-fields.url-field type="text" model="github" title="GitHub Link" grid="col-span-4 sm:col-span-2"></x-dashboard.components.form-fields.url-field>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>
    </section>
</form>

