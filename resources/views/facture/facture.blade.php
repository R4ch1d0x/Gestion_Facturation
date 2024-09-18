@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    {{-- <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script --}}


		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style1.css">


        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
        <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" integrity="sha512-oaT4uVdyleJGVHZqklOx2Bb8WhOTBW3iCXRtgk3+YutYmFx0jSs97UR3/+r1vh1Isyb3GOGjFonLbS6LFiiEVA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" integrity="sha512-guWTt6syHB4T9gdPdw8W1iQUGqqricRt5VRjnjgMPpOhUhwOsxmXpk2SImqfcPgsiroK00z/loICebflVeJvqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" integrity="sha512-vv3EN6dNaQeEWDcxrKPFYSFba/kgm//IUnvLPMPadaUf5+ylZyx4cKxuc4HdBf0PPAlM7560DV63ZcolRJFPqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>





    <style>
        .form-control{
            text-color: black;
        }
        .form-container{
            margin-left: 0;
            margin-bottom: 20px;
        }
        .form-container input{
            boreder : 2px solid black;
            padding: 10px;
            margin: 0%;
            width: 50%;
            border-radius: 10px;
        }
        .form-container {
            padding: 20px;
            border: 1px solid black;
            border-radius: 5px;
            width: 50%;
        }

        /* Style for form labels */
        .form-label {
        display: block;
        margin-bottom: 5px;
        }

        /* Style for form inputs */
        input[type="date"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 5px;
        }

        /* Style for the search button */
        form button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 8px 12px;
        cursor: pointer;
        border-radius: 5px;
        margin-bottom: 12px;
        }
        .btn-primary:hover {
        background-color: #0056b3;
        }

        .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        justify-content: center;
        font-family: Arial, sans-serif;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination li a {
        padding: 8px 12px;
        text-decoration: none;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 3px;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    }

    .pagination li a:hover {
        background-color: #f1f1f1;
        color: #333;
        border-color: #ccc;
    }

    .pagination li.active a {
        background-color: #333;
        color: white;
        border-color: #333;
    }
    





    </style>

</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="postion-fixed" >
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a href="#" class="logo">MM <span>Marsa Maroc</span></a></h1>
                <ul id="ll" class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="/home"><span class="fa fa-home mr-3"></span> Home</a>
                    </li>
                    <li>
                        <a href="/client"><span class="fa fa-users mr-3"></span> Client</a>
                    </li>
                    <li>
                        <a href="/facture"><span class="fa fa-briefcase mr-3"></span> Facture</a>
                    </li>
                    <li>
                        <a href=""><span class="fa fa-cogs mr-3"></span> Users Management</a>
	                </li>
                </ul> 
            </div>
        </nav>
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <main>
            <div class="date_table">
            <h1>Les Factures :</h1>
            <div class="row">
                <!-- Search Code Facture Form -->
                <div class="col-md-6 form-container">
                    <form action="{{ route('findFacture') }}" method="get">
                        <h4>Recherche par Code Facture :</h4>
                        <div id="inputsearch" class="d-flex">
                            <input id="inputtext" name="code_facture" class="form-control" type="text" placeholder="Entrer le Code du Facture">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Rechercher</button>
                        </div>
                    </form>
                </div>

                <!-- Search Code Client Form -->
                <div class="col-md-6 form-container">
                    <form action="{{ route('searchFactureClient') }}" method="get">
                        <h4>Recherche par Code Client:</h4>
                        <div id="inputsearch" class="d-flex">
                            <input id="inputtext" name="client_id" class="form-control" type="text" placeholder="Entrer l'ID du Client">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Rechercher</button>
                        </div>
                    </form>
                </div>
                    {{-- <form method="GET" action="/filter">
                        <div class="row pb-3 ">
                        <div class="col-mod-3">
                            <label> Date Début:</label>
                            <input type="date" name="start_date" class="form-control w-25">
                        </div>
                        <div class="col-mod-3">
                            <label> Date Fin:</label>
                            <input type="date" name="end_date" class="form-control w-25">
                        </div>
                        <div class=" pt-4 ">
                            <button type="submit" class="btn btn-primary "><i class="fa fa-search"></i>   Rechercher</button>
                        </div>
                        </div>
                    </form> --}}
                    <div >
                        <h4>Recherche par la date:</h4>
                        <form method="GET" action="/filter" class="form-container">
                        <div class="row ">
                            <div class="col">
                            <label for="start_date" class="form-label">Date Début:</label>
                            <input type="date" id="start_date" name="start_date" >
                            </div>
                            <div class="col">
                            <label for="end_date" class="form-label">Date Fin:</label>
                            <input type="date" id="end_date" name="end_date" >
                            </div>
                            <div class="col d-flex align-items-end">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Rechercher</button>
                            </div>
                        </div>
                        </form>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-4">
                            <hr>
                                <a class="btn btn-primary mb-4 w-100"  href="{{route('ajouterFacture')}}"><i class="fa fa-plus"></i>  Ajouter facture</a>
                                <a class="btn btn-success mb-4 w-100" href="{{ route('export-excel',request()->query()) }}"><i class="fa fa-file-excel-o"></i> Export par Excel</a>
                                @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status')}}
                                        </div>
                                    @endif
                        </div>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success')}}
                        </div>
                    @endif
                    </div>
                    <table>
                    @if(count($factures)>0)
                    <table class="table table-stripped" id="example" >
                        <tr class=" text-white col text-center" >
                            <td>Code facture</td>
                            <td>Client id</td>
                            <td>Prix hors-taxes</td>
                            <td>Tva</td>
                            <td>Status</td>
                            <td>Echéance</td>
                            <td>Created_at</td>
                            <td>Action</td>
                        </tr>
                        @foreach($factures as $f)
                        <tr class="col text-center">
                            <td>{{$f->code_facture}}</td>
                            <td>{{$f->client_id}}</td>
                            <td>{{$f->prix_hors_taxes}}</td>
                            <td>{{$f->tva}}</td>
                            <td>
                                <button class="@if($f->status==='payé')btn btn-success px-3 badge    @else btn btn-danger px-1 badge    @endif">{{$f->status}}</button>
                            </td>
                            <td>{{$f->echéance}}</td>
                            <td >{{$f->created_at}}</td>
                            <td>
                                <a  class="btn btn-primary" href="modifFacture/{{$f->id}}"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger" href="#" onclick="return confirm('Are you sure you want to delete this record?') ? window.location.href='supprimerFacture/{{$f->id}}' : false;">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                                <a class="btn btn-success" href="lineFacture/{{$f->id}}"><i class="fa fa-plus"></i></a>
                                <a class="btn btn-primary" href="pdf/{{$f->id}}"><i class="fa fa-download"></i></a>

                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{$factures->links()}}
                    <a class="btn btn-primary" href="/afficherToutFacture"><i class="fa fa-desktop"></i>  Tout afficher</a>
                    {{-- <a class="btn btn-danger" href="/suppriToutFacture"><i class="fa fa-trash-o"></i>  Tout supprimer</a> --}}
                    @else
                    <p> pas de clients dans la base de donnés </p>
                    @endif
            </main>
        </div>
    </div>
<script src="js copy/jquery.min.js"></script>
    <script src="js copy/popper.js"></script>
    <script src="js copy/bootstrap.min.js"></script>
    <script src="js copy/main.js"></script>

    <script src="js copy/datatables.min.js"></script>
    <script src="js copy/pdfmake.min.js"></script>
    <script src="js copy/vfs_fonts.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- DataTables Buttons JS -->
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <!-- JSZip for Excel export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <!-- PDFMake for PDF export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
 
    <script>
      /*   new DataTable('#example', {
    layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        }
    }
}); */
        $(document).ready(function(){
            $('#example').DataTable({
                dom:'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            })
        })
    </script>


</body>
</html>
@endsection

