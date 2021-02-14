<template>
  <div class="notes-edit">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Edit the note</h3>
          </div>
          <div class="card-body">
            <form action="#" @submit.prevent="update">
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
                  @change="selectedSubject"
                  id="subject"
                  class="form-control"
                >
                  <!-- karena pake relasi jadi langsung menampilkan data -->
                  <option
                    :value="form.subjectId"
                    v-text="form.subject"
                  ></option>
                  <template v-for="sub of subjects">
                    <!-- sub mengambil dari var loop -->
                    <option
                      v-if="form.subjectId !== sub.id"
                      :key="sub.id"
                      :value="sub.id"
                    >
                      {{ sub.name }}
                    </option>
                  </template>
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
      form: [],
      subjects: [],
      theErrors: [],
      selected: "",
    };
  },
  mounted() {
    console.log(this.$route.params.noteSlug);
    this.getSubjects();
    this.getNote();
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
    async getNote() {
      let response = await axios.get(
        "/api/notes/" + this.$route.params.noteSlug
      );
      this.form = response.data.data;
      //   console.log(this.form);
    },
    selectedSubject(e) {
      console.log(e.target.value);
      this.selected = e.target.value;
    },
    async update() {
      this.form["subject"] = this.selected || this.form.subjectId;
      console.log(this.form);
      let response = await axios.patch(
        `/api/notes/${this.$route.params.noteSlug}/edit`,
        this.form
      );
      if (response.status == 200) {
        console.log(response.data);
        Vue.$toast.success(response.data.message, {
          // override the global option
          position: "top-right",
        });
        this.$router.push("/notes/table");
      }
    },
  },
};
</script>

<style>
</style>