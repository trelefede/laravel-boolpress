<template>
    <div>
        <ul class="d-flex">
            <li>
                <router-link to="/home">Home</router-link>
            </li>
            <li>
                <router-link to="/blog">Blog</router-link>
            </li>
            <li>
                <router-link to="/about">About</router-link>
            </li>
            <li>
                <router-link to="/contacts">Contacts</router-link>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'NavComponent'
}
</script>

<style lang="scss" scoped>
ul {
    li {
        list-style-type: none;
        margin: 0 0.3rem;
    }
}
</style>
