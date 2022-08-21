<template>
  <div>
    <div>
      <!-- Colocando o backdrop, quando só clica
         com o mouse, já fecha o menu lateral -->
      <b-sidebar
        id="sidebar-no-header"
        aria-labelledby="sidebar-no-header-title"
        no-header
        shadow
        bg-variant="dark"
        text-variant="light"
        backdrop
        backdrop-variant="dark"
      >
        <template #default="{ hide }">
          <div class="p-3">
            <div class="d-flex align-items-center flex-column">
              <b-avatar
                variant="primary"
                text="BB"
                class="mb-3 mt-3"
                size="6rem"
              ></b-avatar>
              <h4 id="sidebar-no-header-title" class="mb-4">Internet via satélite</h4>
              <div class="divider-menu"></div>
            </div>

            <!--  <p>
              Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus
              ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur
              ac, vestibulum at eros.
            </p> -->
            <nav class="mb-3">
              <b-nav vertical>
                <b-nav-item active @click="hide"
                  ><b-icon icon="bar-chart-fill"></b-icon> Dashboard</b-nav-item
                >
                <b-nav-item href="#link-1" @click="hide"
                  ><b-icon icon="truck"></b-icon> Internet pré-pago</b-nav-item
                >
                <b-nav-item href="#link-2" @click="hide"
                  ><b-icon icon="person"></b-icon> Cadastrar revenda</b-nav-item
                >
              </b-nav>
            </nav>
            <b-button variant="primary" block @click="hide"
              >Esconder menu lateral</b-button
            >
          </div>
        </template>
      </b-sidebar>
    </div>
  </div>
</template>

<script>
export default {
  name: "SideBarComponent",
};
</script>

<!-- Classe ".nav-item" chamando classe filha ".nav-link" -->
<style scoped>
.nav-item > .nav-link {
  color: #fff;
}

.nav-item > .nav-link:hover {
  color: #ccc;
}

.divider-menu {
  border: 1px solid #fff;
  width: 100%;
}
</style>
