<h1>Users Edit page</h1>
<p>This is the edit page with id {{ $id }}</p>

<div class="row">
    <div class="col-6">
        <form action="{{ url('users, $id') }}" method="post">
            @csrf 
            @method('PUT')
            <div class="form-group'>
                <label for="fullname" class="form-label">Fullname</label>|
                <input type="text" class="ffullname" id="fullname"  name="form-control" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div> 

<form action="{{ url('users', $id) }}" method="post">
            @csrf
            @method('DELETE')
        <div class="form-group">
             <button class="btn btn-primary" type="Sbmit">Submit</button>
        </div>
</form>
