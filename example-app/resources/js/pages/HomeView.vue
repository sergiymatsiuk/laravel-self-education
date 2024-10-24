<template>
    <div>
        <h1>HOME</h1>
        <router-link to="/test"> Take me to Test page </router-link>

        <button @click.prevent="getValue">Trigger Endpoint</button>
        <p v-if="response">{{ response.data }}</p>


        <hr>
        <hr>

        <button @click="getPosts">Posts</button>

        <button @click="save">Save</button>
    </div>
</template>

<script setup>
import axios from "axios";
import { ref } from "vue";

const response = ref();

const getValue = async () => {
    try {
        response.value = await axios.get("/api/test-me");
        console.log(response.value);
    } catch (error) {
        // Do something with the error
        console.log(error);
    }
};

async function getPosts() {
    let res = await axios.get("/api/posts");
    console.log(res.data.posts);
};

async function save() {
    let res = await axios.post("/api/posts/save", {
        title: "My Post",
        description: "This is my first post.",
    });
    console.log(res);
};
</script>
