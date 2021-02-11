<template>
  <div class="notes-create">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>create new notes</h3>
          </div>
          <div class="card-body">
            <form action="#" @submit.prevent="store">
              <div class="form-group">
                <label for="title">Title</label>
                <input
                  type="text"
                  v-model="form.title"
                  id="title"
                  class="form-control"
                />
                <div v-if="theErrors.title" class="mt-2 text-danger">
                  {{ theErrors.title[0] }}
                </div>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <select
                  v-model="form.subject"
                  id="subject"
                  class="form-control"
                >
                  <option desable value="">Choice Subject</option>
                  <option v-for="sub of subjects" :key="sub.id" :value="sub.id">
                    {{ sub.name }}
                  </option>
                </select>
                <div v-if="theErrors.subject" class="mt-2 text-danger">
                  {{ theErrors.subject[0] }}
                </div>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea
                  class="form-control"
                  id="description"
                  v-model="form.description"
                  rows="5"
                  cols="10"
                ></textarea>
                <div v-if="theErrors.description" class="mt-2 text-danger">
                  {{ theErrors.description[0] }}
                </div>
              </div>
              <button type="submit" class="btn btn-primary">
                Create Note !
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        title: "",
        subject: "",
        description: "",
      },
      subjects: [],
      theErrors: [],
    };
  },

  mounted() {
    this.getSubjects();
  },

  methods: {
    async getSubjects() {
      let response = await axios.get("/api/subjects");
      console.log(response);
      // this.subjects = response.data;
      if (response.status === 200) {
        this.subjects = response.data;
      }
    },
    async store() {
      try {
        let response = await axios.post(
          "/api/notes/create-new-note",
          this.form
        );
        if (response.status == 200) {
          console.log(response.data);
          // this.form = [];
          this.form.title = "";
          this.form.subject = "";
          this.form.description = "";
          this.theErrors = [];
          // this.$toast.open({
          //   message: response.data.message,
          //   position: top,
          // });
          Vue.$toast.success(response.data.message, {
            // override the global option
            position: "top-right",
          });
        }
      } catch (e) {
        //console.log(e.response.data.errors);
        Vue.$toast.error("somthing went wrong", {
          // override the global option
          position: "top-right",
        });
        this.theErrors = e.response.data.errors;
      }
    },
  },
};
</script>
