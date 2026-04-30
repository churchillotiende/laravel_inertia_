<template>
    <h1>Hello , {{ name }}</h1>
    <ul>
        <li v-for="framework in frameworks" v-text="framework"></li>
        </ul>
</template>

<script>
export default {
    props:{
        name:String,
        frameworks:Array,
    }
}
</script>