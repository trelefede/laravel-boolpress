<template>
    <div class="container">
        <div v-for="post in posts" :key="post.id">
            {{ post.title }}
        </div>
    </div>
</template>

<script>
    export default {
        name: 'PostComponent',
        data(){
            return{
                posts: [],
                error: ''
            }
        },
        mounted(){
            axios.get('api/posts').then(({data})=>{
                if(data.succes){
                    this.posts = data.results;
                }else{
                    this.error = data.error;
                }
            })
        },
    }
</script>
