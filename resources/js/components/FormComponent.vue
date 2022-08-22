<template>
  <div class="container mt-3">
    <h3>Dados pessoais</h3>
    <hr />
    <b-form>
      <b-row>
        <b-col md="4" sm="12">
          <b-form-group label="Nome:" label-for="nome" description="Nome completo">
            <b-form-input v-model="form.nome" id="nome" placeholder="Ex: João da Silva">
            </b-form-input>
          </b-form-group>
        </b-col>

        <b-col md="5" sm="12">
          <b-form-group
            label="Email:"
            label-for="email"
            description="Seu e-mail deve ser único"
          >
            <b-form-input
              v-model="form.email"
              id="email"
              placeholder="Seu email principal"
            >
            </b-form-input>
          </b-form-group>
        </b-col>

        <b-col md="3" sm="12">
          <b-form-group label="Status">
            <b-form-radio-group id="status" v-model="form.status">
              <b-form-radio value="active">Ativo</b-form-radio>
              <b-form-radio value="inactive">Inativo</b-form-radio>
            </b-form-radio-group>
          </b-form-group>
        </b-col>
      </b-row>

      <b-row>
        <b-col md="4" sm="12"
          ><b-form-group label="CPF:" label-for="cpf" description="Somente números">
            <b-form-input v-model="form.cpf" id="cpf" placeholder="123.456.789-10">
            </b-form-input> </b-form-group
        ></b-col>

        <b-col md="3" sm="12"
          ><b-form-group label="RG:" label-for="rg" description="Somente números">
            <b-form-input v-model="form.rg" id="cpf" placeholder="1.234.456-7">
            </b-form-input> </b-form-group
        ></b-col>
        <b-col md="5" sm="12">
          <b-form-group label="Data de nascimento" label-for="dataDeNascimento">
            <b-form-datepicker id="dataDeNascimento" v-model="form.dataDeNascimento">
            </b-form-datepicker>
          </b-form-group>
        </b-col>
      </b-row>

      <h3>Localização</h3>
      <hr />

      <b-row>
        <b-col md="4" sm="12">
          <b-form-group label="Pais" label-for="pais">
            <b-form-select id="pais" v-model="form.pais" :options="paises">
            </b-form-select>
          </b-form-group>
        </b-col>

        <b-col md="4" sm="12"
          ><b-form-group label="Estado" label-for="estado">
            <b-form-select id="estado" v-model="form.estado" :options="estados">
            </b-form-select> </b-form-group
        ></b-col>

        <b-col md="4" sm="12"
          ><b-form-group label="Cidade" label-for="cidade">
            <b-form-select id="cidade" v-model="form.cidade" :options="cidades">
            </b-form-select> </b-form-group
        ></b-col>
      </b-row>

      <h3>Anexos</h3>
      <hr />

      <b-row>
        <b-col md="6" sm="12"></b-col>
        <b-form-file
          @input="saveFile"
          v-model="form.file"
          placeholder="Selecione uma imagem"
        >
        </b-form-file>
      </b-row>
    </b-form>

    <b-card class="mt-3" header="Resultado">
      <pre class="m-0">{{ form }}</pre>
    </b-card>
  </div>
</template>

<script>
export default {
  name: "FormComponent",
  data() {
    return {
      form: {
        nome: "",
        email: "",
        status: "",
        cpf: "",
        rg: "",
        dataDeNascimento: "",
        pais: null,
        estado: null,
        cidade: null,
        file: "",
      },
      /* Um array de objetos */
      paises: [
        {
          value: null,
          text: "Selecione uma opção",
        },
        {
          value: "BRA",
          text: "Brasil",
        },
        {
          value: "ARG",
          text: "Argentina",
        },
        {
          value: "COL",
          text: "Colômbia",
        },
      ],
      /* Um array de objetos */
      estados: [
        {
          value: null,
          text: "Selecione uma opção",
        },
        {
          value: "AC",
          text: "Acre",
        },
        {
          value: "AM",
          text: "Amazonas",
        },
        {
          value: "PA",
          text: "Pará",
        },
      ],
      /* Um array de objetos */
      cidades: [
        {
          value: null,
          text: "Selecione uma opção",
        },
        {
          value: "RioBranco",
          text: "Rio Branco",
        },
        {
          value: "Manaus",
          text: "Manaus",
        },
        {
          value: "Belem",
          text: "Belém",
        },
      ],
    };
  },
  methods: {
    saveFile(event) {
      console.log(event);
    },
  },
};
</script>
