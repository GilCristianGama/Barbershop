<!-- Imagem fixa -->

<div class="container-fluid"></div><img src="public/img/agendamento.jpg" alt="" class="img-fluid">

<!-- Fim da imagem fixa -->

<!-- Formulário de agendamento -->

<!-- Data -->

<form class="needs-validation" novalidate>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip01">Data</label>
            <input type="text" class="form-control" id="validationTooltip01" placeholder="" value="" required>
            <div class="valid-tooltip">

            </div>
        </div>

        <!-- Unidade -->

        <div class="col-md-3 mb-3">
            <div class="form-group">
                <label for="disabledSelect">Unidades</label>
                <select id="disabledSelect" class="form-control">
                    <option>Unidade 1</option>
                    <option>Unidade 2</option>
                    <option>Unidade 3</option>
                </select>
            </div>
        </div>

    </div>
    <form class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="disabledSelect">Serviços</label>
                    <select id="disabledSelect" class="form-control">
                        <option>Serviço 1</option>
                        <option>Serviço 2</option>
                        <option>Serviço 3</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="disabledSelect">Barbeiro</label>
                    <select id="disabledSelect" class="form-control">
                        <option>Barbeiro 1</option>
                        <option>Barbeiro 2</option>
                        <option>Barbeiro 3</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-6">
                <label for="validationTooltip03">Nome Completo</label>
                <input type="text" class="form-control" id="validationTooltip03" placeholder="Seu Nome Aqui" required>
                <div class="invalid-tooltip">
                    Por favor, informe uma cidade válida.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-6">
                <label for="validationTooltip03">E-mail</label>
                <input type="text" class="form-control" id="validationTooltip03" placeholder="Seu e-mail Aqui" required>
                <div class="invalid-tooltip">
                    Por favor, informe uma cidade válida.
                </div>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>





    <!-- Fim do Formulário de Agendamento -->