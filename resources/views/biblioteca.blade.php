@extends('layout.app')
@section('titulo','Biblioteca')
@section('corpo')
    <section>
        <div class="album py-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow bg-transparent">
                            <img class="card-img-top" alt="Conteudo" height="100%"
                                 src="https://images.pexels.com/photos/4145190/pexels-photo-4145190.jpeg">
                            <div class="card__text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                <p>Programação</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-muted">Publicado em 01/04/2021</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
