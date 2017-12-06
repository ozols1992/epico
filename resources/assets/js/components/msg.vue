<template lang="html">
    <div id="msgcontainer">
        <div class="messageheader">
            <small>{{ msg.created_at }}</small>
        </div>
        <div class="messagewrapper" >
            <div class="userstuff" v-if=" msg.type == 'Application'">
                <table>
                    <tr>
                        <td class='profileimgholder_small'><img class="profileimg" alt="Profile Img" :src="'../../img/avatars/' + msg.author.avatar"></td>
                        <td>
                            Name: {{ msg.author.name }}<br/>
                            E-mail: {{ msg.author.email }}<br/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">{{ msg.author.description }}</td>
                    </tr>
                </table>
            </div>
        <div id="messagetext">{{ msg.message }}</div>
            <div id="messagefooter">
                <div id="authorfield">
                    <small>From {{ msg.author.name }}</small>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
export default {
    props: ['msg']
}
</script>