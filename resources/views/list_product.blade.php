<html>
<div>
    <h1>EXCLUSIVE COCONUT</h1>
    <p>We are working to build a future of shared success.</p>
</div>
<div>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Minimum Order</th>
                <th>Production Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dataku)
            <tr>
                <td>{{ $dataku['id']}}</td>
                <td>{{ $dataku['nama']}}</td>
                <td>{{ $dataku['minimum order']}}</td>
                <td>{{ $dataku['production time']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
</html>
