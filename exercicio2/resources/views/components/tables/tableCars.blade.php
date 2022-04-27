

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Brand Name</th>
        <th scope="col">Registration</th>
        <th scope="col">Year of Manufacture</th>
        <th scope="col">Color</th>
        <th scope="col">Owner Name</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    @foreach($cars as $car)
        <tr>
            <th scope="row">{{$car->id}}</th>
            <td>{{$car->brand->brandName}}</td>
            <td>{{$car->registration}}</td>
            <td>{{$car->year_of_manufacture}}</td>
            <td>{{$car->color}}</td>
            <td>{{$car->owner->name}}</td>
            <td>{{$car->created_at}}</td>
            <td>{{$car->updated_at}}</td>
            <td>
                <a href="{{url('cars/'.$car->id)}}">Show</a>
            </td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>
