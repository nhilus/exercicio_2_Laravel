

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Brand Name</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    @foreach($brands as $brand)
        <tr>
            <th scope="row">{{$brand->id}}</th>
            <td>{{$brand->brandName}}</td>
            <td>{{$brand->created_at}}</td>
            <td>{{$brand->updated_at}}</td>
            <td>
                <a href="{{url('brands/'.$brand->id)}}">Show</a>
            </td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>
