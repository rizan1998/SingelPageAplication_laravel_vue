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
      contohSubjects: [
        { id: 1, nama: "vuejs" },
        {
          id: 2,
          nama: "laravel",
        },
      ],
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
      let response = await axios.post("/api/notes/create-new-note", this.form);
      if (response.status == 200) {
        console.log(response.data);
      }
    },
  },
};
</script>
