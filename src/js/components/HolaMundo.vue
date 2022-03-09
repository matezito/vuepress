<script>
import Counter from "./Counter.vue";
import Text from "./Text.vue";
import Toggle from "./Toggle.vue";
import Todo from "./Todo.vue";
import Fetch from "./Fetch.vue";
export default {
  data() {
    return {
      message: "Hola Mundo desde VuePress",
    };
  },
  components: {
    Counter,
    Text,
    Toggle,
    Todo,
    Fetch,
  },
};
</script>

<template>
  <div>
    <h3>{{ message }}</h3>

    <Counter />
    <hr />
    <Text />
    <hr />
    <Toggle />
    <hr />
    <Todo />
    <hr />
    <Fetch />
  </div>
</template>