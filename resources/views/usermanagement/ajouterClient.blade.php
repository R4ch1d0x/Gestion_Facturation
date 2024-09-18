{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
        main{
    background-color: gray;
    background: linear-gradient(to right, #e2e2e2, gray);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    height: 100vh;
}
.container{
    background-color: #fff;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 390px;
}
.container button{
    background-color: #512da8;
    color: #fff;
    font-size: 12px;
    padding: 10px 45px;
    border: 1px solid transparent;
    border-radius: 5px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-top: 10px;
    cursor: pointer;
}
.container input{
    background-color: #eee;
    border: none;
    margin: 8px 0;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 8px;
    width: 100%;
    outline: none;
}
.ul{
    list-style-type: none;
    border-radius: 20px;
    width: 50%;
    font-size: 12px;
    border: 1px solid transparent;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-top: 10px;
}
.ul li{
    margin: 15px;
}

    </style>
</head>
<body>
        <main>
            <h1 class="text-primary">FormAjouter :</h1>
            <div class="container">
                <form action="/saveajouter" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputCode">Id :</label>
                        <input type="id" name="id" class="form-control" id="exampleInputCode" aria-describedby="codeHelp" placeholder="Entre-id" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitre">Type_client :</label>
                        <input type="text" name="type_client" class="form-control" id="exampleInputTitre" placeholder="Entre-Type_client">
                    </div>
                    <div class="form-group">
                        <label  for="exampleMass">Name :</label>
                        <input type="text" name="name" class="form-control" id="exampleInputMass" placeholder="Entre-Name">
                    </div>
                    <div class="form-group">
                        <label  for="exampleMass">Email :<span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" id="exampleInputMass" placeholder="Entre-Email" >
                    </div>
                    <div class="form-group">
                        <label  for="exampleMass">Telephone :</label>
                        <input type="tel" name="telephone" class="form-control" id="exampleInputMass" placeholder="Entre-Telephone">
                    </div>
                    <ul class="ul">
                        <li>@error('id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </li>
                        <li>
                            @error('type_client')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </li>
                        <li>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </li>
                        <li>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </li>
                        <li>
                            @error('telephone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </li>
                    </ul>
                    <button type="submit"  class="btn btn-primary w-100">Ajouter</button>
                </form>
            </div>
        </main>
</body>
</html>
 --}}
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Styled Bootstrap Form</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
     /* Custom styles */
     body {
       background-color: #f8f9fa;
     }
     .form-container {
       width: 50%;
       margin: auto;
       position: absolute;
       top: 50%;
       left: 50%;
       transform: translate(-50% , -50%);
       padding: 20px;
       background-color: #fff;
       border-radius: 10px;
       box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
     }
     .form-title {
       text-align: center;
       margin-bottom: 20px;
     }
     .ul{
    list-style-type: none;
    border-radius: 20px;
    width: 50%;
    font-size: 12px;
    border: 1px solid transparent;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-top: 10px;
}
.ul li{
    margin: 15px;
}
   </style>
 </head>
 <body>
   <div class="container">
     <div class="form-container">
       <h1 class="form-title">Ajouter client:</h1>
       <form action="/saveajouter" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id :</label>
                <input type="id" name="id"  class="form-control" id="id" placeholder="Entre-id" >
            </div>
            <div class="mb-3">
                <label for="code_client" class="form-label">Code_client :</label>
                <input type="code_client" name="code_client"   class="form-control" id="code_client" placeholder="Entre-Code-client">
            </div>
            <div class="mb-3">
                <label for="type_client" class="form-label">Type_client :</label>
                <input type="text" name="type_client"    class="form-control" id="type_client" placeholder="Entre-Type_client" >
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name :</label>
                <input type="text" name="name"   class="form-control" id="name" placeholder="Entre-Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Entre-Email">
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone : </label>
                <input type="tel" name="telephone" class="form-control" id="telephone" placeholder="Entre-Telephone">
            </div>
            <ul class="ul">
                <li>@error('id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>@error('code_client')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>
                    @error('type_client')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>
                    @error('telephone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
            </ul>
            <button type="submit" class="btn btn-primary">Ajouter</button>
       </form>
     </div>
   </div>
   <!-- Bootstrap JS (Optional, if you need JS features) -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 </body>
 </html>
