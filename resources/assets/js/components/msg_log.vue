<template lang="html">
    <div id="msglog">
        <msg v-for="msg in messages" v-bind:msg="msg"></msg>
        <div v-show="messages.length === 0">loading...</div>
    </div>
</template>


<script>
export default {
    props: ['messages']
}
</script>