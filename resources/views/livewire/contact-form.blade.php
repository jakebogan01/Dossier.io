<form action="#" x-data="{ notify: @entangle($toggleWarning) }">
    @csrf

    <x-dashboard.components.notification :message="$message"></x-dashboard.components.notification>

    <section class="grid grid-cols-1 gap-10 md:grid-cols-2 2xl:grid-cols-3 mt-8" x-data="{ formOne: true, formTwo: false, formThree: false }">
        <div class="col-span-2 space-y-10">
            <div aria-labelledby="skills with live preview" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D]' : 'bg-white' }} shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'conclusion' }" id="tab_wrapper">
                    <ul role="tablist" class="flex items-center">
                        <li @click="formOne = true; formTwo = false; formThree = false">
                            <button type="button"
                                :class="(tab === 'conclusion') ? '{{ (auth()->user()->dark_mode) ? 'text-gray-800' : 'text-[#993BCE]' }} bg-white' : '{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-400' }} bg-transparent'"
                                @click.prevent="tab = 'conclusion';
                                window.location.hash = 'conclusion'"
                                class="inline-flex font-semibold px-5 py-2.5 rounded-t-md"
                                role="tab">
                                Conclusion
                            </button>
                        </li>
                        <li @click="formOne = false; formTwo = true; formThree = false">
                            <button type="button"
                                :class="(tab === 'contact') ? '{{ (auth()->user()->dark_mode) ? 'text-gray-800' : 'text-[#993BCE]' }} bg-white' : '{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-400' }} bg-transparent'"
                                @click.prevent="tab = 'contact';
                                window.location.hash = 'contact'"
                                class="inline-flex font-semibold px-5 py-2.5 rounded-t-md"
                                role="tab">
                                Contact Info
                            </button>
                        </li>
                        <li @click="formOne = false; formTwo = false; formThree = true">
                            <button type="button"
                                :class="(tab === 'social') ? '{{ (auth()->user()->dark_mode) ? 'text-gray-800' : 'text-[#993BCE]' }} bg-white' : '{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-400' }} bg-transparent'"
                                @click.prevent="tab = 'social';
                                window.location.hash = 'social'"
                                class="inline-flex font-semibold px-5 py-2.5 rounded-t-md"
                                role="tab">
                                Social Media
                            </button>
                        </li>
                    </ul>
                    <div class="bg-[#434c56]">
                        <section x-show="tab === 'conclusion'" x-cloak>
                            <dl>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-white' : 'bg-gray-100' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        Conclusion
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->conclusion ?: 'Give your viewers a reason to contact you' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Give your viewers a reason to contact you
                                        </dd>
                                    @endif
                                </div>
                            </dl>
                        </section>
                        <section x-show="tab === 'contact'">
                            <dl>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-white' : 'bg-gray-100' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        Phone
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->phone ?: 'Phone number' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Phone number
                                        </dd>
                                    @endif
                                </div>
                            </dl>
                        </section>
                        <section x-show="tab === 'social'" x-cloak>
                            <dl>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-white' : 'bg-gray-100' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm2.218 18.616c-.354.069-.468-.149-.468-.336v-1.921c0-.653-.229-1.079-.481-1.296 1.56-.173 3.198-.765 3.198-3.454 0-.765-.273-1.389-.721-1.879.072-.177.312-.889-.069-1.853 0 0-.587-.188-1.923.717-.561-.154-1.159-.231-1.754-.234-.595.003-1.193.08-1.753.235-1.337-.905-1.925-.717-1.925-.717-.379.964-.14 1.676-.067 1.852-.448.49-.722 1.114-.722 1.879 0 2.682 1.634 3.282 3.189 3.459-.2.175-.381.483-.444.936-.4.179-1.413.488-2.037-.582 0 0-.37-.672-1.073-.722 0 0-.683-.009-.048.426 0 0 .46.215.777 1.024 0 0 .405 1.25 2.353.826v1.303c0 .185-.113.402-.462.337-2.782-.925-4.788-3.549-4.788-6.641 0-3.867 3.135-7 7-7s7 3.133 7 7c0 3.091-2.003 5.715-4.782 6.641z"/></svg>
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->links['github'] ?: 'GitHub URL' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            GitHub URL
                                        </dd>
                                    @endif
                                </div>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M11.455 9.985c-1.419.417-3.11.632-5.067.646.405-1.654 1.518-3.03 3.003-3.784.777 1.016 1.464 2.063 2.064 3.138zm.965 1.93c-.124-.28-.254-.559-.391-.835-1.622.51-3.561.769-5.804.772l-.008.148c0 1.404.504 2.692 1.34 3.695 1.266-1.901 2.891-3.164 4.863-3.78zm-3.97 4.641c1.569 1.225 3.671 1.589 5.624.836-.252-1.488-.65-2.94-1.19-4.352-1.819.542-3.285 1.714-4.434 3.516zm7.075-9.13c-.977-.754-2.197-1.209-3.525-1.209-.49 0-.964.068-1.418.184.764 1.028 1.441 2.086 2.035 3.172 1.236-.524 2.204-1.24 2.908-2.147zm8.475 4.574c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-5 0c0-3.866-3.135-7-7-7s-7 3.134-7 7 3.135 7 7 7 7-3.134 7-7zm-5.824-1.349c.157.324.305.651.447.98 1.26-.217 2.641-.204 4.143.042-.073-1.292-.566-2.474-1.354-3.403-.807 1.005-1.89 1.798-3.236 2.381zm.914 2.132c.489 1.309.865 2.651 1.119 4.023 1.312-.88 2.241-2.284 2.497-3.909-1.317-.228-2.522-.268-3.616-.114z"/></svg>
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->links['dribbble'] ?: 'Dribbble URL' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Dribbble URL
                                        </dd>
                                    @endif
                                </div>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-white' : 'bg-gray-100' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg>
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->links['facebook'] ?: 'Facebook URL' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Facebook URL
                                        </dd>
                                    @endif
                                </div>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/></svg>
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->links['linkedin'] ?: 'Linkedin URL' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Linkedin URL
                                        </dd>
                                    @endif
                                </div>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-white' : 'bg-gray-100' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M14.829 6.302c-.738-.034-.96-.04-2.829-.04s-2.09.007-2.828.04c-1.899.087-2.783.986-2.87 2.87-.033.738-.041.959-.041 2.828s.008 2.09.041 2.829c.087 1.879.967 2.783 2.87 2.87.737.033.959.041 2.828.041 1.87 0 2.091-.007 2.829-.041 1.899-.086 2.782-.988 2.87-2.87.033-.738.04-.96.04-2.829s-.007-2.09-.04-2.828c-.088-1.883-.973-2.783-2.87-2.87zm-2.829 9.293c-1.985 0-3.595-1.609-3.595-3.595 0-1.985 1.61-3.594 3.595-3.594s3.595 1.609 3.595 3.594c0 1.985-1.61 3.595-3.595 3.595zm3.737-6.491c-.464 0-.84-.376-.84-.84 0-.464.376-.84.84-.84.464 0 .84.376.84.84 0 .463-.376.84-.84.84zm-1.404 2.896c0 1.289-1.045 2.333-2.333 2.333s-2.333-1.044-2.333-2.333c0-1.289 1.045-2.333 2.333-2.333s2.333 1.044 2.333 2.333zm-2.333-12c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.958 14.886c-.115 2.545-1.532 3.955-4.071 4.072-.747.034-.986.042-2.887.042s-2.139-.008-2.886-.042c-2.544-.117-3.955-1.529-4.072-4.072-.034-.746-.042-.985-.042-2.886 0-1.901.008-2.139.042-2.886.117-2.544 1.529-3.955 4.072-4.071.747-.035.985-.043 2.886-.043s2.14.008 2.887.043c2.545.117 3.957 1.532 4.071 4.071.034.747.042.985.042 2.886 0 1.901-.008 2.14-.042 2.886z"/></svg>
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->links['instagram'] ?: 'Instagram URL' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Instagram URL
                                        </dd>
                                    @endif
                                </div>
                            </dl>
                        </section>
                    </div>
                </div>
            </div>
            <div x-show="formOne" x-cloak aria-labelledby="skill form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <div class="flex justify-between items-center">
                    <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                        My Conclusion
                    </h2>
                    <button wire:click.prevent="register()" @click="notify = true" type="submit" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#407780]' : 'bg-[#993BCE] sm:hover:bg-[#57168C]' }} inline-flex justify-center items-center text-white h-10 px-4 border border-transparent text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md sm:transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
                <div class="flex-grow space-y-6 mt-12">
                    <x-dashboard.components.form-fields.textarea-field model="conclusion" title="Conclusion" styles="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }}"></x-dashboard.components.form-fields.textarea-field>
                </div>
            </div>
            <div x-show="formTwo" x-cloak aria-labelledby="skill form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                    My Contact Info
                </h2>
                <div class="flex-grow space-y-6 mt-12">
                    <div class="mt-8 grid grid-cols-12 gap-6">
                        <div class="col-span-12 sm:col-span-6">
                            <x-dashboard.components.form-fields.input-field type="tel" model="phone" title="Phone"></x-dashboard.components.form-fields.input-field>
                        </div>
                    </div>
                </div>
            </div>
            <div x-show="formThree" x-cloak aria-labelledby="skill form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                    My Social Media
                </h2>
                <div class="flex-grow space-y-6">
                    <div class="grid grid-cols-12 gap-6 mt-12">
                        <x-dashboard.components.form-fields.url-field type="text" model="instagram" title="Instagram" grid="col-span-12 sm:col-span-6"></x-dashboard.components.form-fields.url-field>
                        <x-dashboard.components.form-fields.url-field type="text" model="facebook" title="Facebook" grid="col-span-12 sm:col-span-6"></x-dashboard.components.form-fields.url-field>
                        <x-dashboard.components.form-fields.url-field type="text" model="github" title="GitHub" grid="col-span-12 sm:col-span-6"></x-dashboard.components.form-fields.url-field>
                        <x-dashboard.components.form-fields.url-field type="text" model="linkedin" title="Linkedin" grid="col-span-12 sm:col-span-6"></x-dashboard.components.form-fields.url-field>
                        <x-dashboard.components.form-fields.url-field type="text" model="dribbble" title="Dribbble" grid="col-span-12 sm:col-span-6"></x-dashboard.components.form-fields.url-field>
                    </div>
                </div>
            </div>
        </div>
        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>
    </section>
</form>
