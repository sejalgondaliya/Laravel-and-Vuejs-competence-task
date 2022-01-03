<template>
  <div class="widget">
    <div v-if="activeItems && activeItems.length > 0">
      <ul>
        <li v-for="item in activeItems" :key="item.id">
          {{ item.name }}
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      loading: true,
      list: {
        John: true,
        Jane: true,
        Bob: false,
      },
    };
  },
  computed: {
    activeItems() {
      return Object.keys(this.list)
        .filter((key) => this.list[key] === true)
        .reduce((obj, key, index) => {
          obj[index] = { id: index + 1, name: key, status: this.list[key] };
          return obj;
        }, []);
    },
  },
};
</script>
