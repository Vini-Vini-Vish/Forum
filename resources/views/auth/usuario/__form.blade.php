<div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-6 col-lg-12">
        <div class="form-group">
            <label for="nick" class="control-label">Nick:</label>
            <input  type="text" 
                    name="nick" 
                    id="nick"
                    value="{{ isset( $registro->nome ? $registro->nome : '' ) }}" 
                    class="form-control">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-6 col-lg-12">
        <div class="form-group">
            <label for="email" class="control-label">Email:</label>
            <input  type="text" 
                    name="email" 
                    id="email" 
                    value="{{ isset( $registro->email ? $registro->email : '' ) }}" 
                    class="form-control">
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-6 col-lg-12">
        <div class="form-group">
            <label for="senha" class="control-label">Senha:</label>
            <input  type="text" 
                    name="senha"   
                    id="senha" 
                    class="form-control">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-6 col-lg-12">
        <div class="form-group">
            <label for="confirmar_senha" class="control-label">Confirmar a Senha:</label>
            <input  type="text" 
                    name="confirmar_senha" 
                    id="confirmar_senha" 
                    class="form-control">
        </div>
    </div>
</div>
