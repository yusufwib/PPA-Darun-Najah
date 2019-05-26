<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		NIS <input type="number" name="nis" required="required"> <br/>
		Pelanggaran <input type="text" name="pelanggaran" required="required"> <br/>
		kategori   <select name="kategori">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            {{-- <option value="audi">Audi</option> --}}
          </select>
           <br/>
		Takzir <textarea name="takzir" required="required"></textarea> <br/>
		Pengurus <input type="text" name="pengurus" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
