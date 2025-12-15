<header
    class="sticky top-0 z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-xl border-b border-gray-200 dark:border-white/10 py-4 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-8">
        <nav class="flex justify-between items-center">
            <a href="index.php"
                class="flex items-center gap-4 text-xl font-bold text-gray-900 dark:text-white transition-transform duration-150 hover:scale-105">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="text-indigo-500">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span>StressPredict</span>
            </a>
            <ul class="hidden md:flex list-none gap-8 items-center">
                <li><a href="index.php"
                        class="text-gray-600 dark:text-gray-300 font-medium px-6 py-2 rounded-lg transition-all duration-150 hover:text-gray-900 dark:hover:text-white hover:bg-indigo-500/10 relative group">Home<span
                            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-4/5 h-0.5 bg-gradient-to-r from-indigo-500 to-purple-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span></a>
                </li>
                <li><a href="models.php"
                        class="text-gray-600 dark:text-gray-300 font-medium px-6 py-2 rounded-lg transition-all duration-150 hover:text-gray-900 dark:hover:text-white hover:bg-indigo-500/10 relative group">Model
                        ML<span
                            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-4/5 h-0.5 bg-gradient-to-r from-indigo-500 to-purple-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span></a>
                </li>
                <li><a href="input_manual.php"
                        class="text-gray-600 dark:text-gray-300 font-medium px-6 py-2 rounded-lg transition-all duration-150 hover:text-gray-900 dark:hover:text-white hover:bg-indigo-500/10 relative group">Mulai
                        Tes<span
                            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-4/5 h-0.5 bg-gradient-to-r from-indigo-500 to-purple-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span></a>
                </li>
                <li><a href="history.php"
                        class="text-gray-600 dark:text-gray-300 font-medium px-6 py-2 rounded-lg transition-all duration-150 hover:text-gray-900 dark:hover:text-white hover:bg-indigo-500/10 relative group">History<span
                            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-4/5 h-0.5 bg-gradient-to-r from-indigo-500 to-purple-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span></a>
                </li>
                <li>
                    <button class="p-2 rounded-lg bg-indigo-500/10 hover:bg-indigo-500/20 transition-colors"
                        id="themeToggle" aria-label="Toggle theme">
                        <svg class="sun-icon w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                        <svg class="moon-icon w-5 h-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </button>
                </li>
            </ul>
            <button class="md:hidden flex flex-col gap-1 bg-transparent border-0 cursor-pointer p-2"
                id="mobileMenuToggle">
                <span class="w-6 h-0.5 bg-white transition-all duration-150"></span>
                <span class="w-6 h-0.5 bg-white transition-all duration-150"></span>
                <span class="w-6 h-0.5 bg-white transition-all duration-150"></span>
            </button>
        </nav>
    </div>
</header>