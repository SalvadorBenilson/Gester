<!--FORM-->
<form class="row g-2 mb-5" wire:submit.prevent="store" wire:loading.attr="disabled">

<!--BUTTON FECHAR MODAL-->
<div class="col-md-12">
    <button class="btn-close" wire:click="fecharModal"></button>
</div>
<!--FIM BUTTON FECHAR MODAL-->

<div class="col-md-6">
<label>Nome Completo</label>
<input type="text" class="form-control form-control-sm" placeholder="Nome Completo" wire:model="nome" value="old{{ $nome }}">
@error('nome') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Morada</label>
<input type="text" class="form-control form-control-sm" placeholder="Morada" wire:model="morada" value="old{{ $morada }}">
@error('morada') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Telefone</label>
<input x-mask="999-999-999" type="tel" class="form-control form-control-sm" placeholder="Telefone" wire:model="telefone" value="old{{ $telefone }}">
@error('telefone') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Email</label>
<input type="email" class="form-control form-control-sm" placeholder="Email" wire:model="email" value="old{{ $email }}">
@error('email') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Recebido em:</label>
<input x-mask="99/99/9999" type="date" class="form-control form-control-sm" wire:model="recebido" value="old{{ $recebido }}" wire.keydown.down="calcularDataDevolucao">
@error('recebido') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Devolver em:</label>
<input x-mask="99/99/9999" type="date" class="form-control form-control form-control-sm" wire:model="devolver" value="old{{ $devolver }}">
@error('devolver') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Territorio Nº</label>
<select class="form-control form-control-sm" wire:model="territorio_id">       
@forelse ($tt_id as $lista => $value)       
    <option value="{{ $value }}">{{ $value }}</option>
@empty
    <option desable>Sem Território Cadastrados</option>
@endforelse    
</select>
@error('territorio_id') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Grupo Nº</label>
<select class="form-control form-control-sm" wire:model="grupo_id">
@forelse ($gt_id as $lista => $value)       
    <option value="{{ $value }}">{{ $value }}</option>
@empty
    <option desable>Sem Grupo Cadastrados</option>
@endforelse      
</select>
@error('grupo_id') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<!--DIV DOS BOTÕES-->
<div class="btn-group mt-5">
    <button class="btn btn-success col-md-8 text-white" type="submit">Salvar</button>
    <button class="btn btn-warning col-md-4 text-dark" wire:click="resetInputFields">Limpar</button>           
</div>
<!--FIM DA DIV DOS BOTÕES-->

</form>
<!--FIM DO FORM-->
