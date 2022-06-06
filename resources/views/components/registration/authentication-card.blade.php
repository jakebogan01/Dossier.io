<div class="registration min-h-full flex bg-gradient-to-r from-[#600F93] to-[#120185]">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <div>
                    <div class="absolute top-16">
                        <div class="w-[2.8125rem] cursor-default">
                            <div
                                class="bg-white h-[0.1875rem]"
                                data-aos="fade-right"></div>
                            <div
                                class="bg-white h-[0.1875rem] mt-1.5 w-9 transition-transform duration-300"
                                data-aos="fade-right"
                                data-aos-delay="50"></div>
                            <div
                                class="bg-white h-[0.1875rem] mt-1.5 w-[1.6875rem] transition-transform duration-300"
                                data-aos="fade-right"
                                data-aos-delay="100"></div>
                            <div
                                class="bg-white h-[0.1875rem] mt-1.5 w-4 transition-transform duration-300"
                                data-aos="fade-right"
                                data-aos-delay="150"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <div class="mt-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
{{--        <img--}}
{{--            class="absolute inset-0 h-full w-full object-cover"--}}
{{--            src="/images/registration/register-background.png"--}}
{{--            alt="Abstract Decoration"--}}
{{--            loading="eager">--}}
        <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_xwgexn6f.json"  background="#4C46D6"  speed="0.2" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
    </div>
</div>
