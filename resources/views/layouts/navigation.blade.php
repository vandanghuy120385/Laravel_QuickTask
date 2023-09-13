<div class="navbar-container">
    <div>
        <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between">
                    <div class="flex">

                        <div class="shrink-0 flex items-center">
                            <p>
                                <a href="/user">Naiki</a>
                            </p>
                        </div>
                        <!--  -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('locale',['lang'=>'vi'])">
                                {{ __('VI') }}
                            </x-nav-link>
                            <x-nav-link :href="route('locale',['lang'=>'en'])">
                                {{ __('EN') }}
                            </x-nav-link>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <button type="button" class="cart-icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="file: mt-4 h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
        </svg>
        <span class="cart-item-qty">3</span>
    </button>
</div>