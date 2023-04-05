<div class="fixed inset-0 z-10 overflow-y-auto p-4 sm:p-6 md:p-20" role="dialog" aria-modal="true">
  <!--
    Background overlay, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
  <div class="fixed inset-0 bg-gray-500 bg-opacity-25 transition-opacity" aria-hidden="true"></div>

  <!--
    Command palette, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->
  <div class="mx-auto max-w-xl transform divide-y divide-gray-100 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all">
    <div class="relative">
      <!-- Heroicon name: solid/search -->
      <svg class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
      </svg>
      <input type="text" class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-gray-800 placeholder-gray-400 focus:ring-0 sm:text-sm" placeholder="Search..." role="combobox" aria-expanded="false" aria-controls="options">
    </div>

    <!-- Results, show/hide based on command palette state -->
    <ul class="max-h-72 scroll-py-2 overflow-y-auto py-2 text-sm text-gray-800" id="options" role="listbox">
      <!-- Active: "bg-indigo-600 text-white" -->
      <li class="cursor-default select-none px-4 py-2" id="option-1" role="option" tabindex="-1">Leslie Alexander</li>
      <li class="cursor-default select-none px-4 py-2" id="option-2" role="option" tabindex="-1">Michael Foster</li>
      <li class="cursor-default select-none px-4 py-2" id="option-3" role="option" tabindex="-1">Dries Vincent</li>
      <li class="cursor-default select-none px-4 py-2" id="option-4" role="option" tabindex="-1">Lindsay Walton</li>
      <li class="cursor-default select-none px-4 py-2" id="option-5" role="option" tabindex="-1">Courtney Henry</li>
    </ul>

    <!-- Empty state, show/hide based on command palette state -->
    <p class="p-4 text-sm text-gray-500">No people found.</p>
  </div>
</div>