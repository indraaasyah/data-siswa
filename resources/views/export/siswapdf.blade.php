<table class="table" style="border:1px solid #ddd">
    <thead>
        <tr>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>AGAMA</th>
            <th>NILAI RATA-RATA</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $s)
        <tr>
            <th>{{$s->nama_lengkap()}}</th>
            <th>{{$s->jenis_kelamin}}</th>
            <th>{{$s->agama}}</th>
            <th>{{$s->rataRataNilai()}}</th>
        </tr>
        @endforeach
    </tbody>
</table>