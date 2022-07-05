<form action="#" enctype="multipart/form-data" x-data="{ edit: false, notify: @entangle($toggleWarning) }">
    @csrf

    <x-dashboard.components.notification :message="$message"></x-dashboard.components.notification>

    <x-dashboard.components.edit-form :item="$item" content="Project">
        <div class="mt-14">
            <x-dashboard.components.form-fields.input-field type="text" model="updateTitle" title="Title"></x-dashboard.components.form-fields.input-field>
        </div>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-10' : 'mt-5' }}">
            <x-dashboard.components.form-fields.input-field type="text" model="updateJobPosition" title="Position"></x-dashboard.components.form-fields.input-field>
        </div>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-10' : 'mt-5' }}">
            <x-dashboard.components.form-fields.image-field model="newTestimonialPicture"></x-dashboard.components.form-fields.image-field>
        </div>
        <x-dashboard.components.form-fields.textarea-field model="updateDescription" title="Description" styles="{{ (auth()->user()->dark_mode) ? 'mt-10' : 'mt-5' }}"></x-dashboard.components.form-fields.textarea-field>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-10' : 'mt-5' }} grid grid-cols-4 gap-6">
            <x-dashboard.components.form-fields.url-field type="text" model="updateFacebook" title="Facebook" grid="col-span-4 sm:col-span-2"></x-dashboard.components.form-fields.url-field>
            <x-dashboard.components.form-fields.url-field type="text" model="updateLinkedin" title="Linkedin" grid="col-span-4 sm:col-span-2"></x-dashboard.components.form-fields.url-field>
        </div>
    </x-dashboard.components.edit-form>

    <section class="grid grid-cols-1 gap-10 md:grid-cols-2 2xl:grid-cols-3 mt-8">
        <div class="col-span-2 {{ (!count($testimonials) >= 1) ?: 'space-y-10' }}">
            <div aria-labelledby="profile with live preview" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                @if (count($testimonials) >= 1)
                    <ul role="list" class="grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3 p-4">
                        @foreach ($testimonials as $key => $testimonial)
                            @if ($key >= 4)
                                @break
                            @endif
                            <x-dashboard.components.live-preview-panel :data="$testimonial" :image="$testimonial->profile_photo_path">
                                <div class="absolute top-0 left-0 bottom-0 right-0 h-full w-full bg-black bg-opacity-25">
                                    <div class="flex justify-end space-x-3 px-4 py-3">
                                        <a href="{{ $testimonial->links['facebook'] }}" class="sm:hover:text-gray-300 text-white">
                                            <span class="sr-only">Facebook</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" /></svg>
                                        </a>
                                        <a href="{{ $testimonial->links['linkedin'] }}" class="sm:hover:text-gray-300 text-white">
                                            <span class="sr-only">LinkedIn</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" /></svg>
                                        </a>
                                    </div>
                                </div>
                            </x-dashboard.components.live-preview-panel>
                        @endforeach
                    </ul>
                    <div>
                        {!! $testimonials->links('custom-pagination-links-view') !!}
                    </div>
                @endif
            </div>
            @if(auth()->user()->testimonials->count() < 4)
                <div aria-labelledby="profile form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                    <div class="flex justify-between items-center">
                        <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                            My Testimonial
                        </h2>
                        <button wire:click.prevent="store()" @click="notify = true" type="submit" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#407780]' : 'bg-[#993BCE] sm:hover:bg-[#57168C]' }} inline-flex justify-center items-center text-white h-10 px-4 border border-transparent text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md sm:transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" /></svg>
                        </button>
                    </div>
                    <div class="{{ (auth()->user()->dark_mode) ? 'space-y-10' : 'space-y-6' }} flex-grow">
                        <div class="grid grid-cols-2 gap-6 mt-14">
                            <div>
                                <x-dashboard.components.form-fields.input-field type="text" model="title" title="Title"></x-dashboard.components.form-fields.input-field>
                            </div>
                            <div>
                                <x-dashboard.components.form-fields.input-field type="text" model="job_position" title="Position"></x-dashboard.components.form-fields.input-field>
                            </div>
                        </div>
                        <div class="{{ (auth()->user()->dark_mode) ? 'mt-10' : 'mt-5' }}">
                            <x-dashboard.components.form-fields.image-field model="testimonial_picture"></x-dashboard.components.form-fields.image-field>
                        </div>
                        <x-dashboard.components.form-fields.textarea-field model="description" title="Description"></x-dashboard.components.form-fields.textarea-field>
                        <div class="{{ (auth()->user()->dark_mode) ? 'mt-10' : 'mt-5' }} grid grid-cols-4 gap-6">
                            <x-dashboard.components.form-fields.url-field type="text" model="facebook" title="Facebook" grid="col-span-4 sm:col-span-2"></x-dashboard.components.form-fields.url-field>
                            <x-dashboard.components.form-fields.url-field type="text" model="linkedin" title="Linkedin" grid="col-span-4 sm:col-span-2"></x-dashboard.components.form-fields.url-field>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>
    </section>
</form>
