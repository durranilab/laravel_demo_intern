<h1>Customers</h1>

@foreach($data as $item)

    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->gender}}</td>
        <td>{{$item->dob}}</td>
    </tr>

    <hr>

@endforeach
