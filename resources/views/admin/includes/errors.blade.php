@if($errors->any())
    @foreach($errors->all() as $error)
        <ul class="text-danger">
            <li>{{$error}}</li>
        </ul>
    @endforeach
@endif
