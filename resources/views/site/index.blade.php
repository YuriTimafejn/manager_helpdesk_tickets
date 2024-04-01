@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row align-items-start">
{{--    Listagem Geral        --}}
            <div class="col">
                <div class="mb-2 mt-1">
                    <h4 class="mb-2">Abertos</h4>
                    <div
                        class="table-responsive-sm border border-2 border-primary rounded-2"
                        style="height: 400px;"
                    >
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
                    <div
                        class="table-responsive-sm border border-2 border-success rounded-2"
                        style="height: 250px;"
                    >
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

                        <x-card queue="teste"></x-card>

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

{{--    New ticket div  --}}
    <div
        class="new-ticket container bg-dark-subtle p-2 border border-2 border-dark"
        style="display: none; width: 925px; position: fixed; top: 50%; left:50%; transform: translate(-50%, -50%);"
    >

        <div class="row mb-1">
            <div class="col-md-4">
                <label for="" class="form-label">Data de abertura</label>
                <input type="date" name="" id="" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="" class="form-label">&nbsp;</label>
                <select name="" id="" class="form-select">
                    <option>Prioridade</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">&nbsp;</label>
                <select name="" id="" class="form-select">
                    <option>Solicitante</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="col-md-2" style="margin: auto 0 0 0;"
            >
                <input type="button" value="Novo Solicitante" class="btn btn-primary"
{{--                       style="height: 36px"--}}
                >
            </div>
        </div>

        <div class="row mb-1">
            <div class="col-md-12">
                <label for="" class="form-label">Chamado</label>
                <input type="text" name="" id="" class="form-control">
            </div>
        </div>

        <div class="mb-3 mt-1">
            <label for="" class="form-label">Descrição</label>
            <textarea class="form-control" id="" rows="3"></textarea>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
                <input type="button" value="Cancelar" class="btn btn-danger me-1">
                <input type="button" value="Abrir Solicitação" class="btn btn-primary me-1">
            </div>
        </div>

    </div>

{{--    New requirer div       --}}
    <div
        class="new-submitter container bg-dark-subtle p-2 border border-2 border-dark"
        style="display: none; width: 825px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);"
    >

        <div class="row m-2">
            <div class="col-md-12">
                <label for="" class="form-label">Nome</label>
                <input type="text" class="form-control">
            </div>

        </div>

        <div class="row m-2">
            <div class="col-md-6">
                <label for="" class="form-label">&nbsp;</label>
                <select name="" id="" class="form-select">
                    <option>Empresa</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">E-mail contato</label>
                <input type="email" name="" id="" class="form-control">
            </div>
        </div>

        <div class="row m-1">
            <div class="col-md-12 d-flex justify-content-end">
                <input type="button" value="Cancelar" class="btn btn-danger me-1">
                <input type="button" value="Adicionar solicitante" class="btn btn-primary me-1">
            </div>
        </div>


    </div>

{{--    Report div        --}}
    <div
        class="generate-report container-md bg-success-subtle p-2 border border-2 border-dark rounded"
        style="display: none;width: 800px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);"
    >
        <div class="d-flex justify-content-center">
            <h3>Exportar relatórios de Atividades</h3>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="" class="form-label">&nbsp;</label>
                <button class="btn btn-outline-primary">Relatório mês: SETEMBRO</button>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">&nbsp;</label>
                <button class="btn btn-outline-primary">Relatório último semestre</button>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">&nbsp;</label>
                <button class="btn btn-outline-primary">Relatório ano: 2023</button>
            </div>
        </div>
        <div class="row mt-2">
            <div class="d-flex justify-content-center"><h5>Busca por intervalo</h5></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text">Data inicial</span>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text">Data final</span>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-2">
            <div class="d-flex justify-content-md-evenly">
                <input type="button" value="Cancelar" class="btn btn-danger me-1">
                <input type="button" value="Gerar PDF" class="btn btn-warning me-1">
                <input type="button" value="Enviar por e-mail" class="btn btn-light me-1">
            </div>
        </div>

    </div>

@endsection
