<template>
    <div class="lista">
        <table border="1">
            <tr>
                <th>sender</th>
                <th>address</th>
                <th>text</th>
                <th>image</th>
            </tr>
            <tr v-for="postcard in postcards" :key="postcard.id">
                <td>{{postcard.sender}}</td>
                <td>{{postcard.address}}</td>
                <td>{{postcard.text}}</td>
                <td>{{postcard.image}}</td>
            </tr>
        </table>
    </div>
</template>

<script>
    export default {
        mounted() {
           
        }
    }
</script>
