
@section('main')
    <div class="login-box">
        <h2>Sign-in</h2>
       
        <form action="{{ route('user.store') }}"method="post">
            @csrf
            <div class="user-box">
                <input type="text" name="name" id="name" required>
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" id="password" required>
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="text" name="email" id="email" required>
                <label>Email</label>
            </div>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input type="submit" class="loginbtn" value="Sign-in" > </imput>
                </a>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  </form>
</div>
