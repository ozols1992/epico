<template lang="html">
    <div id="msgcontainer">
        <div class="messageheader">
            <small>{{ msg.created_at }}</small>
        </div>
        <div class="messagewrapper" >
            <div class="userstuff" v-if=" msg.type == 'Application'">
                <table>
                    <tr>
                        <td class='profileimgholder_small'><img alt="UserImg" src="http://kultbox.dk/wp-content/uploads/2016/02/Bj%C3%B8rn-Jensen_avatar_1454709982-200x200.jpg" style="border: 1px solid gray; height: 70px; width: 60px;"></td>
                        <td>
                            Name: {{ msg.author.name }}<br/>
                            E-mail: {{ msg.author.email }}<br/>
                            <a href="#">See Profile</a><br/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Phasellus dui. Maecenas facilisis nisl vitae nibh. Proin vel seo est vitae...</td>
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