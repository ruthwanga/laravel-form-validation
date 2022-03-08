<html>
    <head>
        <title>Form</title>
</head>
<body>

   <form action="usercontroller"method="POST">
   @csrf
  
   <input type="text" name="user" placeholder="User">
   @error('user')
   <div>{{$message}}</div>
   @enderror
   <br></br>
   
   <input tpe="text" name="email" placeholder="Email">
   @error('email')
   <div>{{$message}}</div>
   @enderror
   <br></br>
   
   <button type="submit">Submit</button>

   </form>
</body>
</html>
