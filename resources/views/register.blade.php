<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    {{-- <link rel="stylesheet" href="{{ asset('app.css') }}"> --}}
    <style>
       
        input[type=text], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        input[type=email], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        input[type=password], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        
        input[type=submit] {
          width: 100%;
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        input[type=submit]:hover {
          background-color: #45a049;
        }
        
        div {
          border-radius: 5px;
          padding: 20px;
        }

        h1 {
        text-align: center;
        }

        .center {
        width: 350px;
        height: 350px;
        background-color: #f2f2f2;
        margin: auto;
        }
        
    </style>
</head>
<body>
    <h1>Register</h1>
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="center">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name"  required>
            <br><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email"  required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <br><br>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
            <br><br>
            <input type="submit" value="Register" >
        </div>
        
    </form>
</body>
</html>
