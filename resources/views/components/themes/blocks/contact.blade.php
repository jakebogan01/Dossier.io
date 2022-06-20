@aware(['user'])

@if ($user->contact)
    <section
        id="contact"
        {{ $attributes->merge(['class' => 'anchor flex relative bg-[#1C1F2D] overflow-hidden bg-no-repeat bg-left-bottom bg-auto group']) }}>
        <div class="relative w-full">
            <div class="absolute inset-0">
                <div class="absolute inset-y-0 left-0 w-1/2"></div>
            </div>
            <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5 z-10">
                <aside
                    class="bg-[#242839] py-16 px-[25px] lg:col-span-2 lg:px-[85px] lg:py-24 xl:pr-12"
                    data-aos="fade-right"
                    data-aos-duration="700">
                    <div class="max-w-lg mx-auto text-[#B1B7D6] font-bold text-base leading-loose">
                        <h2
                            class="text-white sm:text-gray-400 text-[30px] sm:text-[2.8rem] font-black tracking-wider leading-none sm:transition-all sm:group-hover:text-white"
                            data-aos="fade-right"
                            data-aos-delay="50">
                            LET'S TALK
                        </h2>
                        <p
                            class="mt-3 leading-loose"
                            data-aos="fade-right"
                            data-aos-delay="100">
                            {{ $user->contact->conclusion ?: 'Missing conclusion' }}
                        </p>
                        <dl class="mt-8 text-base font-bold text-[#6F7490]">
                            <div
                                class="mt-6"
                                data-aos="fade-right"
                                data-aos-delay="150">
                                <dt class="sr-only">
                                    Phone number
                                </dt>
                                <dd class="flex">
                                    <svg class="flex-shrink-0 h-6 w-6 text-yellow-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                    <span class="ml-3">
                                        <a
                                            href="tel:+442071234567"
                                            target="_blank/"
                                            class="sm:hover:text-gray-400">
                                            {{ $user->contact->phone ?: 'Missing phone' }}
                                        </a>
                                    </span>
                                </dd>
                            </div>
                            @if($user->profile->portfolio_email)
                                <div
                                    class="mt-3"
                                    data-aos="fade-right"
                                    data-aos-delay="200">
                                    <dt class="sr-only">
                                        Email
                                    </dt>
                                    <dd class="flex">
                                        <svg class="flex-shrink-0 h-6 w-6 text-yellow-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                        <span class="ml-3">
                                            <a
                                                href="mailto:{{ $user->profile->portfolio_email }}"
                                                target="_blank/"
                                                class="sm:hover:text-gray-400">
                                                {{ $user->profile->portfolio_email ?: 'Missing email' }}
                                            </a>
                                        </span>
                                    </dd>
                                </div>
                            @endif
                            <div class="flex mt-10 space-x-4">
                                <x-themes.blocks.components.contact-social-item animateType="fade-right" animateDelay="550" :link="$user->contact->links['facebook']">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><g transform="translate(-1443 -1983)"><circle cx="15" cy="15" r="15" transform="translate(1443 1983)" fill="#e2e7ff"/><path d="M2.474-3.531V-14.344l-.892-.184a1.843,1.843,0,0,1-.741-.328.786.786,0,0,1-.282-.656v-1.6H2.474v-.774A5.7,5.7,0,0,1,2.848-20a4.471,4.471,0,0,1,1.076-1.614A4.843,4.843,0,0,1,5.636-22.65a6.692,6.692,0,0,1,2.3-.367,6.619,6.619,0,0,1,.919.059,6.506,6.506,0,0,1,.879.19l-.079,1.981a.7.7,0,0,1-.1.348.7.7,0,0,1-.243.223,1.2,1.2,0,0,1-.321.125,1.513,1.513,0,0,1-.341.039,3.964,3.964,0,0,0-.958.1,1.535,1.535,0,0,0-.7.374,1.682,1.682,0,0,0-.426.709,3.609,3.609,0,0,0-.144,1.109v.643H9.6v2.782H6.542v10.8Z" transform="translate(1453.92 2011.929)" fill="#1c1f2d"/></g></svg>
                                </x-themes.blocks.components.contact-social-item>

                                <x-themes.blocks.components.contact-social-item animateType="fade-right" animateDelay="500" :link="$user->contact->links['github']">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><g transform="translate(-1543 -1984)"><circle cx="15" cy="15" r="15" transform="translate(1543 1984)" fill="#e2e7ff"/><path d="M8.447,15.488C4.556,16.656,4.556,13.543,3,13.154m10.895,4.669V14.811a2.623,2.623,0,0,0-.732-2.031c2.444-.272,5.012-1.2,5.012-5.447a4.233,4.233,0,0,0-1.167-2.918,3.946,3.946,0,0,0-.071-2.934s-.918-.272-3.043,1.152a10.412,10.412,0,0,0-5.447,0C6.323,1.208,5.4,1.481,5.4,1.481a3.946,3.946,0,0,0-.07,2.934A4.233,4.233,0,0,0,4.167,7.356c0,4.218,2.568,5.144,5.012,5.447a2.623,2.623,0,0,0-.732,2.008v3.012" transform="translate(1547.413 1989.359)" fill="none" stroke="#1d202e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>
                                </x-themes.blocks.components.contact-social-item>

                                <x-themes.blocks.components.contact-social-item animateType="fade-right" animateDelay="450" :link="$user->contact->links['linkedin']">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><g transform="translate(-1496 -1983)"><circle cx="15" cy="15" r="15" transform="translate(1496 1983)" fill="#e2e7ff"/><path d="M4.563-13.933v10.8H1.333v-10.8ZM4.9-16.892a1.707,1.707,0,0,1-.156.724,1.906,1.906,0,0,1-.427.594,2.091,2.091,0,0,1-.63.406,1.956,1.956,0,0,1-.766.151,1.818,1.818,0,0,1-.74-.151,2.079,2.079,0,0,1-.609-.406,1.875,1.875,0,0,1-.417-.594A1.757,1.757,0,0,1,1-16.892a1.818,1.818,0,0,1,.151-.74,1.919,1.919,0,0,1,.417-.6,1.951,1.951,0,0,1,.609-.406,1.874,1.874,0,0,1,.74-.146,2.017,2.017,0,0,1,.766.146,1.966,1.966,0,0,1,.63.406,1.95,1.95,0,0,1,.427.6A1.766,1.766,0,0,1,4.9-16.892ZM9.8-12.767a7.845,7.845,0,0,1,.646-.542,3.782,3.782,0,0,1,.714-.422A4.235,4.235,0,0,1,11.984-14a4.416,4.416,0,0,1,.964-.1,3.782,3.782,0,0,1,1.568.307,3.253,3.253,0,0,1,1.151.854,3.687,3.687,0,0,1,.708,1.3A5.4,5.4,0,0,1,16.615-10v6.865H13.385V-10a1.889,1.889,0,0,0-.365-1.234,1.309,1.309,0,0,0-1.073-.443,2.257,2.257,0,0,0-.995.224,4,4,0,0,0-.9.609v7.708H6.823v-10.8h2a.759.759,0,0,1,.792.542Z" transform="translate(1502.5 2009.465)" fill="#1c1f2d"/></g></svg>
                                </x-themes.blocks.components.contact-social-item>

                                <x-themes.blocks.components.contact-social-item animateType="fade-right" animateDelay="400" :link="$user->contact->links['dribbble']">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><g transform="translate(-1590 -1990)"><circle cx="15" cy="15" r="15" transform="translate(1590 1990)" fill="#e2e7ff"/><path d="M10.385.563a9.823,9.823,0,1,0,9.823,9.823A9.834,9.834,0,0,0,10.385.563Zm6.494,4.53a8.35,8.35,0,0,1,1.895,5.226,19.607,19.607,0,0,0-5.842-.27C12.7,9.493,12.489,9,12.195,8.4A11.176,11.176,0,0,0,16.88,5.092Zm-.933-.97a9.473,9.473,0,0,1-4.4,3.031A44.784,44.784,0,0,0,8.419,2.241,8.368,8.368,0,0,1,15.947,4.122ZM6.818,2.805A53.534,53.534,0,0,1,9.929,7.657,31.3,31.3,0,0,1,2.172,8.68,8.421,8.421,0,0,1,6.818,2.805ZM2,10.4c0-.086,0-.171,0-.256a30.949,30.949,0,0,0,8.623-1.194c.24.47.47.947.68,1.424a13,13,0,0,0-7.15,5.636A8.356,8.356,0,0,1,2,10.4Zm3.24,6.619a11.8,11.8,0,0,1,6.637-5.258,34.875,34.875,0,0,1,1.79,6.362,8.373,8.373,0,0,1-8.427-1.1Zm9.838.336a36.213,36.213,0,0,0-1.63-5.982,12.315,12.315,0,0,1,5.226.359A8.4,8.4,0,0,1,15.073,17.353Z" transform="translate(1594.615 1994.615)" fill="#1d1f2d"/></g></svg>
                                </x-themes.blocks.components.contact-social-item>

                                <x-themes.blocks.components.contact-social-item animateType="fade-right" animateDelay="350" :link="$user->contact->links['dribbble']">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><g transform="translate(-1664 -1990)"><circle cx="15" cy="15" r="15" transform="translate(1664 1990)" fill="#e2e7ff"/><path d="M9.365,6.8a4.8,4.8,0,1,0,4.8,4.8A4.795,4.795,0,0,0,9.365,6.8Zm0,7.925A3.122,3.122,0,1,1,12.487,11.6a3.128,3.128,0,0,1-3.122,3.122ZM15.484,6.6a1.12,1.12,0,1,1-1.12-1.12A1.118,1.118,0,0,1,15.484,6.6Zm3.181,1.137a5.544,5.544,0,0,0-1.513-3.925A5.58,5.58,0,0,0,13.227,2.3c-1.547-.088-6.182-.088-7.728,0A5.572,5.572,0,0,0,1.574,3.812,5.562,5.562,0,0,0,.061,7.737c-.088,1.547-.088,6.182,0,7.728a5.544,5.544,0,0,0,1.513,3.925A5.587,5.587,0,0,0,5.5,20.9c1.547.088,6.182.088,7.728,0a5.544,5.544,0,0,0,3.925-1.513,5.58,5.58,0,0,0,1.513-3.925c.088-1.547.088-6.178,0-7.724Zm-2,9.384a3.161,3.161,0,0,1-1.781,1.781c-1.233.489-4.159.376-5.522.376s-4.293.109-5.522-.376a3.161,3.161,0,0,1-1.781-1.781c-.489-1.233-.376-4.159-.376-5.522s-.109-4.293.376-5.522A3.161,3.161,0,0,1,3.843,4.3C5.076,3.812,8,3.925,9.365,3.925s4.293-.109,5.522.376a3.161,3.161,0,0,1,1.781,1.781c.489,1.233.376,4.159.376,5.522S17.156,15.9,16.667,17.125Z" transform="translate(1669.637 1993.396)" fill="#1c1f2d"/></g></svg>
                                </x-themes.blocks.components.contact-social-item>
                            </div>
                        </dl>
                    </div>
                </aside>
                <div class="py-16 px-[25px] lg:col-span-3 lg:py-24 lg:px-[85px] xl:pl-12">
                    <div class="max-w-lg mx-auto lg:max-w-none">
                        <form
                            action="#"
                            method="POST"
                            class="grid grid-cols-1 gap-y-6">
                            @csrf
                            <div
                                data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="relative">
                                    <input
                                        id="name"
                                        name="name"
                                        type="text"
                                        class="pt-3 pl-px peer h-10 w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-base font-bold text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none"
                                        placeholder="Full Name"
                                        aria-invalid="true"
                                        aria-describedby="name-error"
                                        style="box-shadow: none;"
                                        spellcheck="true"
                                        required />
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                                    </div>
                                    <label
                                        for="name"
                                        class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all font-bold peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                        Full Name
                                    </label>
                                </div>
                                <p
                                    class="mt-2 text-sm text-red-600"
                                    id="name-error">
                                    Your password must be less than 4 characters.
                                </p>
                            </div>
                            <div
                                data-aos="fade-up"
                                data-aos-delay="250">
                                <div class="relative">
                                    <input
                                        id="phone"
                                        name="phone"
                                        type="tel"
                                        class="pt-3 pl-px peer h-10 w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-base font-bold text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none"
                                        placeholder="8008881234"
                                        aria-invalid="true"
                                        aria-describedby="phone-error"
                                        style="box-shadow: none;"
                                        required />
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                                    </div>
                                    <label
                                        for="phone"
                                        class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all font-bold peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                        Phone
                                    </label>
                                </div>
                                <p
                                    class="mt-2 text-sm text-red-600"
                                    id="phone-error">
                                    Your password must be less than 4 characters.
                                </p>
                            </div>
                            <div
                                data-aos="fade-up"
                                data-aos-delay="300">
                                <div class="relative">
                                    <input
                                        id="email"
                                        name="email"
                                        type="email"
                                        class="pt-3 pl-px peer h-10 w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-base font-bold text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none"
                                        placeholder="john@doe.com"
                                        aria-invalid="true"
                                        aria-describedby="email-error"
                                        style="box-shadow: none;"
                                        required />
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                                    </div>
                                    <label
                                        for="email"
                                        class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all font-bold peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                        Email
                                    </label>
                                </div>
                                <p
                                    class="mt-2 text-sm text-red-600"
                                   id="email-error">
                                    Your password must be less than 4 characters.
                                </p>
                            </div>
                            <div
                                data-aos="fade-up"
                                data-aos-delay="350">
                                <div class="relative">
                                    <textarea
                                        rows="4"
                                        name="message"
                                        id="message"
                                        class="pt-3 pl-px peer w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-base font-bold text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none"
                                        placeholder="Message"
                                        aria-invalid="true"
                                        aria-describedby="message-error"
                                        style="box-shadow: none;"
                                        spellcheck="true"
                                        required></textarea>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                                    </div>
                                    <label
                                        for="message"
                                        class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all font-bold peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                        Message
                                    </label>
                                </div>
                                <p
                                    class="mt-2 text-sm text-red-600"
                                    id="message-error">
                                    Your password must be less than 4 characters.
                                </p>
                            </div>
                            <div
                                class="pt-12"
                                data-aos="fade-up"
                                data-aos-delay="400"
                                data-aos-anchor-placement="top-bottom">
                                <button
                                    aria-label="send email"
                                    type="submit"
                                    class="inline-flex justify-between items-center px-6 py-2 border border-transparent shadow-sm text-base font-black text-white bg-[#4046FF] sm:hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 max-w-[200px] w-full tracking-widest transition-colors">
                                    LETS TALK
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
