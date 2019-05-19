<form class="form" method="post" action="" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <p>Nama : <input type="text" name="name" value="{{ $customer->name}}"></p>
        <p>Email : <input type="email" name="email" value="{{ $customer->email}}"></p>
        <p>Pekerjaan : <input type="text" name="occupation" value="{{ $customer->occupation}}"></p>
        <input type="hidden" name="id" value="{{ $customer->id }}">
    </div>
    <div class="form-group">
        <button type="submit" name="comment" class="btn btn-primary">Update</button>
    </div>
</form>