<div class="container  mb-0">
    <div class="display-4 text-primary"> Contato</div>
    <div class="col-6 offset-3 mb-5">

        <form action="?pg=cad_mensagem" method="POST">

            <div class="form-group ">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Email">
            </div>

            <div class="form-group ">
                <label for="email"><strong>Email</strong></label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="btn-group btn-group-toggle text-center" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="cat" id="option1" autocomplete="off" value="elogios" checked> Elogio
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="cat" id="option2" autocomplete="off" value="elogios"> Vendas
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="cat" id="option3" autocomplete="off" value="reclamacoes"> Reclamações
                </label>
            </div>
            <!-- <fieldset class="form-group">
                <div class="row">

                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  id="gridRadios1" name="gridRadios" value="opcao1" checked>
                            <label class="form-check-label" for="gridRadios1">Primeiro radio</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="opcao2">
                            <label class="form-check-label" for="gridRadios2">Segundo radio</label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="opcao3" disabled>
                            <label class="form-check-label" for="gridRadios3">Terceiro radio desativado</label>
                        </div>
                    </div>
                </div>
            </fieldset> -->
            <div class="form-group ">
                <label for="msg"><strong>Mensagem</strong></label>
                <textarea name="msg" id="msg" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Enviar
                    <span class="regi-send"></span>
                </button>
            </div>
        </form>
    </div>
</div>