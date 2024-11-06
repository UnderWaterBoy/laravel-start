<template>
    <div>
        <h1>Hello, Vue!</h1>
        <p>This is a test component.</p>
    </div>
</template>

<script>
export default {
    name: 'App',
    data() {
        return {
            message: 'Hello, Vue!'
        };
    }
};
</script>

<style scoped>
h1 {
    color: #42b983;
}
</style>
