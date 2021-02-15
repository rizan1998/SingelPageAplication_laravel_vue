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
              <button
                type="submit"
                class="btn btn-primary d-flex align-items-center"
              >
                update now
                <template v-if="loadingSave">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    style="
                      margin: auto;
                      background: none;
                      display: block;
                      shape-rendering: auto;
                    "
                    width="30px"
                    height="30px"
                    viewBox="0 0 100 100"
                    preserveAspectRatio="xMidYMid"
                  >
                    <g transform="translate(80,50)">
                      <g transform="rotate(0)">
                        <circle
                          cx="0"
                          cy="0"
                          r="6"
                          fill="#1d3f72"
                          fill-opacity="1"
                        >
                          <animateTransform
                            attributeName="transform"
                            type="scale"
                            begin="-0.875s"
                            values="1.5 1.5;1 1"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                          ></animateTransform>
                          <animate
                            attributeName="fill-opacity"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                            values="1;0"
                            begin="-0.875s"
                          ></animate>
                        </circle>
                      </g>
                    </g>
                    <g
                      transform="translate(71.21320343559643,71.21320343559643)"
                    >
                      <g transform="rotate(45)">
                        <circle
                          cx="0"
                          cy="0"
                          r="6"
                          fill="#1d3f72"
                          fill-opacity="0.875"
                        >
                          <animateTransform
                            attributeName="transform"
                            type="scale"
                            begin="-0.75s"
                            values="1.5 1.5;1 1"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                          ></animateTransform>
                          <animate
                            attributeName="fill-opacity"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                            values="1;0"
                            begin="-0.75s"
                          ></animate>
                        </circle>
                      </g>
                    </g>
                    <g transform="translate(50,80)">
                      <g transform="rotate(90)">
                        <circle
                          cx="0"
                          cy="0"
                          r="6"
                          fill="#1d3f72"
                          fill-opacity="0.75"
                        >
                          <animateTransform
                            attributeName="transform"
                            type="scale"
                            begin="-0.625s"
                            values="1.5 1.5;1 1"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                          ></animateTransform>
                          <animate
                            attributeName="fill-opacity"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                            values="1;0"
                            begin="-0.625s"
                          ></animate>
                        </circle>
                      </g>
                    </g>
                    <g
                      transform="translate(28.786796564403577,71.21320343559643)"
                    >
                      <g transform="rotate(135)">
                        <circle
                          cx="0"
                          cy="0"
                          r="6"
                          fill="#1d3f72"
                          fill-opacity="0.625"
                        >
                          <animateTransform
                            attributeName="transform"
                            type="scale"
                            begin="-0.5s"
                            values="1.5 1.5;1 1"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                          ></animateTransform>
                          <animate
                            attributeName="fill-opacity"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                            values="1;0"
                            begin="-0.5s"
                          ></animate>
                        </circle>
                      </g>
                    </g>
                    <g transform="translate(20,50.00000000000001)">
                      <g transform="rotate(180)">
                        <circle
                          cx="0"
                          cy="0"
                          r="6"
                          fill="#1d3f72"
                          fill-opacity="0.5"
                        >
                          <animateTransform
                            attributeName="transform"
                            type="scale"
                            begin="-0.375s"
                            values="1.5 1.5;1 1"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                          ></animateTransform>
                          <animate
                            attributeName="fill-opacity"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                            values="1;0"
                            begin="-0.375s"
                          ></animate>
                        </circle>
                      </g>
                    </g>
                    <g
                      transform="translate(28.78679656440357,28.786796564403577)"
                    >
                      <g transform="rotate(225)">
                        <circle
                          cx="0"
                          cy="0"
                          r="6"
                          fill="#1d3f72"
                          fill-opacity="0.375"
                        >
                          <animateTransform
                            attributeName="transform"
                            type="scale"
                            begin="-0.25s"
                            values="1.5 1.5;1 1"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                          ></animateTransform>
                          <animate
                            attributeName="fill-opacity"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                            values="1;0"
                            begin="-0.25s"
                          ></animate>
                        </circle>
                      </g>
                    </g>
                    <g transform="translate(49.99999999999999,20)">
                      <g transform="rotate(270)">
                        <circle
                          cx="0"
                          cy="0"
                          r="6"
                          fill="#1d3f72"
                          fill-opacity="0.25"
                        >
                          <animateTransform
                            attributeName="transform"
                            type="scale"
                            begin="-0.125s"
                            values="1.5 1.5;1 1"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                          ></animateTransform>
                          <animate
                            attributeName="fill-opacity"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                            values="1;0"
                            begin="-0.125s"
                          ></animate>
                        </circle>
                      </g>
                    </g>
                    <g
                      transform="translate(71.21320343559643,28.78679656440357)"
                    >
                      <g transform="rotate(315)">
                        <circle
                          cx="0"
                          cy="0"
                          r="6"
                          fill="#1d3f72"
                          fill-opacity="0.125"
                        >
                          <animateTransform
                            attributeName="transform"
                            type="scale"
                            begin="0s"
                            values="1.5 1.5;1 1"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                          ></animateTransform>
                          <animate
                            attributeName="fill-opacity"
                            keyTimes="0;1"
                            dur="1s"
                            repeatCount="indefinite"
                            values="1;0"
                            begin="0s"
                          ></animate>
                        </circle>
                      </g>
                    </g>
                    <!-- [ldio] generated by https://loading.io/ -->
                  </svg>
                </template>
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
      loadingSave: false,
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
      this.loadingSave = true;
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