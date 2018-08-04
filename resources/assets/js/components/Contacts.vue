<template>
    <div>
        <h1>Contacts</h1>
        <form action="#" @submit.prevent="edit ? updateContact(contact.id) : createContact()">
            <div class="form-group">
                <label for="name">Name</label>
                <input v-model="contact.name" type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input v-model="contact.email" type="email" name="phone" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input v-model="contact.phone" type="text" name="phone" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <button v-show="!edit" type="submit" class="btn btn-primary">New Contact</button>
                <button v-show="edit" type="submit" class="btn btn-primary">Update Contact</button>
            </div>
        </form>
    </div>    
</template>

<script>
export default {
  data: function() {
    return {
      edit: false,
      list: [],
      contact: {
        id: '',
        name: '',
        email: '',
        phone: ''
      }
    };
  },
  mounted() {
    console.log('Contacts Component loaded.');
  },
  methods: {
    createContact: function() {
      console.log('Creating Contact...');
      return;
    },
    updateContact: function(id) {
      console.log('Editing Contact ' + id + ' ...');
      return;
    }
  }
};
</script>