<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Usuários</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contatos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?php foreach ($DadosUsuario as $dados) { ?>
                        <form action="?pg=usuario-editar" method="POST">
                            <div class="form-group">
                                <label for="usuario">Nome de usuário</label>
                                <input type="text" name="nome" value="<?php echo $dados['nome'] ?>" id="usuario" disabled class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" autofocus name="senha" id="senha" class="form-control" placeholder="Digite uma nova senha">
                            </div>
                            <input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario'] ?>">
                            <div class="form-group text-right">
                                <a href="?pg=usuarios-listar" class="btn btn-warning btn-lg">Voltar</a>
                                <input type="submit" class="btn btn-success btn-lg" value="Atualizar">
                            </div>
                        </form>
                    <?php } ?>
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->