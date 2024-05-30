<html>
    <head>
        <title>User Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <div class="container">
            <div class="card m-5">
                <div class="card-header">
                    <h4>User Login</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('auth.login')}}">
                        @csrf
                        <div class="form-group mt-4">
                          <label for="email">Email address*</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}">
                            @error('email')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-4">
                          <label for="password">Password*</label>
                          <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="{{old('password')}}">
                          @error('password')
                                <div class="text-danger">{{$message}}</div>
                          @enderror
                        </div>

                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div>New User Register Please?<a href="{{route('register')}}">Register</a></div>
                </div>
            </div>
        </div>
    </body>
</html>