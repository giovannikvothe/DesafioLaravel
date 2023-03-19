<div class="line">

    <div class="form-group col-sm-12 col-md-4">

        <label for="funcionario" class="required">Professor</label>
        <input type="text" name="funcionario" id="funcionario" autofocus class="form-control" required value="{{Auth::user()->name}}" readonly>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="aluno" class="required">Aluno</label>
        <input type="text" name="aluno" id="aluno" autofocus class="form-control" required>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="data_inicio" class="required">Data & Hora do Inicio</label>
        <input type="datetime-local" name="data_inicio" id="data_inicio" autofocus class="form-control" required>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="data_fim" class="required">Data & Hora do Final</label>
        <input type="datetime-local" name="data_fim" id="data_fim" autofocus class="form-control" required>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="custo" class="required">Custo</label>
        <input type="text" name="custo" id="custo" autofocus class="form-control" required>

    </div>

</div>