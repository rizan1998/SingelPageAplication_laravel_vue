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
              <button
                type="submit"
                class="btn btn-primary -flex align-items-center"
              >
                Create Note !

                <template v-if="loadingSave">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    style="
                      margin: auto;
                      background: none;
                      display: inline;
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
      form: {
        title: "",
        subject: "",
        description: "",
      },
      subjects: [],
      theErrors: [],
      loadingSave: false,
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
      this.loadingSave = true;
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
          this.loadingSave = false;
          Vue.$toast.success(response.data.message, {
            // override the global option
            position: "top-right",
          });
        }
      } catch (e) {
        this.loadingSave = false;
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
