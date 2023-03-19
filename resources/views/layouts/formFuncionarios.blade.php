<div class="line">

    <div class="form-group col-sm-12 col-md-4">

        <label for="name" class="required">Nome</label>
        <input type="text" name="name" id="name" autofocus class="form-control" required value="{{ old('name', $funcionario->name) }}"  {{ $modo }}>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="email" class="required">Email</label>
        <input type="email" name="email" id="email" autofocus class="form-control" required value="{{ old('email', $funcionario->email) }}"  {{ $modo }}>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="password" class="required">Senha</label>
        <input type="password" name="password" id="password" autofocus class="form-control" required minlength="8" value="{{ old('password', $funcionario->password) }}"  {{ $modo }}>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="nascimento" class="required">Data de nascimento</label>
        <input type="date" name="nascimento" id="nascimento" autofocus class="form-control" required value="{{ old('nascimento', $funcionario->nascimento) }}"  {{ $modo }}>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="endereco" class="required">Endereço</label>
        <input type="text" name="endereco" id="endereco" autofocus class="form-control" required value="{{ old('endereco', $funcionario->endereco) }}"  {{ $modo }}>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="telefone" class="required">Telefone</label>
        <input type="text" name="telefone" id="telefone" autofocus class="form-control" required value="{{ old('telefone', $funcionario->telefone) }}"  {{ $modo }}>

    </div>

    <div class="form-group col-sm-12 col-md-4">

        <label for="periodo" class="required">Período</label>

    </div>

    <select name="periodo" id="periodo" class="custom-select" id="inputGroupSelect01" {{ $modo }}>
        <option value="Diurno">Diurno</option>
        <option value="Noturno">Noturno</option>
        <option value="Especial">Especial</option>
    </select>

</div>