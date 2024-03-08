@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row align-items-start">
{{--    Listagem Geral        --}}
            <div class="col">
                <div class="mb-2 mt-1">
                    <h4 class="mb-2">Abertos</h4>
                    <div class="table-responsive-sm border border-2 border-primary rounded-2">
                        <table class="table table-sm table-hover align-middle">
                            <thead>
                            <tr>
                                <th scope="col">Ticket</th>
                                <th scope="col">Prioridade</th>
                                <th scope="col">Data Inclusão</th>
                                <th scope="col">Solicitante</th>
                                <th scope="col">Chamado</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">20240100</th>
                                <td>Pouco Urgente</td>
                                <td>01/04/2024</td>
                                <td>Ricardo N.</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quod.</td>
                            </tr>
                            <tr>
                                <th scope="row">20240100</th>
                                <td>Pouco Urgente</td>
                                <td>01/04/2024</td>
                                <td>Ricardo N.</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quod.</td>
                            </tr>
                            <tr>
                                <th scope="row">20240100</th>
                                <td>Pouco Urgente</td>
                                <td>01/04/2024</td>
                                <td>Ricardo N.</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quod.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mb-2 mt-1">
                    <h4 class="mb-2">Concluidos</h4>
                    <div class="table-responsive-sm border border-2 border-success rounded-2">
                        <table class="table table-sm table-striped table-hover align-middle">
                            <thead>
                            <tr>
                                <th scope="col">Ticket</th>
                                <th scope="col">Data Conclusão</th>
                                <th scope="col">Solicitante</th>
                                <th scope="col">Chamado</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">20240001</th>
                                <td>01/04/2024</td>
                                <td>Ricardo N.</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quod.</td>
                            </tr>
                                <th scope="row">20240001</th>
                                <td>01/04/2024</td>
                                <td>Ricardo N.</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quod.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

{{--    Filas e Recursos        --}}
            <div class="col">
                <div class="row d-inline-flex gap-4">
                    <div class="m-1">
                        <button type="button" class="btn btn-primary">Novo</button>
                        <button type="button" class="btn btn-success">Relatórios</button>
                    </div>
                </div>
                <hr>

                <div class="container">
                    <div class="container">
                        <h4>Filas</h4>
                    </div>

                    <div class="row row-cols-1 row-cols-md-2 g-4">

                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Triagem</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Suporte</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Desenvolvimento</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Projeto</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Comercial</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 15rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Administrativo</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                </div>
        </div>
    </div>
@endsection
