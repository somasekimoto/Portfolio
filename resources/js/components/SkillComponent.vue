<template>
  <div>
    <h3>{{skill.name}}</h3>
    <h3>{{skill.level}}</h3>
  </div>
</template>
<script>
export default {
  props: ["skill"]
};
</script>
