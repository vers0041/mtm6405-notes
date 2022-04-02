<template>
    <div class="row my-5 d-flex align-items-center">
      <div class="col-9">
          <h1 class="display-4">Edit Note</h1>
      </div>
  </div>
  <div class="row">
    <div class="col">
      <form @submit.prevent="updateNote" class="form mb-3 d-flex flex-column bg-light p-5">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control mb-3" name="title" v-model="title">

        <label for="text" class="form-label">Text</label>
        <textarea class="form-control mb-3" name="text" v-model="text"></textarea>

        <div class="align-self-end">
          <router-link :to="`/note/${id}`" class="btn btn-secondary me-3">Cancel</router-link>
          <button class="btn btn-primary">Update Note</button>
        </div>
      </form>

      <div class="d-flex justify-content-center">
        <button class="btn btn-outline-danger" @click="deleteNote">Delete Note</button>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'Note',
  props: ['id'],
  data: function () {
    return {
      title: '',
      text: ''
    }
  },
  methods: {
    updateNote: function () {

    },
    deleteNote: function () {

    }
  }
}
</script>
