<div class="container-fluid mt-5">
    <div class="row justify-content-center">

        <div class="d-flex flex-row flex-wrap justify-content-center">

            <!-- os meus clientes -->
            <?php if ($user->profile == 'agent'): ?>
                <a href="?ct=agent&mt=my_clients" class="unlink m-2">
                    <div class="home-option p-5 text-center">
                        <h3 class="mb-3"><i class="bi bi-people-fill"></i></h3>
                        <h5>Os meus clientes</h5>
                    </div>
                </a>
            <?php endif; ?>

            <!-- adicionar clientes -->
            <?php if ($user->profile == 'agent'): ?>
                <a href="?ct=agent&mt=new_client_frm" class="unlink m-2">
                    <div class="home-option p-5 text-center">
                        <h3 class="mb-3"><i class="bi bi-person-plus-fill"></i></h3>
                        <h5>Adicionar clientes</h5>
                    </div>
                </a>
            <?php endif; ?>

            <!-- carregar ficheiro de clientes -->
            <?php if ($user->profile == 'agent'): ?>
                <a href="#" class="unlink m-2">
                    <div class="home-option p-5 text-center">
                        <h3 class="mb-3"><i class="bi bi-cloud-upload-fill"></i></h3>
                        <h5>Carregar ficheiro</h5>
                    </div>
                </a>
            <?php endif; ?>

            <!-- clientes -->
            <?php if ($user->profile == 'admin'): ?>
                <a href="#" class="unlink m-2">
                    <div class="home-option p-5 text-center">
                        <h3 class="mb-3"><i class="bi bi-people-fill"></i></h3>
                        <h5>Clientes</h5>
                    </div>
                </a>
            <?php endif; ?>

            <!-- estatística -->
            <?php if ($user->profile == 'admin'): ?>
                <a href="#" class="unlink m-2">
                    <div class="home-option p-5 text-center">
                        <h3 class="mb-3"><i class="bi bi-bar-chart-line-fill"></i></h3>
                        <h5>Estatística</h5>
                    </div>
                </a>
            <?php endif; ?>

            <!-- gestão de utilizadores -->
            <?php if ($user->profile == 'admin'): ?>
                <a href="#" class="unlink m-2">
                    <div class="home-option p-5 text-center">
                        <h3 class="mb-3"><i class="bi bi-person-fill-gear"></i></h3>
                        <h5>Gestão de utilizadores</h5>
                    </div>
                </a>
            <?php endif; ?>

        </div>

    </div>
</div>