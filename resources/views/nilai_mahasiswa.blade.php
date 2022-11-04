<h3 align="center">Daftar Nilai Siswa</h3>
<table align="center" border="1" cellpadding="20">
    <thead>
        <tr bgcolor='yellow'>
            @foreach ($judul as $jdl)
                <th>{{ $jdl }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $sis)
            @php
                $ket = $sis['nilai'] >= 60 ? 'Lulus' : 'Gagal';
                $warna = $sis['nilai'] >= 60 ? 'green' : 'red';
            @endphp
            <tr bgcolor="{{$warna}}">
                <td>{{$no++}}</td>
                <td>{{$sis['nama']}}</td>
                <td>{{$sis['nilai']}}</td>
                <td>{{$ket}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<footer style="text-align: center; font-weight: bold; ">
    Created by Hannn
</footer>