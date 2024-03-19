<template>
<div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Account name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="account in allAccounts.data" :key="account.id">
                    <th scope="row"> {{ account.id }}</th>
                    <td> {{ account.name }}</td>
                    <td> {{ account.email }}</td>
                    <td> {{ account.is_admin ? "Admin" : "User" }}</td>
                    <td class="d-flex">
                        <icon icon-name="edit" class="icon icon-dark me-2"></icon>
                        <icon icon-name="delete"  class="icon icon-dark"></icon>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</template>

<script>
import Icon from './icons/Icon.vue'
export default {
    data() {
        return {
            allAccounts: []
        }
    },
    components: {Icon},
    created() {
        this.fetchAccounts();
    },
    methods: {
        fetchAccounts() {
            fetch('/api/usersapi')
                .then(response => response.json())
                .then(data => {
                    this.allAccounts = data;
                    console.log(this.allAccounts);
                })
                .catch(error => {
                    console.error('Error fetching accounts:', error);
                });
        }
    }
};
</script>
