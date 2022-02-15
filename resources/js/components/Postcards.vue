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
       data: function(){
            return{
                postcards: []
            };
        },

        mounted() {
            
            axios.get('/api/postcards/list')
                .then(r => this.postcards = r.data)
                .catch(e => console.error(e));
        },
    }


// GOAL: come detto a lezione, generare entita' Postcard (sender, address, text, image[string]) con migration + model + factory + seeder 
// (N.B.: i factory lasciano il campo image vuoto o null);
// nella pagina home sara' visibile la tabella riportante le postcards presenti in db + tasto CREA NUOVA POSTCARD che permettera' di valorizzare i 3 campi testuali 
// + campo immagine di tipo file; nel db verra' salvato il nome del file, che invece sara' salvato in storage; 
//  nella home sara' possibile infine vedere le immagini delle postcard se presenti;
</script>


