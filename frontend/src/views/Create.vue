<template>
  <div class="row my-5 d-flex align-items-center">
    <div class="col-9">
        <h1 class="display-4">New Note</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <form @submit.prevent="addNote" class="form mb-3 d-flex flex-column bg-light p-5">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control mb-3" name="title" v-model="title">

        <label for="text" class="form-label">Text</label>
        <textarea class="form-control mb-3" name="text" v-model="text"></textarea>

        <div class="align-self-end">
          <router-link to="/" class="btn btn-secondary me-3">Cancel</router-link>
          <button class="btn btn-primary">Add Note</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Create',
  data: function () {
    return {
      title: '',
      text: ''
    }
  },
  methods: {
    addNote: function () {

    }
  }
}
</script>
