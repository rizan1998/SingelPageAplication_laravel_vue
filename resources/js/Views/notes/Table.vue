<template>
  <div class="note-table">
    <div class="row">
      <div class="col-lg-8">
        <div class="table">
          <thead>
            <tr>
              <th>title</th>
              <th>subject</th>
              <th>published</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="note of notes" :key="note.id">
              <td>
                <!-- noteSlug samakan dengan dirouter -->
                <router-link
                  :to="{ name: 'notes.show', params: { noteSlug: note.slug } }"
                  >{{ note.title }}</router-link
                >
              </td>
              <td>{{ note.subject }}</td>
              <td>{{ note.publish }}</td>
            </tr>
          </tbody>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      notes: [],
    };
  },
  mounted() {
    axios.get("/api/notes").then((response) => {
      this.notes = response.data.data;
      console.log(response.data);
    });
  },
};
</script>

