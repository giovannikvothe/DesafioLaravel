<div class="line">

    <div class="form-group col-sm-12 col-md-4">

        <label for="nome" class="required">Nome</label>
        <input type="text" name="nome" id="nome" autofocus class="form-control" required value="{{ old('name', $aluno->nome) }}"  {{ $modo }}>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="email" class="required">Email</label>
        <input type="email" name="email" id="email" autofocus class="form-control" required value="{{ old('email', $aluno->email) }}"  {{ $modo }}>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="nascimento" class="required">Data de nascimento</label>
        <input type="date" name="nascimento" id="nascimento" autofocus class="form-control" required value="{{ old('nascimento', $aluno->nascimento) }}"  {{ $modo }}>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="endereco" class="required">Endereço</label>
        <input type="text" name="endereco" id="endereco" autofocus class="form-control" required value="{{ old('endereco', $aluno->endereco) }}"  {{ $modo }}>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="telefone" class="required">Telefone</label>
        <input type="text" name="telefone" id="telefone" autofocus class="form-control" required value="{{ old('telefone', $aluno->telefone) }}"  {{ $modo }}>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="cadastro" class="required">Data de Cadastro</label>
        <input type="date" name="cadastro" id="cadastro" autofocus class="form-control" required value="{{ old('cadastro', $aluno->cadastro) }}"  {{ $modo }}>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="periodo" class="required">Período</label>

    </div>

    <select name="periodo" id="periodo" class="custom-select" id="inputGroupSelect01" {{ $modo }}>
        <option value="0">Nulo</option>
        <option value="1">Dia</option>
        <option value="7">Semana</option>
        <option value="30">Mês</option>
    </select>

    <div class="form-group col-sm-12 col-md-4" style="display:none">

        <label for="pagamento" class="required">Data de Cadastro</label>
        <input type="date" name="pagamento" id="pagamento" autofocus class="form-control" value="{{ old('pagamento', $aluno->pagamento) }}"  {{ $modo }}>

        <label for="validade" class="required">Data de Cadastro</label>
        <input type="date" name="validade" id="validade" autofocus class="form-control" value="{{ old('validade', $aluno->validade) }}"  {{ $modo }}>

    </div>

</div>