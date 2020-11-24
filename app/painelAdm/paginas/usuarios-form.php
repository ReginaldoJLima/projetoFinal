<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Inserir Usuários</h1>
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

                    <form action="?pg=usuarios-novo" method="POST">
                        <div class="form-group">
                            <label for="usuario">Nome de usuário</label>
                            <input type="text" name="nome" id="usuario" autofocus class="form-control" placeholder="Digite seu nome de Usuário">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite seu nome de Usuário">
                        </div>
                        <div class="form-group text-right">
                            <a href="?pg=usuarios-listar" class="btn btn-warning btn-lg">Voltar</a>
                            <input type="submit" class="btn btn-success btn-lg" value="Inserir">
                        </div>
                    </form>
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