<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-10">
            <div class="card p-4">

                <h1 class="text-center text-warning mb-4">
                <i class="bi bi-exclamation-triangle-fill"></i>
                </h1>

                <p class="text-center mb-4">Deseja eliminar o cliente?</p>
                
                <h4 class="mb-4 text-center"><strong><?= $client->name ?></strong></h4>
                
                <div class="text-center mb-4">
                    <span><i class="bi bi-envelope-at-fill"></i> &nbsp;&nbsp; Email: <strong><?= $client->email ?></strong></span>
                    <span class="mx-5"></span>
                    <span><i class="bi bi-telephone-fill"></i> &nbsp;&nbsp; Telefone: <strong><?= $client->phone ?></strong></span>
                </div>

                <div class="text-center my-3">
                    <a href="?ct=agent&mt=my_clients" class="btn btn-outline-secondary px-5"><i class="bi bi-x-circle-fill"></i> &nbsp;&nbsp;  Não</a>
                    <a href="?ct=agent&mt=delete_client_confirm&id=<?= aes_encrypt($client->id) ?>" class="btn btn-secondary px-5"><i class="bi bi-check"></i> &nbsp;&nbsp; Sim</a>
                </div>
                
            </div>
        </div>
    </div>
</div>