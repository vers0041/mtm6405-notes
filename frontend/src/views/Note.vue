<template>
	<div class="row my-5 d-flex align-items-center">
      <div class="col-9">
          <h1 class="display-4">{{ title }}</h1>
      </div>
      <div class="col-3 text-end">
        <router-link :to="`/note/${id}/edit`" class="text-decoration-none text-body">Edit</router-link>
      </div>
  </div>
  <div class="row">
    <div class="col">
      <p class="fs-4">{{ text }}</p>
      <router-link to="/" class="text-decoration-none">&lt; Back</router-link>
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
  }
}
</script>
