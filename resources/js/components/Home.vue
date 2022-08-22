<template>
  <!-- <div id="app"><navbar-component></navbar-component></div> -->
  <div id="app">
    <nav-bar-component></nav-bar-component>
    <side-bar-component></side-bar-component>
    <form-component></form-component>
  </div>
</template>

<script>
import NavBarComponent from "./NavBarComponent.vue";
import SideBarComponent from "./SideBarComponent.vue";
import FormComponent from "./FormComponent.vue";
export default {
  components: {
    NavBarComponent,
    SideBarComponent,
    FormComponent,
  },
};
</script>
