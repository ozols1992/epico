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

<style lang="css">
    .msgform{
        width: 100%;
    }
    .msgtextinput{
        width: 100%;
        height: 80px;
    }
    .msgsendbutton{
        width: 100%;
        height: 80px;
    }
</style>
