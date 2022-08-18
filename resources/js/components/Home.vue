<template>
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Bem-vindo</div>

                    <div class="card-body">
                        <p>Apresentar indicadores do sistema</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div>
        <div>
            <input-container-component titulo="ID" id="inputID" id-help="idHelp" texto-ajuda="Informe o ID da marca">
                <input type="number" class="form-control" id="inputID" aria-describedby="idHelp" placeholder="ID">
            </input-container-component>

            <input-container-component titulo="Nome" id="inputNome" id-help="nomeHelp"
                texto-ajuda="Informe o nome da marca">
                <input type="text" class="form-control" id="inputNome" aria-describedby="nomeHelp"
                    placeholder="Nome da marca">
            </input-container-component>
        </div>
    </div>
</template>

<script>

</script>
