<template>
	<div class="row my-5 d-flex align-items-center">
		<div class="col-9">
			<h1 class="display-4">Notes</h1>
		</div>
		<div class="col-3 text-end">
			<router-link to="/create" class="text-decoration-none text-body">New</router-link>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form class="form mb-3" @submit.prevent>
				<input type="text" class="form-control" name="search" placeholder="Search" v-model="search">
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col col-12 col-md-6 col-lg-4 mb-3"
			v-for="note in filteredNotes"
			:key="note.id">
			<router-link class="text-decoration-none text-body" :to="'/note/' + note.id">
				<div class="card">
					<div class="card-header">{{ note.title }}</div>
					<div class="card-body">{{ note.text }}</div>
				</div>
			</router-link>
		</div>
	</div>
</template>

<script>
export default {
  name: 'Notes',
  data: function () {
	  return {
      notes: [],
      search: ''
	  }
  },
  created: async function () {
	  const response = await fetch('http://mtm6405-notes.test/api/notes')
	  const notes = await response.json()

	  this.notes = notes
  },
  computed: {
	  filteredNotes: function () {
      return this.notes.filter(note =>
        note.title.includes(this.search) || note.text.includes(this.search)
      )
    }
  }
}
</script>
