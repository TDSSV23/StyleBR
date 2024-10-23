<?php
if (!empty($result['id'])) {
    //editar
    $titulo = 'Editar Cliente';
    $action = 'update';
    $id = $result ['id'];
    $nome = $result ['nome'];
    $email = $result ['email'];
    $telefone = $result ['telefone'];
    $endereco = $result ['endereco'];
    $cpf = $result ['cpf'];
    $data_nascimento = $result ['data_nascimento'];
} else {
    //adicionar
    $titulo = 'Adicionar Cliente';
    $action = 'insert';
    $id = '';
    $nome = '';
    $email = '';
    $telefone = '';
    $endereco = '';
    $cpf = '';
    $data_nascimento = '';
}
?>

<?php include './includes/header.php'; ?>

    <div class="container cont-login">

   
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-2 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><?= $titulo ?></h1>
                            </div>

                            <form class="user" method="post" action="./pessoa.php?action=<?= $action ?>">
                                <input type="hidden" name="id" id="id" value="<?= $id ?>">

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user item-log" name="nome" id="nome"
                                            placeholder="Nome" value="<?= $nome ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user item-log" name="email" id="email"
                                            placeholder="Email" value="<?= $email ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user item-log" name="telefone" id="telefone"
                                            placeholder="Telefone" value="<?= $tetefone ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user item-log" name="endereco" id="endereco"
                                            placeholder="Endereço" value="<?= $endereco ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user item-log" name="cpf" id="cpf"
                                            placeholder="CPF" value="<?= $cpf ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="Date" class="form-control form-control-user item-log" name="data-nasc  " id="data-nasc"
                                            placeholder="Data de Nascimento" value="<?= $data_nascimento ?>">
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Salvar
                                </button>

                           </form>
                        </div>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block bg-register-image"></div>
                </div>
            </div>
    </div>