

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Country Name</th>
        <th scope="col">Owners</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    @foreach($countries as $country)
        <tr>
            <th scope="row">{{$country->id}}</th>
            <td>{{$country->name}}</td>
            <td>
                @foreach($country->owner as $owner)
                    <p>{{$owner->name}}</p>
                @endforeach
            </td>
            <td>{{$country->created_at}}</td>
            <td>{{$country->updated_at}}</td>
            <td>
                <a href="{{url('countries/'.$country->id)}}">Show</a>
            </td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>
