<form action="#" x-data="{ edit: false, notify: @entangle($toggleWarning) }">
    @csrf

    <x-dashboard.components.notification :message="$message"></x-dashboard.components.notification>

    <x-dashboard.components.edit-form :item="$item" content="Experience">
        <div class="grid grid-cols-12 gap-6 mt-14">
            <div class="flex items-center col-span-12 sm:col-span-3 min-w-[146px]">
                <x-dashboard.components.form-fields.input-field type="date" model="updateDate" title="Date"></x-dashboard.components.form-fields.input-field>
            </div>
        </div>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-10' : 'mt-5' }}">
            <x-dashboard.components.form-fields.input-field type="text" model="updateTitle" title="Title"></x-dashboard.components.form-fields.input-field>
        </div>
        <x-dashboard.components.form-fields.textarea-field model="updateDescription" title="Description" styles="{{ (auth()->user()->dark_mode) ? 'mt-10' : 'mt-5' }}"></x-dashboard.components.form-fields.textarea-field>
    </x-dashboard.components.edit-form>

    <section class="grid grid-cols-1 gap-10 md:grid-cols-2 2xl:grid-cols-3 mt-8">
        <div class="col-span-2 {{ (!count($experiences) >= 1) ?: 'space-y-10' }}">
            <div aria-labelledby="profile with live preview" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                @if (count($experiences) >= 1)
                    <ul role="list" class="grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3 p-4">
                        @foreach ($experiences as $key => $experience)
                            @if ($key >= 10)
                                @break
                            @endif
                            <x-dashboard.components.live-preview-panel :data="$experience">
                                <div class="absolute flex justify-center items-center top-0 left-0 bottom-0 right-0 w-full h-full text-white font-bold text-4xl">
                                    <span class="mb-5">{{ $experience->date->format('Y') ?: 'Year' }}</span>
                                </div>
                            </x-dashboard.components.live-preview-panel>
                        @endforeach
                    </ul>
                    <div>
                        {!! $experiences->links('custom-pagination-links-view') !!}
                    </div>
                @endif
            </div>
            <div aria-labelledby="profile form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <div class="flex justify-between items-center">
                    <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                        My Experience
                    </h2>
                    <button wire:click.prevent="store()" @click="notify = true" type="submit" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#407780]' : 'bg-[#993BCE] sm:hover:bg-[#57168C]' }} inline-flex justify-center items-center text-white h-10 px-4 border border-transparent text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md sm:transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
                <div class="{{ (auth()->user()->dark_mode) ? 'space-y-10' : 'space-y-6' }} flex-grow">
                    <div class="grid grid-cols-12 gap-6 mt-14">
                        <div class="flex items-center col-span-12 sm:col-span-3 min-w-[146px]">
                            <x-dashboard.components.form-fields.input-field type="date" model="date" title="Date"></x-dashboard.components.form-fields.input-field>
                        </div>
                    </div>
                    <div class="mt-10">
                        <x-dashboard.components.form-fields.input-field type="text" model="title" title="Title"></x-dashboard.components.form-fields.input-field>
                    </div>
                    <x-dashboard.components.form-fields.textarea-field model="description" title="Description"></x-dashboard.components.form-fields.textarea-field>
                </div>
            </div>
        </div>
        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>
    </section>
</form>
