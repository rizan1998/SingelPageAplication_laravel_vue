<template>
  <button ref="deleteNote" @click="destroyNote">Delete</button>
</template>

<script>
export default {
  props: ["endpoint"],
  methods: {
    async destroyNote() {
      //   console.log("Deleted");
      let q = window.confirm("Apakah anda yakin ingin menghapus data?");
      //console.log(q);
      if (q == true) {
        // console.log(this.endpoint);
        let response = await axios.delete(`/api/notes/${this.endpoint}/delete`);
        if (response.status == 200) {
          Vue.$toast.error("note was deleted", {
            // override the global option
            position: "top-right",
          });
          //   remove tr sehingga seperti tidak refresh
          //console.log(this.$refs.deleteNote.parentNode.parentNode);
          this.$refs.deleteNote.parentNode.parentNode.remove();
        }
      } else {
        console.log("Note Deleted");
      }
    },
  },
};
</script>
