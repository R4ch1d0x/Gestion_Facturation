<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INVOICE-APP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">


            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>





        <style>
            * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Fira sans', sans-serif;
    font-size: 16px;
}

body {



}

.container {
    width: 100%;
    max-width: 80%;
	margin-top: 5rem;
    margin-left: auto;
    margin-right: auto;
}

.card__header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card__content {
    border: 1px solid #e0e0e0;
    box-shadow: 0 6px 13px -12px rgb(50 50 93 / 20%), 0 3px 7px -3px rgb(110 110 110 / 10%);
    border-radius: 4px;
    background-color:white ;
    color:black;
    margin-top: 30px;
    margin-bottom: 30px;
    padding-bottom:30px ;
}

.card__footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 40px;
}

.card__content--header {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 20px;
    padding: 30px;
}

.invoice__title {
    margin-top: 10px;
    margin-bottom: 10px;
}

h2 {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}

.btn {
    border: 1px solid #6a727a;
    padding: 9px 15px;
    border-radius: 4px;
    cursor: pointer;
}

.btn-secondary {
    background: #FFF;
    color: black;
}

.btn-secondary:hover {
    background: #f1f1f1;
    color: #6a727a;
}


table {
    background: #f1f1f1;
    margin-top: 20px;
    margin-bottom: 30px;
}
.table--filter {
    border-bottom: 1px solid #e0e0e0;
    padding: 20px 30px;
    margin-bottom: 20px;
}

.table--filter--list {
    display: flex;
    justify-content: flex-start;
    list-style: none;

}

.table--filter--link--active {
    color: #006fbb;
    font-weight: 500;
}

.table--filter--link {
    margin-right: 1rem;
}

.table--filter--collapseBtn {
    display: none;
}

ul {
    list-style: none;
}

.table--search {
    padding: 0 30px;
    display: grid;
    -ms-grid-columns: minmax(150px, auto) minmax(180px, 1fr);
    grid-template-columns: minmax(150px, auto) minmax(180px, 1fr);
    margin-top: 30px;
    margin-bottom: 30px;
}

.table--search--wrapper {
    position: relative;
}

.table--search--select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: #eeeeee;
    color: #6a727a;
    width: 100%;
    border: none;
    border-top: 1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;
    border-bottom: 1px solid #e0e0e0;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;

}

.relative {
    position: relative;
}

.table--search--input--icon {
    top: 12px;
    left: 12px;
    color: #d4d4d4;
    position: absolute;
}

.table--search--input {
    width: 100%;
    border: none;
    color: #454f5b;
    border-top: 1px solid #e0e0e0;
    border-right: 1px solid #e0e0e0;
    border-bottom: 1px solid #e0e0e0;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-right: 20px;
    padding-left: 40px;

}

.table--heading {
    padding: 0 30px;
    gap: 10px;
    display: -ms-grid;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    color: #808891;
    font-size: 14px;
    font-weight: 500;
    border-bottom: 1px solid #e0e0e0;
    padding-bottom: 1.2rem;
    margin-top: 20px;
}

.table--items {
    padding: 10px 30px !important;
    gap: 10px;
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: (minmax(100px, 1fr))[auto-fit];
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-bottom: 1px solid #e0e0e0;
    padding: 0.6rem 0;
}

.table--items--transactionId {
    color: #006fbb;
    font-weight: 500;
}

.input {
    padding: 9px 15px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    width: 100%;
}

.my-1 {
    margin-top: 10px;
    margin-bottom: 10px;
}

.selectBtnFlat {
    border: none;
    padding: 9px 15px;
    border-radius: 4px;
    cursor: pointer;
    position: relative;
    color: #FFF;
    background: none;
}

.table--heading2 {
    display: grid;
    grid-template-columns: 550px 1fr 1fr 1fr 25px;
    grid-gap: 10px;
    padding: 10px 30px !important;
    font-weight: 900;
    border-bottom: 1px solid #e0e0e0;
    background: #DDDDDD;
}

.table--items2 {
    display: grid;
    grid-template-columns: 550px 1fr 1fr 1fr 25px;
    grid-gap: 10px;
    align-items: center;
    border-bottom: 1px solid #e0e0e0;
    padding: 10px 30px !important;
}

.table__footer {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
    padding: 10px 30px !important;

}

.table__footer--subtotal {
    display: grid;
    grid-template-columns: 1fr 1fr;
    font-weight: 500;
    margin-top: 30px;
    margin-bottom: 20px;
}

.table__footer--subtotal p {
    font-size: 20px;
}
.table__footer--subtotal span {
    font-size: 20px;
}

.table__footer--discount {
    display: grid;
    grid-template-columns: 1fr 1fr;
    font-weight: 500;
    margin-bottom: 20px;
}

.table__footer--discount p {
    font-size: 20px;
}

.table__footer--total {
    display: grid;
    grid-template-columns: 1fr 1fr;
    font-weight: 500;
    margin-bottom: 20px;
}

.table__footer--total p {
    font-size: 26px;
}

.table__footer--total span {
    font-size: 26px;
}

.textarea {
    padding: 9px 15px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    width: 100%;
    font-size: 1.1rem;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

/*========== MODAL ==========*/
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 20%;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
    color: #454f5b;
}

.show {
    display: block !important;
}

.modal__content {
    background-color: white;
    margin: auto;
    padding: 20px;
    width: 100%;
    max-width: 500px;
    box-shadow: 0 2px 15px rgb(35 40 47 / 25%);
    position: relative;
    border: none;
    border-radius: 7px;
}

.modal__close {
    color: #aaaaaa;
    font-size: 28px;
    font-weight: bold;
    top: 5px;
    right: 15px;
    position: absolute;
    cursor: pointer;
}

.modal__title {
    margin-bottom: 20px;
}

.modal__items {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.inputAdd {
    padding: 9px 15px;
    border-top: 1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;
    border-bottom: 1px solid #e0e0e0;
    border-right: none;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    width: 100%;
}

.inputAdd__Btn {
    background: #5463c1;
    color: white;
    border-top: 1px solid #5463c1;
    border-right: 1px solid #5463c1;
    border-bottom: 1px solid #5463c1;
    border-left: none;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    padding: 9px 15px;
    cursor: pointer;
}

.model__footer {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-top: 20px;

}

.btn {
    border: 1px solid #6a727a;
    padding: 9px 15px;
    border-radius: 4px;
    cursor: pointer;
}
.btn-light {
    border: 1px solid #808891;
    background: white;
    color: #454f5b;
}
.mr-2 {
    margin-right: 20px;
}

/*========== SHOW INVOICE ==========*/

.card__header--title {
    display: flex;
    justify-content: flex-start;
}

.card__header--title h1 {
    padding-right: 5px;
}

.card__header-list {
    display: flex;
    justify-content: flex-start;
    list-style: none;
    margin-top: 10px;
    margin-bottom: 10px;

}

.invoice {
    background:white ;
    color:black
}

.logo {
    padding-top:40px;
    padding-left:25px;
    height: 60px;
    padding-bottom: 15px;
}

.invoice__header--title {
    background-color: #fca120;
    display: grid;
    grid-template-columns: 65% 1fr 1fr;
    margin-top: 80px;
}

.invoice__header--title-1 {
    font: bold 100% sans-serif;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    background-color: white;
    text-align: center;
    font-size: 36px;
    padding-left: 45px;
    padding-right: 45px;
}

.invoice__header--item {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 200px;
    padding: 40px;
}

.invoice__header--item1 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
    margin-top: 30px;
}

.invoice__header--item1 p {
    font-size: 20px;
}

.invoice__header--item1 span {
    font-size: 20px;
}

.invoice__header--item2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.invoice__header--item2 p {
    font-size: 20px;
}

.invoice__header--item2 span {
    font-size: 20px;
}

.table--heading3 {
    display: grid;
    grid-template-columns: 25px 500px 1fr 1fr 1fr 1fr ;
    grid-gap: 10px;
    padding: 10px 30px !important;
    font-weight: 900;
    background-color:black;
    color:white;
    font-size: 20px;
}

.py1 {
    padding-left: 40px;
    padding-right: 40px;
}

.table--items3 {
    display: grid;
    grid-template-columns: 25px 500px 1fr 1fr 1fr 1fr ;
    grid-gap: 10px;
    align-items: center;
    border-bottom: 1px solid #e0e0e0;
    padding: 10px 30px !important;
    font-size: 16px;
    color: black;
}

.table--items--transactionId3 {
    color: black;
    font-weight: 500;
}

.invoice__subtotal {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 200px;
    padding-top: 10px;
    padding-left: 40px;
    padding-right: 40px;
}

.invoice__subtotal--item1 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 30px;
    margin-bottom: 20px;
}

.invoice__subtotal--item1 p {
    font-size: 20px;
    padding-left: 55px;
}

.invoice__subtotal--item1 span {
    font-size: 20px;
}

.invoice__subtotal--item2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.invoice__subtotal--item2 p {
    font-size: 20px;
    padding-left: 55px;
}

.invoice__subtotal--item2 span {
    font-size: 20px;
}

.invoice__total {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 150px;
    padding: 25px;
}

.grand__total {
    margin-top: 50px;
    background-color: #fca120;
    color: black;
}

.grand__total--items {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    margin-top: 15px;
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 0.5in;
    padding-right: 0.5in;font-size: 26px;
}

.grand__total--items p {
    font-size: 26px;
}

.grand__total--items span {
    font-size: 26px;
}

.button-success {
    background-color: #28a745; /* Green color for success */
    padding: 0.5rem 1rem; /* Adjust padding as needed */
}

.button-danger {
    background-color: #dc3545; /* Red color for danger */
    padding: 0.25rem 0.5rem; /* Adjust padding as needed */
}
.badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
}


        </style>

    </head>
<body>
    <button id="printButton">Print Page</button>
<div class="container">
        <div class="table invoice">
            <div class="logo">
                <img src="{{ asset('images/R (1).png') }}" alt="" style="width: 100px;">
            </div>
            <div class="invoice__header--title">
                <p></p>
                <p class="invoice__header--title-1">Facture</p>
                <p></p>
            </div>


            <div class="invoice__header--item">
                <div>
                    <h2>Facture / رمز الفاتورة</h2>
                    <p>Code facture : {{$f->code_facture}}</p>
                </div>
                <div>
                    <h2>Transfert / معاملة</h2>
                        <div class="invoice__header--item1">
                            <p>Facture# :</p>
                            <span># {{$f->id}}</span>
                        </div>
                        <div class="invoice__header--item2">
                            <p>Date :</p>
                            <span>{{$f->created_at}}</span>
                        </div>
                        <div class="invoice__header--item2">
                            <p>Echéance :</p>
                            <span>{{$f->echéance}}</span>
                        </div>
                        <div class="invoice__header--item2">
                            <p>Status :</p>
                            <span class="btn @if($f->status === 'payé') button-success px-3 @else button-danger px-1 @endif badge">{{$f->status}}</span>
                        </div>
                </div>
            </div>
            <div class="table py1">
                <div class="table--heading3">
                    <p>Id</p>
                    <p>Description</p>
                    <p> Taxes</p>
                    <p>Montant_ht</p>
                    <p>Qte</p>
                    <p>Tva</p>
                </div>

                <!-- item 1 -->
                @foreach($ls as $l)
                <div class="table--items3">
                    <p>{{$l->id}}</p>
                    <p>{{$l->description}}</p>
                    <p>{{$l->taxes}}</p>
                    <p>{{$l->montant_ht}}</p>
                    <p>{{$l->qte}}</p>
                    <p>{{$f->tva}}</p>
                </div>
                @endforeach
            <div  class="invoice__subtotal">
                <div>
                    <h2>Merci de votre confiance</h2>
                </div>
                <div>
                    <div class="invoice__subtotal--item1">
                        <p>Tva(20%) / ضريبه القيمه المضافه</p>
                        <span>{{$f->tva}}</span>
                    </div>
                    <div class="invoice__subtotal--item2">
                        <p>Prix hors taxes / السعر لا يشمل الضرائب</p>
                        <span>{{$f->prix_hors_taxes}}</span>
                    </div>

                </div>
            </div>

            <div class="invoice__total">
                <div>
                    <h2>Termes et conditions</h2>
                    <p>Lorem Ipsum n’est rien d’autre qu’un texte factice de l’industrie de l’imprimerie et de la composition. </p>
                </div>
                <div>
                    <div class="grand__total" >
                        <div class="grand__total--items">
                            <p>Total général</p>
                            <span>{{$f->prix_total}} MAD</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

  <!--==================== APP JS ====================-->
  <script src="assets/js/app.js"></script>
  <script>
    $(document).ready(function() {
        $('#printButton').click(function() {
            window.print();
        });
    });
</script>
</body>
</html>

