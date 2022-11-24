<template>
    <div>
        <ul>
            <li>
                <router-link to="/">Home</router-link>
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

</style>
