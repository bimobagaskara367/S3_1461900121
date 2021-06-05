<form action="{{ route('guru.update', $guru->id) }}" method="POST">
			@csrf
			@method('patch')
			<label for="nama">nama</label>
			<input type="text" id="nama" name="nama" value="{{ $guru->nama}}">

			<label for="mengajar">mengajar </label>
			<input type="text" id="mengajar" name="mengajar" value="{{ $guru->mengajar}}">

			<button type="submit" value="Submit">Simpan</button>
		</form>