<div x-data="{ notify: @entangle('toggleWarning') }">

    <x-dashboard.components.notification message="sent"></x-dashboard.components.notification>

    <form action="#" wire:submit.prevent="send" class="grid grid-cols-1 gap-y-6">
        @csrf
        <div>
            <div class="relative">
                <input wire:model="full_name" id="full_name" name="full_name" type="text" class="pt-3 pl-px peer h-10 w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-base font-bold text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none" placeholder="Full Name" aria-invalid="true" aria-describedby="name-error" style="box-shadow: none;" spellcheck="true" required />
                <label for="full_name" class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all font-bold peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                    Full Name
                </label>
            </div>
            @error('full_name') <p class="mt-2 text-sm text-red-500" id="name-error">{{ $message }}</p> @enderror
        </div>
        <div>
            <div class="relative">
                <input wire:model="phone" id="phone" name="phone" type="tel" class="pt-3 pl-px peer h-10 w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-base font-bold text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none" placeholder="8008881234" aria-invalid="true" aria-describedby="phone-error" style="box-shadow: none;" required />
                <label for="phone" class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all font-bold peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                    Phone
                </label>
            </div>
            @error('phone') <p class="mt-2 text-sm text-red-500" id="name-error">{{ $message }}</p> @enderror
        </div>
        <div>
            <div class="relative">
                <input wire:model="email" id="email" name="email" type="email" class="pt-3 pl-px peer h-10 w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-base font-bold text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none" placeholder="john@doe.com" aria-invalid="true" aria-describedby="email-error" style="box-shadow: none;" required />
                <label for="email" class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all font-bold peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                    Email
                </label>
            </div>
            @error('email') <p class="mt-2 text-sm text-red-500" id="name-error">{{ $message }}</p> @enderror
        </div>
        <div>
            <div class="relative">
                <textarea wire:model="message" rows="4" name="message" id="message" class="pt-3 pl-px peer w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-base font-bold text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none" placeholder="Message" aria-invalid="true" aria-describedby="message-error" style="box-shadow: none;" spellcheck="true" required></textarea>
                <label for="message" class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all font-bold peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                    Message
                </label>
            </div>
            @error('message') <p class="mt-2 text-sm text-red-500" id="name-error">{{ $message }}</p> @enderror
        </div>
        <div class="pt-12">
            <button aria-label="send email" type="submit" class="inline-flex justify-between items-center px-6 py-2 border border-transparent shadow-sm text-base font-black text-white bg-[#4046FF] sm:hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 max-w-[200px] w-full tracking-widest transition-colors">
                LETS TALK
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
            </button>
        </div>
    </form>
</div>
