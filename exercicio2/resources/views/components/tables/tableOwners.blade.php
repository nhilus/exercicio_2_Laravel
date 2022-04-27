

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Birth Date</th>
        <th scope="col">Country</th>
        <th scope="col">Wallet</th>
        <th scope="col">Cars</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    @foreach($owners as $owner)
        <tr>
            <th scope="row">{{$owner->id}}</th>
            <td>{{$owner->name}}</td>
            <td>{{$owner->birth_date}}</td>
            <td>{{$owner->country->name}}</td>
            <td>{{$owner->wallet_money}}</td>

            <td>
                @foreach($owner-> cars as $car)
                    <p>{{$car->registration}}</p>
                @endforeach
            </td>
            <td>{{$owner->created_at}}</td>
            <td>{{$owner->updated_at}}</td>
            <td>
                <a href="{{url('owners/'.$owner->id)}}">Show</a>
            </td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>
