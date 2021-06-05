<form action="{{ route('guru0121.store') }}" method="POST">
			@csrf
			<label for="nama">nama</label>
			<input type="text" id="nama" name="nama" placeholder="nama..">

			<label for="mengajar">mengajar</label>
			<input type="text" id="mengajar" name="mengajar" placeholder="mengajar..">

			<button type="submit" value="Submit">Simpan</button>
		</form>