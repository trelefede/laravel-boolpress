<template>
    <div class="container">
        <div v-for="post in posts" :key="post.id">
            {{ post.title }}
        </div>
        cacca
    </div>
</template>

<script>
    export default {
        name: 'PostComponent',
        data(){
            return{
                posts: [],
                errorMessage: ''
            }
        },
        mounted(){
            console.log('PostComponent');

            axios.get('/api/posts').then(({data})=>{
                if(data.success){
                    this.posts = data.results;
                }else{
                    this.errorMessage = data.error;
                }
            })
        }
    }
</script>
