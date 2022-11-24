<template>
    <div class="container">
        <h4 class="mb-4">Blog</h4>
        <div v-for="post in posts" :key="post.id">
            <h4>{{ post.title }}</h4>
            <p>{{ post.content }}</p>
            <hr>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PostsComponent',
    data() {
        return {
            posts: [],
            errorMessage: ''
        }
    },
    mounted() {
        console.log('PostsComponent');

        axios.get('/api/posts').then(({ data }) => {
            if (data.success) {
                this.posts = data.results;
            } else {
                this.errorMessage = data.error;
            }
        })
    }
}
</script>
