
<form x-data="{ hint: @entangle('status') }" x-show="!hint" x-cloak>
    <div class="bg-black bg-opacity-60 absolute w-full h-full top-0 left-0 right-0 bottom-0 z-50">
        <div class="absolute top-[71px] right-5 bg-white rounded-lg p-4 cursor-default">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute -top-3 right-4 -z-10" width="32" height="28"><path d="M14.264 3.039a2 2 0 0 1 3.473 0L30.29 25.008A2 2 0 0 1 28.554 28H3.446a2 2 0 0 1-1.736-2.992Z" fill="#fff"/></svg>
            <p class="text-gray-800">
                Click here to view your portfolio
            </p>
        </div>
        <div class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 rounded-lg text-gray-800 min-w-[340px] max-w-[472px] bg-white p-4 cursor-default">
            <h1 class="text-xl text-center font-bold">
                Welcome!
            </h1>
            <hr class="my-4">
            <div class="space-y-4">
                <p class="font-semibold">
                    Welcome to your dashboard!
                </p>
                <p>
                    Here, you can manage your content by creating and updating sections from the navigation at anytime. When you're ready to share, simply change your settings to public and copy your personal URL link to share with others.
                </p>
                <div class="flex justify-end">
                    <button wire:click.prevent="update()" @click="hint = 1;" type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Got It
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
