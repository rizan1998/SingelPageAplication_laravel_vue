<template>
  <div class="container">
    <router-link to="/">Home</router-link>
    <router-link to="/about">about</router-link>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
