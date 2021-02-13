<template>
  <div class="note-show">
    <div class="row">
      <div class="col-lg-8">
        <h4>{{ note.title }}</h4>
        <hr />
        <p>{{ note.publish }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      note: [],
    };
  },
  mounted() {
    // console.log(this.$route.params.noteSlug);
    this.getNote();
  },
  methods: {
    async getNote() {
      let response = await axios.get(
        "/api/notes/" + this.$route.params.noteSlug
      );
      //   console.log(reponse.data.data);
      this.note = response.data.data;
    },
  },
};
</script>  

<style>
</style>