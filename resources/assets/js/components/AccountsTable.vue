<template>
    <div>
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
                <tr v-for="(account, index) in allAccounts" :key="index">
                    <th scope="row"> {{ account.id }}</th>
                    <td> {{ account.name }}</td>
                    <td> {{ account.email }}</td>
                    <td> {{ account.is_admin ? "Admin" : "User" }}</td>
                    <td class="d-flex">
                        <icon-edit class="icon icon-dark"></icon-edit>
                        <icon-delete class="icon icon-dark"></icon-delete>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</template>
  
<script>
export default {
    props: ['accounts'],

    data() {
        return {
            //
        }
    },

    computed: {
        allAccounts() {
            return this.accounts;
        }
    }
};
</script>