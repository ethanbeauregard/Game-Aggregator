@extends('layouts.app')

@section('content')
  <div class="container mx-auto px-4">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
    <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800">
      <div class="game mt-8">
        <div class="relative inline-block">
          <a href="#">
            <img src="assets/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
          </div>
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy VII Remake</a>
        <div class="text-gray-400 mt-1">Playstation 4</div>
      </div>

      <div class="game mt-8">
        <div class="relative inline-block">
          <a href="#">
            <img src="assets/animal-crossing.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
          </div>
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Animal Crossing: New Horizons</a>
        <div class="text-gray-400 mt-1">Nintendo Switch</div>
      </div>

      <div class="game mt-8">
        <div class="relative inline-block">
          <a href="#">
            <img src="assets/doom.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
          </div>
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Doom Eternal</a>
        <div class="text-gray-400 mt-1">Playstation 4, PC</div>
      </div>

      <div class="game mt-8">
        <div class="relative inline-block">
          <a href="#">
            <img src="assets/alyx.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
          </div>
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Half Life: Alyx</a>
        <div class="text-gray-400 mt-1">PC</div>
      </div>

      <div class="game mt-8">
        <div class="relative inline-block">
          <a href="#">
            <img src="assets/luigi.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
          </div>
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Luigi's Mansion 3</a>
        <div class="text-gray-400 mt-1">Nintendo Switch</div>
      </div>

      <div class="game mt-8">
        <div class="relative inline-block">
          <a href="#">
            <img src="assets/resident.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
          </div>
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Resident Evil 3</a>
        <div class="text-gray-400 mt-1">Playstation 4, PC, Xbox One X</div>
      </div>

      <div class="game mt-8">
        <div class="relative inline-block">
          <a href="#">
            <img src="assets/resident.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
          </div>
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Resident Evil 3</a>
        <div class="text-gray-400 mt-1">Playstation 4, PC, Xbox One X</div>
      </div>

      <div class="game mt-8">
        <div class="relative inline-block">
          <a href="#">
            <img src="assets/luigi.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
          </div>
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Luigi's Mansion 3</a>
        <div class="text-gray-400 mt-1">Nintendo Switch</div>
      </div>

      <div class="game mt-8">
        <div class="relative inline-block">
          <a href="#">
            <img src="assets/alyx.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
          </div>
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Half Life: Alyx</a>
        <div class="text-gray-400 mt-1">PC</div>
      </div>

      <div class="game mt-8">
        <div class="relative inline-block">
          <a href="#">
            <img src="assets/doom.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
          </div>
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Doom Eternal</a>
        <div class="text-gray-400 mt-1">Playstation 4, PC</div>
      </div>

      <div class="game mt-8">
        <div class="relative inline-block">
          <a href="#">
            <img src="assets/animal-crossing.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
          </div>
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Animal Crossing: New Horizons</a>
        <div class="text-gray-400 mt-1">Nintendo Switch</div>
      </div>

      <div class="game mt-8">
        <div class="relative inline-block">
          <a href="#">
            <img src="assets/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
          </div>
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy VII Remake</a>
        <div class="text-gray-400 mt-1">Playstation 4</div>
      </div>

    </div>
  </div>
@endsection