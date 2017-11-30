<template lang="html">
    <div id="msgform">
    <table class="msgform">
        <tr>
            <td><textarea class="msgtextinput" v-model="msgtext"></textarea></td>
            <td><button class="msgsendbutton" @click="sendmsg">Send</button></td>
        </tr>
    </table>
        
    </div>
</template>


<script>
export default {
    data(){
        return {
            msgtext: ''
        }
    },
    methods: {
        sendmsg() {
            this.$emit('msgsent', this.msgtext);
            this.msgtext = '';
        }
    }
}
</script>
