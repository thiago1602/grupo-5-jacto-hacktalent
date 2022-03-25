
@csrf

<div class="mb-3">
    <label for="razao_social" class="form-label">Razão Social</label>
    <input value="{{ @$fornecedor->razao_social }}" type="text" class="form-control" id="razao_social" name="razao_social" required maxlength="100">
</div>
<div class="mb-3">
    <label for="cnpj" class="form-label">CNPJ</label>
    <input value="{{ @$fornecedor->cnpj }}" type="text" class="form-control" id="cnpj" name="cnpj" required maxlength="18">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input value="{{ @$fornecedor->email }}" type="email" class="form-control" id="email" name="email" required maxlength="100">
</div>
<div class="mb-3">
    <label for="telefone" class="form-label">Telefone</label>
    <input value="{{ @$fornecedor->telefone }}" type="text" class="form-control" id="telefone" name="telefone" required maxlength="15">
</div>
<div class="mb-3">
    <label for="logradouro" class="form-label">Logradouro</label>
    <input value="{{ @$fornecedor->logradouro }}" type="text" class="form-control" id="logradouro" name="logradouro" required maxlength="255">
</div>
<div class="mb-3">
    <label for="numero" class="form-label">Número</label>
    <input value="{{ @$fornecedor->numero }}" type="text" class="form-control" id="numero" name="numero" required maxlength="20">
</div>
<div class="mb-3">
    <label for="complemento" class="form-label">Complemento</label>
    <input value="{{ @$fornecedor->complemento }}" type="text" class="form-control" id="complemento" name="complemento" maxlength="50">
</div>
<div class="mb-3">
    <label for="cep" class="form-label">CEP</label>
    <input value="{{ @$fornecedor->cep }}" type="text" class="form-control" id="cep" name="cep" maxlength="8">
</div>
<div class="mb-3">
    <label for="bairro" class="form-label">Bairro</label>
    <input value="{{ @$fornecedor->bairro }}" type="text" class="form-control" id="bairro" name="bairro" required maxlength="50">
</div>
<div class="mb-3">
    <label for="cidade" class="form-label">Cidade</label>
    <input value="{{ @$fornecedor->cidade }}" type="text" class="form-control" id="cidade" name="cidade" required maxlength="50">
</div>
<div class="mb-3">
    <label for="estado" class="form-label">Estado</label>
    <input value="{{ @$fornecedor->estado }}" type="text" class="form-control" id="estado" name="estado" required maxlength="2">
</div>

<div class="mb-3">
    <label for="foto_fornecedor" class="form-label">Foto</label>
    <input type="file" class="form-control" id="foto_estabelecimento" name="foto_estabelecimento" >
</div>
<button type="submit" class="btn btn-primary">Salvar</button>
