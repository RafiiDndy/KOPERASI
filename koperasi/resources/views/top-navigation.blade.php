<div class="justify-center w-full mx-auto bg-gray-100 bg-top-nav"> 
    <div x-data="{ open: false }" class="flex flex-col w-full px-8 py-2 mx-auto md:px-12 md:items-center md:justify-between md:flex-row lg:px-12 max-w-7xl">
        <div class="flex flex-row items-center justify-between text-white">
        <a class="button-top-nav" href="{{ route('dashboard') }}" data-text="Awesome">
          <span class="actual-text">&nbsp;Koperasi&nbsp;</span>
          <span aria-hidden="true" class="hover-text">&nbsp;Koperasi&nbsp;</span>
        </a>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col items-center flex-grow hidden gap-3 p-4 px-5 text-sm font-medium text-gray-300 md:px-0 md:pb-0 md:flex md:justify-start md:flex-row lg:p-0 md:mt-0">
            <a class="hover:text-white focus:outline-none focus:text-white md:ml-auto" href="#_">Features
            </a>
            <a class="hover:text-white focus:outline-none focus:text-white mr-4" href="#_">About
            </a>
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <button class="Btn-logout">
                    <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                    <div class="text">Logout</div>
                </button>
            </form>
        </nav>
    </div>
</div>
            