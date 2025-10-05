<div class="bg-pink-200 p-4 text-left flex justify-between items-center">
    <div>
        <a href="{{ route('user.index') }}" class="text-white font-bold bg-pink-500 px-4 py-2 rounded-md hover:bg-pink-600 transition duration-300">Daftar User</a>
        <a href="{{ route('user.create') }}" class="text-white font-bold bg-pink-500 px-4 py-2 rounded-md hover:bg-pink-600 transition duration-300">Tambah User</a>
    </div>
    <div>
        <img src="{{asset('img/oryza.png')}}" alt="Profile Photo" class="h-10 w-10 rounded-full inline-block ml-4">
    </div>

</div>