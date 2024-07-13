<!-- <script>
Options API

export default {
  data() {
    return {
      name: "JOHN NHA",
      status: "pending",
      tasks: ["Task1", "Task2", "Task3", "Task4", "Task6", "Task7"],
      link: ["https://www.google.com"]
    }
  },
  methods: {
    changeStatus() {
      if (this.status == "pending") {
        this.status = "active"
      } else this.status = "pending"
    }
  }
}

</script>


<template>
  <h1>Hello Veiw</h1>
  <h1>{{ name }}</h1>
  <p v-if="status === 'active'">User is Active</p>
  <p v-else-if="status === 'pending'">User is Pending</p>
  <p v-else>User is InActive</p>

  <a :href="link">Google</a>

  <div>
    <h3>Task List</h3>
    <li v-for="task in tasks" :key="task">{{ task }}</li>
  </div>

  <button @click="changeStatus">Change Status</button>
</template> -->

<!-- Composition API -->

<script setup>
import { ref, onMounted } from 'vue';

const name = ref("JOHN NHA")
const status = ref("pending")
const tasks = ref(["Task1", "Task2", "Task3", "Task4", "Task6", "Task7"])
const link = ref(["https://www.google.com"])
const newTask = ref("go")

const changeStatus = () => {
  if (status.value == "pending") {
    status.value = "active"
  } else status.value = "pending"
}

const addTask = () => {
  if (newTask.value.trim() != "") {
    console.log("Adding")
    tasks.value.push(newTask.value)
    newTask.value = ""
  }
}

const deleteTask = (id) => {
  tasks.value.splice(id, 1)
}

onMounted(async () => {
  try {
    const response = await fetch("https://jsonplaceholder.typicode.com/todos");
    const data = await response.json();

    tasks.value = data.map((task) => task.title)

  } catch (e) {
    console.log(e)
  };
})

</script>

<template>
  <h1>Hello Veiw</h1>
  <h1>{{ name }}</h1>
  <p v-if="status === 'active'">User is Active</p>
  <p v-else-if="status === 'pending'">User is Pending</p>
  <p v-else>User is InActive</p>

  <a :href="link">Google</a>

  <form @submit.prevent="addTask">
    <label for="newTask">AddTask</label>
    <input v-model="newTask" type="text" id="newTask" name="newTask" />
    <button type="submit">Submit</button>

  </form>

  <div>
    <h3>Task List</h3>
    <li>{{ newTask }}</li>
    <li v-for="(task, index) in tasks" :key="index">
      <span>{{ task }}</span>
      <button @click="deleteTask(index)">Delete</button>
    </li>
  </div>

  <button @click="changeStatus">Change Status</button>
</template>