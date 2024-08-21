<template>
    <div>
        <form @submit.prevent="submitForm">
            <label for="name">Name:</label>
            <input type="text" id="name" v-model="formData.name" required>

            <label for="age">Age:</label>
            <input type="number" id="age" v-model="formData.age" required>

            <label for="address">Address:</label>
            <input type="text" id="address" v-model="formData.address" required>

            <button type="submit">Submit</button>
        </form>
        <Datatable :tableData="tableData" />
    </div>
</template>

<script>
import axios from 'axios';
import Datatable from './Datatable.vue';

export default {
    components: {
        Datatable
    },
    data() {
        return {
            formData: {
                name: '',
                age: '',
                address: ''
            },
            tableData: []
        };
    },
    mounted() {
        this.getData();
    },
    methods: {
        async submitForm() {
            try {
                const response = await axios.post('http://127.0.0.1:5000/api/add', this.formData);
                console.log('Form submitted successfully:', response.data);
                this.getData();
                this.resetForm();
            } catch (error) {
                console.error('Error submitting form:', error);
            }
        },
        async getData() {
            try {
                const response = await axios.get('http://127.0.0.1:5000/api/student');
                console.log('Received data:', response.data.data);
                this.tableData = response.data.data;
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        },
        resetForm() {
            this.formData.name = '';
            this.formData.age = '';
            this.formData.address = '';
        }
    }
};
</script>
