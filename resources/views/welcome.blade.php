@extends('layouts.app')

@section('content')
<div class="container-fluid cont_prin">
    <div class="row fondo_oscuro">
        <section class="col-md-4">
            <a href="/configure/">
                <!-- <img class="img_mod" src="img/img1.jpg"> -->
                <div class="img_mod" style="background-image: url('img/img1.jpg');">
                    <h1 class="tit_mod">CONFIGURA</h1>
                    <p class="p_mod">ESTABLECER PARÁMETROS</p>
                </div>
            </a>
        </section>
        <section class="col-md-4">
            <a href="/control/">
                <!-- <img class="img_mod" src="img/img2.jpg"> -->
                <div class="img_mod" style="background-image: url('img/img2.jpg');">
                    <h1 class="tit_mod">CONTROL</h1>
                    <p class="p_mod">TRUPUT EN TIEMPO REAL</p>
                </div>
            </a>
        </section>
        <section class="col-md-4">
            <a href="/performance/">
                <!-- <img class="img_mod" src="img/img3.jpg"> -->
                <div class="img_mod" style="background-image: url('img/img3.jpg');">
                    <h1 class="tit_mod">DESEMPEÑO</h1>
                    <p class="p_mod">DETALLE / HISTÓRICO</p>
                </div>
            </a>
        </section>
    </div>
</div>
@endsection