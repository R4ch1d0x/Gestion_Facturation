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
        <h1 class="text-primary">Modifier Facture :</h1>
        <div class="container">
            <form action="{{route('facture.update',$f->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputCode">Id :</label>
                    <input type="text" name="id" value="{{$f->id}}"  class="form-control" id="exampleInputCode" aria-describedby="codeHelp" placeholder="Entre-Id"  disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputTitre">Client_id :</label>
                    <input type="text" name="client_id"  value="{{$f->client_id}}" class="form-control" id="exampleInputTitre" placeholder="Entre-client_id" disabled>
                </div>
                <div class="form-group">
                    <label  for="exampleMass">Prix_hors_taxes :</label>
                    <input type="text" name="prix_hors_taxes"  value="{{$f->prix_hors_taxes}}" class="form-control" id="exampleInputMass" placeholder="Entre-prix_hors_taxes">
                </div>
                <div class="form-group">
                    <label  for="exampleMass">Tva :</label>
                    <input type="tva" name="tva"  value="{{$f->tva}}" class="form-control" id="exampleInputMass" placeholder="Entre-tva">
                </div>
                <div class="form-group">
                    <label  for="exampleMass">Status :</label>
                    <input type="text" name="status"  value="{{$f->status}}" class="form-control" id="exampleInputMass" placeholder="Entre-status">
                </div>
                <div class="form-group">
                    <label  for="exampleMass">Due_date :</label>
                    <input type="date" name="due_date"  value="{{$f->due_date}}" class="form-control" id="exampleInputMass" placeholder="Entre-due_date">
                </div>
                <ul class="ul">
                    <li>@error('id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </li>
                    <li>
                        @error('client_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </li>
                    <li>
                        @error('prix_hors_taxes')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </li>
                    <li>
                        @error('tva')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </li>
                    <li>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </li>
                    <li>
                        @error('due_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </li>
                </ul>
                <button type="submit"  class="btn btn-primary w-100">Modifier</button>
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
       <h1 class="form-title">Modifier Facture :</h1>
       <form action="{{route('facture.update',$f->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="id" class="form-label">Id :</label>
                <input type="id" name="id" value="{{$f->id}}" class="form-control" id="id" disabled>
            </div>
            <div class="mb-3">
                <label for="code_client" class="form-label">Code_facture :</label>
                <input type="text" name="code_facture" value="{{$f->code_facture}}"  class="form-control" id="code_facture" disabled>
            </div>
            <div class="mb-3">
                <label for="client_id" class="form-label">Client_id :</label>
                <input type="id" name="client_id"  value="{{$f->client_id}}"  class="form-control" id="client_id" disabled>
            </div>
            <div class="mb-3">
                <label for="prix_hors_taxes" class="form-label">Prix_hors_taxes :</label>
                <input type="text" name="prix_hors_taxes" value="{{$f->prix_hors_taxes}}"  class="form-control" id="prix_hors_taxes" >
            </div>
            <div class="mb-3">
                <label for="tva" class="form-label">Tva :</label>
                <input type="tva" name="tva" value="{{$f->tva}}" class="form-control" id="tva" >
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status : </label>
                <select type="text" name="status" value="{{$f->status}}" class="form-control" id="status" >
                    <option value="payé">payé</option>
                    <option value="en attande">en attande</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="echéance" class="form-label">Echéance : </label>
                <input type="date" name="echéance" value="{{$f->echéance}}" class="form-control" id="echeance" disabled>
            </div>
            <ul class="ul">
                <li>@error('id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>@error('Code_facture')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>

                <li>@error('Client_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>
                    @error('Prix_hors_taxes')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>
                    @error('Tva')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>
                    @error('echéance')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>
                    @error('taxes')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>
                    @error('montant_ht')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
                <li>
                    @error('prix_total')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </li>
            </ul>
            <button type="submit" class="btn btn-primary">Modifier</button>
       </form>
     </div>
   </div>
   <!-- Bootstrap JS (Optional, if you need JS features) -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 </body>
 </html>
