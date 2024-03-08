@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-around">
            <span>Prioridade: Muito Urgente</span>
            <h4>Solicitação n°: <strong>2024.0001</strong> </h4>
        </div>

        <ul class="nav nav-tabs justify-content-end" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="ticket-tab" data-bs-toggle="tab" data-bs-target="#ticket-tab-pane" type="button" role="tab" aria-controls="ticket-tab-pane" aria-selected="true">Solicitação</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="history-tab-pane" aria-selected="false">Histórico</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="docs-tab" data-bs-toggle="tab" data-bs-target="#docs-tab-pane" type="button" role="tab" aria-controls="docs-tab-pane" aria-selected="false">Documentos anexados</button>
            </li>
        </ul>

        <div class="tab-content" id="">
            {{--    Ticket tab      --}}
            <div class="tab-pane fade show active" id="ticket-tab-pane" role="tabpanel" aria-labelledby="ticket-tab" tabindex="0">
                <div class="container p-2">

                    <div class="row mt-2">
                        <div class="col-12">
                            <input type="text" name="" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi exercitationem laboriosam nostrum quae voluptate." class="form-control" readonly>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-2">
                            <label for="" class="form-label">Data abertura:</label>
                            <input type="date" value="2024-02-12" class="form-control" readonly>
                        </div>
                        <div class="col-2">
                            <label for="" class="form-label">Data limite:</label>
                            <input type="date" value="2024-02-12" class="form-control">
                        </div>
                        <div class="col-2">
                            <label for="" class="form-label">Data conclusão:</label>
                            <input type="date" value="2024-02-12" class="form-control" readonly>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Solicitante:</label>
                            <input type="text" value="Marcelo Capitanio" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-3">
                            <label for="" class="form-label">Fila</label>
                            <select name="" id="" class="form-select">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Prioridade</label>
                            <select name="" id="" class="form-select">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Responsável</label>
                            <select name="" id="" class="form-select">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Path arquivo</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-12">
                            <label for="" class="form-label">Descrição</label>
                            <textarea name="" id="" cols="30" rows="8" class="form-control" disabled>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur corporis, ipsa nam nihil soluta sunt vel. Ducimus ea in libero quas rerum tempora voluptates?
                            </textarea>
                        </div>
                    </div>

                </div>
            </div>

            {{--    History tab      --}}
            <div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab" tabindex="0">
                <div class="container p-2">
                    <div class="d-flex mb-5">
                        <button type="button" class="btn btn-primary">
                            <i class="bi bi-clock-history"></i>
                            Adicionar nota
                        </button>
                    </div>

                    <table class="table table-secondary table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Registro</th>
                            <th scope="col">Técnico</th>
                            <th scope="col">Histórico</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">02/02/2024</th>
                            <td>Mark</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus corporis eaque eius error eum ex exercitationem expedita explicabo facere id inventore ipsa ipsam libero nam natus nesciunt nihil, nisi placeat, porro possimus quae quam quibusdam quis recusandae reprehenderit sapiente sed similique, suscipit veniam voluptas voluptate!</td>
                        </tr>

                        <tr>
                            <th scope="row">02/02/2024</th>
                            <td>Mark</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus corporis eaque eius error eum ex exercitationem expedita explicabo facere id inventore ipsa ipsam libero nam natus nesciunt nihil, nisi placeat, porro possimus quae quam quibusdam quis recusandae reprehenderit sapiente sed similique, suscipit veniam voluptas voluptate!</td>
                        </tr>
                        <tr>
                            <th scope="row">02/02/2024</th>
                            <td>Mark</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus corporis eaque eius error eum ex exercitationem expedita explicabo facere id inventore ipsa ipsam libero nam natus nesciunt nihil, nisi placeat, porro possimus quae quam quibusdam quis recusandae reprehenderit sapiente sed similique, suscipit veniam voluptas voluptate!</td>
                        </tr>
                        <tr>
                            <th scope="row">02/02/2024</th>
                            <td>Mark</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus corporis eaque eius error eum ex exercitationem expedita explicabo facere id inventore ipsa ipsam libero nam natus nesciunt nihil, nisi placeat, porro possimus quae quam quibusdam quis recusandae reprehenderit sapiente sed similique, suscipit veniam voluptas voluptate!</td>
                        </tr>
                        <tr>
                            <th scope="row">02/02/2024</th>
                            <td>Mark</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus corporis eaque eius error eum ex exercitationem expedita explicabo facere id inventore ipsa ipsam libero nam natus nesciunt nihil, nisi placeat, porro possimus quae quam quibusdam quis recusandae reprehenderit sapiente sed similique, suscipit veniam voluptas voluptate!</td>
                        </tr>
                        <tr>
                            <th scope="row">02/02/2024</th>
                            <td>Mark</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus corporis eaque eius error eum ex exercitationem expedita explicabo facere id inventore ipsa ipsam libero nam natus nesciunt nihil, nisi placeat, porro possimus quae quam quibusdam quis recusandae reprehenderit sapiente sed similique, suscipit veniam voluptas voluptate!</td>
                        </tr>
                        <tr>
                            <th scope="row">02/02/2024</th>
                            <td>Mark</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus corporis eaque eius error eum ex exercitationem expedita explicabo facere id inventore ipsa ipsam libero nam natus nesciunt nihil, nisi placeat, porro possimus quae quam quibusdam quis recusandae reprehenderit sapiente sed similique, suscipit veniam voluptas voluptate!</td>
                        </tr>
                        <tr>
                            <th scope="row">02/02/2024</th>
                            <td>Mark</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus corporis eaque eius error eum ex exercitationem expedita explicabo facere id inventore ipsa ipsam libero nam natus nesciunt nihil, nisi placeat, porro possimus quae quam quibusdam quis recusandae reprehenderit sapiente sed similique, suscipit veniam voluptas voluptate!</td>
                        </tr>
                        <tr>
                            <th scope="row">02/02/2024</th>
                            <td>Mark</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus corporis eaque eius error eum ex exercitationem expedita explicabo facere id inventore ipsa ipsam libero nam natus nesciunt nihil, nisi placeat, porro possimus quae quam quibusdam quis recusandae reprehenderit sapiente sed similique, suscipit veniam voluptas voluptate!</td>
                        </tr>
                        <tr>
                            <th scope="row">02/02/2024</th>
                            <td>Mark</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus corporis eaque eius error eum ex exercitationem expedita explicabo facere id inventore ipsa ipsam libero nam natus nesciunt nihil, nisi placeat, porro possimus quae quam quibusdam quis recusandae reprehenderit sapiente sed similique, suscipit veniam voluptas voluptate!</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            {{--    Docs tab      --}}
            <div class="tab-pane fade" id="docs-tab-pane" role="tabpanel" aria-labelledby="docs-tab" tabindex="0">
                <div class="container p-2">
                    <div class="d-flex mb-5">
                        <button class="btn btn-primary">
                            <i class="bi bi-file-earmark-plus-fill"></i>
                            Adicionar anexo
                        </button>
                    </div>

                    <table class="table table-secondary table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Anexo #</th>
                            <th scope="col">Nome Documento</th>
                            <th scope="col">Data inclusão</th>
                            <th scope="col">Incluido por:</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Anexo_1</th>
                            <td>compatibilidade</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, vero.</td>
                            <td>Mark</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

        <hr>

        <div class="container command">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <input type="submit" value="Finalizar solicitação" class="btn btn-success m-2">
                    <input type="submit" value="Gerar História" class="btn btn-primary m-2">
                    <input type="submit" value="Fechar" class="btn btn-danger m-2">
                </div>
            </div>
        </div>

    </div>

    {{--    Finish tab    --}}
    <div
        class="container bg-dark-subtle p-2 border border-2 border-dark"
        style="display: none;width: 825px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);"
    >
        <div class="row">
            <div class="d-flex justify-content-center">
                <h5>Concluir solicitação</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="" class="form-label">Ação realizada</label>
                <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-4">
                <div class="form-check">
                    <input type="checkbox" name="" id="" class="form-check-input">
                    <label for="" class="form-label">Sem ação</label>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12 d-flex justify-content-end">
                <input type="button" value="Cancelar" class="btn btn-danger me-1">
                <input type="button" value="Concluir" class="btn btn-primary me-1">
            </div>
        </div>
    </div>
    {{--    Apend history tab    --}}
    <div
        class="container bg-dark-subtle p-2 border border-2 border-dark"
        style="display: none;width: 825px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);"
    >
        <div class="row">
            <div class="d-flex justify-content-center">
                <h5>Adicionar Histórico</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="" class="form-label">Nota</label>
                <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12 d-flex justify-content-end">
                <input type="button" value="Cancelar" class="btn btn-danger me-1">
                <input type="button" value="Adicionar" class="btn btn-primary me-1">
            </div>
        </div>
    </div>
    {{--    Apend doc tab    --}}
    <div
        class="container bg-dark-subtle p-2 border border-2 border-dark"
        style="display: none;width: 825px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);"
    >
        <div class="row">
            <div class="d-flex justify-content-center">
                <h5>Adicionar Documento</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="" class="form-label">Descrição</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="" class="form-label">Descrição</label>
                <input type="file" class="form-control">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12 d-flex justify-content-end">
                <input type="button" value="Cancelar" class="btn btn-danger me-1">
                <input type="button" value="Adicionar" class="btn btn-primary me-1">
            </div>
        </div>
    </div>
@endsection
